<div class="juhacchuuMeisaiDts view">
<h2><?php echo __('Juhacchuu Meisai Dt'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($juhacchuuMeisaiDt['JuhacchuuMeisaiDt']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Juhacchuu Dt'); ?></dt>
		<dd>
			<?php echo $this->Html->link($juhacchuuMeisaiDt['JuhacchuuDt']['code'], array('controller' => 'juhacchuu_dts', 'action' => 'view', $juhacchuuMeisaiDt['JuhacchuuDt']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Gyou Bangou'); ?></dt>
		<dd>
			<?php echo h($juhacchuuMeisaiDt['JuhacchuuMeisaiDt']['gyou_bangou']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hinmoku Mr'); ?></dt>
		<dd>
			<?php echo $this->Html->link($juhacchuuMeisaiDt['HinmokuMr']['name'], array('controller' => 'hinmoku_mrs', 'action' => 'view', $juhacchuuMeisaiDt['HinmokuMr']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hinmoku Mei'); ?></dt>
		<dd>
			<?php echo h($juhacchuuMeisaiDt['JuhacchuuMeisaiDt']['hinmoku_mei']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Lot'); ?></dt>
		<dd>
			<?php echo h($juhacchuuMeisaiDt['JuhacchuuMeisaiDt']['lot']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Suu'); ?></dt>
		<dd>
			<?php echo h($juhacchuuMeisaiDt['JuhacchuuMeisaiDt']['suu']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tanni Mr'); ?></dt>
		<dd>
			<?php echo $this->Html->link($juhacchuuMeisaiDt['TanniMr']['name'], array('controller' => 'tanni_mrs', 'action' => 'view', $juhacchuuMeisaiDt['TanniMr']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Suu2'); ?></dt>
		<dd>
			<?php echo h($juhacchuuMeisaiDt['JuhacchuuMeisaiDt']['suu2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tanni Mr2'); ?></dt>
		<dd>
			<?php echo $this->Html->link($juhacchuuMeisaiDt['TanniMr2']['name'], array('controller' => 'tanni_mrs', 'action' => 'view', $juhacchuuMeisaiDt['TanniMr2']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tanka Iti'); ?></dt>
		<dd>
			<?php echo h($juhacchuuMeisaiDt['JuhacchuuMeisaiDt']['tanka_iti']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tanka'); ?></dt>
		<dd>
			<?php echo h($juhacchuuMeisaiDt['JuhacchuuMeisaiDt']['tanka']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Utizei Flg'); ?></dt>
		<dd>
			<?php echo h($juhacchuuMeisaiDt['JuhacchuuMeisaiDt']['utizei_flg']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Kingaku'); ?></dt>
		<dd>
			<?php echo h($juhacchuuMeisaiDt['JuhacchuuMeisaiDt']['kingaku']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Shouhizei Ritu'); ?></dt>
		<dd>
			<?php echo h($juhacchuuMeisaiDt['JuhacchuuMeisaiDt']['shouhizei_ritu']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nouki'); ?></dt>
		<dd>
			<?php echo h($juhacchuuMeisaiDt['JuhacchuuMeisaiDt']['nouki']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Bikou'); ?></dt>
		<dd>
			<?php echo h($juhacchuuMeisaiDt['JuhacchuuMeisaiDt']['bikou']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Basho Tana Souko Mr'); ?></dt>
		<dd>
			<?php echo $this->Html->link($juhacchuuMeisaiDt['BashoTanaSoukoMr']['name'], array('controller' => 'basho_tana_souko_mrs', 'action' => 'view', $juhacchuuMeisaiDt['BashoTanaSoukoMr']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nouhin Zumi Suu'); ?></dt>
		<dd>
			<?php echo h($juhacchuuMeisaiDt['JuhacchuuMeisaiDt']['nouhin_zumi_suu']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nouhin Zumi Suu2'); ?></dt>
		<dd>
			<?php echo h($juhacchuuMeisaiDt['JuhacchuuMeisaiDt']['nouhin_zumi_suu2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Youi Zumi Suu'); ?></dt>
		<dd>
			<?php echo h($juhacchuuMeisaiDt['JuhacchuuMeisaiDt']['youi_zumi_suu']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Youi Zumi Suu2'); ?></dt>
		<dd>
			<?php echo h($juhacchuuMeisaiDt['JuhacchuuMeisaiDt']['youi_zumi_suu2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Kakunin Zumi Suu'); ?></dt>
		<dd>
			<?php echo h($juhacchuuMeisaiDt['JuhacchuuMeisaiDt']['kakunin_zumi_suu']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Kakunin Zumi Suu2'); ?></dt>
		<dd>
			<?php echo h($juhacchuuMeisaiDt['JuhacchuuMeisaiDt']['kakunin_zumi_suu2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Kanryou Flg'); ?></dt>
		<dd>
			<?php echo h($juhacchuuMeisaiDt['JuhacchuuMeisaiDt']['kanryou_flg']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Order Dt Id'); ?></dt>
		<dd>
			<?php echo h($juhacchuuMeisaiDt['JuhacchuuMeisaiDt']['order_dt_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Juchuu Meisai Dt'); ?></dt>
		<dd>
			<?php echo $this->Html->link($juhacchuuMeisaiDt['JuchuuMeisaiDt']['hinmoku_mei'], array('controller' => 'juhacchuu_meisai_dts', 'action' => 'view', $juhacchuuMeisaiDt['JuchuuMeisaiDt']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Kaisi Nitiji'); ?></dt>
		<dd>
			<?php echo h($juhacchuuMeisaiDt['JuhacchuuMeisaiDt']['kaisi_nitiji']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Id Moto'); ?></dt>
		<dd>
			<?php echo h($juhacchuuMeisaiDt['JuhacchuuMeisaiDt']['id_moto']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Kinsi Flg'); ?></dt>
		<dd>
			<?php echo h($juhacchuuMeisaiDt['JuhacchuuMeisaiDt']['kinsi_flg']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Shuuryou Nitiji'); ?></dt>
		<dd>
			<?php echo h($juhacchuuMeisaiDt['JuhacchuuMeisaiDt']['shuuryou_nitiji']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sakusei User Id'); ?></dt>
		<dd>
			<?php echo h($juhacchuuMeisaiDt['JuhacchuuMeisaiDt']['sakusei_user_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($juhacchuuMeisaiDt['JuhacchuuMeisaiDt']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Kousin User Id'); ?></dt>
		<dd>
			<?php echo h($juhacchuuMeisaiDt['JuhacchuuMeisaiDt']['kousin_user_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated'); ?></dt>
		<dd>
			<?php echo h($juhacchuuMeisaiDt['JuhacchuuMeisaiDt']['updated']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Juhacchuu Meisai Dt'), array('action' => 'edit', $juhacchuuMeisaiDt['JuhacchuuMeisaiDt']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Juhacchuu Meisai Dt'), array('action' => 'delete', $juhacchuuMeisaiDt['JuhacchuuMeisaiDt']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $juhacchuuMeisaiDt['JuhacchuuMeisaiDt']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Juhacchuu Meisai Dts'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Juhacchuu Meisai Dt'), array('action' => 'add')); ?> </li>
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
<div class="related">
	<h3><?php echo __('Related Sikyuu Meisai Dts'); ?></h3>
	<?php if (!empty($juhacchuuMeisaiDt['SikyuuMeisaiDt'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Juhacchuu Meisai Dt Id'); ?></th>
		<th><?php echo __('Gyou Bangou'); ?></th>
		<th><?php echo __('Hinmoku Mr Id'); ?></th>
		<th><?php echo __('Hinmoku Mei'); ?></th>
		<th><?php echo __('Lot'); ?></th>
		<th><?php echo __('Suu'); ?></th>
		<th><?php echo __('Tanni Mr Id'); ?></th>
		<th><?php echo __('Suu2'); ?></th>
		<th><?php echo __('Tanni Mr2 Id'); ?></th>
		<th><?php echo __('Zumi Suu'); ?></th>
		<th><?php echo __('Zumi Suu2'); ?></th>
		<th><?php echo __('Tanni Iti'); ?></th>
		<th><?php echo __('Shoyou Tanni'); ?></th>
		<th><?php echo __('Hikiotosi Suu'); ?></th>
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
	<?php foreach ($juhacchuuMeisaiDt['SikyuuMeisaiDt'] as $sikyuuMeisaiDt): ?>
		<tr>
			<td><?php echo $sikyuuMeisaiDt['id']; ?></td>
			<td><?php echo $sikyuuMeisaiDt['juhacchuu_meisai_dt_id']; ?></td>
			<td><?php echo $sikyuuMeisaiDt['gyou_bangou']; ?></td>
			<td><?php echo $sikyuuMeisaiDt['hinmoku_mr_id']; ?></td>
			<td><?php echo $sikyuuMeisaiDt['hinmoku_mei']; ?></td>
			<td><?php echo $sikyuuMeisaiDt['lot']; ?></td>
			<td><?php echo $sikyuuMeisaiDt['suu']; ?></td>
			<td><?php echo $sikyuuMeisaiDt['tanni_mr_id']; ?></td>
			<td><?php echo $sikyuuMeisaiDt['suu2']; ?></td>
			<td><?php echo $sikyuuMeisaiDt['tanni_mr2_id']; ?></td>
			<td><?php echo $sikyuuMeisaiDt['zumi_suu']; ?></td>
			<td><?php echo $sikyuuMeisaiDt['zumi_suu2']; ?></td>
			<td><?php echo $sikyuuMeisaiDt['tanni_iti']; ?></td>
			<td><?php echo $sikyuuMeisaiDt['shoyou_tanni']; ?></td>
			<td><?php echo $sikyuuMeisaiDt['hikiotosi_suu']; ?></td>
			<td><?php echo $sikyuuMeisaiDt['kaisi_nitiji']; ?></td>
			<td><?php echo $sikyuuMeisaiDt['id_moto']; ?></td>
			<td><?php echo $sikyuuMeisaiDt['kinsi_flg']; ?></td>
			<td><?php echo $sikyuuMeisaiDt['shuuryou_nitiji']; ?></td>
			<td><?php echo $sikyuuMeisaiDt['sakusei_user_id']; ?></td>
			<td><?php echo $sikyuuMeisaiDt['created']; ?></td>
			<td><?php echo $sikyuuMeisaiDt['kousin_user_id']; ?></td>
			<td><?php echo $sikyuuMeisaiDt['updated']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'sikyuu_meisai_dts', 'action' => 'view', $sikyuuMeisaiDt['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'sikyuu_meisai_dts', 'action' => 'edit', $sikyuuMeisaiDt['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'sikyuu_meisai_dts', 'action' => 'delete', $sikyuuMeisaiDt['id']), array('confirm' => __('Are you sure you want to delete # %s?', $sikyuuMeisaiDt['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Sikyuu Meisai Dt'), array('controller' => 'sikyuu_meisai_dts', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Zaiko Dts'); ?></h3>
	<?php if (!empty($juhacchuuMeisaiDt['ZaikoDt'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Hinmoku Mr Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Barcode'); ?></th>
		<th><?php echo __('Basho Tana Souko Mr Id'); ?></th>
		<th><?php echo __('Shoyuusha Kbn Id'); ?></th>
		<th><?php echo __('Torihikisaki Mr Id'); ?></th>
		<th><?php echo __('Seisan Sasizu Dt Id'); ?></th>
		<th><?php echo __('Hojo Sasizu Dt Id'); ?></th>
		<th><?php echo __('Hinmoku Mei'); ?></th>
		<th><?php echo __('Maker'); ?></th>
		<th><?php echo __('Kataban'); ?></th>
		<th><?php echo __('Lot'); ?></th>
		<th><?php echo __('Hansuu'); ?></th>
		<th><?php echo __('Iroban'); ?></th>
		<th><?php echo __('Iromei'); ?></th>
		<th><?php echo __('Iro Bikou'); ?></th>
		<th><?php echo __('Tanni Mr Id'); ?></th>
		<th><?php echo __('Tanni Mr2 Id'); ?></th>
		<th><?php echo __('Tanni Iti'); ?></th>
		<th><?php echo __('Suu'); ?></th>
		<th><?php echo __('Suu2'); ?></th>
		<th><?php echo __('Hinsitu Kbn Id'); ?></th>
		<th><?php echo __('Hinsitu Utiwake'); ?></th>
		<th><?php echo __('Saishuu Nyuuko Nitiji'); ?></th>
		<th><?php echo __('Saishuu Shukko Nitiji'); ?></th>
		<th><?php echo __('Juhacchuu Meisai Dt Id'); ?></th>
		<th><?php echo __('Hikiate Juchuu Suu'); ?></th>
		<th><?php echo __('Hinmoku Bunrui1 Kbn Id'); ?></th>
		<th><?php echo __('Hinmoku Bunrui2 Kbn Id'); ?></th>
		<th><?php echo __('Hinmoku Bunrui3 Kbn Id'); ?></th>
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
	<?php foreach ($juhacchuuMeisaiDt['ZaikoDt'] as $zaikoDt): ?>
		<tr>
			<td><?php echo $zaikoDt['id']; ?></td>
			<td><?php echo $zaikoDt['hinmoku_mr_id']; ?></td>
			<td><?php echo $zaikoDt['name']; ?></td>
			<td><?php echo $zaikoDt['barcode']; ?></td>
			<td><?php echo $zaikoDt['basho_tana_souko_mr_id']; ?></td>
			<td><?php echo $zaikoDt['shoyuusha_kbn_id']; ?></td>
			<td><?php echo $zaikoDt['torihikisaki_mr_id']; ?></td>
			<td><?php echo $zaikoDt['seisan_sasizu_dt_id']; ?></td>
			<td><?php echo $zaikoDt['hojo_sasizu_dt_id']; ?></td>
			<td><?php echo $zaikoDt['hinmoku_mei']; ?></td>
			<td><?php echo $zaikoDt['maker']; ?></td>
			<td><?php echo $zaikoDt['kataban']; ?></td>
			<td><?php echo $zaikoDt['lot']; ?></td>
			<td><?php echo $zaikoDt['hansuu']; ?></td>
			<td><?php echo $zaikoDt['iroban']; ?></td>
			<td><?php echo $zaikoDt['iromei']; ?></td>
			<td><?php echo $zaikoDt['iro_bikou']; ?></td>
			<td><?php echo $zaikoDt['tanni_mr_id']; ?></td>
			<td><?php echo $zaikoDt['tanni_mr2_id']; ?></td>
			<td><?php echo $zaikoDt['tanni_iti']; ?></td>
			<td><?php echo $zaikoDt['suu']; ?></td>
			<td><?php echo $zaikoDt['suu2']; ?></td>
			<td><?php echo $zaikoDt['hinsitu_kbn_id']; ?></td>
			<td><?php echo $zaikoDt['hinsitu_utiwake']; ?></td>
			<td><?php echo $zaikoDt['saishuu_nyuuko_nitiji']; ?></td>
			<td><?php echo $zaikoDt['saishuu_shukko_nitiji']; ?></td>
			<td><?php echo $zaikoDt['juhacchuu_meisai_dt_id']; ?></td>
			<td><?php echo $zaikoDt['hikiate_juchuu_suu']; ?></td>
			<td><?php echo $zaikoDt['hinmoku_bunrui1_kbn_id']; ?></td>
			<td><?php echo $zaikoDt['hinmoku_bunrui2_kbn_id']; ?></td>
			<td><?php echo $zaikoDt['hinmoku_bunrui3_kbn_id']; ?></td>
			<td><?php echo $zaikoDt['kaisi_nitiji']; ?></td>
			<td><?php echo $zaikoDt['id_moto']; ?></td>
			<td><?php echo $zaikoDt['kinsi_flg']; ?></td>
			<td><?php echo $zaikoDt['shuuryou_nitiji']; ?></td>
			<td><?php echo $zaikoDt['sakusei_user_id']; ?></td>
			<td><?php echo $zaikoDt['created']; ?></td>
			<td><?php echo $zaikoDt['kousin_user_id']; ?></td>
			<td><?php echo $zaikoDt['updated']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'zaiko_dts', 'action' => 'view', $zaikoDt['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'zaiko_dts', 'action' => 'edit', $zaikoDt['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'zaiko_dts', 'action' => 'delete', $zaikoDt['id']), array('confirm' => __('Are you sure you want to delete # %s?', $zaikoDt['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Zaiko Dt'), array('controller' => 'zaiko_dts', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
