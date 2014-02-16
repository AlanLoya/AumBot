<div class="profils index">
	<h2><?php echo __('Profils'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('member_id'); ?></th>
			<th><?php echo $this->Paginator->sort('datetime'); ?></th>
			<th><?php echo $this->Paginator->sort('pop-rate'); ?></th>
			<th><?php echo $this->Paginator->sort('mails'); ?></th>
			<th><?php echo $this->Paginator->sort('charmes'); ?></th>
			<th><?php echo $this->Paginator->sort('visites'); ?></th>
			<th><?php echo $this->Paginator->sort('panier'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($profils as $profil): ?>
	<tr>
		<td><?php echo h($profil['Profil']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($profil['Member']['id'], array('controller' => 'members', 'action' => 'view', $profil['Member']['id'])); ?>
		</td>
		<td><?php echo h($profil['Profil']['datetime']); ?>&nbsp;</td>
		<td><?php echo h($profil['Profil']['pop-rate']); ?>&nbsp;</td>
		<td><?php echo h($profil['Profil']['mails']); ?>&nbsp;</td>
		<td><?php echo h($profil['Profil']['charmes']); ?>&nbsp;</td>
		<td><?php echo h($profil['Profil']['visites']); ?>&nbsp;</td>
		<td><?php echo h($profil['Profil']['panier']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $profil['Profil']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $profil['Profil']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $profil['Profil']['id']), null, __('Are you sure you want to delete # %s?', $profil['Profil']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
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
		<li><?php echo $this->Html->link(__('New Profil'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Members'), array('controller' => 'members', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Member'), array('controller' => 'members', 'action' => 'add')); ?> </li>
	</ul>
</div>
