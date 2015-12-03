<div class="events form">
<?php echo $this->Form->create('Event'); ?>
	<fieldset>
		<legend><?php echo __('Add Event'); ?></legend>
	<?php
		echo $this->Form->input('titulo');
		echo $this->Form->input('descricao');
		echo $this->Form->input('local');
		echo $this->Form->input('agenda');
		echo $this->Form->input('tipo');
		echo $this->Form->input('nature_id');
		echo $this->Form->input('inscricao');
		echo $this->Form->input('status_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Events'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Natures'), array('controller' => 'natures', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Nature'), array('controller' => 'natures', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Statuses'), array('controller' => 'statuses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Status'), array('controller' => 'statuses', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Partcipants'), array('controller' => 'partcipants', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Partcipant'), array('controller' => 'partcipants', 'action' => 'add')); ?> </li>
	</ul>
</div>
