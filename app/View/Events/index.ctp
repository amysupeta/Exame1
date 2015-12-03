<div class="events index">
	<h2><?php echo __('Events'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('titulo'); ?></th>
			<th><?php echo $this->Paginator->sort('descricao'); ?></th>
			<th><?php echo $this->Paginator->sort('local'); ?></th>
			<th><?php echo $this->Paginator->sort('agenda'); ?></th>
			<th><?php echo $this->Paginator->sort('tipo'); ?></th>
			<th><?php echo $this->Paginator->sort('nature_id'); ?></th>
			<th><?php echo $this->Paginator->sort('inscricao'); ?></th>
			<th><?php echo $this->Paginator->sort('status_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($events as $event): ?>
	<tr>
		<td><?php echo h($event['Event']['id']); ?>&nbsp;</td>
		<td><?php echo h($event['Event']['titulo']); ?>&nbsp;</td>
		<td><?php echo h($event['Event']['descricao']); ?>&nbsp;</td>
		<td><?php echo h($event['Event']['local']); ?>&nbsp;</td>
		<td><?php echo h($event['Event']['agenda']); ?>&nbsp;</td>
		<td><?php echo h($event['Event']['tipo']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($event['Nature']['id'], array('controller' => 'natures', 'action' => 'view', $event['Nature']['id'])); ?>
		</td>
		<td><?php echo h($event['Event']['inscricao']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($event['Status']['id'], array('controller' => 'statuses', 'action' => 'view', $event['Status']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $event['Event']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $event['Event']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $event['Event']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $event['Event']['id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
		'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Event'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Natures'), array('controller' => 'natures', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Nature'), array('controller' => 'natures', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Statuses'), array('controller' => 'statuses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Status'), array('controller' => 'statuses', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Partcipants'), array('controller' => 'partcipants', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Partcipant'), array('controller' => 'partcipants', 'action' => 'add')); ?> </li>
	</ul>
</div>
