<div class="dataInstituteCodes view">
<h2><?php  __('Data Institute Code');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $dataInstituteCode['DataInstituteCode']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Code'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $dataInstituteCode['DataInstituteCode']['code']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $dataInstituteCode['DataInstituteCode']['name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Acronym'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $dataInstituteCode['DataInstituteCode']['acronym']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Description'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $dataInstituteCode['DataInstituteCode']['description']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $dataInstituteCode['DataInstituteCode']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $dataInstituteCode['DataInstituteCode']['modified']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Data Institute Code', true), array('action' => 'edit', $dataInstituteCode['DataInstituteCode']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Data Institute Code', true), array('action' => 'delete', $dataInstituteCode['DataInstituteCode']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $dataInstituteCode['DataInstituteCode']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Data Institute Codes', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Data Institute Code', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Data Institute Groups', true), array('controller' => 'data_institute_groups', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Data Institute Group', true), array('controller' => 'data_institute_groups', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Data Institute Groups');?></h3>
	<?php if (!empty($dataInstituteCode['DataInstituteGroup'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Code'); ?></th>
		<th><?php __('Name'); ?></th>
		<th><?php __('Description'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($dataInstituteCode['DataInstituteGroup'] as $dataInstituteGroup):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $dataInstituteGroup['id'];?></td>
			<td><?php echo $dataInstituteGroup['code'];?></td>
			<td><?php echo $dataInstituteGroup['name'];?></td>
			<td><?php echo $dataInstituteGroup['description'];?></td>
			<td><?php echo $dataInstituteGroup['created'];?></td>
			<td><?php echo $dataInstituteGroup['modified'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'data_institute_groups', 'action' => 'view', $dataInstituteGroup['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'data_institute_groups', 'action' => 'edit', $dataInstituteGroup['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'data_institute_groups', 'action' => 'delete', $dataInstituteGroup['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $dataInstituteGroup['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Data Institute Group', true), array('controller' => 'data_institute_groups', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
