<div class="notetypes form">
<?php echo $this->Form->create('Notetype');?>
	<fieldset>
		<legend><?php echo __('Edit Notetype'); ?></legend>
	<?php
		echo $this->Form->input('notetype_id');
		echo $this->Form->input('notetype_name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Notetype.notetype_id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Notetype.notetype_id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Notetypes'), array('action' => 'index'));?></li>
	</ul>
</div>
