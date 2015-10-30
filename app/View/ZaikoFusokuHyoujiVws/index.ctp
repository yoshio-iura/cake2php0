<div class="row-fluid">
	<div class="col-md-9">
		<h2><?php echo __('一覧表 %s', __('在庫余裕'));?></h2>

		<p>
			<?php echo $this->BootstrapPaginator->counter(array('format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')));?>
		</p>

		<table class="table table-condensed">
			<tr>
				<th><?php echo $this->BootstrapPaginator->sort('hinmoku_mr_id','ID');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('code');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('name');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('hinsitu_kbn_id');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('shoyuusha_kbn_id');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('anzen_zaiko_suu');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('zaiko');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('nouzan');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('kafusoku');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('chuuzan');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('yoyuu_zaiko');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('tanni_mr_id');?></th>
				<th class="actions"><?php echo __('Actions');?></th>
			</tr>
		<?php foreach ($zaikoFusokuHyoujiVws as $zaikoFusokuHyoujiVw): ?>
			<tr>
				<td><?php echo h($zaikoFusokuHyoujiVw['ZaikoFusokuHyoujiVw']['hinmoku_mr_id']); ?>&nbsp;</td>
				<td><?php echo h($zaikoFusokuHyoujiVw['HinmokuMr']['code']); ?>&nbsp;</td>
				<td><?php echo h($zaikoFusokuHyoujiVw['HinmokuMr']['name']); ?>&nbsp;</td>
				<td><?php echo h($zaikoFusokuHyoujiVw['HinsituKbn']['name']); ?>&nbsp;</td>
				<td><?php echo h($zaikoFusokuHyoujiVw['ShoyuushaKbn']['name']); ?>&nbsp;</td>
				<td align='right'><?php echo h($zaikoFusokuHyoujiVw['ZaikoFusokuHyoujiVw']['anzen_zaiko_suu']); ?>&nbsp;</td>
				<td align='right'><?php echo h($zaikoFusokuHyoujiVw['ZaikoFusokuHyoujiVw']['zaiko_sum']); ?>&nbsp;</td>
				<td align='right'><?php echo h($zaikoFusokuHyoujiVw['ZaikoFusokuHyoujiVw']['nouzan_sum']); ?>&nbsp;</td>
				<td align='right'><?php echo h($zaikoFusokuHyoujiVw['ZaikoFusokuHyoujiVw']['kafusoku']); ?>&nbsp;</td>
				<td align='right'><?php echo h($zaikoFusokuHyoujiVw['ZaikoFusokuHyoujiVw']['chuuzan_sum']); ?>&nbsp;</td>
				<td align='right'><?php echo h($zaikoFusokuHyoujiVw['ZaikoFusokuHyoujiVw']['yoyuu_zaiko']); ?>&nbsp;</td>
				<td align='center'><?php echo h($zaikoFusokuHyoujiVw['TanniMr']['kigou']); ?>&nbsp;</td>
				<td class="actions">
					<?php echo $this->Html->link(__('View'), array('action' => 'view', $zaikoFusokuHyoujiVw['ZaikoFusokuHyoujiVw']['hinmoku_mr_id'])); ?>
				</td>
			</tr>
		<?php endforeach; ?>
		</table>

		<?php echo $this->BootstrapPaginator->pagination(); ?>
	</div>
	<div class="col-md-3">
		<div class="well" style="margin-top:20px;">
			<?php echo $this->BootstrapForm->create('ZaikoFusokuHyoujiVw', array('action'=>'index')); ?>
			<fieldset>
				<legend>検索</legend>
				<?php echo $this->BootstrapForm->input('hinmoku_kbn_id', array('label' => '品目区分', 'class' => 'span12', 'empty' => true)); ?>
				<?php echo $this->BootstrapForm->input('keyword', array('label' => 'コード品名', 'class' => 'span12', 'placeholder' => 'コード品名の一部を対象に検索', 'style'=>'width: 100%;')); ?>
				<div class="control-group">
					<?php echo $this->BootstrapForm->label('min', '在庫余裕min-MAX', array('class' => 'control-label')); ?>
					<div class="controls">
						<?php echo $this->BootstrapForm->text('min', array('class' => 'span6','id'=>'Min')); ?>
						<?php echo $this->BootstrapForm->text('max', array('class' => 'span6','id'=>'Max')); ?>
					</div>
				</div>
			</fieldset>
			<?php echo $this->BootstrapForm->submit('検索',array('class'=>'btn-lg btn-primary')); ?>
		</div>
 
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