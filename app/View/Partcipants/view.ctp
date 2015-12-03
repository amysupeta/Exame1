<div class="partcipants view">
<h2><?php echo __('Partcipant'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($partcipant['Partcipant']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nome'); ?></dt>
		<dd>
			<?php echo h($partcipant['Partcipant']['nome']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Apelido'); ?></dt>
		<dd>
			<?php echo h($partcipant['Partcipant']['apelido']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nivel'); ?></dt>
		<dd>
			<?php echo h($partcipant['Partcipant']['nivel']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Trabalho'); ?></dt>
		<dd>
			<?php echo h($partcipant['Partcipant']['trabalho']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nascimento'); ?></dt>
		<dd>
			<?php echo h($partcipant['Partcipant']['nascimento']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sexo'); ?></dt>
		<dd>
			<?php echo h($partcipant['Partcipant']['sexo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tell'); ?></dt>
		<dd>
			<?php echo h($partcipant['Partcipant']['tell']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($partcipant['Partcipant']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Event'); ?></dt>
		<dd>
			<?php echo $this->Html->link($partcipant['Event']['id'], array('controller' => 'events', 'action' => 'view', $partcipant['Event']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Partcipant'), array('action' => 'edit', $partcipant['Partcipant']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Partcipant'), array('action' => 'delete', $partcipant['Partcipant']['id']), array(), __('Are you sure you want to delete # %s?', $partcipant['Partcipant']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Partcipants'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Partcipant'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Events'), array('controller' => 'events', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Event'), array('controller' => 'events', 'action' => 'add')); ?> </li>
	</ul>
</div>
