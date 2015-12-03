<div class="events view">
<h2><?php echo __('Event'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($event['Event']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Titulo'); ?></dt>
		<dd>
			<?php echo h($event['Event']['titulo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descricao'); ?></dt>
		<dd>
			<?php echo h($event['Event']['descricao']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Local'); ?></dt>
		<dd>
			<?php echo h($event['Event']['local']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Agenda'); ?></dt>
		<dd>
			<?php echo h($event['Event']['agenda']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tipo'); ?></dt>
		<dd>
			<?php echo h($event['Event']['tipo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nature'); ?></dt>
		<dd>
			<?php echo $this->Html->link($event['Nature']['id'], array('controller' => 'natures', 'action' => 'view', $event['Nature']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Inscricao'); ?></dt>
		<dd>
			<?php echo h($event['Event']['inscricao']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo $this->Html->link($event['Status']['id'], array('controller' => 'statuses', 'action' => 'view', $event['Status']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Event'), array('action' => 'edit', $event['Event']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Event'), array('action' => 'delete', $event['Event']['id']), array(), __('Are you sure you want to delete # %s?', $event['Event']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Events'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Event'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Natures'), array('controller' => 'natures', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Nature'), array('controller' => 'natures', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Statuses'), array('controller' => 'statuses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Status'), array('controller' => 'statuses', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Partcipants'), array('controller' => 'partcipants', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Partcipant'), array('controller' => 'partcipants', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Partcipants'); ?></h3>
	<?php if (!empty($event['Partcipant'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Nome'); ?></th>
		<th><?php echo __('Apelido'); ?></th>
		<th><?php echo __('Nivel'); ?></th>
		<th><?php echo __('Trabalho'); ?></th>
		<th><?php echo __('Nascimento'); ?></th>
		<th><?php echo __('Sexo'); ?></th>
		<th><?php echo __('Tell'); ?></th>
		<th><?php echo __('Email'); ?></th>
		<th><?php echo __('Event Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($event['Partcipant'] as $partcipant): ?>
		<tr>
			<td><?php echo $partcipant['id']; ?></td>
			<td><?php echo $partcipant['nome']; ?></td>
			<td><?php echo $partcipant['apelido']; ?></td>
			<td><?php echo $partcipant['nivel']; ?></td>
			<td><?php echo $partcipant['trabalho']; ?></td>
			<td><?php echo $partcipant['nascimento']; ?></td>
			<td><?php echo $partcipant['sexo']; ?></td>
			<td><?php echo $partcipant['tell']; ?></td>
			<td><?php echo $partcipant['email']; ?></td>
			<td><?php echo $partcipant['event_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'partcipants', 'action' => 'view', $partcipant['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'partcipants', 'action' => 'edit', $partcipant['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'partcipants', 'action' => 'delete', $partcipant['id']), array(), __('Are you sure you want to delete # %s?', $partcipant['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Partcipant'), array('controller' => 'partcipants', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
