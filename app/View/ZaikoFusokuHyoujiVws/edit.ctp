<div class="row-fluid">
	<div class="span9">
		<?php echo $this->BootstrapForm->create('ZaikoFusokuHyoujiVw', array('class' => 'form-horizontal'));?>
			<fieldset>
				<legend><?php echo __('Edit %s', __('Zaiko Fusoku Hyouji Vw')); ?></legend>
				<?php
				echo $this->BootstrapForm->input('code');
				echo $this->BootstrapForm->input('name');
				echo $this->BootstrapForm->input('tanni_mr_id');
				echo $this->BootstrapForm->input('hinsitu_kbn_id');
				echo $this->BootstrapForm->input('anzen_zaiko_suu');
				echo $this->BootstrapForm->input('zaiko');
				echo $this->BootstrapForm->input('nouzan');
				echo $this->BootstrapForm->input('kafusoku');
				echo $this->BootstrapForm->input('chuuzan');
				echo $this->BootstrapForm->input('you_hachuu');
				echo $this->BootstrapForm->hidden('hinmoku_mr_id');
				?>
				<?php echo $this->BootstrapForm->submit(__('Submit'));?>
			</fieldset>
		<?php echo $this->BootstrapForm->end();?>
	</div>
	<div class="span3">
		<div class="well" style="padding: 8px 0; margin-top:8px;">
		<ul class="nav nav-list">
			<li class="nav-header"><?php echo __('Actions'); ?></li>
			<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('ZaikoFusokuHyoujiVw.hinmoku_mr_id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('ZaikoFusokuHyoujiVw.hinmoku_mr_id'))); ?></li>
			<li><?php echo $this->Html->link(__('List %s', __('Zaiko Fusoku Hyouji Vws')), array('action' => 'index'));?></li>
		</ul>
		</div>
	</div>
</div>