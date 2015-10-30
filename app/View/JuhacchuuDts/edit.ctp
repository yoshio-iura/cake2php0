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
				$this->Html->link('取引先コード', '/torihikisaki_mrs/popup', array('rel' => 'prettyPopin','title'=>'ここをクリックすると取引先検索画面になります。')),'名称'))
			.$this->Html->tableCells(array(
			$this->BootstrapForm->input('JuhacchuuDt.juchuu_flg',array('label'=>false)),
			$this->BootstrapForm->input('JuhacchuuDt.bi',array('label'=>false,'type'=>'text','size'=>"10",'default'=>date('Y-m-d'))),
			$this->BootstrapForm->input('unused.torihikisaki_code',array('label'=>false,'type'=>'text','size'=>"5",'onchange'=>'change_torihikisaki(this)','required'=>'true')),
			$this->BootstrapForm->input('unused.torihikisaki_name',array('label'=>false,'readonly'=>'readonly','size'=>"40")),
		)).'</table>';
		echo $this->BootstrapForm->hidden('JuhacchuuDt.torihikisaki_mr_id',array('label'=>false,'type'=>'text','size'=>"10"));
		echo $this->BootstrapForm->hidden('JuhacchuuDt.shukka_torihikisaki_mr_id',array('label'=>false,'type'=>'text','size'=>"10"));
		echo $this->BootstrapForm->hidden('JuhacchuuDt.kituke_torihikisaki_mr_id',array('label'=>false,'type'=>'text','size'=>"10"));
		echo '<table class="tbl1">'.$this->Html->tableHeaders(array(
							$this->Html->link('出荷先コード', '/torihikisaki_mrs/popup', array('rel' => 'prettyPopin','title'=>'ここをクリックすると出荷先検索画面になります。')),
							'出荷先名称',
							$this->Html->link('気付先コード', '/torihikisaki_mrs/popup', array('rel' => 'prettyPopin','title'=>'ここをクリックすると気付先検索画面になります。')),
							'気付先名称'))
			.$this->Html->tableCells(array(
			$this->BootstrapForm->input('unused.shukka_torihikisaki_code',array('label'=>false,'type'=>'text','size'=>"5",'onchange'=>'change_torihikisaki(this)')),
			$this->BootstrapForm->input('unused.shukka_torihikisaki_name',array('label'=>false,'readonly'=>'readonly','size'=>"40")),
			$this->BootstrapForm->input('unused.kituke_torihikisaki_code',array('label'=>false,'type'=>'text','size'=>"5",'onchange'=>'change_torihikisaki(this)')),
			$this->BootstrapForm->input('unused.kituke_torihikisaki_name',array('label'=>false,'readonly'=>'readonly','size'=>"40")),
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
			$this->BootstrapForm->input('JuhacchuuDt.kingaku_goukei',array('label'=>false, 'style'=>'text-align:right','readonly'=>'readonly')),
			$this->BootstrapForm->input('JuhacchuuDt.shouhizei_kingaku',array('label'=>false, 'style'=>'text-align:right','readonly'=>'readonly')),
		)).'</table>';
	/*	echo '<table class="tbl1">'.$this->Html->tableHeaders(array('適用開始日','元ID','禁止フラグ','終了日時'))
			.$this->Html->tableCells(array(
			$this->BootstrapForm->input('JuhacchuuDt.kaisi_nitiji',array('label'=>false,'type'=>'text','size'=>"10")),
			$this->BootstrapForm->input('JuhacchuuDt.id_moto',array('label'=>false)),
			$this->BootstrapForm->input('JuhacchuuDt.kinsi_flg',array('label'=>false)),
			$this->BootstrapForm->input('JuhacchuuDt.shuuryou_nitiji',array('label'=>false,'type'=>'text','size'=>"10")),
		)).'</table>';
	*/	echo $this->BootstrapForm->hidden('JuhacchuuDt.sakusei_user_id', array('value' => $this->action == 'add' ? $loginUser['id'] : ''));
		echo $this->BootstrapForm->hidden('JuhacchuuDt.kousin_user_id', array('value' => $this->action == 'edit' ? $loginUser['id'] : ''));
	?>

	<div class='col-md-12'><h3>受発注明細</h3></div>
	<?php echo $this->Html->link('品目CD', '/zaiko_fusoku_hyouji_vws/popup', array('rel' => 'prettyPopin', 'id'=>'hinmoku_popup', 'style'=>'display:none;')); ?>
	<table id="mytable" class="tbl1">
	<?php for($i1=-1;$i1<$i1max;$i1++): ?>
	<?php if($i1<0){
	  $tbl1="unused";
	  $unu1="unused";
	  echo '<tr id="juhacchuu_meisai_dt0" style="display:none;">';
	}else{
	  $tbl1="JuhacchuuMeisaiDt.".$i1;
	  $unu1="unused.".$i1;
	  echo '<tr id="juhacchuu_meisai_dt_'.$i1.'" style="display:inline;">';
	}?>
		<td width="50" valign="top"><table><tbody><tr><th>行№</th></tr><tr>
		<td><?php echo $this->BootstrapForm->input($tbl1.'.gyou_bangou'   ,array('label'=>false,'type'=>'number', 'style'=>'width:40px;text-align:right')); ?></td>
		</tr><tr><th><?php echo $this->BootstrapForm->button('削除',array('id'=>'removeJuhacchuuMeisaiDt0','onclick'=>'removeJuhacchuuMeisaiDt('.$i1.')','type'=>'button','title'=>'ここをクリックするとこの行の明細を削除します。')); ?></th>
		</tr></table><?php echo $this->BootstrapForm->hidden($tbl1.'.oya_juhacchuu_meisai_dt_id'); ?>
		</td><td>
		<?php echo $this->BootstrapForm->hidden($tbl1.'.id'); ?>
		<?php echo $this->BootstrapForm->hidden($tbl1.'.hinmoku_mr_id' ,array('label'=>false,'type'=>'text')); ?>
		<table><tr>
		<th><?php echo $this->BootstrapForm->button('品目CD',array('id'=>'hinmoku_prettyPopin0','onclick'=>'hinmoku_prettyPopin('.$i1.')','type'=>'button','title'=>'ここをクリックすると品目検索画面になります。')); ?>
		</th>		   <td><?php echo $this->BootstrapForm->input($unu1.'.hinmoku_code'  ,array('label'=>false,'type'=>'text','size'=>"10",'onchange'=>'change_hinmoku(this)')); ?></td>
		<th>品目名</th>    <td><?php echo $this->BootstrapForm->input($tbl1.'.hinmoku_mei'   ,array('label'=>false,'type'=>'text','size'=>"40")); ?></td>
		<th>ロット</th>    <td><?php echo $this->BootstrapForm->input($tbl1.'.lot'           ,array('label'=>false,'type'=>'text')); ?></td>
		</tr></table><table><tr>
		<th>数量</th>      <td><?php echo $this->BootstrapForm->input($tbl1.'.suu'           ,array('label'=>false,'type'=>'number', 'step'=>'0.01', 'style'=>'text-align:right', 'onchange'=>'change_kingaku(this)')); ?></td>
		<th>単位</th>      <td><?php echo $this->BootstrapForm->input($tbl1.'.tanni_mr_id'   ,array('label'=>false,'type'=>'select','empty' => true)); ?></td>
		<th>数量2</th>     <td><?php echo $this->BootstrapForm->input($tbl1.'.suu2'          ,array('label'=>false,'type'=>'number', 'step'=>'0.01', 'style'=>'text-align:right', 'onchange'=>'change_kingaku(this)')); ?></td>
		<th>単位2</th>     <td><?php echo $this->BootstrapForm->input($tbl1.'.tanni_mr2_id'  ,array('label'=>false,'type'=>'select','empty' => true)); ?></td>
		<th>単位位置</th>  <td><?php echo $this->BootstrapForm->input($tbl1.'.tanka_iti'     ,array('label'=>false,'type'=>'number', 'size'=>'1', 'style'=>'width:40px;text-align:center', 'onchange'=>'change_kingaku(this)','min'=>1,'max'=>2)); ?></td>
		</tr></table><table><tr>
		<th>納品済み数量</th> <td><?php echo $this->BootstrapForm->input($tbl1.'.nouhin_zumi_suu' ,array('label'=>false,'type'=>'number', 'step'=>'0.01', 'style'=>'text-align:right', 'readonly'=>'readonly')); ?></td>
		<th>納品済み数量2</th><td><?php echo $this->BootstrapForm->input($tbl1.'.nouhin_zumi_suu2',array('label'=>false,'type'=>'number', 'step'=>'0.01', 'style'=>'text-align:right', 'readonly'=>'readonly')); ?></td>
		</tr></table><table><tr>
		<th>単価</th>      <td><?php echo $this->BootstrapForm->input($tbl1.'.tanka'         ,array('label'=>false,'type'=>'number', 'step'=>'0.01', 'style'=>'text-align:right', 'onchange'=>'change_kingaku(this)')); ?></td>
		<th>課税区分</th>  <td><?php echo $this->BootstrapForm->input($tbl1.'.kazei_kbn_id'  ,array('label'=>false,'type'=>'select', 'onchange'=>'change_kingaku(this)')); ?></td>
		<th>金額</th>      <td><?php echo $this->BootstrapForm->input($tbl1.'.kingaku'       ,array('label'=>false,'type'=>'number', 'style'=>'text-align:right','readonly'=>'readonly')); ?></td>
		</tr></table><table><tr>
		<th>納期</th>      <td><?php echo $this->BootstrapForm->input($tbl1.'.nouki'         ,array('label'=>false,'type'=>'text', 'size'=>'10','default'=>date('Y-m-d'))); ?></td>
		<th>備考</th>      <td><?php echo $this->BootstrapForm->input($tbl1.'.bikou'         ,array('label'=>false,'type'=>'text', 'size'=>'40')); ?></td>
		<th>納入場所</th>  <td><?php echo $this->BootstrapForm->input($tbl1.'.basho_tana_souko_mr_id',array('label'=>false,'type'=>'select','required'=>'true')); ?></td>
		</tr></table><table id=mytable<?php echo ($i1<0)?'0':'_'.$i1; ?>><tbody><tr id="sikyuu_meisai_dt<?php echo ($i1<0)?'0':'_'.$i1; ?>" style="display:none;">
			<th width="3em">支給行№
			<br><?php echo $this->BootstrapForm->input('unused0.gyou_bangou'   ,array('label'=>false,'type'=>'number', 'style'=>'text-align:right')); ?>
			<br><?php echo $this->BootstrapForm->button('削除',array('type'=>'button','id'=>'btnDelSikyuu0','onclick'=>'delSikyuuMeisaiDt(this)','title'=>'ここをクリックするとこの行の支給明細を削除します。')); ?>
			    <?php echo $this->BootstrapForm->hidden('unused0.oya_juhacchuu_meisai_dt_id'); ?>
			</th>
			<td><table><tr>
			<th><?php echo $this->BootstrapForm->button('支給品CD',array('id'=>'hinmoku_prettyPopin00','type'=>'button','title'=>'ここをクリックすると品目検索画面になります。')); ?>
			</th>		   <td><?php echo $this->BootstrapForm->input('sikyuu0.hinmoku_code'  ,array('label'=>false,'type'=>'text','size'=>"10",'onchange'=>'change_hinmoku(this)')); ?></td>
			<th>品目名</th>    <td><?php echo $this->BootstrapForm->input('unused0.hinmoku_mei'   ,array('label'=>false,'type'=>'text','size'=>"40")); ?></td>
			<th>ロット</th>    <td><?php echo $this->BootstrapForm->input('unused0.lot'           ,array('label'=>false,'type'=>'text')); ?></td>
			</tr></table><table><tr>
			<th>所要単位</th>  <td><?php echo $this->BootstrapForm->input('unused0.shoyou_tanni'   ,array('label'=>false,'type'=>'number', 'step'=>'0.01', 'style'=>'text-align:right')); ?></td>
			<th>所要数量</th>  <td><?php echo $this->BootstrapForm->input('unused0.suu'           ,array('label'=>false,'type'=>'number', 'step'=>'0.01', 'style'=>'text-align:right')); ?></td>
			<th>単位</th>      <td><?php echo $this->BootstrapForm->input('unused0.tanni_mr_id'   ,array('label'=>false,'type'=>'select','empty' => true)); ?></td>
			<th>所要数量2</th> <td><?php echo $this->BootstrapForm->input('unused0.suu2'          ,array('label'=>false,'type'=>'number', 'step'=>'0.01', 'style'=>'text-align:right')); ?></td>
			<th>単位2</th>     <td><?php echo $this->BootstrapForm->input('unused0.tanni_mr2_id'  ,array('label'=>false,'type'=>'select','empty' => true)); ?></td>
			</tr></table><table><tr>
			<th>単位位置</th>  <td><?php echo $this->BootstrapForm->input('unused0.tanka_iti'     ,array('label'=>false,'type'=>'number', 'size'=>'1', 'style'=>'text-align:center')); ?></td>
			<th>備考</th>      <td><?php echo $this->BootstrapForm->input('unused0.bikou'         ,array('label'=>false,'type'=>'text', 'size'=>'40')); ?></td>
			<th>納入場所</th>  <td><?php echo $this->BootstrapForm->input('unused0.basho_tana_souko_mr_id',array('label'=>false,'type'=>'select')); ?></td>
			</tr></table></td>
			</tr>
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
($(function(){
	$("a[rel^='prettyPopin']:eq(0)").prettyPopin({//取引先検索
		modal : true,
		width : 960,
		height: 780,
		opacity: 0.5,
		animationSpeed: '0', 
		followScroll: false,
		loader_path: '<?php echo $this->webroot; ?>/img/prettyPopin/loader.gif',
		callback: function(){
			if(torihikisaki_mr_code > '') {
				$("#JuhacchuuDtTorihikisakiMrId").val(torihikisaki_mr_id);
				$("#unusedTorihikisakiCode").val(torihikisaki_mr_code);
				$("#unusedTorihikisakiName").val(torihikisaki_mr_name);
			}
			torihikisaki_mr_code = '';
		}
	});
	$("a[rel^='prettyPopin']:eq(1)").prettyPopin({//出荷先検索
		modal : true,
		width : 960,
		height: 780,
		opacity: 0.5,
		animationSpeed: '0', 
		followScroll: false,
		loader_path: '<?php echo $this->webroot; ?>/img/prettyPopin/loader.gif',
		callback: function(){
			if(torihikisaki_mr_code > '') {
				$("#JuhacchuuDtShukkaTorihikisakiMrId").val(torihikisaki_mr_id);
				$("#unusedShukkaTorihikisakiCode").val(torihikisaki_mr_code);
				$("#unusedShukkaTorihikisakiName").val(torihikisaki_mr_name);
			}
			torihikisaki_mr_code = '';
		}
	});
	$("a[rel^='prettyPopin']:eq(2)").prettyPopin({//気付先検索
		modal : true,
		width : 960,
		height: 780,
		opacity: 0.5,
		animationSpeed: '0', 
		followScroll: false,
		loader_path: '<?php echo $this->webroot; ?>/img/prettyPopin/loader.gif',
		callback: function(){
			if(torihikisaki_mr_code > '') {
				$("#JuhacchuuDtKitukeTorihikisakiMrId").val(torihikisaki_mr_id);
				$("#unusedKitukeTorihikisakiCode").val(torihikisaki_mr_code);
				$("#unusedKitukeTorihikisakiName").val(torihikisaki_mr_name);
			}
			torihikisaki_mr_code = '';
		}
	});
	$("a[rel^='prettyPopin']:eq(3)").prettyPopin({//品目検索
		modal : true,
		width : 960,
		height: 780,
		opacity: 0.5,
		animationSpeed: '0', 
		followScroll: false,
		loader_path: '<?php echo $this->webroot; ?>/img/prettyPopin/loader.gif',
		callback: function(){
			if(hinmoku_mr_code > '') {
				$("#"+hinmoku_popup_sikyuu+"JuhacchuuMeisaiDt"+hinmoku_popup_gyou+"HinmokuMrId").val(hinmoku_mr_id);
				$("#unused"+hinmoku_popup_sikyuu+hinmoku_popup_gyou+"HinmokuCode").val(hinmoku_mr_code);
				$("#"+hinmoku_popup_sikyuu+"JuhacchuuMeisaiDt"+hinmoku_popup_gyou+"HinmokuMei").val(hinmoku_mr_name);
				$("#"+hinmoku_popup_sikyuu+"JuhacchuuMeisaiDt"+hinmoku_popup_gyou+"Lot").val(hinmoku_mr_lot);
				$("#"+hinmoku_popup_sikyuu+"JuhacchuuMeisaiDt"+hinmoku_popup_gyou+"TanniMrId").val(hinmoku_mr_tanni_mr_id);
				$("#"+hinmoku_popup_sikyuu+"JuhacchuuMeisaiDt"+hinmoku_popup_gyou+"TanniMr2Id").val(hinmoku_mr_tanni_mr2_id);
				$("#"+hinmoku_popup_sikyuu+"JuhacchuuMeisaiDt"+hinmoku_popup_gyou+"TanniIti").val(hinmoku_mr_tanni_iti);
				$("#"+hinmoku_popup_sikyuu+"JuhacchuuMeisaiDt"+hinmoku_popup_gyou+"KazeiKbnId").val(hinmoku_mr_kazei_kbn_id);
				if($("#JuhacchuuDtJuchuuFlg").is(':checked')){
					$("#"+hinmoku_popup_sikyuu+"JuhacchuuMeisaiDt"+hinmoku_popup_gyou+"Tanka").val(hinmoku_mr_tanka1);
				}else{	$("#"+hinmoku_popup_sikyuu+"JuhacchuuMeisaiDt"+hinmoku_popup_gyou+"Tanka").val(hinmoku_mr_genka1);
				}
			}
			hinmoku_mr_code = '';
		}
	});
}));
//取引先コードから索引
function change_torihikisaki(this1){
	var torihikisaki_code = this1.value;
	var target_torihikisaki = this1.id.replace("unused","").replace("Code","");
	$.ajax({
		type:"POST",
		data:{'torihikisaki_code':torihikisaki_code,},
		async:true,
		dataType: 'json',
		success: function (data, textStatus) {
			$("#JuhacchuuDt"+target_torihikisaki+"MrId").val(data.TorihikisakiMr.id);
			$("#unused"+target_torihikisaki+"Name").val(data.TorihikisakiMr.name);
		},
		url:<?php echo "'".$this->Html->url(array('controller' => 'torihikisaki_mrs', 'action' => 'ajaxget'))."'"; ?>
	});
	return false;
}
//取引先IDから索引
function index_torihikisaki(this1){
	var torihikisaki_id = $("#JuhacchuuDt"+this1+"TorihikisakiMrId").val();
	var target_torihikisaki = this1+"Torihikisaki";
	$.ajax({
		type:"POST",
		data:{'torihikisaki_id':torihikisaki_id,},
		async:true,
		dataType: 'json',
		success: function (data, textStatus) {
			$("#unused"+target_torihikisaki+"Code").val(data.TorihikisakiMr.code);
			$("#unused"+target_torihikisaki+"Name").val(data.TorihikisakiMr.name);
		},
		url:<?php echo "'".$this->Html->url(array('controller' => 'torihikisaki_mrs', 'action' => 'ajaxgetid'))."'"; ?>
	});
	return false;
}

//品目コードから索引
function change_hinmoku(this1){
	var hinmoku_code = this1.value;
	//alert(this1.name);//this1.nameはdata[unused][1][hinmoku_code]の文字列、これを']['で分割した2番目が行番号となる。
	//alert(this1.name);//this1.nameはdata[unusedSikyuu][1][hinmoku_code]の文字列、これを']['で分割した2番目が行番号となる。
	var arrayNameData = this1.name.split('\]\[');
	if(arrayNameData[0].slice(-6)=="Sikyuu"){
		hinmoku_popup_sikyuu = "Sikyuu";
	}else{	hinmoku_popup_sikyuu = "";
	}
	$.ajax({
		type:"POST",
		data:{'hinmoku_code':hinmoku_code,},
		async:true,
		dataType: 'json',
		success: function (data, textStatus) {
			$("#"+hinmoku_popup_sikyuu+"JuhacchuuMeisaiDt"+arrayNameData[1]+"HinmokuMrId").val(data.HinmokuMr.id);
			$("#"+hinmoku_popup_sikyuu+"JuhacchuuMeisaiDt"+arrayNameData[1]+"HinmokuMei").val(data.HinmokuMr.name);
			$("#"+hinmoku_popup_sikyuu+"JuhacchuuMeisaiDt"+arrayNameData[1]+"Lot").val(data.HinmokuMr.lot);
			$("#"+hinmoku_popup_sikyuu+"JuhacchuuMeisaiDt"+arrayNameData[1]+"TanniMrId").val(data.HinmokuMr.tanni_mr_id);
			$("#"+hinmoku_popup_sikyuu+"JuhacchuuMeisaiDt"+arrayNameData[1]+"TanniMr2Id").val(data.HinmokuMr.tanni_mr2_id);
			$("#"+hinmoku_popup_sikyuu+"JuhacchuuMeisaiDt"+arrayNameData[1]+"TanniIti").val(data.HinmokuMr.tanni_iti);
			$("#"+hinmoku_popup_sikyuu+"JuhacchuuMeisaiDt"+arrayNameData[1]+"KazeiKbnId").val(data.HinmokuMr.kazei_kbn_id);
			if($("#JuhacchuuDtJuchuuFlg").is(':checked')){
				$("#"+hinmoku_popup_sikyuu+"JuhacchuuMeisaiDt"+arrayNameData[1]+"Tanka").val(data.HinmokuMr.tanka1);
			}else{	$("#"+hinmoku_popup_sikyuu+"JuhacchuuMeisaiDt"+arrayNameData[1]+"Tanka").val(data.HinmokuMr.genka1);
			}
		},
		url:<?php echo "'".$this->Html->url(array('controller' => 'hinmoku_mrs', 'action' => 'ajaxget'))."'"; ?>
	});
	return false;
}
//品目IDから索引
function index_hinmoku(this1){
	var hinmoku_id = $("#JuhacchuuMeisaiDt"+this1+"HinmokuMrId").val();
	if($("#JuhacchuuMeisaiDt"+this1+"OyaJuhacchuuMeisaiDtId").val()!=0){
		hinmoku_popup_sikyuu = "Sikyuu";
	}else{	hinmoku_popup_sikyuu = "";
	}
	$.ajax({
		type:"POST",
		data:{'hinmoku_id':hinmoku_id,},
		async:true,
		dataType: 'json',
		success: function (data, textStatus) {
			$("#unused"+hinmoku_popup_sikyuu+this1+"HinmokuCode").val(data.HinmokuMr.code);
		},
		url:<?php echo "'".$this->Html->url(array('controller' => 'hinmoku_mrs', 'action' => 'ajaxgetid'))."'"; ?>
	});
	return false;
}
function hinmoku_prettyPopin(this1, sikyuu){
	hinmoku_popup_gyou = this1;
	hinmoku_popup_sikyuu = sikyuu === undefined ? '' : sikyuu;
	document.getElementById('hinmoku_popup').click();
}
function change_kingaku(this1){
	//alert(this1.name);//this1.nameはdata[unused][1][hinmoku_code]の文字列、これを']['で分割した2番目が行番号となる。
	var arrayNameData = this1.name.split('\]\[');
	var gyou=arrayNameData[1];//gyou=''は明細でない。
	if($("#JuhacchuuMeisaiDt"+gyou+"TankaIti").val()==2){
		suuryou=$("#JuhacchuuMeisaiDt"+gyou+"Suu2").val();
	}else{	suuryou=$("#JuhacchuuMeisaiDt"+gyou+"Suu").val();
	}
	kingaku=Math.round($("#JuhacchuuMeisaiDt"+gyou+"Tanka").val()*suuryou);
	$("#JuhacchuuMeisaiDt"+gyou+"Kingaku").val(kingaku);
	kingaku_goukei=0;
	shouhizei_kingaku=0;
	for (var i = 0; i <= lastRow; i++) {
		kingaku_goukei += 1*($("#JuhacchuuMeisaiDt"+i+"Kingaku").val());
		var zeiritu=$("#JuhacchuuMeisaiDt"+i+"KazeiKbnId option:selected").text().split(',');
		shouhizei_kingaku += Math.round($("#JuhacchuuMeisaiDt"+i+"Kingaku").val() * zeiritu[1] / 100);
		kingaku_goukei += Math.round($("#JuhacchuuMeisaiDt"+i+"Kingaku").val() * zeiritu[1] / 100);
	}
	$("#JuhacchuuDtKingakuGoukei").val(kingaku_goukei);
	$("#JuhacchuuDtShouhizeiKingaku").val(shouhizei_kingaku);
}
function change_basho(this1){
	$("#JuhacchuuMeisaiDt0BashoTanaSoukoMrId").val(this1.value)
}
</script>

<script type='text/javascript'>
	<?php if ($this->action == 'edit'): ?>
		//index_torihikisaki('');
		if($("#JuhacchuuDtTorihikisakiMrId").val() != 0){index_torihikisaki('')};
		if($("#JuhacchuuDtShukkaTorihikisakiMrId").val() != 0){index_torihikisaki('Shukka')};
		if($("#JuhacchuuDtKitukeTorihikisakiMrId").val() != 0){index_torihikisaki('Kituke')};
		<?php for($i1=0;$i1<$i1max;$i1++): ?>
			if($("#JuhacchuuMeisaiDt"+<?php echo $i1; ?>+"HinmokuMrId").val() != 0){index_hinmoku('<?php echo $i1; ?>')};
		<?php endfor; ?>
	<?php endif; ?>
</script>

	<!-- 明細行追加削除 -->
<script type='text/javascript'>
	var lastRows=new Array();
	var lastRow=<?php echo $i1max ?> -1;
	var cntSikyuu=<?php echo $i1max ?> -1;
	<?php
		if($i1max==0){
			echo "addJuhacchuuMeisaiDt();";
		}else{
			for($i=0;$i<$i1max;$i++){
				echo "lastRows[".$i."]=-1;";
			}
		}
	?>

	function addJuhacchuuMeisaiDt() {
		lastRow++;
		$("#juhacchuu_meisai_dt0").clone(true).attr('id','juhacchuu_meisai_dt_'+lastRow).removeAttr("style").insertBefore("#trAdd");
		$("#juhacchuu_meisai_dt_"+lastRow+" #removeJuhacchuuMeisaiDt0" ).attr('onclick','removeJuhacchuuMeisaiDt('+lastRow+')');
		$("#juhacchuu_meisai_dt_"+lastRow+" #hinmoku_prettyPopin0"     ).attr('onclick','hinmoku_prettyPopin('+lastRow+')').attr('id','unused'           +lastRow+'HinmokuPopin'       );
		$("#juhacchuu_meisai_dt_"+lastRow+" #unusedGyouBangou"         ).attr('id','JuhacchuuMeisaiDt'+lastRow+'GyouBangou'        ).attr('name','data[JuhacchuuMeisaiDt]['+lastRow+'][gyou_bangou]')  ;
		$("#juhacchuu_meisai_dt_"+lastRow+" #unusedOyaJuhacchuuDtId"   ).attr('id','JuhacchuuMeisaiDt'+lastRow+'OyaJuhacchuuDtId'  ).attr('name','data[JuhacchuuMeisaiDt]['+lastRow+'][oya_juhacchuu_dt_id]');
		$("#juhacchuu_meisai_dt_"+lastRow+" #unusedHinmokuMrId"        ).attr('id','JuhacchuuMeisaiDt'+lastRow+'HinmokuMrId'       ).attr('name','data[JuhacchuuMeisaiDt]['+lastRow+'][hinmoku_mr_id]');
		$("#juhacchuu_meisai_dt_"+lastRow+" #unusedHinmokuCode"        ).attr('id','unused'           +lastRow+'HinmokuCode'       ).attr('name','data[unused]['+lastRow+'][hinmoku_code]')            ;
		$("#juhacchuu_meisai_dt_"+lastRow+" #unusedHinmokuMei"         ).attr('id','JuhacchuuMeisaiDt'+lastRow+'HinmokuMei'        ).attr('name','data[JuhacchuuMeisaiDt]['+lastRow+'][hinmoku_mei]')  ;
		$("#juhacchuu_meisai_dt_"+lastRow+" #unusedLot"                ).attr('id','JuhacchuuMeisaiDt'+lastRow+'Lot'               ).attr('name','data[JuhacchuuMeisaiDt]['+lastRow+'][lot]')          ;
		$("#juhacchuu_meisai_dt_"+lastRow+" #unusedSuu"                ).attr('id','JuhacchuuMeisaiDt'+lastRow+'Suu'               ).attr('name','data[JuhacchuuMeisaiDt]['+lastRow+'][suu]')          ;
		$("#juhacchuu_meisai_dt_"+lastRow+" #unusedTanniMrId"          ).attr('id','JuhacchuuMeisaiDt'+lastRow+'TanniMrId'         ).attr('name','data[JuhacchuuMeisaiDt]['+lastRow+'][tanni_mr_id]')  ;
		$("#juhacchuu_meisai_dt_"+lastRow+" #unusedSuu2"               ).attr('id','JuhacchuuMeisaiDt'+lastRow+'Suu2'              ).attr('name','data[JuhacchuuMeisaiDt]['+lastRow+'][suu2]')         ;
		$("#juhacchuu_meisai_dt_"+lastRow+" #unusedTanniMr2Id"         ).attr('id','JuhacchuuMeisaiDt'+lastRow+'TanniMr2Id'        ).attr('name','data[JuhacchuuMeisaiDt]['+lastRow+'][tanni_mr2_id]') ;
		$("#juhacchuu_meisai_dt_"+lastRow+" #unusedTankaIti"           ).attr('id','JuhacchuuMeisaiDt'+lastRow+'TankaIti'          ).attr('name','data[JuhacchuuMeisaiDt]['+lastRow+'][tanka_iti]')    ;
		$("#juhacchuu_meisai_dt_"+lastRow+" #unusedNouhinZumiSuu"      ).attr('id','JuhacchuuMeisaiDt'+lastRow+'NouhinZumiSuu'     ).attr('name','data[JuhacchuuMeisaiDt]['+lastRow+'][nouhin_zumi_suu]');
		$("#juhacchuu_meisai_dt_"+lastRow+" #unusedNouhinZumiSuu2"     ).attr('id','JuhacchuuMeisaiDt'+lastRow+'NouhinZumiSuu2'    ).attr('name','data[JuhacchuuMeisaiDt]['+lastRow+'][nouhin_zumi_suu2]');
		$("#juhacchuu_meisai_dt_"+lastRow+" #unusedTanka"              ).attr('id','JuhacchuuMeisaiDt'+lastRow+'Tanka'             ).attr('name','data[JuhacchuuMeisaiDt]['+lastRow+'][tanka]')        ;
		$("#juhacchuu_meisai_dt_"+lastRow+" #unusedKazeiKbnId"         ).attr('id','JuhacchuuMeisaiDt'+lastRow+'KazeiKbnId'        ).attr('name','data[JuhacchuuMeisaiDt]['+lastRow+'][kazei_kbn_id]') ;
		$("#juhacchuu_meisai_dt_"+lastRow+" #unusedKingaku"            ).attr('id','JuhacchuuMeisaiDt'+lastRow+'Kingaku'           ).attr('name','data[JuhacchuuMeisaiDt]['+lastRow+'][kingaku]')      ;
		$("#juhacchuu_meisai_dt_"+lastRow+" #unusedNouki"              ).attr('id','JuhacchuuMeisaiDt'+lastRow+'Nouki'             ).attr('name','data[JuhacchuuMeisaiDt]['+lastRow+'][nouki]')        ;
		$("#juhacchuu_meisai_dt_"+lastRow+" #unusedBikou"              ).attr('id','JuhacchuuMeisaiDt'+lastRow+'Bikou'             ).attr('name','data[JuhacchuuMeisaiDt]['+lastRow+'][bikou]')        ;
		$("#juhacchuu_meisai_dt_"+lastRow+" #unusedBashoTanaSoukoMrId" ).attr('id','JuhacchuuMeisaiDt'+lastRow+'BashoTanaSoukoMrId').attr('name','data[JuhacchuuMeisaiDt]['+lastRow+'][basho_tana_souko_mr_id]');
		$("#juhacchuu_meisai_dt_"+lastRow+" #mytable0"                 ).attr('id','mytable_'+lastRow);
		$("#mytable_"            +lastRow+" #sikyuu_meisai_dt0"        ).attr('id','sikyuu_meisai_dt_'+lastRow);
		$("#mytable_"            +lastRow+" #trAddSikyuu0"             ).attr('id','trAddSikyuu_'+lastRow);
		$("#trAddSikyuu_"        +lastRow+" #btnAddSikyuu0"            ).attr('id','btnAddSikyuu_'+lastRow);
		$("#JuhacchuuMeisaiDt"   +lastRow+"GyouBangou").val(1+lastRow);
		$("#JuhacchuuMeisaiDt"   +lastRow+"TankaIti").val(1);
		$("#JuhacchuuMeisaiDt"   +lastRow+"NouhinZumiSuu").val(0);
		$("#JuhacchuuMeisaiDt"   +lastRow+"NouhinZumiSuu2").val(0);
		$("#JuhacchuuMeisaiDt"   +lastRow+"BashoTanaSoukoMrId").val($("#JuhacchuuDtBashoTanaSoukoMrId").val());
		InputCalendar.createOnLoaded('JuhacchuuMeisaiDt'+lastRow+'Nouki', {format: 'yyyy-mm-dd', lang:'ja'});
		lastRows[lastRow]=-1;
	}
	
	function removeJuhacchuuMeisaiDt(x) {
		$("#juhacchuu_meisai_dt_"+x).remove();
	}

	function addSikyuuMeisaiDt(this1) {
		var arrayIdData = this1.id.split("_");	//alert(this1.id);//"btnAddSikyuu_9"の形のidが入る。
		var theRow = arrayIdData[1];		//alert(theRow);
		lastRows[theRow]++;			//alert(lastRows[theRow]);
		var newRow = theRow+"_"+lastRows[theRow];	//	alert(newRow);
		cntSikyuu++;
		$("#mytable_"+theRow+" #sikyuu_meisai_dt_"+theRow).clone(true).attr("id","sikyuu_meisai_dt_"+newRow).removeAttr("style").insertBefore("#mytable_"+theRow+" #trAddSikyuu_"+theRow);
		$("#sikyuu_meisai_dt_"+newRow+" #btnDelSikyuu0").attr("id","btnDelSikyuu_"+newRow);	//"btnDelSikyuu_9_9"の形のidになる。
		$("#sikyuu_meisai_dt_"+newRow+" #unused0GyouBangou"         ).attr("id","SikyuuJuhacchuuMeisaiDt"+cntSikyuu+"GyouBangou"        ).attr("name","data[SikyuuJuhacchuuMeisaiDt]["+cntSikyuu+"][gyou_bangou]")  ;
		$("#sikyuu_meisai_dt_"+newRow+" #hinmoku_prettyPopin00"     ).attr('onclick','hinmoku_prettyPopin('+cntSikyuu+',"Sikyuu")');
		$("#sikyuu_meisai_dt_"+newRow+" #unused0HinmokuMrId"        ).attr("id","SikyuuJuhacchuuMeisaiDt"+cntSikyuu+"HinmokuMrId"       ).attr("name","data[SikyuuJuhacchuuMeisaiDt]["+cntSikyuu+"][hinmoku_mr_id]");
		$("#sikyuu_meisai_dt_"+newRow+" #sikyuu0HinmokuCode"        ).attr("id","unusedSikyuu"           +cntSikyuu+"HinmokuCode"       ).attr("name","data[unusedSikyuu]["+cntSikyuu+"][hinmoku_code]")            ;
		$("#sikyuu_meisai_dt_"+newRow+" #unused0HinmokuMei"         ).attr("id","SikyuuJuhacchuuMeisaiDt"+cntSikyuu+"HinmokuMei"        ).attr("name","data[SikyuuJuhacchuuMeisaiDt]["+cntSikyuu+"][hinmoku_mei]")  ;
		$("#sikyuu_meisai_dt_"+newRow+" #unused0Lot"                ).attr("id","SikyuuJuhacchuuMeisaiDt"+cntSikyuu+"Lot"               ).attr("name","data[SikyuuJuhacchuuMeisaiDt]["+cntSikyuu+"][lot]")          ;
		$("#sikyuu_meisai_dt_"+newRow+" #unused0Suu"                ).attr("id","SikyuuJuhacchuuMeisaiDt"+cntSikyuu+"Suu"               ).attr("name","data[SikyuuJuhacchuuMeisaiDt]["+cntSikyuu+"][suu]")          ;
		$("#sikyuu_meisai_dt_"+newRow+" #unused0TanniMrId"          ).attr("id","SikyuuJuhacchuuMeisaiDt"+cntSikyuu+"TanniMrId"         ).attr("name","data[SikyuuJuhacchuuMeisaiDt]["+cntSikyuu+"][tanni_mr_id]")  ;
		$("#sikyuu_meisai_dt_"+newRow+" #unused0Suu2"               ).attr("id","SikyuuJuhacchuuMeisaiDt"+cntSikyuu+"Suu2"              ).attr("name","data[SikyuuJuhacchuuMeisaiDt]["+cntSikyuu+"][suu2]")         ;
		$("#sikyuu_meisai_dt_"+newRow+" #unused0TanniMr2Id"         ).attr("id","SikyuuJuhacchuuMeisaiDt"+cntSikyuu+"TanniMr2Id"        ).attr("name","data[SikyuuJuhacchuuMeisaiDt]["+cntSikyuu+"][tanni_mr2_id]") ;
		$("#sikyuu_meisai_dt_"+newRow+" #unused0TankaIti"           ).attr("id","SikyuuJuhacchuuMeisaiDt"+cntSikyuu+"TankaIti"          ).attr("name","data[SikyuuJuhacchuuMeisaiDt]["+cntSikyuu+"][tanka_iti]")    ;
		$("#sikyuu_meisai_dt_"+newRow+" #unused0OyaJuhacchuuMeisaiDtId").attr("id","SikyuuJuhacchuuMeisaiDt"+cntSikyuu+"OyaJuhacchuuMeisaiDtId").attr("name","data[SikyuuJuhacchuuMeisaiDt]["+cntSikyuu+"][OyaJuhacchuuMeisaiDtId]");
		$("#sikyuu_meisai_dt_"+newRow+" #unused0SikyuuTanni"        ).attr("id","SikyuuJuhacchuuMeisaiDt"+cntSikyuu+"SikyuuTanni"       ).attr("name","data[SikyuuJuhacchuuMeisaiDt]["+cntSikyuu+"][SikyuuTanni]")  ;
		$("#sikyuu_meisai_dt_"+newRow+" #unused0Bikou"              ).attr("id","SikyuuJuhacchuuMeisaiDt"+cntSikyuu+"Bikou"             ).attr("name","data[SikyuuJuhacchuuMeisaiDt]["+cntSikyuu+"][bikou]")        ;
		$("#sikyuu_meisai_dt_"+newRow+" #unused0BashoTanaSoukoMrId" ).attr("id","SikyuuJuhacchuuMeisaiDt"+cntSikyuu+"BashoTanaSoukoMrId").attr("name","data[SikyuuJuhacchuuMeisaiDt]["+cntSikyuu+"][basho_tana_souko_mr_id]");
		$("#SikyuuJuhacchuuMeisaiDt"+cntSikyuu+"GyouBangou").val(1+lastRows[theRow]);
	}

	function delSikyuuMeisaiDt(this1) {
		var theRows = this1.id.replace("btnDelSikyuu","");	alert(this1.id);
		$("#sikyuu_meisai_dt"+theRows).remove();
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
