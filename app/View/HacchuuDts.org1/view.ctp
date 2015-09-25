<div class="hacchuuDts view">
<h2><?php echo __('Hacchuu Dt'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($hacchuuDt['HacchuuDt']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Code'); ?></dt>
		<dd>
			<?php echo h($hacchuuDt['HacchuuDt']['code']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Bi'); ?></dt>
		<dd>
			<?php echo h($hacchuuDt['HacchuuDt']['bi']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Torihikisaki Mr'); ?></dt>
		<dd>
			<?php echo $this->Html->link($hacchuuDt['TorihikisakiMr']['name'], array('controller' => 'torihikisaki_mrs', 'action' => 'view', $hacchuuDt['TorihikisakiMr']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($hacchuuDt['User']['name'], array('controller' => 'users', 'action' => 'view', $hacchuuDt['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Bumon Mr'); ?></dt>
		<dd>
			<?php echo $this->Html->link($hacchuuDt['BumonMr']['name'], array('controller' => 'bumon_mrs', 'action' => 'view', $hacchuuDt['BumonMr']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nouki'); ?></dt>
		<dd>
			<?php echo h($hacchuuDt['HacchuuDt']['nouki']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Bikou'); ?></dt>
		<dd>
			<?php echo h($hacchuuDt['HacchuuDt']['bikou']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Juchuu Dt'); ?></dt>
		<dd>
			<?php echo $this->Html->link($hacchuuDt['JuchuuDt']['code'], array('controller' => 'juchuu_dts', 'action' => 'view', $hacchuuDt['JuchuuDt']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Basho Tana Souko Mr'); ?></dt>
		<dd>
			<?php echo $this->Html->link($hacchuuDt['BashoTanaSoukoMr']['name'], array('controller' => 'basho_tana_souko_mrs', 'action' => 'view', $hacchuuDt['BashoTanaSoukoMr']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Kingaku Goukei'); ?></dt>
		<dd>
			<?php echo h($hacchuuDt['HacchuuDt']['kingaku_goukei']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Shouhizei Kingaku'); ?></dt>
		<dd>
			<?php echo h($hacchuuDt['HacchuuDt']['shouhizei_kingaku']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Utizei Flg'); ?></dt>
		<dd>
			<?php echo h($hacchuuDt['HacchuuDt']['utizei_flg']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Matome Kazei Flg'); ?></dt>
		<dd>
			<?php echo h($hacchuuDt['HacchuuDt']['matome_kazei_flg']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Kaisi Nitiji'); ?></dt>
		<dd>
			<?php echo h($hacchuuDt['HacchuuDt']['kaisi_nitiji']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Id Moto'); ?></dt>
		<dd>
			<?php echo h($hacchuuDt['HacchuuDt']['id_moto']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Kinsi Flg'); ?></dt>
		<dd>
			<?php echo h($hacchuuDt['HacchuuDt']['kinsi_flg']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Shuuryou Nitiji'); ?></dt>
		<dd>
			<?php echo h($hacchuuDt['HacchuuDt']['shuuryou_nitiji']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sakusei User Id'); ?></dt>
		<dd>
			<?php echo h($hacchuuDt['HacchuuDt']['sakusei_user_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($hacchuuDt['HacchuuDt']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Kousin User Id'); ?></dt>
		<dd>
			<?php echo h($hacchuuDt['HacchuuDt']['kousin_user_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated'); ?></dt>
		<dd>
			<?php echo h($hacchuuDt['HacchuuDt']['updated']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Hacchuu Dt'), array('action' => 'edit', $hacchuuDt['HacchuuDt']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Hacchuu Dt'), array('action' => 'delete', $hacchuuDt['HacchuuDt']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $hacchuuDt['HacchuuDt']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Hacchuu Dts'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hacchuu Dt'), array('action' => 'add')); ?> </li>
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
		<li><?php echo $this->Html->link(__('List Hacchuu Meisai Dts'), array('controller' => 'hacchuu_meisai_dts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hacchuu Meisai Dt'), array('controller' => 'hacchuu_meisai_dts', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Hacchuu Meisai Dts'); ?></h3>
	<?php if (!empty($hacchuuDt['HacchuuMeisaiDt'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Hacchuu Dt Id'); ?></th>
		<th><?php echo __('Gyou Bangou'); ?></th>
		<th><?php echo __('Hinmoku Mr Id'); ?></th>
		<th><?php echo __('Hinmoku Mei'); ?></th>
		<th><?php echo __('Suu'); ?></th>
		<th><?php echo __('Tanni Mr Id'); ?></th>
		<th><?php echo __('Suu2'); ?></th>
		<th><?php echo __('Tanni Mr2 Id'); ?></th>
		<th><?php echo __('Tanka Iti'); ?></th>
		<th><?php echo __('Tanka'); ?></th>
		<th><?php echo __('Siire Tanka'); ?></th>
		<th><?php echo __('Utizei Flg'); ?></th>
		<th><?php echo __('Kingaku'); ?></th>
		<th><?php echo __('Shouhizei Ritu'); ?></th>
		<th><?php echo __('Ukeire Yotei Bi'); ?></th>
		<th><?php echo __('Bikou'); ?></th>
		<th><?php echo __('Basho Tana Souko Mr Id'); ?></th>
		<th><?php echo __('Nyuuka Zumi Suu'); ?></th>
		<th><?php echo __('Nyuuka Zumi Suu2'); ?></th>
		<th><?php echo __('Kensa Zumi Suu'); ?></th>
		<th><?php echo __('Kensa Zumi Suu2'); ?></th>
		<th><?php echo __('Kenshuu Zumi Suu'); ?></th>
		<th><?php echo __('Kenshuu Zumi Suu2'); ?></th>
		<th><?php echo __('Kanryou Flg'); ?></th>
		<th><?php echo __('Order Dt Id'); ?></th>
		<th><?php echo __('Juchuu Meisai Dt Id'); ?></th>
		<th><?php echo __('Kaisi Nitiji'); ?></th>
		<th><?php echo __('Id Moto'); ?></th>
		<th><?php echo __('Kinsi Flg'); ?></th>
		<th><?php echo __('Shuuryou Nitiji'); ?></th>
		<th><?php echo __('Sakusei User Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Kousin User Id'); ?></th>
		<th><?php echo __('Updated'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($hacchuuDt['HacchuuMeisaiDt'] as $hacchuuMeisaiDt): ?>
		<tr>
			<td><?php echo $hacchuuMeisaiDt['id']; ?></td>
			<td><?php echo $hacchuuMeisaiDt['hacchuu_dt_id']; ?></td>
			<td><?php echo $hacchuuMeisaiDt['gyou_bangou']; ?></td>
			<td><?php echo $hacchuuMeisaiDt['hinmoku_mr_id']; ?></td>
			<td><?php echo $hacchuuMeisaiDt['hinmoku_mei']; ?></td>
			<td><?php echo $hacchuuMeisaiDt['suu']; ?></td>
			<td><?php echo $hacchuuMeisaiDt['tanni_mr_id']; ?></td>
			<td><?php echo $hacchuuMeisaiDt['suu2']; ?></td>
			<td><?php echo $hacchuuMeisaiDt['tanni_mr2_id']; ?></td>
			<td><?php echo $hacchuuMeisaiDt['tanka_iti']; ?></td>
			<td><?php echo $hacchuuMeisaiDt['tanka']; ?></td>
			<td><?php echo $hacchuuMeisaiDt['siire_tanka']; ?></td>
			<td><?php echo $hacchuuMeisaiDt['utizei_flg']; ?></td>
			<td><?php echo $hacchuuMeisaiDt['kingaku']; ?></td>
			<td><?php echo $hacchuuMeisaiDt['shouhizei_ritu']; ?></td>
			<td><?php echo $hacchuuMeisaiDt['ukeire_yotei_bi']; ?></td>
			<td><?php echo $hacchuuMeisaiDt['bikou']; ?></td>
			<td><?php echo $hacchuuMeisaiDt['basho_tana_souko_mr_id']; ?></td>
			<td><?php echo $hacchuuMeisaiDt['nyuuka_zumi_suu']; ?></td>
			<td><?php echo $hacchuuMeisaiDt['nyuuka_zumi_suu2']; ?></td>
			<td><?php echo $hacchuuMeisaiDt['kensa_zumi_suu']; ?></td>
			<td><?php echo $hacchuuMeisaiDt['kensa_zumi_suu2']; ?></td>
			<td><?php echo $hacchuuMeisaiDt['kenshuu_zumi_suu']; ?></td>
			<td><?php echo $hacchuuMeisaiDt['kenshuu_zumi_suu2']; ?></td>
			<td><?php echo $hacchuuMeisaiDt['kanryou_flg']; ?></td>
			<td><?php echo $hacchuuMeisaiDt['order_dt_id']; ?></td>
			<td><?php echo $hacchuuMeisaiDt['juchuu_meisai_dt_id']; ?></td>
			<td><?php echo $hacchuuMeisaiDt['kaisi_nitiji']; ?></td>
			<td><?php echo $hacchuuMeisaiDt['id_moto']; ?></td>
			<td><?php echo $hacchuuMeisaiDt['kinsi_flg']; ?></td>
			<td><?php echo $hacchuuMeisaiDt['shuuryou_nitiji']; ?></td>
			<td><?php echo $hacchuuMeisaiDt['sakusei_user_id']; ?></td>
			<td><?php echo $hacchuuMeisaiDt['created']; ?></td>
			<td><?php echo $hacchuuMeisaiDt['kousin_user_id']; ?></td>
			<td><?php echo $hacchuuMeisaiDt['updated']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'hacchuu_meisai_dts', 'action' => 'view', $hacchuuMeisaiDt['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'hacchuu_meisai_dts', 'action' => 'edit', $hacchuuMeisaiDt['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'hacchuu_meisai_dts', 'action' => 'delete', $hacchuuMeisaiDt['id']), array('confirm' => __('Are you sure you want to delete # %s?', $hacchuuMeisaiDt['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Hacchuu Meisai Dt'), array('controller' => 'hacchuu_meisai_dts', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
