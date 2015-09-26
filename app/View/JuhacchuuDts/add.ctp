<div class="juhacchuuDts form">
<?php echo $this->Form->create('JuhacchuuDt'); ?>
	<fieldset>
		<legend><?php echo __('Add Juhacchuu Dt'); ?></legend>
	<?php
		echo $this->Form->input('code');
		echo $this->Form->input('juchuu_flg');
		echo $this->Form->input('bi');
		echo $this->Form->input('torihikisaki_mr_id');
		echo $this->Form->input('user_id');
		echo $this->Form->input('bumon_mr_id');
		echo $this->Form->input('nouki');
		echo $this->Form->input('bikou');
		echo $this->Form->input('juchuu_dt_id');
		echo $this->Form->input('basho_tana_souko_mr_id');
		echo $this->Form->input('kingaku_goukei');
		echo $this->Form->input('shouhizei_kingaku');
		echo $this->Form->input('utizei_flg');
		echo $this->Form->input('matome_kazei_flg');
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

		<li><?php echo $this->Html->link(__('List Juhacchuu Dts'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Torihikisaki Mrs'), array('controller' => 'torihikisaki_mrs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Torihikisaki Mr'), array('controller' => 'torihikisaki_mrs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Bumon Mrs'), array('controller' => 'bumon_mrs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Bumon Mr'), array('controller' => 'bumon_mrs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Juchuu Dts'), array('controller' => 'juchuu_dts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Juchuu Dt'), array('controller' => 'juchuu_dts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Basho Tana Souko Mrs'), array('controller' => 'basho_tana_souko_mrs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Basho Tana Souko Mr'), array('controller' => 'basho_tana_souko_mrs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Juhacchuu Meisai Dts'), array('controller' => 'juhacchuu_meisai_dts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Juhacchuu Meisai Dt'), array('controller' => 'juhacchuu_meisai_dts', 'action' => 'add')); ?> </li>
	</ul>
</div>
