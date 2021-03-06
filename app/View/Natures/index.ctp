<div class="natures index">
	<h2><?php echo __('Natures'); ?></h2>
	<table class="table table-bordered">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('designacao'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($natures as $nature): ?>
	<tr>
		<td><?php echo h($nature['Nature']['id']); ?>&nbsp;</td>
		<td><?php echo h($nature['Nature']['designacao']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $nature['Nature']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $nature['Nature']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $nature['Nature']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $nature['Nature']['id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Nature'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Events'), array('controller' => 'events', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Event'), array('controller' => 'events', 'action' => 'add')); ?> </li>
	</ul>
</div>
