<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&#215;</button>
	<h3 class="modal-title" id="modal-label">一覧表 在庫余裕</h3>
</div>
<div class="modal-body">
<div class="row">
	<div class="col-md-4">
		<div class="well" style="margin-top:20px;">
			<?php echo $this->BootstrapForm->create('ZaikoFusokuHyoujiVw', array('action'=>'popup', 'data-async', 'data-target'=>"#hinmokuModalin")); ?>
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
	</div>
	<div class="col-md-8">
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
					<button onclick="toMainWin(
						'<?php echo $zaikoFusokuHyoujiVw['ZaikoFusokuHyoujiVw']['hinmoku_mr_id'];
						?>','<?php echo $zaikoFusokuHyoujiVw['HinmokuMr']['code'];
						?>','<?php echo $zaikoFusokuHyoujiVw['HinmokuMr']['name'];
						?>','<?php echo $zaikoFusokuHyoujiVw['HinmokuMr']['lot'];
						?>','<?php echo $zaikoFusokuHyoujiVw['HinmokuMr']['tanni_mr_id'];
						?>','<?php echo $zaikoFusokuHyoujiVw['HinmokuMr']['tanni_mr2_id'];
						?>','<?php echo $zaikoFusokuHyoujiVw['HinmokuMr']['tanni_iti'];
						?>','<?php echo $zaikoFusokuHyoujiVw['HinmokuMr']['kazei_kbn_id'];
						?>','<?php echo $zaikoFusokuHyoujiVw['HinmokuMr']['tanka1'];
						?>','<?php echo $zaikoFusokuHyoujiVw['HinmokuMr']['genka1'];
						?>')">選択</button>
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
	</div>
</div>
</div><!-- END modal-body -->
<div class="modal-footer">
	<div style="float:left;">
		<button type="button" class="btn btn-default" data-dismiss="modal">閉じる</button>
	</div>
	<?php
		echo '<div class="pagination">';
			echo $this->Paginator->first('最初', $options = array());
			echo $this->Paginator->prev('前へ', array(), null, array('class' => 'prev disabled'));
			echo $this->Paginator->numbers(array('separator' => ''));
			echo $this->Paginator->next('次へ', array(), null, array('class' => 'next disabled'));
			echo $this->Paginator->last('最後', $options = array());
		echo '</div>';
	?>
</div>
<script language="JavaScript">
$(function(){
//参考： https://gist.github.com/havvg/3226804
	$('#ZaikoFusokuHyoujiVwPopupForm').submit(function(e){
	//   $('#hinmokuModal').removeData('bs.modal');
		e.preventDefault();
		var $form = $(this);
		var $target = $($form.attr('data-target'));
		$.ajax({
			url: $form.attr('action'),
			type: $form.attr('method'),
			data: $form.serialize(),
			success: function(data){
				$target.html(data);
				//alert('successfully submitted');
			}
		});
	});
});
$(function(){
//参考： http://designup.jp/jquery-ajax-241/
	$('a').click(function(e){
		var aryHref = this.href.split('/');
		if(aryHref[5]=='popup'){
			e.preventDefault();
			var url = this.href;
			$('#hinmokuModalin').load(url);
			//printProperties(this.offsetParent);
		}
	});
});
</script>

<script language="JavaScript">
function toMainWin(id,code,name,lot,tanni_mr_id,tanni_mr2_id,tanni_iti,kazei_kbn_id,tanka1,genka1){
	returnValue={'hinmoku_mr_id':id
		,'hinmoku_mr_code':code
		,'hinmoku_mr_name':name
		,'hinmoku_mr_lot':lot
		,'hinmoku_mr_tanni_mr_id':tanni_mr_id
		,'hinmoku_mr_tanni_mr2_id':tanni_mr2_id
		,'hinmoku_mr_tanni_iti':tanni_iti
		,'hinmoku_mr_kazei_kbn_id':kazei_kbn_id
		,'hinmoku_mr_tanka1':tanka1
		,'hinmoku_mr_genka1':genka1
	}
	$('#hinmokuModal').modal('hide');
}
</script>

<script language="JavaScript">
function printProperties(obj) {
    var properties = '';
    for (var prop in obj){
        properties += prop + "=" + obj[prop] + "\n";
    }
    alert(properties);
}
</script>
