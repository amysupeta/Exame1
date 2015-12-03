<div class="partcipants form">
<?php echo $this->Form->create('Partcipant'); ?>
	<fieldset>
		<legend><?php echo __('Add Partcipant'); ?></legend>
	<?php
		echo $this->Form->input('nome');
		echo $this->Form->input('apelido');
		echo $this->Form->input('nivel');
		echo $this->Form->input('trabalho');
		echo $this->Form->input('nascimento');
		echo $this->Form->input('sexo');
		echo $this->Form->input('tell');
		echo $this->Form->input('email');
		echo $this->Form->input('event_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Partcipants'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Events'), array('controller' => 'events', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Event'), array('controller' => 'events', 'action' => 'add')); ?> </li>
	</ul>
</div>
