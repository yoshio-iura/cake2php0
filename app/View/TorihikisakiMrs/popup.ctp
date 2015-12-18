<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&#215;</button>
	<h3 class="modal-title" id="modal-label">一覧表 取引先</h3>
</div>
<div class="modal-body">
<div class="row">
	<div class="col-md-4">
		<div class="well" style="margin-top:20px;">
			<?php echo $this->BootstrapForm->create('TorihikisakiMr', array('action'=>'popup', 'data-async', 'data-target'=>"#torihikisakiModalin")); ?>
			<fieldset>
				<legend>検索</legend>
				<?php echo $this->BootstrapForm->input('keyword', array('label' => 'CD/名称', 'class' => 'span12', 'placeholder' => 'コードか名称の一部を対象に検索', 'style'=>'width: 100%;')); ?>
				<?php echo $this->BootstrapForm->input('tel', array('label' => '電話№', 'class' => 'span12', 'placeholder' => '電話番号の一部を対象に検索', 'style'=>'width: 100%;')); ?>
				<?php echo $this->BootstrapForm->input('bunrui1', array('label' => '分類１', 'class' => 'span12', 'empty' => true)); ?>
			</fieldset>
			<?php echo $this->BootstrapForm->submit('検索',array('class'=>'btn-lg btn-primary')); ?>
		</div>
	</div>
	<div class="col-md-8">
		<table class="table table-condensed table-hover">
			<tr>
				<th></th>
				<th><?php echo $this->BootstrapPaginator->sort('コード');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('名称');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('相手担当者');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('電話番号');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('分類１');?></th>
			</tr>
		<?php foreach ($torihikisakiMrs as $torihikisakiMr): ?>
			<tr>
				<td class="actions">
					<button onclick="toMainWin(
						'<?php echo $torihikisakiMr['TorihikisakiMr']['id'];
						?>','<?php echo $torihikisakiMr['TorihikisakiMr']['code'];
						?>','<?php echo $torihikisakiMr['TorihikisakiMr']['name'];
						?>','<?php echo $torihikisakiMr['TorihikisakiMr']['ryakushou'];
						?>')">選択</button>
				</td>
				<td><?php echo h($torihikisakiMr['TorihikisakiMr']['code']); ?>&nbsp;</td>
				<td><?php echo h($torihikisakiMr['TorihikisakiMr']['name']); ?>&nbsp;</td>
				<td><?php echo h($torihikisakiMr['TorihikisakiMr']['tantousha_mei']); ?>&nbsp;</td>
				<td><?php echo h($torihikisakiMr['TorihikisakiMr']['tel']); ?>&nbsp;</td>
				<td><?php echo h($torihikisakiMr['TorihikisakiBunrui1Kbn']['name']); ?>&nbsp;</td>
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
	$('#TorihikisakiMrPopupForm').submit(function(e){
	//   $('#torihikisakiModal').removeData('bs.modal');
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
			$('#torihikisakiModalin').load(url);
			//printProperties(this.offsetParent);
		}
	});
});
</script>

<script language="JavaScript">
function toMainWin(id,code,name,ryakushou){
	returnValue={'torihikisaki_mr_id':id
		,'torihikisaki_mr_code':code
		,'torihikisaki_mr_name':name
		,'torihikisaki_mr_ryakushou':ryakushou
	}
	$('#torihikisakiModal').modal('hide');
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
