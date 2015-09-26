<div class="juhacchuuMeisaiDts index">
	<h2><?php echo __('Juhacchuu Meisai Dts'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('juhacchuu_dt_id'); ?></th>
			<th><?php echo $this->Paginator->sort('gyou_bangou'); ?></th>
			<th><?php echo $this->Paginator->sort('hinmoku_mr_id'); ?></th>
			<th><?php echo $this->Paginator->sort('hinmoku_mei'); ?></th>
			<th><?php echo $this->Paginator->sort('lot'); ?></th>
			<th><?php echo $this->Paginator->sort('suu'); ?></th>
			<th><?php echo $this->Paginator->sort('tanni_mr_id'); ?></th>
			<th><?php echo $this->Paginator->sort('suu2'); ?></th>
			<th><?php echo $this->Paginator->sort('tanni_mr2_id'); ?></th>
			<th><?php echo $this->Paginator->sort('tanka_iti'); ?></th>
			<th><?php echo $this->Paginator->sort('tanka'); ?></th>
			<th><?php echo $this->Paginator->sort('utizei_flg'); ?></th>
			<th><?php echo $this->Paginator->sort('kingaku'); ?></th>
			<th><?php echo $this->Paginator->sort('shouhizei_ritu'); ?></th>
			<th><?php echo $this->Paginator->sort('nouki'); ?></th>
			<th><?php echo $this->Paginator->sort('bikou'); ?></th>
			<th><?php echo $this->Paginator->sort('basho_tana_souko_mr_id'); ?></th>
			<th><?php echo $this->Paginator->sort('nouhin_zumi_suu'); ?></th>
			<th><?php echo $this->Paginator->sort('nouhin_zumi_suu2'); ?></th>
			<th><?php echo $this->Paginator->sort('youi_zumi_suu'); ?></th>
			<th><?php echo $this->Paginator->sort('youi_zumi_suu2'); ?></th>
			<th><?php echo $this->Paginator->sort('kakunin_zumi_suu'); ?></th>
			<th><?php echo $this->Paginator->sort('kakunin_zumi_suu2'); ?></th>
			<th><?php echo $this->Paginator->sort('kanryou_flg'); ?></th>
			<th><?php echo $this->Paginator->sort('order_dt_id'); ?></th>
			<th><?php echo $this->Paginator->sort('juchuu_meisai_dt_id'); ?></th>
			<th><?php echo $this->Paginator->sort('kaisi_nitiji'); ?></th>
			<th><?php echo $this->Paginator->sort('id_moto'); ?></th>
			<th><?php echo $this->Paginator->sort('kinsi_flg'); ?></th>
			<th><?php echo $this->Paginator->sort('shuuryou_nitiji'); ?></th>
			<th><?php echo $this->Paginator->sort('sakusei_user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('kousin_user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('updated'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($juhacchuuMeisaiDts as $juhacchuuMeisaiDt): ?>
	<tr>
		<td><?php echo h($juhacchuuMeisaiDt['JuhacchuuMeisaiDt']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($juhacchuuMeisaiDt['JuhacchuuDt']['code'], array('controller' => 'juhacchuu_dts', 'action' => 'view', $juhacchuuMeisaiDt['JuhacchuuDt']['id'])); ?>
		</td>
		<td><?php echo h($juhacchuuMeisaiDt['JuhacchuuMeisaiDt']['gyou_bangou']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($juhacchuuMeisaiDt['HinmokuMr']['name'], array('controller' => 'hinmoku_mrs', 'action' => 'view', $juhacchuuMeisaiDt['HinmokuMr']['id'])); ?>
		</td>
		<td><?php echo h($juhacchuuMeisaiDt['JuhacchuuMeisaiDt']['hinmoku_mei']); ?>&nbsp;</td>
		<td><?php echo h($juhacchuuMeisaiDt['JuhacchuuMeisaiDt']['lot']); ?>&nbsp;</td>
		<td><?php echo h($juhacchuuMeisaiDt['JuhacchuuMeisaiDt']['suu']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($juhacchuuMeisaiDt['TanniMr']['name'], array('controller' => 'tanni_mrs', 'action' => 'view', $juhacchuuMeisaiDt['TanniMr']['id'])); ?>
		</td>
		<td><?php echo h($juhacchuuMeisaiDt['JuhacchuuMeisaiDt']['suu2']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($juhacchuuMeisaiDt['TanniMr2']['name'], array('controller' => 'tanni_mrs', 'action' => 'view', $juhacchuuMeisaiDt['TanniMr2']['id'])); ?>
		</td>
		<td><?php echo h($juhacchuuMeisaiDt['JuhacchuuMeisaiDt']['tanka_iti']); ?>&nbsp;</td>
		<td><?php echo h($juhacchuuMeisaiDt['JuhacchuuMeisaiDt']['tanka']); ?>&nbsp;</td>
		<td><?php echo h($juhacchuuMeisaiDt['JuhacchuuMeisaiDt']['utizei_flg']); ?>&nbsp;</td>
		<td><?php echo h($juhacchuuMeisaiDt['JuhacchuuMeisaiDt']['kingaku']); ?>&nbsp;</td>
		<td><?php echo h($juhacchuuMeisaiDt['JuhacchuuMeisaiDt']['shouhizei_ritu']); ?>&nbsp;</td>
		<td><?php echo h($juhacchuuMeisaiDt['JuhacchuuMeisaiDt']['nouki']); ?>&nbsp;</td>
		<td><?php echo h($juhacchuuMeisaiDt['JuhacchuuMeisaiDt']['bikou']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($juhacchuuMeisaiDt['BashoTanaSoukoMr']['name'], array('controller' => 'basho_tana_souko_mrs', 'action' => 'view', $juhacchuuMeisaiDt['BashoTanaSoukoMr']['id'])); ?>
		</td>
		<td><?php echo h($juhacchuuMeisaiDt['JuhacchuuMeisaiDt']['nouhin_zumi_suu']); ?>&nbsp;</td>
		<td><?php echo h($juhacchuuMeisaiDt['JuhacchuuMeisaiDt']['nouhin_zumi_suu2']); ?>&nbsp;</td>
		<td><?php echo h($juhacchuuMeisaiDt['JuhacchuuMeisaiDt']['youi_zumi_suu']); ?>&nbsp;</td>
		<td><?php echo h($juhacchuuMeisaiDt['JuhacchuuMeisaiDt']['youi_zumi_suu2']); ?>&nbsp;</td>
		<td><?php echo h($juhacchuuMeisaiDt['JuhacchuuMeisaiDt']['kakunin_zumi_suu']); ?>&nbsp;</td>
		<td><?php echo h($juhacchuuMeisaiDt['JuhacchuuMeisaiDt']['kakunin_zumi_suu2']); ?>&nbsp;</td>
		<td><?php echo h($juhacchuuMeisaiDt['JuhacchuuMeisaiDt']['kanryou_flg']); ?>&nbsp;</td>
		<td><?php echo h($juhacchuuMeisaiDt['JuhacchuuMeisaiDt']['order_dt_id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($juhacchuuMeisaiDt['JuchuuMeisaiDt']['hinmoku_mei'], array('controller' => 'juhacchuu_meisai_dts', 'action' => 'view', $juhacchuuMeisaiDt['JuchuuMeisaiDt']['id'])); ?>
		</td>
		<td><?php echo h($juhacchuuMeisaiDt['JuhacchuuMeisaiDt']['kaisi_nitiji']); ?>&nbsp;</td>
		<td><?php echo h($juhacchuuMeisaiDt['JuhacchuuMeisaiDt']['id_moto']); ?>&nbsp;</td>
		<td><?php echo h($juhacchuuMeisaiDt['JuhacchuuMeisaiDt']['kinsi_flg']); ?>&nbsp;</td>
		<td><?php echo h($juhacchuuMeisaiDt['JuhacchuuMeisaiDt']['shuuryou_nitiji']); ?>&nbsp;</td>
		<td><?php echo h($juhacchuuMeisaiDt['JuhacchuuMeisaiDt']['sakusei_user_id']); ?>&nbsp;</td>
		<td><?php echo h($juhacchuuMeisaiDt['JuhacchuuMeisaiDt']['created']); ?>&nbsp;</td>
		<td><?php echo h($juhacchuuMeisaiDt['JuhacchuuMeisaiDt']['kousin_user_id']); ?>&nbsp;</td>
		<td><?php echo h($juhacchuuMeisaiDt['JuhacchuuMeisaiDt']['updated']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $juhacchuuMeisaiDt['JuhacchuuMeisaiDt']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $juhacchuuMeisaiDt['JuhacchuuMeisaiDt']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $juhacchuuMeisaiDt['JuhacchuuMeisaiDt']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $juhacchuuMeisaiDt['JuhacchuuMeisaiDt']['id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
		'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Juhacchuu Meisai Dt'), array('action' => 'add')); ?></li>
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
