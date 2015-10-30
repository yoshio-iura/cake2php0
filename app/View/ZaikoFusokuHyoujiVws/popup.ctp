<div class="row">
	<div class="col-md-4">
		<div class="well" style="margin-top:20px;">
			<?php echo $this->BootstrapForm->create('ZaikoFusokuHyoujiVw', array('action'=>'popup')); ?>
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
		<a href="#" rel='close'>閉じる</a>
	</div>
	<div class="col-md-8">
		<h3><?php echo __('一覧表 %s', __('在庫余裕'));?></h3>

		<table class="table table-condensed table-hover">
			<tr>
				<th></th>
				<th><?php echo $this->BootstrapPaginator->sort('yoyuu_zaiko');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('tanni_mr_id');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('code');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('name');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('hinsitu_kbn_id');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('shoyuusha_kbn_id');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('anzen_zaiko_suu');?></th>
			</tr>
		<?php foreach ($zaikoFusokuHyoujiVws as $zaikoFusokuHyoujiVw): ?>
			<tr>
				<td class="actions">
					<a rel="close" href="#"
					onclick="hinmoku_mr_id=<?php echo $zaikoFusokuHyoujiVw['ZaikoFusokuHyoujiVw']['hinmoku_mr_id'];
					?>;hinmoku_mr_code='<?php echo $zaikoFusokuHyoujiVw['HinmokuMr']['code'];
					?>';hinmoku_mr_name='<?php echo $zaikoFusokuHyoujiVw['HinmokuMr']['name'];
					?>';hinmoku_mr_lot='<?php echo $zaikoFusokuHyoujiVw['HinmokuMr']['lot'];
					?>';hinmoku_mr_tanni_mr_id='<?php echo $zaikoFusokuHyoujiVw['HinmokuMr']['tanni_mr_id'];
					?>';hinmoku_mr_tanni_mr2_id='<?php echo $zaikoFusokuHyoujiVw['HinmokuMr']['tanni_mr2_id'];
					?>';hinmoku_mr_tanni_iti='<?php echo $zaikoFusokuHyoujiVw['HinmokuMr']['tanni_iti'];
					?>';hinmoku_mr_kazei_kbn_id='<?php echo $zaikoFusokuHyoujiVw['HinmokuMr']['kazei_kbn_id'];
					?>';hinmoku_mr_tanka1='<?php echo $zaikoFusokuHyoujiVw['HinmokuMr']['tanka1'];
					?>';hinmoku_mr_genka1='<?php echo $zaikoFusokuHyoujiVw['HinmokuMr']['genka1'];
					?>';">選択</a>
				</td>
				<td align='right'><?php echo h($zaikoFusokuHyoujiVw['ZaikoFusokuHyoujiVw']['yoyuu_zaiko']); ?>&nbsp;</td>
				<td align='center'><?php echo h($zaikoFusokuHyoujiVw['TanniMr']['kigou']); ?>&nbsp;</td>
				<td><?php echo h($zaikoFusokuHyoujiVw['HinmokuMr']['code']); ?>&nbsp;</td>
				<td><?php echo h($zaikoFusokuHyoujiVw['HinmokuMr']['name']); ?>&nbsp;</td>
				<td><?php echo h($zaikoFusokuHyoujiVw['HinsituKbn']['name']); ?>&nbsp;</td>
				<td><?php echo h($zaikoFusokuHyoujiVw['ShoyuushaKbn']['name']); ?>&nbsp;</td>
				<td align='right'><?php echo h($zaikoFusokuHyoujiVw['ZaikoFusokuHyoujiVw']['anzen_zaiko_suu']); ?>&nbsp;</td>
			</tr>
		<?php endforeach; ?>
		</table>

		<p>
			<?php echo $this->BootstrapPaginator->counter(array('format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')));?>
		</p>

		<?php echo $this->BootstrapPaginator->pagination(); ?>
	</div>
</div>