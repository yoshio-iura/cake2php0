<div class="row-fluid">
	<div class="span9">
		<h2><?php echo __('List %s', __('Juhacchuu Meisai Dts'));?></h2>

		<p>
			<?php echo $this->BootstrapPaginator->counter(array('format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')));?>
		</p>

		<table class="table">
			<tr>
				<th><?php echo $this->BootstrapPaginator->sort('id');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('juhacchuu_dt_id');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('gyou_bangou');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('hinmoku_mr_id');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('hinmoku_mei');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('lot');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('suu');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('tanni_mr_id');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('suu2');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('tanni_mr2_id');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('tanka_iti');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('tanka');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('utizei_flg');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('kingaku');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('shouhizei_ritu');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('nouki');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('bikou');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('basho_tana_souko_mr_id');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('oya_juhacchuu_meisai_dt_id');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('shoyou_tanni');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('nouhin_zumi_suu');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('nouhin_zumi_suu2');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('youi_zumi_suu');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('youi_zumi_suu2');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('kakunin_zumi_suu');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('kakunin_zumi_suu2');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('kanryou_flg');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('order_dt_id');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('juchuu_meisai_dt_id');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('kaisi_nitiji');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('id_moto');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('kinsi_flg');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('shuuryou_nitiji');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('sakusei_user_id');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('created');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('kousin_user_id');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('updated');?></th>
				<th class="actions"><?php echo __('Actions');?></th>
			</tr>
		<?php foreach ($juhacchuuMeisaiDts as $juhacchuuMeisaiDt): ?>
			<tr>
				<td><?php echo h($juhacchuuMeisaiDt['JuhacchuuMeisaiDt']['id']); ?>&nbsp;</td>
				<td>
					<?php echo $this->Html->link($juhacchuuMeisaiDt['JuhacchuuDt']['code'], array('controller' => 'juhacchuu_dts', 'action' => 'view', $juhacchuuMeisaiDt['JuhacchuuDt']['id'])); ?>
				</td>
				<td><?php echo h($juhacchuuMeisaiDt['JuhacchuuMeisaiDt']['gyou_bangou']); ?>&nbsp;</td>
				<td><?php echo h($juhacchuuMeisaiDt['JuhacchuuMeisaiDt']['hinmoku_mr_id']); ?>&nbsp;</td>
				<td><?php echo h($juhacchuuMeisaiDt['JuhacchuuMeisaiDt']['hinmoku_mei']); ?>&nbsp;</td>
				<td><?php echo h($juhacchuuMeisaiDt['JuhacchuuMeisaiDt']['lot']); ?>&nbsp;</td>
				<td><?php echo h($juhacchuuMeisaiDt['JuhacchuuMeisaiDt']['suu']); ?>&nbsp;</td>
				<td>
					<?php echo $this->Html->link($juhacchuuMeisaiDt['TanniMr']['kigou'], array('controller' => 'tanni_mrs', 'action' => 'view', $juhacchuuMeisaiDt['TanniMr']['id'])); ?>
				</td>
				<td><?php echo h($juhacchuuMeisaiDt['JuhacchuuMeisaiDt']['suu2']); ?>&nbsp;</td>
				<td>
					<?php echo $this->Html->link($juhacchuuMeisaiDt['TanniMr2']['kigou'], array('controller' => 'tanni_mrs', 'action' => 'view', $juhacchuuMeisaiDt['TanniMr2']['id'])); ?>
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
				<td><?php echo h($juhacchuuMeisaiDt['JuhacchuuMeisaiDt']['oya_juhacchuu_meisai_dt_id']); ?>&nbsp;</td>
				<td><?php echo h($juhacchuuMeisaiDt['JuhacchuuMeisaiDt']['shoyou_tanni']); ?>&nbsp;</td>
				<td><?php echo h($juhacchuuMeisaiDt['JuhacchuuMeisaiDt']['nouhin_zumi_suu']); ?>&nbsp;</td>
				<td><?php echo h($juhacchuuMeisaiDt['JuhacchuuMeisaiDt']['nouhin_zumi_suu2']); ?>&nbsp;</td>
				<td><?php echo h($juhacchuuMeisaiDt['JuhacchuuMeisaiDt']['youi_zumi_suu']); ?>&nbsp;</td>
				<td><?php echo h($juhacchuuMeisaiDt['JuhacchuuMeisaiDt']['youi_zumi_suu2']); ?>&nbsp;</td>
				<td><?php echo h($juhacchuuMeisaiDt['JuhacchuuMeisaiDt']['kakunin_zumi_suu']); ?>&nbsp;</td>
				<td><?php echo h($juhacchuuMeisaiDt['JuhacchuuMeisaiDt']['kakunin_zumi_suu2']); ?>&nbsp;</td>
				<td><?php echo h($juhacchuuMeisaiDt['JuhacchuuMeisaiDt']['kanryou_flg']); ?>&nbsp;</td>
				<td><?php echo h($juhacchuuMeisaiDt['JuhacchuuMeisaiDt']['order_dt_id']); ?>&nbsp;</td>
				<td><?php echo h($juhacchuuMeisaiDt['JuhacchuuMeisaiDt']['juchuu_meisai_dt_id']); ?>&nbsp;</td>
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
					<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $juhacchuuMeisaiDt['JuhacchuuMeisaiDt']['id']), null, __('Are you sure you want to delete # %s?', $juhacchuuMeisaiDt['JuhacchuuMeisaiDt']['id'])); ?>
				</td>
			</tr>
		<?php endforeach; ?>
		</table>

		<?php echo $this->BootstrapPaginator->pagination(); ?>
	</div>
	<div class="span3">
		<div class="well" style="padding: 8px 0; margin-top:8px;">
		<ul class="nav nav-list">
			<li class="nav-header"><?php echo __('Actions'); ?></li>
			<li><?php echo $this->Html->link(__('New %s', __('Juhacchuu Meisai Dt')), array('action' => 'add')); ?></li>
			<li><?php echo $this->Html->link(__('List %s', __('Juhacchuu Dts')), array('controller' => 'juhacchuu_dts', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New %s', __('Juhacchuu Dt')), array('controller' => 'juhacchuu_dts', 'action' => 'add')); ?> </li>
			<li><?php echo $this->Html->link(__('List %s', __('Tanni Mrs')), array('controller' => 'tanni_mrs', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New %s', __('Tanni Mr')), array('controller' => 'tanni_mrs', 'action' => 'add')); ?> </li>
			<li><?php echo $this->Html->link(__('List %s', __('Basho Tana Souko Mrs')), array('controller' => 'basho_tana_souko_mrs', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New %s', __('Basho Tana Souko Mr')), array('controller' => 'basho_tana_souko_mrs', 'action' => 'add')); ?> </li>
			<li><?php echo $this->Html->link(__('List %s', __('Zaiko Dts')), array('controller' => 'zaiko_dts', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New %s', __('Zaiko Dt')), array('controller' => 'zaiko_dts', 'action' => 'add')); ?> </li>
		</ul>
		</div>
	</div>
</div>