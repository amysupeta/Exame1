<div class="partcipants index">
	<h2><?php echo __('Partcipants'); ?></h2>
	<table class="table table-bordered">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('nome'); ?></th>
			<th><?php echo $this->Paginator->sort('apelido'); ?></th>
			<th><?php echo $this->Paginator->sort('nivel'); ?></th>
			<th><?php echo $this->Paginator->sort('trabalho'); ?></th>
			<th><?php echo $this->Paginator->sort('nascimento'); ?></th>
			<th><?php echo $this->Paginator->sort('sexo'); ?></th>
			<th><?php echo $this->Paginator->sort('tell'); ?></th>
			<th><?php echo $this->Paginator->sort('email'); ?></th>
			<th><?php echo $this->Paginator->sort('event_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($partcipants as $partcipant): ?>
	<tr>
		<td><?php echo h($partcipant['Partcipant']['id']); ?>&nbsp;</td>
		<td><?php echo h($partcipant['Partcipant']['nome']); ?>&nbsp;</td>
		<td><?php echo h($partcipant['Partcipant']['apelido']); ?>&nbsp;</td>
		<td><?php echo h($partcipant['Partcipant']['nivel']); ?>&nbsp;</td>
		<td><?php echo h($partcipant['Partcipant']['trabalho']); ?>&nbsp;</td>
		<td><?php echo h($partcipant['Partcipant']['nascimento']); ?>&nbsp;</td>
		<td><?php echo h($partcipant['Partcipant']['sexo']); ?>&nbsp;</td>
		<td><?php echo h($partcipant['Partcipant']['tell']); ?>&nbsp;</td>
		<td><?php echo h($partcipant['Partcipant']['email']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($partcipant['Event']['id'], array('controller' => 'events', 'action' => 'view', $partcipant['Event']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $partcipant['Partcipant']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $partcipant['Partcipant']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $partcipant['Partcipant']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $partcipant['Partcipant']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Partcipant'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Events'), array('controller' => 'events', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Event'), array('controller' => 'events', 'action' => 'add')); ?> </li>
	</ul>
</div>
