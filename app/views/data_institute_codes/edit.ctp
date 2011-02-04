<div class="dataInstituteCodes form">
<?php echo $this->Form->create('DataInstituteCode');?>
	<fieldset>
 		<legend><?php __('Edit Data Institute Code'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('code');
		echo $this->Form->input('name');
		echo $this->Form->input('acronym');
		echo $this->Form->input('description');
		echo $this->Form->input('DataInstituteGroup');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('DataInstituteCode.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('DataInstituteCode.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Data Institute Codes', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Data Institute Groups', true), array('controller' => 'data_institute_groups', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Data Institute Group', true), array('controller' => 'data_institute_groups', 'action' => 'add')); ?> </li>
	</ul>
</div>