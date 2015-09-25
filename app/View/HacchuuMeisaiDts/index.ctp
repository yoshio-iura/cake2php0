<div class="hacchuuMeisaiDts index">
	<h2><?php echo __('Hacchuu Meisai Dts'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('hacchuu_dt_id'); ?></th>
			<th><?php echo $this->Paginator->sort('gyou_bangou'); ?></th>
			<th><?php echo $this->Paginator->sort('hinmoku_mr_id'); ?></th>
			<th><?php echo $this->Paginator->sort('hinmoku_mei'); ?></th>
			<th><?php echo $this->Paginator->sort('suu'); ?></th>
			<th><?php echo $this->Paginator->sort('tanni_mr_id'); ?></th>
			<th><?php echo $this->Paginator->sort('suu2'); ?></th>
			<th><?php echo $this->Paginator->sort('tanni_mr2_id'); ?></th>
			<th><?php echo $this->Paginator->sort('tanka_iti'); ?></th>
			<th><?php echo $this->Paginator->sort('tanka'); ?></th>
			<th><?php echo $this->Paginator->sort('siire_tanka'); ?></th>
			<th><?php echo $this->Paginator->sort('utizei_flg'); ?></th>
			<th><?php echo $this->Paginator->sort('kingaku'); ?></th>
			<th><?php echo $this->Paginator->sort('shouhizei_ritu'); ?></th>
			<th><?php echo $this->Paginator->sort('ukeire_yotei_bi'); ?></th>
			<th><?php echo $this->Paginator->sort('bikou'); ?></th>
			<th><?php echo $this->Paginator->sort('basho_tana_souko_mr_id'); ?></th>
			<th><?php echo $this->Paginator->sort('nyuuka_zumi_suu'); ?></th>
			<th><?php echo $this->Paginator->sort('nyuuka_zumi_suu2'); ?></th>
			<th><?php echo $this->Paginator->sort('kensa_zumi_suu'); ?></th>
			<th><?php echo $this->Paginator->sort('kensa_zumi_suu2'); ?></th>
			<th><?php echo $this->Paginator->sort('kenshuu_zumi_suu'); ?></th>
			<th><?php echo $this->Paginator->sort('kenshuu_zumi_suu2'); ?></th>
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
	<?php foreach ($hacchuuMeisaiDts as $hacchuuMeisaiDt): ?>
	<tr>
		<td><?php echo h($hacchuuMeisaiDt['HacchuuMeisaiDt']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($hacchuuMeisaiDt['HacchuuDt']['code'], array('controller' => 'hacchuu_dts', 'action' => 'view', $hacchuuMeisaiDt['HacchuuDt']['id'])); ?>
		</td>
		<td><?php echo h($hacchuuMeisaiDt['HacchuuMeisaiDt']['gyou_bangou']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($hacchuuMeisaiDt['HinmokuMr']['name'], array('controller' => 'hinmoku_mrs', 'action' => 'view', $hacchuuMeisaiDt['HinmokuMr']['id'])); ?>
		</td>
		<td><?php echo h($hacchuuMeisaiDt['HacchuuMeisaiDt']['hinmoku_mei']); ?>&nbsp;</td>
		<td><?php echo h($hacchuuMeisaiDt['HacchuuMeisaiDt']['suu']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($hacchuuMeisaiDt['TanniMr']['name'], array('controller' => 'tanni_mrs', 'action' => 'view', $hacchuuMeisaiDt['TanniMr']['id'])); ?>
		</td>
		<td><?php echo h($hacchuuMeisaiDt['HacchuuMeisaiDt']['suu2']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($hacchuuMeisaiDt['TanniMr2']['name'], array('controller' => 'tanni_mrs', 'action' => 'view', $hacchuuMeisaiDt['TanniMr2']['id'])); ?>
		</td>
		<td><?php echo h($hacchuuMeisaiDt['HacchuuMeisaiDt']['tanka_iti']); ?>&nbsp;</td>
		<td><?php echo h($hacchuuMeisaiDt['HacchuuMeisaiDt']['tanka']); ?>&nbsp;</td>
		<td><?php echo h($hacchuuMeisaiDt['HacchuuMeisaiDt']['siire_tanka']); ?>&nbsp;</td>
		<td><?php echo h($hacchuuMeisaiDt['HacchuuMeisaiDt']['utizei_flg']); ?>&nbsp;</td>
		<td><?php echo h($hacchuuMeisaiDt['HacchuuMeisaiDt']['kingaku']); ?>&nbsp;</td>
		<td><?php echo h($hacchuuMeisaiDt['HacchuuMeisaiDt']['shouhizei_ritu']); ?>&nbsp;</td>
		<td><?php echo h($hacchuuMeisaiDt['HacchuuMeisaiDt']['ukeire_yotei_bi']); ?>&nbsp;</td>
		<td><?php echo h($hacchuuMeisaiDt['HacchuuMeisaiDt']['bikou']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($hacchuuMeisaiDt['BashoTanaSoukoMr']['name'], array('controller' => 'basho_tana_souko_mrs', 'action' => 'view', $hacchuuMeisaiDt['BashoTanaSoukoMr']['id'])); ?>
		</td>
		<td><?php echo h($hacchuuMeisaiDt['HacchuuMeisaiDt']['nyuuka_zumi_suu']); ?>&nbsp;</td>
		<td><?php echo h($hacchuuMeisaiDt['HacchuuMeisaiDt']['nyuuka_zumi_suu2']); ?>&nbsp;</td>
		<td><?php echo h($hacchuuMeisaiDt['HacchuuMeisaiDt']['kensa_zumi_suu']); ?>&nbsp;</td>
		<td><?php echo h($hacchuuMeisaiDt['HacchuuMeisaiDt']['kensa_zumi_suu2']); ?>&nbsp;</td>
		<td><?php echo h($hacchuuMeisaiDt['HacchuuMeisaiDt']['kenshuu_zumi_suu']); ?>&nbsp;</td>
		<td><?php echo h($hacchuuMeisaiDt['HacchuuMeisaiDt']['kenshuu_zumi_suu2']); ?>&nbsp;</td>
		<td><?php echo h($hacchuuMeisaiDt['HacchuuMeisaiDt']['kanryou_flg']); ?>&nbsp;</td>
		<td><?php echo h($hacchuuMeisaiDt['HacchuuMeisaiDt']['order_dt_id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($hacchuuMeisaiDt['JuchuuMeisaiDt']['hinmoku_mei'], array('controller' => 'juchuu_meisai_dts', 'action' => 'view', $hacchuuMeisaiDt['JuchuuMeisaiDt']['id'])); ?>
		</td>
		<td><?php echo h($hacchuuMeisaiDt['HacchuuMeisaiDt']['kaisi_nitiji']); ?>&nbsp;</td>
		<td><?php echo h($hacchuuMeisaiDt['HacchuuMeisaiDt']['id_moto']); ?>&nbsp;</td>
		<td><?php echo h($hacchuuMeisaiDt['HacchuuMeisaiDt']['kinsi_flg']); ?>&nbsp;</td>
		<td><?php echo h($hacchuuMeisaiDt['HacchuuMeisaiDt']['shuuryou_nitiji']); ?>&nbsp;</td>
		<td><?php echo h($hacchuuMeisaiDt['HacchuuMeisaiDt']['sakusei_user_id']); ?>&nbsp;</td>
		<td><?php echo h($hacchuuMeisaiDt['HacchuuMeisaiDt']['created']); ?>&nbsp;</td>
		<td><?php echo h($hacchuuMeisaiDt['HacchuuMeisaiDt']['kousin_user_id']); ?>&nbsp;</td>
		<td><?php echo h($hacchuuMeisaiDt['HacchuuMeisaiDt']['updated']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $hacchuuMeisaiDt['HacchuuMeisaiDt']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $hacchuuMeisaiDt['HacchuuMeisaiDt']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $hacchuuMeisaiDt['HacchuuMeisaiDt']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $hacchuuMeisaiDt['HacchuuMeisaiDt']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Hacchuu Meisai Dt'), array('action' => 'add')); ?></li>
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
