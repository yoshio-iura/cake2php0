<div class="row">
	<div class="col-md-9">
		<?php echo $this->BootstrapForm->create('JuhacchuuDt', array('class' => 'form-horizontal'));?>
	<fieldset>
		<legend><?php echo __d('cake', ucfirst($this->action).' %s', '受発注伝票');
			if ($this->action == 'edit') {echo ' <u>伝票No:'.$this->request->data('JuhacchuuDt.id').'</u>';} ?></legend>
	<?php
		$i1max=0;
		if ($this->action == 'edit') {
			$i1max=count($this->request->data(['JuhacchuuMeisaiDt']));
			echo $this->BootstrapForm->input('id',array('label'=>false,'readonly'=>'readonly'));
		}
		echo '<table class="tbl1">'.$this->Html->tableHeaders(array('受注フラグ','日付',
				$this->Html->link('取引先コード', 'javascript:void(0)', array('onclick'=>'torihikisaki_popup("")','title'=>'ここをクリックすると取引先検索画面になります。')),'名称'))
			.$this->Html->tableCells(array(
			$this->BootstrapForm->input('JuhacchuuDt.juchuu_flg',array('label'=>false)),
			$this->BootstrapForm->input('JuhacchuuDt.bi',array('label'=>false,'type'=>'text','size'=>"10",'default'=>date('Y-m-d'))),
			$this->BootstrapForm->input('unused.torihikisaki_code',array('label'=>false,'type'=>'text','size'=>"5",'value'=>($this->action == 'edit')?$this->request->data('TorihikisakiMr.code'):'','onchange'=>'change_torihikisaki(this)','required'=>'true')),
			$this->BootstrapForm->input('unused.torihikisaki_name',array('label'=>false,'readonly'=>'readonly','size'=>"40",'value'=>($this->action == 'edit')?$this->request->data('TorihikisakiMr.name'):'')),
		)).'</table>';
		echo $this->BootstrapForm->hidden('JuhacchuuDt.torihikisaki_mr_id',array('label'=>false,'type'=>'text','size'=>"10"));
		echo $this->BootstrapForm->hidden('JuhacchuuDt.shukka_torihikisaki_mr_id',array('label'=>false,'type'=>'text','size'=>"10"));
		echo $this->BootstrapForm->hidden('JuhacchuuDt.kituke_torihikisaki_mr_id',array('label'=>false,'type'=>'text','size'=>"10"));
		echo '<table class="tbl1">'.$this->Html->tableHeaders(array(
							$this->Html->link('出荷先コード', 'javascript:void(0)', array('onclick'=>'torihikisaki_popup("Shukka")','title'=>'ここをクリックすると出荷先検索画面になります。')),
							'出荷先名称',
							$this->Html->link('気付先コード', 'javascript:void(0)', array('onclick'=>'torihikisaki_popup("Kituke")','title'=>'ここをクリックすると気付先検索画面になります。')),
							'気付先名称'))
			.$this->Html->tableCells(array(
			$this->BootstrapForm->input('unused.shukka_torihikisaki_code',array('label'=>false,'type'=>'text','size'=>"5",'value'=>($this->action == 'edit')?$this->request->data('ShukkaTorihikisakiMr.code'):'','onchange'=>'change_torihikisaki(this)')),
			$this->BootstrapForm->input('unused.shukka_torihikisaki_name',array('label'=>false,'readonly'=>'readonly','size'=>"40",'value'=>($this->action == 'edit')?$this->request->data('ShukkaTorihikisakiMr.name'):'')),
			$this->BootstrapForm->input('unused.kituke_torihikisaki_code',array('label'=>false,'type'=>'text','size'=>"5",'value'=>($this->action == 'edit')?$this->request->data('KitukeTorihikisakiMr.code'):'','onchange'=>'change_torihikisaki(this)')),
			$this->BootstrapForm->input('unused.kituke_torihikisaki_name',array('label'=>false,'readonly'=>'readonly','size'=>"40",'value'=>($this->action == 'edit')?$this->request->data('KitukeTorihikisakiMr.name'):'')),
		)).'</table>';
		echo '<table class="tbl1">'.$this->Html->tableHeaders(array('担当者','部門ID','納期','&nbsp;&nbsp;&nbsp;','即納フラグ'))
			.$this->Html->tableCells(array(
			$this->BootstrapForm->input('JuhacchuuDt.user_id',array('label'=>false,'default' => $loginUser['id'])),
			$this->BootstrapForm->input('JuhacchuuDt.bumon_mr_id',array('label'=>false,'default' => $loginUser['bumon_mr_id'])),
			$this->BootstrapForm->input('JuhacchuuDt.nouki',array('label'=>false,'type'=>'text','size'=>"10",'default'=>date('Y-m-d'))),
			'',$this->BootstrapForm->input('JuhacchuuDt.zaiko_douji_flg',array('label'=>false)),
		)).'</table>';
		echo '<table class="tbl1">'.$this->Html->tableHeaders(array('備考'))
			.$this->Html->tableCells(array(
			$this->BootstrapForm->input('JuhacchuuDt.bikou',array('label'=>false,'style'=>'width:600px')),
		)).'</table>';
		echo '<table class="tbl1">'.$this->Html->tableHeaders(array('元受注番号','納入場所一括','&nbsp;&nbsp;&nbsp;','仕切のみ','税計算区分','金額合計','消費税金額'))
			.$this->Html->tableCells(array(
			$this->BootstrapForm->input('JuhacchuuDt.juchuu_dt_id',array('label'=>false)),
			$this->BootstrapForm->input('JuhacchuuDt.basho_tana_souko_mr_id',array('label'=>false,'empty' => true, 'onchange'=>'change_basho(this)')),
			'',$this->BootstrapForm->input('JuhacchuuDt.sikiri_flg',array('label'=>false)),
			$this->BootstrapForm->input('JuhacchuuDt.zeikeisan_kbn_id',array('label'=>false)),
			//h($this->number->format($this->request->data('JuhacchuuDt.kingaku_goukei'))),
			$this->BootstrapForm->input('JuhacchuuDt.kingaku_goukei',array('label'=>false,'type'=>'text', 'style'=>'text-align:right','readonly'=>'readonly')),
			$this->BootstrapForm->input('JuhacchuuDt.shouhizei_kingaku',array('label'=>false,'type'=>'text', 'style'=>'text-align:right','readonly'=>'readonly')),
		)).'</table>';
		echo $this->BootstrapForm->hidden('JuhacchuuDt.sakusei_user_id', array('value' => $this->action == 'add' ? $loginUser['id'] : ''));
		echo $this->BootstrapForm->hidden('JuhacchuuDt.kousin_user_id', array('value' => $this->action == 'edit' ? $loginUser['id'] : ''));
	?>

	<script type='text/javascript'>
		var lastRows=new Array();
	</script>

	<div class='col-md-12'><h3>受発注明細</h3></div>
	<?php echo $this->Html->link('品目CD', '/zaiko_fusoku_hyouji_vws/popup', array('rel' => 'prettyPopin', 'id'=>'hinmoku_popup', 'style'=>'display:none;')); ?>
	<table id="mytable" class="tbl1"><tbody>
	<?php for($i1=-1;$i1<$i1max;$i1++): ?>
	<?php if($i1<0){
	  $tbl1="unused";
	  $unu1="unused";
	  echo '<tr id="juhacchuu_meisai_dt0" style="display:none;">';
	}else{
	  $tbl1="JuhacchuuMeisaiDt.".$i1;
	  $unu1="unused.".$i1;
	  echo '<tr id="juhacchuu_meisai_dt_'.$i1.'">';
	}?>
		<td width="50" valign="top"><table><tr><th>行№</th></tr><tr>
		<td><?php echo $this->BootstrapForm->input($tbl1.'.gyou_bangou'   ,array('label'=>false,'type'=>'number', 'style'=>'width:40px;text-align:center')); ?></td>
		</tr><tr><th><?php echo $this->BootstrapForm->button('削除',array('id'=>'removeJuhacchuuMeisaiDt0','onclick'=>'removeJuhacchuuMeisaiDt('.$i1.')','type'=>'button','title'=>'ここをクリックするとこの行の明細を削除します。')); ?></th>
		</tr></table>
		</td><td>
		<?php echo $this->BootstrapForm->hidden($tbl1.'.id'); ?>
		<?php echo $this->BootstrapForm->hidden($tbl1.'.hinmoku_mr_id' ,array('label'=>false,'type'=>'text')); ?>
		<table><tr>
		<th><?php echo $this->BootstrapForm->button('品目CD',array('id'=>'hinmoku_popup0','onclick'=>'hinmoku_popup('.$i1.')','type'=>'button','title'=>'ここをクリックすると品目検索画面になります。')); ?>
		</th>		   <td><?php echo $this->BootstrapForm->input($unu1.'.hinmoku_code'  ,array('label'=>false,'type'=>'text','size'=>"10",'value'=>($i1<0)?'':$this->request->data($tbl1.'.HinmokuMr.code'),'onchange'=>'change_hinmoku(this)')); ?></td>
		<th>品目名</th>    <td><?php echo $this->BootstrapForm->input($tbl1.'.hinmoku_mei'   ,array('label'=>false,'type'=>'text','size'=>"40")); ?></td>
		<th>ロット</th>    <td><?php echo $this->BootstrapForm->input($tbl1.'.lot'           ,array('label'=>false,'type'=>'text')); ?></td>
		</tr></table><table><tr>
		<th>数量</th>      <td><?php echo $this->BootstrapForm->input($tbl1.'.suu'           ,array('label'=>false,'type'=>'text', 'style'=>'text-align:right', 'onchange'=>'change_kingaku(this)')); ?></td>
		<th>単位</th>      <td><?php echo $this->BootstrapForm->input($tbl1.'.tanni_mr_id'   ,array('label'=>false,'type'=>'select','empty' => true)); ?></td>
		<th>数量2</th>     <td><?php echo $this->BootstrapForm->input($tbl1.'.suu2'          ,array('label'=>false,'type'=>'text', 'style'=>'text-align:right', 'onchange'=>'change_kingaku(this)')); ?></td>
		<th>単位2</th>     <td><?php echo $this->BootstrapForm->input($tbl1.'.tanni_mr2_id'  ,array('label'=>false,'type'=>'select','empty' => true)); ?></td>
		<th>単位位置</th>  <td><?php echo $this->BootstrapForm->input($tbl1.'.tanka_iti'     ,array('label'=>false,'type'=>'number', 'size'=>'1', 'style'=>'width:40px;text-align:center', 'onchange'=>'change_kingaku(this)','min'=>1,'max'=>2)); ?></td>
		</tr></table><table><tr>
		<th>納品済み数量</th> <td><?php echo $this->BootstrapForm->input($unu1.'.nouhin_zumi_suu' ,array('label'=>false,'type'=>'text', 'style'=>'text-align:right', 'readonly'=>'readonly', 'value'=>($i1<0)?'0':$this->request->data($tbl1.'.nouhin_zumi_suu'))); ?></td>
		<th>納品済み数量2</th><td><?php echo $this->BootstrapForm->input($unu1.'.nouhin_zumi_suu2',array('label'=>false,'type'=>'text', 'style'=>'text-align:right', 'readonly'=>'readonly', 'value'=>($i1<0)?'0':$this->request->data($tbl1.'.nouhin_zumi_suu2'))); ?></td>
		</tr></table><table><tr>
		<th>単価</th>      <td><?php echo $this->BootstrapForm->input($tbl1.'.tanka'         ,array('label'=>false,'type'=>'text', 'style'=>'text-align:right', 'onchange'=>'change_kingaku(this)')); ?></td>
		<th>課税区分</th>  <td><?php echo $this->BootstrapForm->input($tbl1.'.kazei_kbn_id'  ,array('label'=>false,'type'=>'select', 'onchange'=>'change_kingaku(this)')); ?></td>
		<th>金額</th>      <td><?php echo $this->BootstrapForm->input($tbl1.'.kingaku'       ,array('label'=>false,'type'=>'text', 'style'=>'text-align:right','readonly'=>'readonly')); ?></td>
		</tr></table><table><tr>
		<th>納期</th>      <td><?php echo $this->BootstrapForm->input($tbl1.'.nouki'         ,array('label'=>false,'type'=>'text', 'size'=>'10','default'=>date('Y-m-d'))); ?></td>
		<th>備考</th>      <td><?php echo $this->BootstrapForm->input($tbl1.'.bikou'         ,array('label'=>false,'type'=>'text', 'size'=>'40')); ?></td>
		<th>納入場所</th>  <td><?php echo $this->BootstrapForm->input($tbl1.'.basho_tana_souko_mr_id',array('label'=>false,'type'=>'select')); ?></td>
		</tr></table><table id=mytable<?php echo ($i1<0)?'0':'_'.$i1; ?>><tbody>

		<?php $i2max=($i1<0)?0:count($this->request->data['JuhacchuuMeisaiDt'][$i1]['SikyuuMeisaiDt']); ?>
		<script type="text/javascript"><?php echo "lastRows[".$i1."]=".$i2max; ?> - 1;</script>
		<?php for($i2=-1;$i2<$i2max;$i2++): ?>
		<?php if($i2<0){
		  $tbl2="unused2";
		  $unu2="unused2";
		  echo '<tr id="meisai_sikyuu0" style="display:none;">';
		}else{
		  $tbl2="JuhacchuuMeisaiDt.".$i1.".SikyuuMeisaiDt.".$i2;
		  $unu2="meisai.".$i1.".sikyuu.".$i2;
		  echo '<tr id="meisai_'.$i1.'_sikyuu_'.$i2.'">';
		}?>
			<th>支給行№
			<?php echo $this->BootstrapForm->hidden($tbl2.'.id'); ?>
			<?php echo $this->BootstrapForm->hidden($tbl2.'.juhacchuu_dt_id'); ?>
			<?php echo $this->BootstrapForm->hidden($tbl2.'.hinmoku_mr_id'); ?>
			<br><?php echo $this->BootstrapForm->input($tbl2.'.gyou_bangou'   ,array('label'=>false,'type'=>'number', 'style'=>'width:40px;text-align:center')); ?>
			<br><?php echo $this->BootstrapForm->button('削除',array('type'=>'button','id'=>$unu2.'btnDelSikyuu','onclick'=>'delSikyuuMeisaiDt(this)','title'=>'ここをクリックするとこの行の支給明細を削除します。')); ?>
			</th>
			<td><table><tr>
			<th><?php echo $this->BootstrapForm->button('支給品CD',array('id'=>'hinmoku_popup00','onclick'=>'hinmoku_popup('.$i1.','.$i2.')','type'=>'button','title'=>'ここをクリックすると品目検索画面になります。')); ?>
			</th>		   <td><?php echo $this->BootstrapForm->input($unu2.'.hinmoku_code'  ,array('label'=>false,'type'=>'text','size'=>"10",'value'=>($i2<0)?'':$this->request->data($tbl2.'.HinmokuMr.code'),'onchange'=>'change_hinmoku(this)')); ?></td>
			<th>品目名</th>    <td><?php echo $this->BootstrapForm->input($tbl2.'.hinmoku_mei'   ,array('label'=>false,'type'=>'text','size'=>"33")); ?></td>
			<th>ロット</th>    <td><?php echo $this->BootstrapForm->input($tbl2.'.lot'           ,array('label'=>false,'type'=>'text','size'=>"15")); ?></td>
			</tr></table><table><tr>
			<th>所要単位</th>  <td><?php echo $this->BootstrapForm->input($tbl2.'.shoyou_tanni'   ,array('label'=>false,'type'=>'number', 'step'=>'0.01', 'style'=>'width:80px;text-align:right', 'onchange'=>'change_shoyou(this)')); ?></td>
			<th>所要数量</th>  <td><?php echo $this->BootstrapForm->input($tbl2.'.suu'           ,array('label'=>false,'type'=>'text', 'style'=>'width:120px;text-align:right', 'onchange'=>'change_shoyou(this)')); ?></td>
			<th>単位</th>      <td><?php echo $this->BootstrapForm->input($tbl2.'.tanni_mr_id'   ,array('label'=>false,'type'=>'select','empty' => true)); ?></td>
			<th>所要数量2</th> <td><?php echo $this->BootstrapForm->input($tbl2.'.suu2'          ,array('label'=>false,'type'=>'text', 'style'=>'width:120px;text-align:right', 'onchange'=>'change_shoyou(this)')); ?></td>
			<th>単位2</th>     <td><?php echo $this->BootstrapForm->input($tbl2.'.tanni_mr2_id'  ,array('label'=>false,'type'=>'select','empty' => true)); ?></td>
			</tr></table><table><tr>
			<th>単位位置</th>  <td><?php echo $this->BootstrapForm->input($tbl2.'.tanka_iti'     ,array('label'=>false,'type'=>'number', 'size'=>'1', 'style'=>'width:40px;text-align:center')); ?></td>
			<th>備考</th>      <td><?php echo $this->BootstrapForm->input($tbl2.'.bikou'         ,array('label'=>false,'type'=>'text', 'size'=>'40')); ?></td>
			<th>納入場所</th>  <td><?php echo $this->BootstrapForm->input($tbl2.'.basho_tana_souko_mr_id',array('label'=>false,'type'=>'select')); ?></td>
			</tr></table></td>
			</tr>
		<?php endfor; ?>
			<tr id="trAddSikyuu<?php echo ($i1<0)?'0':'_'.$i1; ?>"><th><?php echo $this->BootstrapForm->button('支給追加',array('type'=>'button','id'=>'btnAddSikyuu'.($i1<0?'0':'_'.$i1),'onclick'=>'addSikyuuMeisaiDt(this)','title'=>'ここをクリックすると支給の新しい行を追加します。')); ?> </th>
			</tr>
		</tbody></table></td>
	</tr>
	<?php endfor; ?>
	<tr id="trAdd"><th><?php echo $this->BootstrapForm->button('追加',array('type'=>'button','title'=>'ここをクリックすると明細の新しい行を追加します。','onclick'=>'addJuhacchuuMeisaiDt()')); ?> </th><td></td></tr>
	</tbody></table>
	</fieldset>

<?php echo $this->BootstrapForm->submit(__d('cake', 'Submit'),array('class'=>'btn-lg btn-success')); ?>
	</div>
	<div class="col-md-3">
		<div class="well" style="padding: 8px 0; margin-top:8px;">
		<ul class="nav nav-list">
			<li class="nav-header"><?php echo __('Actions'); ?></li>
		<li><?php echo $this->Html->link(__d('cake', 'List %s', __('Juhacchuu Dts')), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__d('cake', 'List %s', __('Torihikisaki Mrs')), array('controller' => 'torihikisaki_mrs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__d('cake', 'New %s', __('Torihikisaki Mr')), array('controller' => 'torihikisaki_mrs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__d('cake', 'List %s', __('Users')), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__d('cake', 'List %s', __('Bumon Mrs')), array('controller' => 'bumon_mrs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__d('cake', 'List %s', __('Basho Tana Souko Mrs')), array('controller' => 'basho_tana_souko_mrs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__d('cake', 'List %s', __('Juhacchuu Meisai Dts')), array('controller' => 'juhacchuu_meisai_dts', 'action' => 'index')); ?> </li>
		</ul>
		</div>
	</div>
</div>

<!-- 日付選択ボックス date picker -->
<script type="text/javascript">
	$(function() {
		$('#JuhacchuuDtBi').datepicker({dateFormat:'yy-mm-dd'});
		$('#JuhacchuuDtNouki').datepicker({dateFormat:'yy-mm-dd'});
		$('#JuhacchuuMeisaiDt0Nouki').datepicker({dateFormat:'yy-mm-dd'});
	//	$('#JuhacchuuDtKingakuGoukei').autoNumeric('init');
	});
</script>

<!-- 取引先検索モーダルウインドウ 参考 http://www.openspc2.org/kouza_js/052/ -->
<!-- <a href="/cake2erp0/zaiko_fusoku_hyouji_vws/popup" data-toggle="modal" data-target="#torihikisakiModal">検索モーダルウインドウのテスト</a> -->
<div class="modal fade" id="torihikisakiModal">
	<div class="modal-dialog modal-lg">
		<div class="modal-content" id="torihikisakiModalin">
		</div> <!-- /.modal-content -->
	</div> <!-- /.modal-dialog -->
</div>
<script type='text/javascript'>
function torihikisaki_popup(this1){
	torihikisaki_popup_gyou = "#JuhacchuuDt"+this1;//取引先:this1='',出荷先:this1='Shukka',気付先:this1='Kituke',とする
	torihikisaki_popup_unused = "#unused"+this1;//取引先:this1='',出荷先:this1='Shukka',気付先:this1='Kituke',とする
	returnValue = null;
	$('#torihikisakiModal').removeData('bs.modal'); //< 毎回新規に読み込み
	$('#torihikisakiModal').modal({'remote': <?php echo "'".$this->html->url(array('controller'=>'torihikisaki_mrs', 'action'=>'popup'))."'" ?>});
}
</script>
<script type='text/javascript'>
$(function(){
	$('#torihikisakiModal').on("hidden.bs.modal",function(e){
		if(returnValue !== null){
			$(torihikisaki_popup_gyou+"TorihikisakiMrId").val(returnValue.torihikisaki_mr_id);
			$(torihikisaki_popup_unused+"TorihikisakiCode").val(returnValue.torihikisaki_mr_code);
			$(torihikisaki_popup_unused+"TorihikisakiName").val(returnValue.torihikisaki_mr_name);
		}
		returnValue = null;
		$('#torihikisakiModal').removeData('bs.modal');
	});
});
</script>


<!-- 品目検索モーダルウインドウ 参考 http://www.openspc2.org/kouza_js/052/ -->
<!-- <a href="/cake2erp0/zaiko_fusoku_hyouji_vws/popup" data-toggle="modal" data-target="#hinmokuModal">検索モーダルウインドウのテスト</a> -->
<div class="modal fade" id="hinmokuModal">
	<div class="modal-dialog modal-lg">
		<div class="modal-content" id="hinmokuModalin">
		</div> <!-- /.modal-content -->
	</div> <!-- /.modal-dialog -->
</div>
<script type='text/javascript'>
function hinmoku_popup(this1, sikyuu){
	hinmoku_popup_gyou = "#JuhacchuuMeisaiDt"+this1+(sikyuu === undefined ? '' : 'SikyuuMeisaiDt'+sikyuu);
	hinmoku_popup_code = sikyuu === undefined ? '#unused'+this1 : '#unused_'+this1+'_sikyuu_'+sikyuu+'_';
	returnValue = null;
	$('#hinmokuModal').removeData('bs.modal'); //< 毎回新規に読み込み
	$('#hinmokuModal').modal({'remote': <?php echo "'".$this->html->url(array('controller'=>'zaiko_fusoku_hyouji_vws', 'action'=>'popup'))."'" ?>});
}
</script>
<script type='text/javascript'>
$(function(){
	$('#hinmokuModal').on("hidden.bs.modal",function(e){
		if(returnValue !== null){
			$(hinmoku_popup_gyou+"HinmokuMrId").val(returnValue.hinmoku_mr_id);
			$(hinmoku_popup_code+"HinmokuCode").val(returnValue.hinmoku_mr_code);
			$(hinmoku_popup_gyou+"HinmokuMei").val(returnValue.hinmoku_mr_name);
			$(hinmoku_popup_gyou+"Lot").val(returnValue.hinmoku_mr_lot);
			$(hinmoku_popup_gyou+"TanniMrId").val(returnValue.hinmoku_mr_tanni_mr_id);
			$(hinmoku_popup_gyou+"TanniMr2Id").val(returnValue.hinmoku_mr_tanni_mr2_id);
			$(hinmoku_popup_gyou+"TanniIti").val(returnValue.hinmoku_mr_tanni_iti);
			$(hinmoku_popup_gyou+"KazeiKbnId").val(returnValue.hinmoku_mr_kazei_kbn_id);
			if($("#JuhacchuuDtJuchuuFlg").is(':checked')){
				$(hinmoku_popup_gyou+"Tanka").val(returnValue.hinmoku_mr_tanka1);
			}else{	$(hinmoku_popup_gyou+"Tanka").val(returnValue.hinmoku_mr_genka1);
			}
		}
		returnValue = null;
		$('#hinmokuModal').removeData('bs.modal');
	});
});
</script>



<!-- 検索ウィンドウを動かすプラグインの記述 -->
<?php echo $this->Html->css(array('prettyPopin'), array('inline'=>false)) ;?>

<!-- 検索ウィンドウ -->
<script type="text/javascript">
user_id = 0;
torihikisaki_mr_id = '';
torihikisaki_mr_code = '';
torihikisaki_mr_name = '';
hinmoku_mr_id = '';
hinmoku_mr_code = '';
hinmoku_mr_name = '';
hinmoku_popup_gyou = 0;
hinmoku_popup_sikyuu = "";


//取引先コードから索引
function change_torihikisaki(this1){
	var torihikisaki_code = this1.value;
	var target_torihikisaki = this1.id.replace("unused","").replace("Code","");
	$("#unused"+target_torihikisaki+"Name").val('>>>読込み中....');
	$.ajax({
		type:"POST",
		data:{'torihikisaki_code':torihikisaki_code,},
		async:true,
		dataType: 'json',
		success: function (data, textStatus) {
			if(data==''){
				$("#unused"+target_torihikisaki+"Name").val('>>エラー:未登録');
			};
			$("#JuhacchuuDt"+target_torihikisaki+"MrId").val(data.TorihikisakiMr.id);
			$("#unused"+target_torihikisaki+"Name").val(data.TorihikisakiMr.name);
		},
		error: function(xhr, status, err) {
			$("#unused"+target_torihikisaki+"Name").val('>エラー'+status+'/'+err);
		},
		url:<?php echo "'".$this->Html->url(array('controller' => 'torihikisaki_mrs', 'action' => 'ajaxget'))."'"; ?>
	});
	return false;
}

//品目コードから索引
function change_hinmoku(this1){
	var hinmoku_code = this1.value;
	//alert(this1.name);//this1.nameはdata[unused][1][hinmoku_code]の文字列、これを']['で分割した2番目が行番号となる。
	//alert(this1.name);//this1.nameはdata[meisai][1][sikyuu][1][hinmoku_code]の文字列、これを']['で分割した2番目が行番号となる。
	var arrayNameData = this1.name.split('\]\[');
	if(arrayNameData[0]=="data[unused"){
		hinmoku_popup_sikyuu = "JuhacchuuMeisaiDt"+arrayNameData[1];
	}else{	hinmoku_popup_sikyuu = "JuhacchuuMeisaiDt"+arrayNameData[1]+"SikyuuMeisaiDt"+arrayNameData[3];
	}
	$("#"+hinmoku_popup_sikyuu+"HinmokuMei").val('>>>読込み中....');
	$.ajax({
		type:"POST",
		data:{'hinmoku_code':hinmoku_code,},
		async:true,
		dataType: 'json',
		success: function (data, textStatus) {
			if(data==''){
				$("#"+hinmoku_popup_sikyuu+"HinmokuMei").val('>>エラー:未登録');
			};
			$("#"+hinmoku_popup_sikyuu+"HinmokuMrId").val(data.HinmokuMr.id);
			$("#"+hinmoku_popup_sikyuu+"HinmokuMei").val(data.HinmokuMr.name);
			$("#"+hinmoku_popup_sikyuu+"Lot").val(data.HinmokuMr.lot);
			$("#"+hinmoku_popup_sikyuu+"TanniMrId").val(data.HinmokuMr.tanni_mr_id);
			$("#"+hinmoku_popup_sikyuu+"TanniMr2Id").val(data.HinmokuMr.tanni_mr2_id);
			$("#"+hinmoku_popup_sikyuu+"TanniIti").val(data.HinmokuMr.tanni_iti);
			if(arrayNameData[0]=="data[unused"){
				$("#"+hinmoku_popup_sikyuu+"KazeiKbnId").val(data.HinmokuMr.kazei_kbn_id);
				if($("#JuhacchuuDtJuchuuFlg").is(':checked')){
					$("#"+hinmoku_popup_sikyuu+"Tanka").val(data.HinmokuMr.tanka1);
				}else{	$("#"+hinmoku_popup_sikyuu+"Tanka").val(data.HinmokuMr.genka1);
				}
			}
		},
		error: function(xhr, status, err) {
			$("#"+hinmoku_popup_sikyuu+"HinmokuMei").val('>エラー'+status+'/'+err);
		},
		url:<?php echo "'".$this->Html->url(array('controller' => 'hinmoku_mrs', 'action' => 'ajaxget'))."'"; ?>
	});
	return false;
}
function change_kingaku(this1){
	//alert(this1.name);//this1.nameはdata[unused][1][hinmoku_code]の文字列、これを']['で分割した2番目が行番号となる。
	var arrayNameData = this1.name.split('\]\[');
	var gyou=arrayNameData[1];//gyou=''は明細でない。
	if($("#JuhacchuuMeisaiDt"+gyou+"TankaIti").val()==2){
		suuryou=$("#JuhacchuuMeisaiDt"+gyou+"Suu2").val().replace(/,/g,'');
	}else{	suuryou=$("#JuhacchuuMeisaiDt"+gyou+"Suu").val().replace(/,/g,'');
	}
	kingaku=Math.round($("#JuhacchuuMeisaiDt"+gyou+"Tanka").val().replace(/,/g,'')*suuryou);
	$("#JuhacchuuMeisaiDt"+gyou+"Kingaku").val(Intl.NumberFormat("ja-JP").format(kingaku));
	kingaku_goukei=0;
	shouhizei_kingaku=0;
	for (var i = 0; i <= lastRow; i++) {
		kingaku_goukei += 1*($("#JuhacchuuMeisaiDt"+i+"Kingaku").val().replace(/,/g,''));
		var zeiritu=$("#JuhacchuuMeisaiDt"+i+"KazeiKbnId option:selected").text().split(',');
		shouhizei_kingaku += Math.round($("#JuhacchuuMeisaiDt"+i+"Kingaku").val().replace(/,/g,'') * zeiritu[1] / 100);
		kingaku_goukei += Math.round($("#JuhacchuuMeisaiDt"+i+"Kingaku").val().replace(/,/g,'') * zeiritu[1] / 100);
	}
	$("#JuhacchuuDtKingakuGoukei").val(Intl.NumberFormat("ja-JP").format(kingaku_goukei));
	$("#JuhacchuuDtShouhizeiKingaku").val(Intl.NumberFormat("ja-JP").format(shouhizei_kingaku));
	this1.value = Intl.NumberFormat("ja-JP",{minimumFractionDigits:2, maximumFractionDigits:2}).format(this1.value);//カンマ編集
}
function change_shoyou(this1){
	//alert(this1.name);//this1.nameはdata[JuhacchuuMeisaiDt][1][SikyuuMeisaiDt][1][suu]の文字列、これを']['で分割した2番目が行番号となる。
	var arrayNameData = this1.name.split('\]\[');
	var this1val=0+this1.value.replace(/,/g,'');	//alert(arrayNameData[4]);
	if(arrayNameData[4]=='shoyou_tanni\]'){	//所要単位入力の時だけ計算する。単価位置に該当する数量で計算して単価位置に該当する数量へ代入する。
		var iti1=$("#JuhacchuuMeisaiDt"+arrayNameData[1]+"TankaIti").val();
		if(iti1==1){iti1='';}	//Suu と Suu2 を作るため1を空文字にする。
		var suu=$("#JuhacchuuMeisaiDt"+arrayNameData[1]+"Suu"+iti1).val().replace(/,/g,'');
		var iti2=$("#JuhacchuuMeisaiDt"+arrayNameData[1]+"SikyuuMeisaiDt"+arrayNameData[3]+"TankaIti").val();
		if(iti2==1){iti2='';}	//Suu と Suu2 を作るため1を空文字にする。
		$("#JuhacchuuMeisaiDt"+arrayNameData[1]+"SikyuuMeisaiDt"+arrayNameData[3]+"Suu"+iti2).val(Intl.NumberFormat("ja-JP",{minimumFractionDigits:2, maximumFractionDigits:2}).format(suu*this1val));
	}else{
		this1.value = Intl.NumberFormat("ja-JP",{minimumFractionDigits:2, maximumFractionDigits:2}).format(this1val);//カンマ編集
	}
}

function change_basho(this1){
	$("#JuhacchuuMeisaiDt0BashoTanaSoukoMrId").val(this1.value)
}
</script>

	<!-- 明細行追加削除 -->
<script type='text/javascript'>
	var lastRow=<?php echo $i1max ?> -1;
	<?php
		if($i1max==0){
			echo "addJuhacchuuMeisaiDt();";
		}
	?>
	function addJuhacchuuMeisaiDt() {
		lastRow++;	//alert(lastRow);
		$("#juhacchuu_meisai_dt0").clone(true).attr('id','juhacchuu_meisai_dt_'+lastRow).removeAttr("style").insertBefore("#trAdd");
		$("#juhacchuu_meisai_dt_"+lastRow+" #removeJuhacchuuMeisaiDt0" ).attr('onclick','removeJuhacchuuMeisaiDt('+lastRow+')');
		$("#juhacchuu_meisai_dt_"+lastRow+" #hinmoku_popup0"           ).attr('id','unused'           +lastRow+'HinmokuPopup'      ).attr('onclick','hinmoku_popup('+lastRow+')'               );
		$("#juhacchuu_meisai_dt_"+lastRow+" #unusedGyouBangou"         ).attr('id','JuhacchuuMeisaiDt'+lastRow+'GyouBangou'        ).attr('name','data[JuhacchuuMeisaiDt]['+lastRow+'][gyou_bangou]')  ;
		$("#juhacchuu_meisai_dt_"+lastRow+" #unusedHinmokuMrId"        ).attr('id','JuhacchuuMeisaiDt'+lastRow+'HinmokuMrId'       ).attr('name','data[JuhacchuuMeisaiDt]['+lastRow+'][hinmoku_mr_id]');
		$("#juhacchuu_meisai_dt_"+lastRow+" #unusedHinmokuCode"        ).attr('id','unused'           +lastRow+'HinmokuCode'       ).attr('name','data[unused]['+lastRow+'][hinmoku_code]')            ;
		$("#juhacchuu_meisai_dt_"+lastRow+" #unusedHinmokuMei"         ).attr('id','JuhacchuuMeisaiDt'+lastRow+'HinmokuMei'        ).attr('name','data[JuhacchuuMeisaiDt]['+lastRow+'][hinmoku_mei]')  ;
		$("#juhacchuu_meisai_dt_"+lastRow+" #unusedLot"                ).attr('id','JuhacchuuMeisaiDt'+lastRow+'Lot'               ).attr('name','data[JuhacchuuMeisaiDt]['+lastRow+'][lot]')          ;
		$("#juhacchuu_meisai_dt_"+lastRow+" #unusedSuu"                ).attr('id','JuhacchuuMeisaiDt'+lastRow+'Suu'               ).attr('name','data[JuhacchuuMeisaiDt]['+lastRow+'][suu]')          ;
		$("#juhacchuu_meisai_dt_"+lastRow+" #unusedTanniMrId"          ).attr('id','JuhacchuuMeisaiDt'+lastRow+'TanniMrId'         ).attr('name','data[JuhacchuuMeisaiDt]['+lastRow+'][tanni_mr_id]')  ;
		$("#juhacchuu_meisai_dt_"+lastRow+" #unusedSuu2"               ).attr('id','JuhacchuuMeisaiDt'+lastRow+'Suu2'              ).attr('name','data[JuhacchuuMeisaiDt]['+lastRow+'][suu2]')         ;
		$("#juhacchuu_meisai_dt_"+lastRow+" #unusedTanniMr2Id"         ).attr('id','JuhacchuuMeisaiDt'+lastRow+'TanniMr2Id'        ).attr('name','data[JuhacchuuMeisaiDt]['+lastRow+'][tanni_mr2_id]') ;
		$("#juhacchuu_meisai_dt_"+lastRow+" #unusedTankaIti"           ).attr('id','JuhacchuuMeisaiDt'+lastRow+'TankaIti'          ).attr('name','data[JuhacchuuMeisaiDt]['+lastRow+'][tanka_iti]')    ;
		$("#juhacchuu_meisai_dt_"+lastRow+" #unusedNouhinZumiSuu"      ).attr('id','unused'           +lastRow+'NouhinZumiSuu'     ).attr('name','data[unused]['+lastRow+'][nouhin_zumi_suu]');
		$("#juhacchuu_meisai_dt_"+lastRow+" #unusedNouhinZumiSuu2"     ).attr('id','unused'           +lastRow+'NouhinZumiSuu2'    ).attr('name','data[unused]['+lastRow+'][nouhin_zumi_suu2]');
		$("#juhacchuu_meisai_dt_"+lastRow+" #unusedTanka"              ).attr('id','JuhacchuuMeisaiDt'+lastRow+'Tanka'             ).attr('name','data[JuhacchuuMeisaiDt]['+lastRow+'][tanka]')        ;
		$("#juhacchuu_meisai_dt_"+lastRow+" #unusedKazeiKbnId"         ).attr('id','JuhacchuuMeisaiDt'+lastRow+'KazeiKbnId'        ).attr('name','data[JuhacchuuMeisaiDt]['+lastRow+'][kazei_kbn_id]') ;
		$("#juhacchuu_meisai_dt_"+lastRow+" #unusedKingaku"            ).attr('id','JuhacchuuMeisaiDt'+lastRow+'Kingaku'           ).attr('name','data[JuhacchuuMeisaiDt]['+lastRow+'][kingaku]')      ;
		$("#juhacchuu_meisai_dt_"+lastRow+" #unusedNouki"              ).attr('id','JuhacchuuMeisaiDt'+lastRow+'Nouki'             ).attr('name','data[JuhacchuuMeisaiDt]['+lastRow+'][nouki]')        ;
		$("#juhacchuu_meisai_dt_"+lastRow+" #unusedBikou"              ).attr('id','JuhacchuuMeisaiDt'+lastRow+'Bikou'             ).attr('name','data[JuhacchuuMeisaiDt]['+lastRow+'][bikou]')        ;
		$("#juhacchuu_meisai_dt_"+lastRow+" #unusedBashoTanaSoukoMrId" ).attr('id','JuhacchuuMeisaiDt'+lastRow+'BashoTanaSoukoMrId').attr('name','data[JuhacchuuMeisaiDt]['+lastRow+'][basho_tana_souko_mr_id]');
		$("#juhacchuu_meisai_dt_"+lastRow+" #mytable0"                 ).attr('id','mytable_'+lastRow);
		$("#mytable_"            +lastRow+" #trAddSikyuu0"             ).attr('id','trAddSikyuu_'+lastRow);
		$("#trAddSikyuu_"        +lastRow+" #btnAddSikyuu0"            ).attr('id','btnAddSikyuu_'+lastRow);
		$("#JuhacchuuMeisaiDt"   +lastRow+"GyouBangou").val(1+lastRow);
		$("#JuhacchuuMeisaiDt"   +lastRow+"TankaIti").val(1);
		$("#JuhacchuuMeisaiDt"   +lastRow+"BashoTanaSoukoMrId").val($("#JuhacchuuDtBashoTanaSoukoMrId").val());
		lastRows[lastRow]=-1;	//alert('lastRow='+lastRow+' lastRows[lastRow]='+lastRows[lastRow]);
	}
	
	function removeJuhacchuuMeisaiDt(x) {
		$("#juhacchuu_meisai_dt_"+x).remove();
	}

	function addSikyuuMeisaiDt(this1) {
		var arrayIdData = this1.id.split("_");	//alert(this1.id);//"btnAddSikyuu_9"の形のidが入る。
		var theRow = arrayIdData[1];		//alert('theRow='+theRow+' lastRows[theRow]='+lastRows[theRow]);//alert(theRow);
		lastRows[theRow]++;			//alert(lastRows[theRow]);
		var newRow = lastRows[theRow];		//alert(newRow);
		var xfromtr = "#mytable_"+theRow+" #meisai_sikyuu0";
		var xtotr = "meisai_"+theRow+"_sikyuu_"+newRow;
		var xfrom = "#"+xtotr+" #unused2";
		var xidto = "JuhacchuuMeisaiDt"+theRow+"SikyuuMeisaiDt"+newRow;
		var xnameto = "data[JuhacchuuMeisaiDt]["+theRow+"][SikyuuMeisaiDt]["+newRow+"]";
		var xidxx = "unused_"+theRow+"_sikyuu_"+newRow+"_";//xtotr+"_";
		var xnamexx = "data[unused]["+theRow+"][sikyuu]["+newRow+"]";
		$(xfromtr).clone(true).attr("id",xtotr).removeAttr("style").insertBefore("#mytable_"+theRow+" #trAddSikyuu_"+theRow);
		$(xfrom+"btnDelSikyuu"          ).attr("id",xidxx+"btnDelSikyuu");	//"unused_9_sikyuu_9_btnDelSikyuu"の形のidになる。
		$(xfrom+"JuhacchuuDtId"         ).attr("id",xidto+"JuhacchuuDtId"         ).attr("name",xnameto+"[juhacchuu_dt_id]"       );
		$(xfrom+"GyouBangou"            ).attr("id",xidto+"GyouBangou"            ).attr("name",xnameto+"[gyou_bangou]"           );
		$("#"+xtotr+" #hinmoku_popup00" ).attr("id",xidxx+"HinmokuPopup"          ).attr('onclick','hinmoku_popup('+theRow+','+newRow+')');
		$(xfrom+"HinmokuMrId"           ).attr("id",xidto+"HinmokuMrId"           ).attr("name",xnameto+"[hinmoku_mr_id]"         );
		$(xfrom+"HinmokuCode"           ).attr("id",xidxx+"HinmokuCode"           ).attr("name",xnamexx+"[hinmoku_code]"          );
		$(xfrom+"HinmokuMei"            ).attr("id",xidto+"HinmokuMei"            ).attr("name",xnameto+"[hinmoku_mei]"           );
		$(xfrom+"Lot"                   ).attr("id",xidto+"Lot"                   ).attr("name",xnameto+"[lot]"                   );
		$(xfrom+"ShoyouTanni"           ).attr("id",xidto+"ShoyouTanni"           ).attr("name",xnameto+"[shoyou_tanni]"          );
		$(xfrom+"Suu"                   ).attr("id",xidto+"Suu"                   ).attr("name",xnameto+"[suu]"                   );
		$(xfrom+"TanniMrId"             ).attr("id",xidto+"TanniMrId"             ).attr("name",xnameto+"[tanni_mr_id]"           );
		$(xfrom+"Suu2"                  ).attr("id",xidto+"Suu2"                  ).attr("name",xnameto+"[suu2]"                  );
		$(xfrom+"TanniMr2Id"            ).attr("id",xidto+"TanniMr2Id"            ).attr("name",xnameto+"[tanni_mr2_id]"          );
		$(xfrom+"TankaIti"              ).attr("id",xidto+"TankaIti"              ).attr("name",xnameto+"[tanka_iti]"             );
		$(xfrom+"SikyuuTanni"           ).attr("id",xidto+"SikyuuTanni"           ).attr("name",xnameto+"[SikyuuTanni]"           );
		$(xfrom+"Bikou"                 ).attr("id",xidto+"Bikou"                 ).attr("name",xnameto+"[bikou]"                 );
		$(xfrom+"BashoTanaSoukoMrId"    ).attr("id",xidto+"BashoTanaSoukoMrId"    ).attr("name",xnameto+"[basho_tana_souko_mr_id]");
		$("#"+xidto+"GyouBangou").val(1+newRow);
		$("#"+xidto+"ShoyouTanni").val(1);
		$("#"+xidto+"TankaIti").val(1);
		$("#"+xidto+"Suu").val($("#JuhacchuuMeisaiDt"+theRow+"Suu").val());
		$("#"+xidto+"Suu2").val($("#JuhacchuuMeisaiDt"+theRow+"Suu2").val());
		$("#"+xidto+"JuhacchuuDtId").val(<?php echo $this->request->data('JuhacchuuDt.id'); ?>);
	}

	function delSikyuuMeisaiDt(this1) {
		var theRows = this1.id.split("_");	//alert(this1.id);	//"meisai_9_sikyuu_9_btnDelSikyuu"の形のid
		$("#meisai_"+theRows[1]+"_sikyuu_"+theRows[3]).remove();
	}

</script>

<script type='text/javascript'>
	$("#JuhacchuuDtJuchuuFlg").focus();//最初に
	// ------------------------------------------------------------
	// キーボードを押したときに実行されるイベント　参照：http://hakuhin.jp/js/key_board.html#KEY_BOARD_03
	// ------------------------------------------------------------
	document.onkeydown = function (e){
		if(e.keyCode == 113){$("#unused0HinmokuPopin").click();}//F2
	};
</script>

<!-- <?php debug($this->request->data); ?> -->


