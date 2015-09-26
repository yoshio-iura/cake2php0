<div class="juhacchuuDts view">
<h2><?php echo __('Juhacchuu Dt'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($juhacchuuDt['JuhacchuuDt']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Code'); ?></dt>
		<dd>
			<?php echo h($juhacchuuDt['JuhacchuuDt']['code']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Juchuu Flg'); ?></dt>
		<dd>
			<?php echo h($juhacchuuDt['JuhacchuuDt']['juchuu_flg']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Bi'); ?></dt>
		<dd>
			<?php echo h($juhacchuuDt['JuhacchuuDt']['bi']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Torihikisaki Mr'); ?></dt>
		<dd>
			<?php echo $this->Html->link($juhacchuuDt['TorihikisakiMr']['name'], array('controller' => 'torihikisaki_mrs', 'action' => 'view', $juhacchuuDt['TorihikisakiMr']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($juhacchuuDt['User']['name'], array('controller' => 'users', 'action' => 'view', $juhacchuuDt['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Bumon Mr'); ?></dt>
		<dd>
			<?php echo $this->Html->link($juhacchuuDt['BumonMr']['name'], array('controller' => 'bumon_mrs', 'action' => 'view', $juhacchuuDt['BumonMr']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nouki'); ?></dt>
		<dd>
			<?php echo h($juhacchuuDt['JuhacchuuDt']['nouki']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Bikou'); ?></dt>
		<dd>
			<?php echo h($juhacchuuDt['JuhacchuuDt']['bikou']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Juchuu Dt'); ?></dt>
		<dd>
			<?php echo $this->Html->link($juhacchuuDt['JuchuuDt']['code'], array('controller' => 'juchuu_dts', 'action' => 'view', $juhacchuuDt['JuchuuDt']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Basho Tana Souko Mr'); ?></dt>
		<dd>
			<?php echo $this->Html->link($juhacchuuDt['BashoTanaSoukoMr']['name'], array('controller' => 'basho_tana_souko_mrs', 'action' => 'view', $juhacchuuDt['BashoTanaSoukoMr']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Kingaku Goukei'); ?></dt>
		<dd>
			<?php echo h($juhacchuuDt['JuhacchuuDt']['kingaku_goukei']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Shouhizei Kingaku'); ?></dt>
		<dd>
			<?php echo h($juhacchuuDt['JuhacchuuDt']['shouhizei_kingaku']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Utizei Flg'); ?></dt>
		<dd>
			<?php echo h($juhacchuuDt['JuhacchuuDt']['utizei_flg']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Matome Kazei Flg'); ?></dt>
		<dd>
			<?php echo h($juhacchuuDt['JuhacchuuDt']['matome_kazei_flg']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Kaisi Nitiji'); ?></dt>
		<dd>
			<?php echo h($juhacchuuDt['JuhacchuuDt']['kaisi_nitiji']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Id Moto'); ?></dt>
		<dd>
			<?php echo h($juhacchuuDt['JuhacchuuDt']['id_moto']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Kinsi Flg'); ?></dt>
		<dd>
			<?php echo h($juhacchuuDt['JuhacchuuDt']['kinsi_flg']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Shuuryou Nitiji'); ?></dt>
		<dd>
			<?php echo h($juhacchuuDt['JuhacchuuDt']['shuuryou_nitiji']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sakusei User Id'); ?></dt>
		<dd>
			<?php echo h($juhacchuuDt['JuhacchuuDt']['sakusei_user_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($juhacchuuDt['JuhacchuuDt']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Kousin User Id'); ?></dt>
		<dd>
			<?php echo h($juhacchuuDt['JuhacchuuDt']['kousin_user_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated'); ?></dt>
		<dd>
			<?php echo h($juhacchuuDt['JuhacchuuDt']['updated']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Juhacchuu Dt'), array('action' => 'edit', $juhacchuuDt['JuhacchuuDt']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Juhacchuu Dt'), array('action' => 'delete', $juhacchuuDt['JuhacchuuDt']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $juhacchuuDt['JuhacchuuDt']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Juhacchuu Dts'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Juhacchuu Dt'), array('action' => 'add')); ?> </li>
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
<div class="related">
	<h3><?php echo __('Related Juhacchuu Meisai Dts'); ?></h3>
	<?php if (!empty($juhacchuuDt['JuhacchuuMeisaiDt'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Juhacchuu Dt Id'); ?></th>
		<th><?php echo __('Gyou Bangou'); ?></th>
		<th><?php echo __('Hinmoku Mr Id'); ?></th>
		<th><?php echo __('Hinmoku Mei'); ?></th>
		<th><?php echo __('Lot'); ?></th>
		<th><?php echo __('Suu'); ?></th>
		<th><?php echo __('Tanni Mr Id'); ?></th>
		<th><?php echo __('Suu2'); ?></th>
		<th><?php echo __('Tanni Mr2 Id'); ?></th>
		<th><?php echo __('Tanka Iti'); ?></th>
		<th><?php echo __('Tanka'); ?></th>
		<th><?php echo __('Utizei Flg'); ?></th>
		<th><?php echo __('Kingaku'); ?></th>
		<th><?php echo __('Shouhizei Ritu'); ?></th>
		<th><?php echo __('Nouki'); ?></th>
		<th><?php echo __('Bikou'); ?></th>
		<th><?php echo __('Basho Tana Souko Mr Id'); ?></th>
		<th><?php echo __('Nouhin Zumi Suu'); ?></th>
		<th><?php echo __('Nouhin Zumi Suu2'); ?></th>
		<th><?php echo __('Youi Zumi Suu'); ?></th>
		<th><?php echo __('Youi Zumi Suu2'); ?></th>
		<th><?php echo __('Kakunin Zumi Suu'); ?></th>
		<th><?php echo __('Kakunin Zumi Suu2'); ?></th>
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
	<?php foreach ($juhacchuuDt['JuhacchuuMeisaiDt'] as $juhacchuuMeisaiDt): ?>
		<tr>
			<td><?php echo $juhacchuuMeisaiDt['id']; ?></td>
			<td><?php echo $juhacchuuMeisaiDt['juhacchuu_dt_id']; ?></td>
			<td><?php echo $juhacchuuMeisaiDt['gyou_bangou']; ?></td>
			<td><?php echo $juhacchuuMeisaiDt['hinmoku_mr_id']; ?></td>
			<td><?php echo $juhacchuuMeisaiDt['hinmoku_mei']; ?></td>
			<td><?php echo $juhacchuuMeisaiDt['lot']; ?></td>
			<td><?php echo $juhacchuuMeisaiDt['suu']; ?></td>
			<td><?php echo $juhacchuuMeisaiDt['tanni_mr_id']; ?></td>
			<td><?php echo $juhacchuuMeisaiDt['suu2']; ?></td>
			<td><?php echo $juhacchuuMeisaiDt['tanni_mr2_id']; ?></td>
			<td><?php echo $juhacchuuMeisaiDt['tanka_iti']; ?></td>
			<td><?php echo $juhacchuuMeisaiDt['tanka']; ?></td>
			<td><?php echo $juhacchuuMeisaiDt['utizei_flg']; ?></td>
			<td><?php echo $juhacchuuMeisaiDt['kingaku']; ?></td>
			<td><?php echo $juhacchuuMeisaiDt['shouhizei_ritu']; ?></td>
			<td><?php echo $juhacchuuMeisaiDt['nouki']; ?></td>
			<td><?php echo $juhacchuuMeisaiDt['bikou']; ?></td>
			<td><?php echo $juhacchuuMeisaiDt['basho_tana_souko_mr_id']; ?></td>
			<td><?php echo $juhacchuuMeisaiDt['nouhin_zumi_suu']; ?></td>
			<td><?php echo $juhacchuuMeisaiDt['nouhin_zumi_suu2']; ?></td>
			<td><?php echo $juhacchuuMeisaiDt['youi_zumi_suu']; ?></td>
			<td><?php echo $juhacchuuMeisaiDt['youi_zumi_suu2']; ?></td>
			<td><?php echo $juhacchuuMeisaiDt['kakunin_zumi_suu']; ?></td>
			<td><?php echo $juhacchuuMeisaiDt['kakunin_zumi_suu2']; ?></td>
			<td><?php echo $juhacchuuMeisaiDt['kanryou_flg']; ?></td>
			<td><?php echo $juhacchuuMeisaiDt['order_dt_id']; ?></td>
			<td><?php echo $juhacchuuMeisaiDt['juchuu_meisai_dt_id']; ?></td>
			<td><?php echo $juhacchuuMeisaiDt['kaisi_nitiji']; ?></td>
			<td><?php echo $juhacchuuMeisaiDt['id_moto']; ?></td>
			<td><?php echo $juhacchuuMeisaiDt['kinsi_flg']; ?></td>
			<td><?php echo $juhacchuuMeisaiDt['shuuryou_nitiji']; ?></td>
			<td><?php echo $juhacchuuMeisaiDt['sakusei_user_id']; ?></td>
			<td><?php echo $juhacchuuMeisaiDt['created']; ?></td>
			<td><?php echo $juhacchuuMeisaiDt['kousin_user_id']; ?></td>
			<td><?php echo $juhacchuuMeisaiDt['updated']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'juhacchuu_meisai_dts', 'action' => 'view', $juhacchuuMeisaiDt['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'juhacchuu_meisai_dts', 'action' => 'edit', $juhacchuuMeisaiDt['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'juhacchuu_meisai_dts', 'action' => 'delete', $juhacchuuMeisaiDt['id']), array('confirm' => __('Are you sure you want to delete # %s?', $juhacchuuMeisaiDt['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Juhacchuu Meisai Dt'), array('controller' => 'juhacchuu_meisai_dts', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
