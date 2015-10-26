<div class="row-fluid">
	<div class="span9">
		<?php echo $this->BootstrapForm->create('ZaikoFusokuHyoujiVw', array('class' => 'form-horizontal'));?>
			<fieldset>
				<legend><?php echo __('Add %s', __('Zaiko Fusoku Hyouji Vw')); ?></legend>
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
				?>
				<?php echo $this->BootstrapForm->submit(__('Submit'));?>
			</fieldset>
		<?php echo $this->BootstrapForm->end();?>
	</div>
	<div class="span3">
		<div class="well" style="padding: 8px 0; margin-top:8px;">
		<ul class="nav nav-list">
			<li class="nav-header"><?php echo __('Actions'); ?></li>
			<li><?php echo $this->Html->link(__('List %s', __('Zaiko Fusoku Hyouji Vws')), array('action' => 'index'));?></li>
		</ul>
		</div>
	</div>
</div>