<div class="hacchuuMeisaiDts view">
<h2><?php echo __('Hacchuu Meisai Dt'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($hacchuuMeisaiDt['HacchuuMeisaiDt']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hacchuu Dt'); ?></dt>
		<dd>
			<?php echo $this->Html->link($hacchuuMeisaiDt['HacchuuDt']['code'], array('controller' => 'hacchuu_dts', 'action' => 'view', $hacchuuMeisaiDt['HacchuuDt']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Gyou Bangou'); ?></dt>
		<dd>
			<?php echo h($hacchuuMeisaiDt['HacchuuMeisaiDt']['gyou_bangou']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hinmoku Mr'); ?></dt>
		<dd>
			<?php echo $this->Html->link($hacchuuMeisaiDt['HinmokuMr']['name'], array('controller' => 'hinmoku_mrs', 'action' => 'view', $hacchuuMeisaiDt['HinmokuMr']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hinmoku Mei'); ?></dt>
		<dd>
			<?php echo h($hacchuuMeisaiDt['HacchuuMeisaiDt']['hinmoku_mei']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Suu'); ?></dt>
		<dd>
			<?php echo h($hacchuuMeisaiDt['HacchuuMeisaiDt']['suu']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tanni Mr'); ?></dt>
		<dd>
			<?php echo $this->Html->link($hacchuuMeisaiDt['TanniMr']['name'], array('controller' => 'tanni_mrs', 'action' => 'view', $hacchuuMeisaiDt['TanniMr']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Suu2'); ?></dt>
		<dd>
			<?php echo h($hacchuuMeisaiDt['HacchuuMeisaiDt']['suu2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tanni Mr2'); ?></dt>
		<dd>
			<?php echo $this->Html->link($hacchuuMeisaiDt['TanniMr2']['name'], array('controller' => 'tanni_mrs', 'action' => 'view', $hacchuuMeisaiDt['TanniMr2']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tanka Iti'); ?></dt>
		<dd>
			<?php echo h($hacchuuMeisaiDt['HacchuuMeisaiDt']['tanka_iti']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tanka'); ?></dt>
		<dd>
			<?php echo h($hacchuuMeisaiDt['HacchuuMeisaiDt']['tanka']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Siire Tanka'); ?></dt>
		<dd>
			<?php echo h($hacchuuMeisaiDt['HacchuuMeisaiDt']['siire_tanka']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Utizei Flg'); ?></dt>
		<dd>
			<?php echo h($hacchuuMeisaiDt['HacchuuMeisaiDt']['utizei_flg']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Kingaku'); ?></dt>
		<dd>
			<?php echo h($hacchuuMeisaiDt['HacchuuMeisaiDt']['kingaku']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Shouhizei Ritu'); ?></dt>
		<dd>
			<?php echo h($hacchuuMeisaiDt['HacchuuMeisaiDt']['shouhizei_ritu']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ukeire Yotei Bi'); ?></dt>
		<dd>
			<?php echo h($hacchuuMeisaiDt['HacchuuMeisaiDt']['ukeire_yotei_bi']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Bikou'); ?></dt>
		<dd>
			<?php echo h($hacchuuMeisaiDt['HacchuuMeisaiDt']['bikou']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Basho Tana Souko Mr'); ?></dt>
		<dd>
			<?php echo $this->Html->link($hacchuuMeisaiDt['BashoTanaSoukoMr']['name'], array('controller' => 'basho_tana_souko_mrs', 'action' => 'view', $hacchuuMeisaiDt['BashoTanaSoukoMr']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nyuuka Zumi Suu'); ?></dt>
		<dd>
			<?php echo h($hacchuuMeisaiDt['HacchuuMeisaiDt']['nyuuka_zumi_suu']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nyuuka Zumi Suu2'); ?></dt>
		<dd>
			<?php echo h($hacchuuMeisaiDt['HacchuuMeisaiDt']['nyuuka_zumi_suu2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Kensa Zumi Suu'); ?></dt>
		<dd>
			<?php echo h($hacchuuMeisaiDt['HacchuuMeisaiDt']['kensa_zumi_suu']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Kensa Zumi Suu2'); ?></dt>
		<dd>
			<?php echo h($hacchuuMeisaiDt['HacchuuMeisaiDt']['kensa_zumi_suu2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Kenshuu Zumi Suu'); ?></dt>
		<dd>
			<?php echo h($hacchuuMeisaiDt['HacchuuMeisaiDt']['kenshuu_zumi_suu']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Kenshuu Zumi Suu2'); ?></dt>
		<dd>
			<?php echo h($hacchuuMeisaiDt['HacchuuMeisaiDt']['kenshuu_zumi_suu2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Kanryou Flg'); ?></dt>
		<dd>
			<?php echo h($hacchuuMeisaiDt['HacchuuMeisaiDt']['kanryou_flg']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Order Dt Id'); ?></dt>
		<dd>
			<?php echo h($hacchuuMeisaiDt['HacchuuMeisaiDt']['order_dt_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Juchuu Meisai Dt'); ?></dt>
		<dd>
			<?php echo $this->Html->link($hacchuuMeisaiDt['JuchuuMeisaiDt']['hinmoku_mei'], array('controller' => 'juchuu_meisai_dts', 'action' => 'view', $hacchuuMeisaiDt['JuchuuMeisaiDt']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Kaisi Nitiji'); ?></dt>
		<dd>
			<?php echo h($hacchuuMeisaiDt['HacchuuMeisaiDt']['kaisi_nitiji']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Id Moto'); ?></dt>
		<dd>
			<?php echo h($hacchuuMeisaiDt['HacchuuMeisaiDt']['id_moto']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Kinsi Flg'); ?></dt>
		<dd>
			<?php echo h($hacchuuMeisaiDt['HacchuuMeisaiDt']['kinsi_flg']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Shuuryou Nitiji'); ?></dt>
		<dd>
			<?php echo h($hacchuuMeisaiDt['HacchuuMeisaiDt']['shuuryou_nitiji']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sakusei User Id'); ?></dt>
		<dd>
			<?php echo h($hacchuuMeisaiDt['HacchuuMeisaiDt']['sakusei_user_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($hacchuuMeisaiDt['HacchuuMeisaiDt']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Kousin User Id'); ?></dt>
		<dd>
			<?php echo h($hacchuuMeisaiDt['HacchuuMeisaiDt']['kousin_user_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated'); ?></dt>
		<dd>
			<?php echo h($hacchuuMeisaiDt['HacchuuMeisaiDt']['updated']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Hacchuu Meisai Dt'), array('action' => 'edit', $hacchuuMeisaiDt['HacchuuMeisaiDt']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Hacchuu Meisai Dt'), array('action' => 'delete', $hacchuuMeisaiDt['HacchuuMeisaiDt']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $hacchuuMeisaiDt['HacchuuMeisaiDt']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Hacchuu Meisai Dts'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hacchuu Meisai Dt'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Hacchuu Dts'), array('controller' => 'hacchuu_dts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hacchuu Dt'), array('controller' => 'hacchuu_dts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Hinmoku Mrs'), array('controller' => 'hinmoku_mrs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hinmoku Mr'), array('controller' => 'hinmoku_mrs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tanni Mrs'), array('controller' => 'tanni_mrs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tanni Mr'), array('controller' => 'tanni_mrs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Basho Tana Souko Mrs'), array('controller' => 'basho_tana_souko_mrs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Basho Tana Souko Mr'), array('controller' => 'basho_tana_souko_mrs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Juchuu Meisai Dts'), array('controller' => 'juchuu_meisai_dts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Juchuu Meisai Dt'), array('controller' => 'juchuu_meisai_dts', 'action' => 'add')); ?> </li>
	</ul>
</div>
