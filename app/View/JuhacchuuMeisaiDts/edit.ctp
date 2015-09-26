<div class="juhacchuuMeisaiDts form">
<?php echo $this->Form->create('JuhacchuuMeisaiDt'); ?>
	<fieldset>
		<legend><?php echo __('Edit Juhacchuu Meisai Dt'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('juhacchuu_dt_id');
		echo $this->Form->input('gyou_bangou');
		echo $this->Form->input('hinmoku_mr_id');
		echo $this->Form->input('hinmoku_mei');
		echo $this->Form->input('lot');
		echo $this->Form->input('suu');
		echo $this->Form->input('tanni_mr_id');
		echo $this->Form->input('suu2');
		echo $this->Form->input('tanni_mr2_id');
		echo $this->Form->input('tanka_iti');
		echo $this->Form->input('tanka');
		echo $this->Form->input('utizei_flg');
		echo $this->Form->input('kingaku');
		echo $this->Form->input('shouhizei_ritu');
		echo $this->Form->input('nouki');
		echo $this->Form->input('bikou');
		echo $this->Form->input('basho_tana_souko_mr_id');
		echo $this->Form->input('nouhin_zumi_suu');
		echo $this->Form->input('nouhin_zumi_suu2');
		echo $this->Form->input('youi_zumi_suu');
		echo $this->Form->input('youi_zumi_suu2');
		echo $this->Form->input('kakunin_zumi_suu');
		echo $this->Form->input('kakunin_zumi_suu2');
		echo $this->Form->input('kanryou_flg');
		echo $this->Form->input('order_dt_id');
		echo $this->Form->input('juchuu_meisai_dt_id');
		echo $this->Form->input('kaisi_nitiji');
		echo $this->Form->input('id_moto');
		echo $this->Form->input('kinsi_flg');
		echo $this->Form->input('shuuryou_nitiji');
		echo $this->Form->input('sakusei_user_id');
		echo $this->Form->input('kousin_user_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('JuhacchuuMeisaiDt.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('JuhacchuuMeisaiDt.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Juhacchuu Meisai Dts'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Juhacchuu Dts'), array('controller' => 'juhacchuu_dts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Juhacchuu Dt'), array('controller' => 'juhacchuu_dts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Hinmoku Mrs'), array('controller' => 'hinmoku_mrs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hinmoku Mr'), array('controller' => 'hinmoku_mrs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tanni Mrs'), array('controller' => 'tanni_mrs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tanni Mr'), array('controller' => 'tanni_mrs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Basho Tana Souko Mrs'), array('controller' => 'basho_tana_souko_mrs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Basho Tana Souko Mr'), array('controller' => 'basho_tana_souko_mrs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Juhacchuu Meisai Dts'), array('controller' => 'juhacchuu_meisai_dts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Juchuu Meisai Dt'), array('controller' => 'juhacchuu_meisai_dts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sikyuu Meisai Dts'), array('controller' => 'sikyuu_meisai_dts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sikyuu Meisai Dt'), array('controller' => 'sikyuu_meisai_dts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Zaiko Dts'), array('controller' => 'zaiko_dts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Zaiko Dt'), array('controller' => 'zaiko_dts', 'action' => 'add')); ?> </li>
	</ul>
</div>
