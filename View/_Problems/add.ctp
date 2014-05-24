<div class="problems form">
<?php echo $this->Form->create('Problem'); ?>
	<fieldset>
		<legend><?php echo __('Add Problem'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('Users');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Problems'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Problem Tags'), array('controller' => 'problem_tags', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Problem Tag'), array('controller' => 'problem_tags', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Users'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>