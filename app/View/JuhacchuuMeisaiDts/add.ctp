<div class="row-fluid">
	<div class="span9">
		<?php echo $this->BootstrapForm->create('JuhacchuuMeisaiDt', array('class' => 'form-horizontal'));?>
			<fieldset>
				<legend><?php echo __('Add %s', __('Juhacchuu Meisai Dt')); ?></legend>
				<?php
				echo $this->BootstrapForm->input('juhacchuu_dt_id');
				echo $this->BootstrapForm->input('gyou_bangou');
				echo $this->BootstrapForm->input('hinmoku_mr_id');
				echo $this->BootstrapForm->input('hinmoku_mei');
				echo $this->BootstrapForm->input('lot');
				echo $this->BootstrapForm->input('suu');
				echo $this->BootstrapForm->input('tanni_mr_id');
				echo $this->BootstrapForm->input('suu2');
				echo $this->BootstrapForm->input('tanni_mr2_id');
				echo $this->BootstrapForm->input('tanka_iti');
				echo $this->BootstrapForm->input('tanka');
				echo $this->BootstrapForm->input('utizei_flg');
				echo $this->BootstrapForm->input('kingaku');
				echo $this->BootstrapForm->input('shouhizei_ritu');
				echo $this->BootstrapForm->input('nouki');
				echo $this->BootstrapForm->input('bikou');
				echo $this->BootstrapForm->input('basho_tana_souko_mr_id');
				echo $this->BootstrapForm->input('oya_juhacchuu_meisai_dt_id');
				echo $this->BootstrapForm->input('shoyou_tanni');
				echo $this->BootstrapForm->input('nouhin_zumi_suu');
				echo $this->BootstrapForm->input('nouhin_zumi_suu2');
				echo $this->BootstrapForm->input('youi_zumi_suu');
				echo $this->BootstrapForm->input('youi_zumi_suu2');
				echo $this->BootstrapForm->input('kakunin_zumi_suu');
				echo $this->BootstrapForm->input('kakunin_zumi_suu2');
				echo $this->BootstrapForm->input('kanryou_flg');
				echo $this->BootstrapForm->input('order_dt_id');
				echo $this->BootstrapForm->input('juchuu_meisai_dt_id');
				echo $this->BootstrapForm->input('kaisi_nitiji');
				echo $this->BootstrapForm->input('id_moto');
				echo $this->BootstrapForm->input('kinsi_flg');
				echo $this->BootstrapForm->input('shuuryou_nitiji');
				echo $this->BootstrapForm->input('sakusei_user_id');
				echo $this->BootstrapForm->input('kousin_user_id');
				?>
			</fieldset>
				<?php echo $this->BootstrapForm->submit(__('Submit'));?>
		<?php echo $this->BootstrapForm->end();?>
	</div>
	<div class="span3">
		<div class="well" style="padding: 8px 0; margin-top:8px;">
		<ul class="nav nav-list">
			<li class="nav-header"><?php echo __('Actions'); ?></li>
			<li><?php echo $this->Html->link(__('List %s', __('Juhacchuu Meisai Dts')), array('action' => 'index'));?></li>
			<li><?php echo $this->Html->link(__('List %s', __('Juhacchuu Dts')), array('controller' => 'juhacchuu_dts', 'action' => 'index')); ?></li>
			<li><?php echo $this->Html->link(__('New %s', __('Juhacchuu Dt')), array('controller' => 'juhacchuu_dts', 'action' => 'add')); ?></li>
			<li><?php echo $this->Html->link(__('List %s', __('Tanni Mrs')), array('controller' => 'tanni_mrs', 'action' => 'index')); ?></li>
			<li><?php echo $this->Html->link(__('New %s', __('Tanni Mr')), array('controller' => 'tanni_mrs', 'action' => 'add')); ?></li>
			<li><?php echo $this->Html->link(__('List %s', __('Basho Tana Souko Mrs')), array('controller' => 'basho_tana_souko_mrs', 'action' => 'index')); ?></li>
			<li><?php echo $this->Html->link(__('New %s', __('Basho Tana Souko Mr')), array('controller' => 'basho_tana_souko_mrs', 'action' => 'add')); ?></li>
			<li><?php echo $this->Html->link(__('List %s', __('Zaiko Dts')), array('controller' => 'zaiko_dts', 'action' => 'index')); ?></li>
			<li><?php echo $this->Html->link(__('New %s', __('Zaiko Dt')), array('controller' => 'zaiko_dts', 'action' => 'add')); ?></li>
		</ul>
		</div>
	</div>
</div>
<!-- ‚–§“x•\Ž¦ -->
<?php echo $this->Html->css(array("iurabs"), array("inline"=>false)) ;?>
