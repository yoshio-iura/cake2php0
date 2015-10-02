<div class="juhacchuuDts form">
<?php echo $this->Form->create('JuhacchuuDt'); ?>
	<fieldset>
		<legend><?php echo __d('cake', ucfirst($this->action).' %s', __('Juhacchuu Dt')); ?></legend>
	<?php
		if ($this->action == 'edit') {
			echo $this->Form->input('id');
		}
		echo '<table class="tbl1">'.$this->Html->tableHeaders(array('コード','受注フラグ','日付','取引先コード','名称'))
			.$this->Html->tableCells(array(
			$this->Form->input('JuhacchuuDt.code',array('label'=>'')),
			$this->Form->input('JuhacchuuDt.juchuu_flg',array('label'=>'', 'onclick'=>'chkdisp(this,"juchuu_nomi")')),
			$this->Form->input('JuhacchuuDt.bi',array('label'=>'','type'=>'text','size'=>"10")),
			$this->Form->input('unused.torihikisaki_code',array('label'=>'','type'=>'text','size'=>"5",'onchange'=>'changeTorihikisakiCode(this)')),
			$this->Form->input('unused.torihikisaki_mei',array('label'=>'','readonly'=>'readonly','size'=>"20")),
		)).'</table>';
		echo $this->Form->hidden('JuhacchuuDt.torihikisaki_mr_id');
		echo '<table class="tbl1" id="juchuu_nomi" style="display:none;">'.$this->Html->tableHeaders(array('受注なら出荷先','受注なら気付先'))
			.$this->Html->tableCells(array(
			$this->Form->input('JuhacchuuDt.shukka_torihikisaki_mr_id',array('label'=>'')),
			$this->Form->input('JuhacchuuDt.kituke_torihikisaki_mr_id',array('label'=>'')),
		)).'</table>';
		echo '<table class="tbl1">'.$this->Html->tableHeaders(array(array('担当者'=>array('colspan'=>2)),'部門ID','納期'))
			.$this->Html->tableCells(array(
			$this->Form->input('JuhacchuuDt.user_id',array('label'=>'','empty' => '')),
			$this->Html->link('検索', '/users/popup', array('rel' => 'browse_user')),
			$this->Form->input('JuhacchuuDt.bumon_mr_id',array('label'=>'','empty' => '')),
			$this->Form->input('JuhacchuuDt.nouki',array('label'=>'','type'=>'text','size'=>"10")),
		)).'</table>';
		echo '<table class="tbl1">'.$this->Html->tableHeaders(array('備考'))
			.$this->Html->tableCells(array(
			$this->Form->input('JuhacchuuDt.bikou',array('label'=>'')),
		)).'</table>';
		echo '<table class="tbl1">'.$this->Html->tableHeaders(array('元受注番号','場所棚倉庫ID','金額合計','消費税金額','内税フラグ','纏め課税フラグ'))
			.$this->Html->tableCells(array(
			$this->Form->input('JuhacchuuDt.juchuu_dt_id',array('label'=>'')),
			$this->Form->input('JuhacchuuDt.basho_tana_souko_mr_id',array('label'=>'','empty' => '')),
			$this->Form->input('JuhacchuuDt.kingaku_goukei',array('label'=>'', 'style'=>'text-align:right')),
			$this->Form->input('JuhacchuuDt.shouhizei_kingaku',array('label'=>'', 'style'=>'text-align:right')),
			$this->Form->input('JuhacchuuDt.utizei_flg',array('label'=>'')),
			$this->Form->input('JuhacchuuDt.matome_kazei_flg',array('label'=>'')),
		)).'</table>';
	/*	echo '<table class="tbl1">'.$this->Html->tableHeaders(array('適用開始日','元ID','禁止フラグ','終了日時'))
			.$this->Html->tableCells(array(
			$this->Form->input('JuhacchuuDt.kaisi_nitiji',array('label'=>'','type'=>'text','size'=>"10")),
			$this->Form->input('JuhacchuuDt.id_moto',array('label'=>'')),
			$this->Form->input('JuhacchuuDt.kinsi_flg',array('label'=>'')),
			$this->Form->input('JuhacchuuDt.shuuryou_nitiji',array('label'=>'','type'=>'text','size'=>"10")),
		)).'</table>';
	*/	echo $this->Form->hidden('JuhacchuuDt.sakusei_user_id', array('value' => $this->action == 'add' ? $loginUser['id'] : ''));
		echo $this->Form->hidden('JuhacchuuDt.kousin_user_id', array('value' => $this->action == 'edit' ? $loginUser['id'] : ''));
	?>
	</fieldset>

	<h3>受発注明細</h3>
	<table id="mytable" class="tbl1">
<!--	<tr><th></th><th>品目ID</th><th>品目名</th><th>ロット</th><th>数量</th><th>単位</th><th>数量2</th><th>単位2</th><th>単位位置</th>
		<th>単価</th><th>内税フラグ</th><th>金額</th><th>消費税率</th><th>納期</th><th>備考</th><th>納入場所</th><th width="30em">行№</th></tr>
-->	<tr id="juhacchuu_meisai_dt0" style="display:none;">
		<td>
		<table><tr>
		<th>品目ID</th>    <td><?php echo $this->Form->input('unused.hinmoku_mr_id' ,array('label'=>'','type'=>'select')); ?></td>
		<th>品目名</th>    <td><?php echo $this->Form->input('unused.hinmoku_mei'   ,array('label'=>'','type'=>'text')); ?></td>
		<th>ロット</th>    <td><?php echo $this->Form->input('unused.lot'           ,array('label'=>'','type'=>'text')); ?></td>
		</tr></table><table><tr>
		<th>数量</th>      <td><?php echo $this->Form->input('unused.suu'           ,array('label'=>'','type'=>'number', 'step'=>'0.01', 'style'=>'text-align:right')); ?></td>
		<th>単位</th>      <td><?php echo $this->Form->input('unused.tanni_mr_id'   ,array('label'=>'','type'=>'select','empty' => '')); ?></td>
		<th>数量2</th>     <td><?php echo $this->Form->input('unused.suu2'          ,array('label'=>'','type'=>'number', 'step'=>'0.01', 'style'=>'text-align:right')); ?></td>
		<th>単位2</th>     <td><?php echo $this->Form->input('unused.tanni_mr2_id'  ,array('label'=>'','type'=>'select','empty' => '')); ?></td>
		<th>単位位置</th>  <td><?php echo $this->Form->input('unused.tanka_iti'     ,array('label'=>'','type'=>'number', 'style'=>'text-align:center')); ?></td>
		<th>単価</th>      <td><?php echo $this->Form->input('unused.tanka'         ,array('label'=>'','type'=>'number', 'step'=>'0.01', 'style'=>'text-align:right')); ?></td>
		<th>内税フラグ</th><td><?php echo $this->Form->input('unused.utizei_flg'    ,array('label'=>'','type'=>'checkbox')); ?></td>
		</tr></table><table><tr>
		<th>金額</th>      <td><?php echo $this->Form->input('unused.kingaku'       ,array('label'=>'','type'=>'number', 'style'=>'text-align:right')); ?></td>
		<th>消費税率</th>  <td><?php echo $this->Form->input('unused.shouhizei_ritu',array('label'=>'','type'=>'number', 'style'=>'text-align:right')); ?></td>
		<th>納期</th>      <td><?php echo $this->Form->input('unused.nouki'         ,array('label'=>'','type'=>'text', 'size'=>'10')); ?></td>
		<th>備考</th>      <td><?php echo $this->Form->input('unused.bikou'         ,array('label'=>'','type'=>'text')); ?></td>
		<th>納入場所</th>  <td><?php echo $this->Form->input('unused.basho_tana_souko_mr_id',array('label'=>'','type'=>'select','empty' => '')); ?></td>
		</tr></table></td><td><table><tr><th width="30em">行№</th></tr><tr>
		<td><?php echo $this->Form->input('unused.gyou_bangou'   ,array('label'=>'','type'=>'number', 'style'=>'text-align:right')); ?></td>
		</tr><tr><th>抹消</th><tr>
		<td><?php echo $this->Form->button('&nbsp;-&nbsp;',array('type'=>'button','title'=>'ここをクリックするとこの行の明細を削除します。')); ?></td>
		</tr></table></td>
<!--		echo $this->Form->input('id');
		echo $this->Form->input('juhacchuu_dt_id');
		echo $this->Form->input('gyou_bangou');
		echo $this->Form->input('hinmoku_mr_id');
		echo $this->Form->input('hinmoku_mei');
		echo $this->Form->input('lot');
		echo $this->Form->input('suu');
		echo $this->Form->input('tanni_mr_id');
		echo $this->Form->input('suu2');
		echo $this->Form->input('tanni_mr2_id');
		echo $this->Form->input('tanka_iti');
		echo $this->Form->input('tanka');
		echo $this->Form->input('utizei_flg');
		echo $this->Form->input('kingaku');
		echo $this->Form->input('shouhizei_ritu');
		echo $this->Form->input('nouki');
		echo $this->Form->input('bikou');
		echo $this->Form->input('basho_tana_souko_mr_id');
		echo $this->Form->input('nouhin_zumi_suu');
		echo $this->Form->input('nouhin_zumi_suu2');
		echo $this->Form->input('youi_zumi_suu');
		echo $this->Form->input('youi_zumi_suu2');
		echo $this->Form->input('kakunin_zumi_suu');
		echo $this->Form->input('kakunin_zumi_suu2');
		echo $this->Form->input('kanryou_flg');
		echo $this->Form->input('order_dt_id');
		echo $this->Form->input('juchuu_meisai_dt_id');
		echo $this->Form->input('kaisi_nitiji');
		echo $this->Form->input('id_moto');
		echo $this->Form->input('kinsi_flg');
		echo $this->Form->input('shuuryou_nitiji');
		echo $this->Form->input('sakusei_user_id');
		echo $this->Form->input('kousin_user_id');
-->	</tr>
	<tr id="trAdd"><td></td><th>追加 <?php echo $this->Form->button('+',array('type'=>'button','title'=>'ここをクリックすると明細の新しい行を追加します。','onclick'=>'addJuhacchuuMeisaiDt()')); ?> </th></tr>
	</table>

<?php echo $this->Form->end(__d('cake', 'Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __d('cake', 'Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__d('cake', 'Delete'), array('action' => 'delete', $this->Form->value('JuhacchuuDt.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('JuhacchuuDt.id')))); ?></li>
		<li><?php echo $this->Html->link(__d('cake', 'List %s', __('Juhacchuu Dts')), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__d('cake', 'List %s', __('Torihikisaki Mrs')), array('controller' => 'torihikisaki_mrs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__d('cake', 'New %s', __('Torihikisaki Mr')), array('controller' => 'torihikisaki_mrs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__d('cake', 'List %s', __('Users')), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__d('cake', 'New %s', __('User')), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__d('cake', 'List %s', __('Bumon Mrs')), array('controller' => 'bumon_mrs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__d('cake', 'New %s', __('Bumon Mr')), array('controller' => 'bumon_mrs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__d('cake', 'List %s', __('Juchuu Dts')), array('controller' => 'juchuu_dts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__d('cake', 'New %s', __('Juchuu Dt')), array('controller' => 'juchuu_dts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__d('cake', 'List %s', __('Basho Tana Souko Mrs')), array('controller' => 'basho_tana_souko_mrs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__d('cake', 'New %s', __('Basho Tana Souko Mr')), array('controller' => 'basho_tana_souko_mrs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__d('cake', 'List %s', __('Juhacchuu Meisai Dts')), array('controller' => 'juhacchuu_meisai_dts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__d('cake', 'New %s', __('Juhacchuu Meisai Dt')), array('controller' => 'juhacchuu_meisai_dts', 'action' => 'add')); ?> </li>
	</ul>
</div>

<!-- jQueryとprototype.jsを共存させる方法 http://select.rash.jp/jquery/760/ -->
<!-- 1:prototype.jsを読み込む \app\View\Layouts\default.ctp のHEADで読み込んである -->
<!-- 2：prototypeを動かすための記述を書き込む  -->
	<!-- 日付選択ボックス -->
<script type="text/javascript">
	InputCalendar.createOnLoaded('JuhacchuuDtBi', {format: 'yyyy-mm-dd', lang:'ja'});
	InputCalendar.createOnLoaded('JuhacchuuDtNouki', {format: 'yyyy-mm-dd', lang:'ja'});
	InputCalendar.createOnLoaded('JuhacchuuMeisaiDt0UkeireYoteiBi', {format: 'yyyy-mm-dd', lang:'ja'});
</script>

<!-- 3：jQueryを読み込み -->
<?php echo $this->Html->script(array('jquery-1.6.4.min'));?>
<!-- 4：同時に動かすための専用のコードを記述 -->
<script type="text/javascript">
	jQuery.noConflict();
	var j$ = jQuery;
</script>

<!-- 5：jQueryを動かすプラグインの記述 -->
<?php echo $this->Html->css(array('prettyPopin'), array('inline'=>false)) ;?>
<?php echo $this->Html->script(array('jquery.prettyPopin')) ;?>

<!-- 6：jQueryライブラリで定義されている$をすべてj$に変更 -->
	<!-- 検索ウィンドウ -->
<script type="text/javascript">
user_id = 0;
j$(function(){
	j$("a[rel^='browse_user']").prettyPopin({
		modal : true,
		width : 800,
		height: 700,
		opacity: 0.5,
		animationSpeed: '0', 
		followScroll: false,
		loader_path: '<?php echo $this->webroot; ?>/img/prettyPopin/loader.gif',
		callback: function(){
			if(user_id > 0) {
				document.getElementById('JuhacchuuDtUserId').value=user_id;
			}
			user_id = 0;
		}
	})
	j$("#unusedTorihikisakiCode").bind("change",function (event) {
		var torihikisaki_code = j$(this).val();
		j$.ajax({
			type:"POST",
			data:{'torihikisaki_code':torihikisaki_code,},
			async:true,
			dataType:"html",
			success: function (data, textStatus) {j$("#unusedTorihikisakiMei").val(data);},
			url:<?php echo "'".$this->Html->url(array('controller' => 'torihikisaki_mrs', 'action' => 'ajaxget'))."'"; ?>
		});
		return false;
	});
});
</script>

	<!-- 明細行追加削除 -->
<script type='text/javascript'>
	var lastRow=0;
	addJuhacchuuMeisaiDt();
	
	function addJuhacchuuMeisaiDt() {
		lastRow++;
		j$("#mytable tbody>tr:#juhacchuu_meisai_dt0").clone(true).attr('id','juhacchuu_meisai_dt'+lastRow).removeAttr('style').insertBefore("#mytable tbody>tr:#trAdd");
		j$("#juhacchuu_meisai_dt"+lastRow+" button").attr('onclick','removeJuhacchuuMeisaiDt('+lastRow+')');
		j$("#juhacchuu_meisai_dt"+lastRow+" select:first").attr('name','data[JuhacchuuMeisaiDt]['+lastRow+'][hinmoku_mr_id]').attr('id','JuhacchuuMeisaiDt'+lastRow+'hinmoku_mr_id');
		j$("#juhacchuu_meisai_dt"+lastRow+" input:first").attr('name','data[JuhacchuuMeisaiDt]['+lastRow+'][hinmoku_mei]')  .attr('id','JuhacchuuMeisaiDt'+lastRow+'hinmoku_mei');
		j$("#juhacchuu_meisai_dt"+lastRow+" input:eq(1)").attr('name','data[JuhacchuuMeisaiDt]['+lastRow+'][lot]')          .attr('id','JuhacchuuMeisaiDt'+lastRow+'lot');
		j$("#juhacchuu_meisai_dt"+lastRow+" input:eq(2)").attr('name','data[JuhacchuuMeisaiDt]['+lastRow+'][suu]')          .attr('id','JuhacchuuMeisaiDt'+lastRow+'Suu');
		j$("#juhacchuu_meisai_dt"+lastRow+" select:eq(1)").attr('name','data[JuhacchuuMeisaiDt]['+lastRow+'][tanni_mr_id]')  .attr('id','JuhacchuuMeisaiDt'+lastRow+'tanni_mr_id');
		j$("#juhacchuu_meisai_dt"+lastRow+" input:eq(3)").attr('name','data[JuhacchuuMeisaiDt]['+lastRow+'][suu2]')         .attr('id','JuhacchuuMeisaiDt'+lastRow+'Suu2');
		j$("#juhacchuu_meisai_dt"+lastRow+" select:eq(2)").attr('name','data[JuhacchuuMeisaiDt]['+lastRow+'][tanni_mr2_id]') .attr('id','JuhacchuuMeisaiDt'+lastRow+'tanni_mr2_id');
		j$("#juhacchuu_meisai_dt"+lastRow+" input:eq(4)").attr('name','data[JuhacchuuMeisaiDt]['+lastRow+'][tanka_iti]')    .attr('id','JuhacchuuMeisaiDt'+lastRow+'tanka_iti');
		j$("#juhacchuu_meisai_dt"+lastRow+" input:eq(5)").attr('name','data[JuhacchuuMeisaiDt]['+lastRow+'][tanka]')        .attr('id','JuhacchuuMeisaiDt'+lastRow+'Tanka');
		j$("#juhacchuu_meisai_dt"+lastRow+" input:eq(7)").attr('name','data[JuhacchuuMeisaiDt]['+lastRow+'][utizei_flg]')  .attr('id','JuhacchuuMeisaiDt'+lastRow+'utizei_flg');
		j$("#juhacchuu_meisai_dt"+lastRow+" input:eq(8)").attr('name','data[JuhacchuuMeisaiDt]['+lastRow+'][kingaku]')     .attr('id','JuhacchuuMeisaiDt'+lastRow+'kingaku');
		j$("#juhacchuu_meisai_dt"+lastRow+" input:eq(9)").attr('name','data[JuhacchuuMeisaiDt]['+lastRow+'][shouhizei_ritu]').attr('id','JuhacchuuMeisaiDt'+lastRow+'shouhizei_ritu');
		j$("#juhacchuu_meisai_dt"+lastRow+" input:eq(10)").attr('name','data[JuhacchuuMeisaiDt]['+lastRow+'][nouki]')       .attr('id','JuhacchuuMeisaiDt'+lastRow+'nouki');
		j$("#juhacchuu_meisai_dt"+lastRow+" input:eq(11)").attr('name','data[JuhacchuuMeisaiDt]['+lastRow+'][bikou]')       .attr('id','JuhacchuuMeisaiDt'+lastRow+'Bikou');
		j$("#juhacchuu_meisai_dt"+lastRow+" select:eq(3)").attr('name','data[JuhacchuuMeisaiDt]['+lastRow+'][basho_tana_souko_mr_id]').attr('id','JuhacchuuMeisaiDt'+lastRow+'basho_tana_souko_mr_id');
		j$("#juhacchuu_meisai_dt"+lastRow+" input:eq(12)").attr('name','data[JuhacchuuMeisaiDt]['+lastRow+'][gyou_bangou]') .attr('id','JuhacchuuMeisaiDt'+lastRow+'GyouBangou');
	}
	
	function removeJuhacchuuMeisaiDt(x) {
		j$("#juhacchuu_meisai_dt"+x).remove();
	}
</script>

	<!-- 受注フラグON-OFF -->
<script type='text/javascript'>
	function chkdisp( obj,id ) {
//	alert(obj+" "+id)
		if( obj.checked ){
			document.getElementById(id).style.display = "block";
		} else {
			document.getElementById(id).style.display = "none";
		}
	}
</script>

<!-- 高密度表示 -->
<?php echo $this->Html->css(array('iura'), array('inline'=>false)) ;?>

