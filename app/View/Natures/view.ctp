<div class="natures view">
<h2><?php echo __('Nature'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($nature['Nature']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Designacao'); ?></dt>
		<dd>
			<?php echo h($nature['Nature']['designacao']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Nature'), array('action' => 'edit', $nature['Nature']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Nature'), array('action' => 'delete', $nature['Nature']['id']), array(), __('Are you sure you want to delete # %s?', $nature['Nature']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Natures'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Nature'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Events'), array('controller' => 'events', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Event'), array('controller' => 'events', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Events'); ?></h3>
	<?php if (!empty($nature['Event'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Titulo'); ?></th>
		<th><?php echo __('Descricao'); ?></th>
		<th><?php echo __('Local'); ?></th>
		<th><?php echo __('Agenda'); ?></th>
		<th><?php echo __('Tipo'); ?></th>
		<th><?php echo __('Nature Id'); ?></th>
		<th><?php echo __('Inscricao'); ?></th>
		<th><?php echo __('Status Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($nature['Event'] as $event): ?>
		<tr>
			<td><?php echo $event['id']; ?></td>
			<td><?php echo $event['titulo']; ?></td>
			<td><?php echo $event['descricao']; ?></td>
			<td><?php echo $event['local']; ?></td>
			<td><?php echo $event['agenda']; ?></td>
			<td><?php echo $event['tipo']; ?></td>
			<td><?php echo $event['nature_id']; ?></td>
			<td><?php echo $event['inscricao']; ?></td>
			<td><?php echo $event['status_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'events', 'action' => 'view', $event['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'events', 'action' => 'edit', $event['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'events', 'action' => 'delete', $event['id']), array(), __('Are you sure you want to delete # %s?', $event['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Event'), array('controller' => 'events', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
