<div class="row-fluid">
	<div class="span9">
		<h2><?php echo __('List %s', __('Zaiko Fusoku Hyouji Vws'));?></h2>

		<p>
			<?php echo $this->BootstrapPaginator->counter(array('format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')));?>
		</p>

		<table class="table">
			<tr>
				<th><?php echo $this->BootstrapPaginator->sort('hinmoku_mr_id','ID');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('code');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('name');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('tanni_mr_id');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('hinsitu_kbn_id');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('anzen_zaiko_suu');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('zaiko');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('nouzan');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('kafusoku');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('chuuzan');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('you_hachuu');?></th>
				<th class="actions"><?php echo __('Actions');?></th>
			</tr>
		<?php foreach ($zaikoFusokuHyoujiVws as $zaikoFusokuHyoujiVw): ?>
			<tr>
				<td><?php echo h($zaikoFusokuHyoujiVw['ZaikoFusokuHyoujiVw']['hinmoku_mr_id']); ?>&nbsp;</td>
				<td><?php echo h($zaikoFusokuHyoujiVw['ZaikoFusokuHyoujiVw']['code']); ?>&nbsp;</td>
				<td><?php echo h($zaikoFusokuHyoujiVw['ZaikoFusokuHyoujiVw']['name']); ?>&nbsp;</td>
				<td><?php echo h($zaikoFusokuHyoujiVw['TanniMr']['kigou']); ?>&nbsp;</td>
				<td><?php echo h($zaikoFusokuHyoujiVw['HinsituKbn']['name']); ?>&nbsp;</td>
				<td><?php echo h($zaikoFusokuHyoujiVw['ZaikoFusokuHyoujiVw']['anzen_zaiko_suu']); ?>&nbsp;</td>
				<td><?php echo h($zaikoFusokuHyoujiVw['ZaikoFusokuHyoujiVw']['zaiko']); ?>&nbsp;</td>
				<td><?php echo h($zaikoFusokuHyoujiVw['ZaikoFusokuHyoujiVw']['nouzan']); ?>&nbsp;</td>
				<td><?php echo h($zaikoFusokuHyoujiVw['ZaikoFusokuHyoujiVw']['kafusoku']); ?>&nbsp;</td>
				<td><?php echo h($zaikoFusokuHyoujiVw['ZaikoFusokuHyoujiVw']['chuuzan']); ?>&nbsp;</td>
				<td><?php echo h($zaikoFusokuHyoujiVw['ZaikoFusokuHyoujiVw']['you_hachuu']); ?>&nbsp;</td>
				<td class="actions">
					<?php echo $this->Html->link(__('View'), array('action' => 'view', $zaikoFusokuHyoujiVw['ZaikoFusokuHyoujiVw']['hinmoku_mr_id'])); ?>
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
			<li><?php echo $this->Html->link(__d('cake', 'List %s', __('Juhacchuu Dts')), array('action' => 'index')); ?></li>
			<li><?php echo $this->Html->link(__d('cake', 'List %s', __('Torihikisaki Mrs')), array('controller' => 'torihikisaki_mrs', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__d('cake', 'List %s', __('Basho Tana Souko Mrs')), array('controller' => 'basho_tana_souko_mrs', 'action' => 'index')); ?> </li>
		</ul>
		</div>
	</div>
</div>