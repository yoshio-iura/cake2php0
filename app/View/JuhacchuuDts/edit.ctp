<div class="juhacchuuDts form">
<?php echo $this->Form->create('JuhacchuuDt'); ?>
	<fieldset>
		<legend><?php echo __d('cake', ucfirst($this->action).' %s', __('Juhacchuu Dt')); ?></legend>
	<?php
		if ($this->action == 'edit') {
			echo $this->Form->input('id');
		}
		echo '<table class="tbl1">'.$this->Html->tableHeaders(array('コード','受注フラグ','日付',
				$this->Html->link('取引先コード', '/torihikisaki_mrs/popup', array('rel' => 'prettyPopin','title'=>'ここをクリックすると取引先検索画面になります。')),'名称'))
			.$this->Html->tableCells(array(
			$this->Form->input('JuhacchuuDt.code',array('label'=>'')),
			$this->Form->input('JuhacchuuDt.juchuu_flg',array('label'=>'')),
			$this->Form->input('JuhacchuuDt.bi',array('label'=>'','type'=>'text','size'=>"10")),
			$this->Form->input('unused.torihikisaki_code',array('label'=>'','type'=>'text','size'=>"5",'onchange'=>'change_torihikisaki(this)')),
			$this->Form->input('unused.torihikisaki_name',array('label'=>'','readonly'=>'readonly','size'=>"40")),
		)).'</table>';
		echo $this->Form->hidden('JuhacchuuDt.torihikisaki_mr_id',array('label'=>'','type'=>'text','size'=>"10"));
		echo $this->Form->hidden('JuhacchuuDt.shukka_torihikisaki_mr_id',array('label'=>'','type'=>'text','size'=>"10"));
		echo $this->Form->hidden('JuhacchuuDt.kituke_torihikisaki_mr_id',array('label'=>'','type'=>'text','size'=>"10"));
		echo '<table class="tbl1">'.$this->Html->tableHeaders(array(
							$this->Html->link('出荷先コード', '/torihikisaki_mrs/popup', array('rel' => 'prettyPopin','title'=>'ここをクリックすると出荷先検索画面になります。')),
							'出荷先名称',
							$this->Html->link('気付先コード', '/torihikisaki_mrs/popup', array('rel' => 'prettyPopin','title'=>'ここをクリックすると気付先検索画面になります。')),
							'気付先名称'))
			.$this->Html->tableCells(array(
			$this->Form->input('unused.shukka_torihikisaki_code',array('label'=>'','type'=>'text','size'=>"5",'onchange'=>'change_torihikisaki(this)')),
			$this->Form->input('unused.shukka_torihikisaki_name',array('label'=>'','readonly'=>'readonly','size'=>"40")),
			$this->Form->input('unused.kituke_torihikisaki_code',array('label'=>'','type'=>'text','size'=>"5",'onchange'=>'change_torihikisaki(this)')),
			$this->Form->input('unused.kituke_torihikisaki_name',array('label'=>'','readonly'=>'readonly','size'=>"40")),
		)).'</table>';
		echo '<table class="tbl1">'.$this->Html->tableHeaders(array('担当者','部門ID','納期'))
			.$this->Html->tableCells(array(
			$this->Form->input('JuhacchuuDt.user_id',array('label'=>'','empty' => '')),
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
	<?php echo $this->Html->link('品目CD', '/hinmoku_mrs/popup', array('rel' => 'prettyPopin', 'id'=>'hinmoku_popup', 'style'=>'display:none;')); ?>
	<table id="mytable" class="tbl1">
	<tr id="juhacchuu_meisai_dt0" style="display:none;">
		<td><table><tbody><tr><th width="30em">行№</th></tr><tr>
		<td><?php echo $this->Form->input('unused.gyou_bangou'   ,array('label'=>'','type'=>'number', 'style'=>'text-align:right')); ?></td>
		</tr><tr><th><?php echo $this->Form->button('削除',array('id'=>'removeJuhacchuuMeisaiDt0','type'=>'button','title'=>'ここをクリックするとこの行の明細を削除します。')); ?></th>
		</tr></table></td><td>
		<?php echo $this->Form->hidden('unused.hinmoku_mr_id' ,array('label'=>'','type'=>'text')); ?>
		<table><tr>
		<th><?php echo $this->Form->button('品目CD',array('id'=>'hinmoku_prettyPopin0','type'=>'button','title'=>'ここをクリックすると品目検索画面になります。')); ?>
		</th>		   <td><?php echo $this->Form->input('unused.hinmoku_code' ,array('label'=>'','type'=>'text','size'=>"10",'onchange'=>'change_hinmoku(this)')); ?></td>
		<th>品目名</th>    <td><?php echo $this->Form->input('unused.hinmoku_mei'   ,array('label'=>'','type'=>'text','size'=>"40")); ?></td>
		<th>ロット</th>    <td><?php echo $this->Form->input('unused.lot'           ,array('label'=>'','type'=>'text')); ?></td>
		</tr></table><table><tr>
		<th>数量</th>      <td><?php echo $this->Form->input('unused.suu'           ,array('label'=>'','type'=>'number', 'step'=>'0.01', 'style'=>'text-align:right', 'onchange'=>'change_kingaku(this)')); ?></td>
		<th>単位</th>      <td><?php echo $this->Form->input('unused.tanni_mr_id'   ,array('label'=>'','type'=>'select','empty' => '')); ?></td>
		<th>数量2</th>     <td><?php echo $this->Form->input('unused.suu2'          ,array('label'=>'','type'=>'number', 'step'=>'0.01', 'style'=>'text-align:right', 'onchange'=>'change_kingaku(this)')); ?></td>
		<th>単位2</th>     <td><?php echo $this->Form->input('unused.tanni_mr2_id'  ,array('label'=>'','type'=>'select','empty' => '')); ?></td>
		<th>単位位置</th>  <td><?php echo $this->Form->input('unused.tanka_iti'     ,array('label'=>'','type'=>'number', 'size'=>'1', 'style'=>'text-align:center', 'onchange'=>'change_kingaku(this)')); ?></td>
		</tr></table><table><tr>
		<th>単価</th>      <td><?php echo $this->Form->input('unused.tanka'         ,array('label'=>'','type'=>'number', 'step'=>'0.01', 'style'=>'text-align:right', 'onchange'=>'change_kingaku(this)')); ?></td>
		<th>内税フラグ</th><td><?php echo $this->Form->input('unused.utizei_flg'    ,array('label'=>'','type'=>'checkbox', 'onchange'=>'change_kingaku(this)')); ?></td>
		<th>金額</th>      <td><?php echo $this->Form->input('unused.kingaku'       ,array('label'=>'','type'=>'number', 'style'=>'text-align:right')); ?></td>
		<th>消費税率</th>  <td><?php echo $this->Form->input('unused.shouhizei_ritu',array('label'=>'','type'=>'number', 'style'=>'text-align:right', 'onchange'=>'change_kingaku(this)')); ?></td>
		</tr></table><table><tr>
		<th>納期</th>      <td><?php echo $this->Form->input('unused.nouki'         ,array('label'=>'','type'=>'text', 'size'=>'10')); ?></td>
		<th>備考</th>      <td><?php echo $this->Form->input('unused.bikou'         ,array('label'=>'','type'=>'text', 'size'=>'40')); ?></td>
		<th>納入場所</th>  <td><?php echo $this->Form->input('unused.basho_tana_souko_mr_id',array('label'=>'','type'=>'select','empty' => '')); ?></td>
		</tr></table><table id=mytable0><tbody><tr id="sikyuu_meisai_dt0" style="display:none;">
			<th width="30em">支給行№
			<br><?php echo $this->Form->input('unused0.gyou_bangou'   ,array('label'=>'','type'=>'number', 'style'=>'text-align:right')); ?>
			<br><?php echo $this->Form->button('削除',array('type'=>'button','id'=>'btnDelSikyuu0','onclick'=>'delSikyuuMeisaiDt(this)','title'=>'ここをクリックするとこの行の支給明細を削除します。')); ?>
			</th>
			<td><table><tr>
			<th><?php echo $this->Form->button('支給品CD',array('id'=>'hinmoku_prettyPopin00','type'=>'button','title'=>'ここをクリックすると品目検索画面になります。')); ?>
			</th>		   <td><?php echo $this->Form->input('unused0.hinmoku_code'  ,array('label'=>'','type'=>'text','size'=>"10",'onchange'=>'change_hinmoku(this)')); ?></td>
			<th>品目名</th>    <td><?php echo $this->Form->input('unused0.hinmoku_mei'   ,array('label'=>'','type'=>'text','size'=>"40")); ?></td>
			<th>ロット</th>    <td><?php echo $this->Form->input('unused0.lot'           ,array('label'=>'','type'=>'text')); ?></td>
			</tr></table><table><tr>
			<th>所要単位</th>  <td><?php echo $this->Form->input('unused0.shoyou_tanni'   ,array('label'=>'','type'=>'number', 'step'=>'0.01', 'style'=>'text-align:right')); ?></td>
			<th>所要数量</th>  <td><?php echo $this->Form->input('unused0.suu'           ,array('label'=>'','type'=>'number', 'step'=>'0.01', 'style'=>'text-align:right')); ?></td>
			<th>単位</th>      <td><?php echo $this->Form->input('unused0.tanni_mr_id'   ,array('label'=>'','type'=>'select','empty' => '')); ?></td>
			<th>所要数量2</th> <td><?php echo $this->Form->input('unused0.suu2'          ,array('label'=>'','type'=>'number', 'step'=>'0.01', 'style'=>'text-align:right')); ?></td>
			<th>単位2</th>     <td><?php echo $this->Form->input('unused0.tanni_mr2_id'  ,array('label'=>'','type'=>'select','empty' => '')); ?></td>
			</tr></table><table><tr>
			<th>単位位置</th>  <td><?php echo $this->Form->input('unused0.tanka_iti'     ,array('label'=>'','type'=>'number', 'size'=>'1', 'style'=>'text-align:center')); ?></td>
			<th>備考</th>      <td><?php echo $this->Form->input('unused0.bikou'         ,array('label'=>'','type'=>'text', 'size'=>'40')); ?></td>
			<th>納入場所</th>  <td><?php echo $this->Form->input('unused0.basho_tana_souko_mr_id',array('label'=>'','type'=>'select','empty' => '')); ?></td>
			</tr></table></td>
			</tr>
			<tr id="trAddSikyuu0"><th><?php echo $this->Form->button('支給追加',array('type'=>'button','id'=>'btnAddSikyuu0','onclick'=>'addSikyuuMeisaiDt(this)','title'=>'ここをクリックすると支給の新しい行を追加します。')); ?> </th>
			</tr>
		</tbody></table></td>
	</tr>
	<tr id="trAdd"><th><?php echo $this->Form->button('追加',array('type'=>'button','title'=>'ここをクリックすると明細の新しい行を追加します。','onclick'=>'addJuhacchuuMeisaiDt()')); ?> </th><td></td></tr>
	</tbody></table>

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
	InputCalendar.createOnLoaded('JuhacchuuMeisaiDt2Nouki', {format: 'yyyy-mm-dd', lang:'ja'});
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
torihikisaki_mr_id = '';
torihikisaki_mr_code = '';
torihikisaki_mr_name = '';
hinmoku_mr_id = '';
hinmoku_mr_code = '';
hinmoku_mr_name = '';
hinmoku_popup_gyou = 0;
hinmoku_popup_sikyuu = "";
j$(function(){
	j$("a[rel^='prettyPopin']:eq(0)").prettyPopin({//取引先検索
		modal : true,
		width : 800,
		height: 700,
		opacity: 0.5,
		animationSpeed: '0', 
		followScroll: false,
		loader_path: '<?php echo $this->webroot; ?>/img/prettyPopin/loader.gif',
		callback: function(){
			if(torihikisaki_mr_code > '') {
				j$("#JuhacchuuDtTorihikisakiMrId").val(torihikisaki_mr_id);
				j$("#unusedTorihikisakiCode").val(torihikisaki_mr_code);
				j$("#unusedTorihikisakiName").val(torihikisaki_mr_name);
			}
			torihikisaki_mr_code = '';
		}
	});
	j$("a[rel^='prettyPopin']:eq(1)").prettyPopin({//出荷先検索
		modal : true,
		width : 800,
		height: 700,
		opacity: 0.5,
		animationSpeed: '0', 
		followScroll: false,
		loader_path: '<?php echo $this->webroot; ?>/img/prettyPopin/loader.gif',
		callback: function(){
			if(torihikisaki_mr_code > '') {
				j$("#JuhacchuuDtShukkaTorihikisakiMrId").val(torihikisaki_mr_id);
				j$("#unusedShukkaTorihikisakiCode").val(torihikisaki_mr_code);
				j$("#unusedShukkaTorihikisakiName").val(torihikisaki_mr_name);
			}
			torihikisaki_mr_code = '';
		}
	});
	j$("a[rel^='prettyPopin']:eq(2)").prettyPopin({//気付先検索
		modal : true,
		width : 800,
		height: 700,
		opacity: 0.5,
		animationSpeed: '0', 
		followScroll: false,
		loader_path: '<?php echo $this->webroot; ?>/img/prettyPopin/loader.gif',
		callback: function(){
			if(torihikisaki_mr_code > '') {
				j$("#JuhacchuuDtKitukeTorihikisakiMrId").val(torihikisaki_mr_id);
				j$("#unusedKitukeTorihikisakiCode").val(torihikisaki_mr_code);
				j$("#unusedKitukeTorihikisakiName").val(torihikisaki_mr_name);
			}
			torihikisaki_mr_code = '';
		}
	});
	j$("a[rel^='prettyPopin']:eq(3)").prettyPopin({//品目検索
		modal : true,
		width : 800,
		height: 700,
		opacity: 0.5,
		animationSpeed: '0', 
		followScroll: false,
		loader_path: '<?php echo $this->webroot; ?>/img/prettyPopin/loader.gif',
		callback: function(){
			if(hinmoku_mr_code > '') {
				j$("#"+hinmoku_popup_sikyuu+"JuhacchuuMeisaiDt"+hinmoku_popup_gyou+"HinmokuMrId").val(hinmoku_mr_id);
				j$("#unused"+hinmoku_popup_sikyuu+hinmoku_popup_gyou+"HinmokuCode").val(hinmoku_mr_code);
				j$("#"+hinmoku_popup_sikyuu+"JuhacchuuMeisaiDt"+hinmoku_popup_gyou+"HinmokuMei").val(hinmoku_mr_name);
			}
			hinmoku_mr_code = '';
		}
	});
});

function change_torihikisaki(this1){
	var torihikisaki_code = this1.value;
	var target_torihikisaki = this1.id.replace("unused","").replace("Code","");
	j$.ajax({
		type:"POST",
		data:{'torihikisaki_code':torihikisaki_code,},
		async:true,
		dataType: 'json',
		success: function (data, textStatus) {
			j$("#JuhacchuuDt"+target_torihikisaki+"MrId").val(data.TorihikisakiMr.id);
			j$("#unused"+target_torihikisaki+"Name").val(data.TorihikisakiMr.name);
		},
		url:<?php echo "'".$this->Html->url(array('controller' => 'torihikisaki_mrs', 'action' => 'ajaxget'))."'"; ?>
	});
	return false;
}
function change_hinmoku(this1){
	var hinmoku_code = this1.value;
	//alert(this1.name);//this1.nameはdata[unused][1][hinmoku_code]の文字列、これを']['で分割した2番目が行番号となる。
	//alert(this1.name);//this1.nameはdata[unusedSikyuu][1][hinmoku_code]の文字列、これを']['で分割した2番目が行番号となる。
	var arrayNameData = this1.name.split('\]\[');
	if(arrayNameData[0].slice(-6)=="Sikyuu"){
		hinmoku_popup_sikyuu = "Sikyuu";
	}else{	hinmoku_popup_sikyuu = "";
	}
	j$.ajax({
		type:"POST",
		data:{'hinmoku_code':hinmoku_code,},
		async:true,
		dataType: 'json',
		success: function (data, textStatus) {
			j$("#"+hinmoku_popup_sikyuu+"JuhacchuuMeisaiDt"+arrayNameData[1]+"HinmokuMrId").val(data.HinmokuMr.id);
			j$("#"+hinmoku_popup_sikyuu+"JuhacchuuMeisaiDt"+arrayNameData[1]+"HinmokuMei").val(data.HinmokuMr.name);
		},
		url:<?php echo "'".$this->Html->url(array('controller' => 'hinmoku_mrs', 'action' => 'ajaxget'))."'"; ?>
	});
	return false;
}
function hinmoku_prettyPopin(this1,sikyuu=""){
//alert(this1);
	hinmoku_popup_gyou = this1;
	hinmoku_popup_sikyuu = sikyuu;
	document.getElementById('hinmoku_popup').click();//$(#hinmoku_popup')[0].click();
}
function change_kingaku(this1){
	//alert(this1.name);//this1.nameはdata[unused][1][hinmoku_code]の文字列、これを']['で分割した2番目が行番号となる。
	var arrayNameData = this1.name.split('\]\[');
	var gyou=arrayNameData[1];//gyou=''は明細でない。
	if(j$("#JuhacchuuMeisaiDt"+gyou+"TankaIti").val()==2){
		suuryou=j$("#JuhacchuuMeisaiDt"+gyou+"Suu2").val();
	}else{	suuryou=j$("#JuhacchuuMeisaiDt"+gyou+"Suu").val();
	}
	kingaku=Math.round(j$("#JuhacchuuMeisaiDt"+gyou+"Tanka").val()*suuryou);
	j$("#JuhacchuuMeisaiDt"+gyou+"Kingaku").val(kingaku);
	kingaku_goukei=0;
	shouhizei_kingaku=0;
	for (var i = 1; i <= lastRow; i++) {
		kingaku_goukei += 1*(j$("#JuhacchuuMeisaiDt"+i+"Kingaku").val());
		if(j$("#JuhacchuuMeisaiDt"+i+"UtizeiFlg").prop('checked')){
			shouhizei_kingaku += Math.round(j$("#JuhacchuuMeisaiDt"+i+"Kingaku").val() * j$("#JuhacchuuMeisaiDt"+i+"ShouhizeiRitu").val() / (1 * j$("#JuhacchuuMeisaiDt"+i+"ShouhizeiRitu").val() + 100 ));
		}else{
			shouhizei_kingaku += Math.round(j$("#JuhacchuuMeisaiDt"+i+"Kingaku").val() * j$("#JuhacchuuMeisaiDt"+i+"ShouhizeiRitu").val() / 100);
			kingaku_goukei += Math.round(j$("#JuhacchuuMeisaiDt"+i+"Kingaku").val() * j$("#JuhacchuuMeisaiDt"+i+"ShouhizeiRitu").val() / 100);
		}
	}
	j$("#JuhacchuuDtKingakuGoukei").val(kingaku_goukei);
	j$("#JuhacchuuDtShouhizeiKingaku").val(shouhizei_kingaku);
}
</script>

	<!-- 明細行追加削除 -->
<script type='text/javascript'>
	var lastRow=0;
	var lastRows=new Array();
	var cntSikyuu=0;
	addJuhacchuuMeisaiDt();
	
	function addJuhacchuuMeisaiDt() {
		lastRow++;
		j$("#mytable tbody>tr:#juhacchuu_meisai_dt0").clone(true).attr('id','juhacchuu_meisai_dt'+lastRow).removeAttr('style').insertBefore("#mytable tbody>tr:#trAdd");
		j$("#juhacchuu_meisai_dt"+lastRow+" #removeJuhacchuuMeisaiDt0" ).attr('onclick','removeJuhacchuuMeisaiDt('+lastRow+')');
		j$("#juhacchuu_meisai_dt"+lastRow+" #hinmoku_prettyPopin0"     ).attr('onclick','hinmoku_prettyPopin('+lastRow+')');
		j$("#juhacchuu_meisai_dt"+lastRow+" #unusedGyouBangou"         ).attr('id','JuhacchuuMeisaiDt'+lastRow+'GyouBangou'        ).attr('name','data[JuhacchuuMeisaiDt]['+lastRow+'][gyou_bangou]')  ;
		j$("#juhacchuu_meisai_dt"+lastRow+" #unusedHinmokuMrId"        ).attr('id','JuhacchuuMeisaiDt'+lastRow+'HinmokuMrId'       ).attr('name','data[JuhacchuuMeisaiDt]['+lastRow+'][hinmoku_mr_id]');
		j$("#juhacchuu_meisai_dt"+lastRow+" #unusedHinmokuCode"        ).attr('id','unused'           +lastRow+'HinmokuCode'       ).attr('name','data[unused]['+lastRow+'][hinmoku_code]')            ;
		j$("#juhacchuu_meisai_dt"+lastRow+" #unusedHinmokuMei"         ).attr('id','JuhacchuuMeisaiDt'+lastRow+'HinmokuMei'        ).attr('name','data[JuhacchuuMeisaiDt]['+lastRow+'][hinmoku_mei]')  ;
		j$("#juhacchuu_meisai_dt"+lastRow+" #unusedLot"                ).attr('id','JuhacchuuMeisaiDt'+lastRow+'Lot'               ).attr('name','data[JuhacchuuMeisaiDt]['+lastRow+'][lot]')          ;
		j$("#juhacchuu_meisai_dt"+lastRow+" #unusedSuu"                ).attr('id','JuhacchuuMeisaiDt'+lastRow+'Suu'               ).attr('name','data[JuhacchuuMeisaiDt]['+lastRow+'][suu]')          ;
		j$("#juhacchuu_meisai_dt"+lastRow+" #unusedTanniMrId"          ).attr('id','JuhacchuuMeisaiDt'+lastRow+'TanniMrId'         ).attr('name','data[JuhacchuuMeisaiDt]['+lastRow+'][tanni_mr_id]')  ;
		j$("#juhacchuu_meisai_dt"+lastRow+" #unusedSuu2"               ).attr('id','JuhacchuuMeisaiDt'+lastRow+'Suu2'              ).attr('name','data[JuhacchuuMeisaiDt]['+lastRow+'][suu2]')         ;
		j$("#juhacchuu_meisai_dt"+lastRow+" #unusedTanniMr2Id"         ).attr('id','JuhacchuuMeisaiDt'+lastRow+'TanniMr2Id'        ).attr('name','data[JuhacchuuMeisaiDt]['+lastRow+'][tanni_mr2_id]') ;
		j$("#juhacchuu_meisai_dt"+lastRow+" #unusedTankaIti"           ).attr('id','JuhacchuuMeisaiDt'+lastRow+'TankaIti'          ).attr('name','data[JuhacchuuMeisaiDt]['+lastRow+'][tanka_iti]')    ;
		j$("#juhacchuu_meisai_dt"+lastRow+" #unusedTanka"              ).attr('id','JuhacchuuMeisaiDt'+lastRow+'Tanka'             ).attr('name','data[JuhacchuuMeisaiDt]['+lastRow+'][tanka]')        ;
		j$("#juhacchuu_meisai_dt"+lastRow+" #unusedUtizeiFlg"          ).attr('id','JuhacchuuMeisaiDt'+lastRow+'UtizeiFlg'         ).attr('name','data[JuhacchuuMeisaiDt]['+lastRow+'][utizei_flg]')   ;
		j$("#juhacchuu_meisai_dt"+lastRow+" #unusedKingaku"            ).attr('id','JuhacchuuMeisaiDt'+lastRow+'Kingaku'           ).attr('name','data[JuhacchuuMeisaiDt]['+lastRow+'][kingaku]')      ;
		j$("#juhacchuu_meisai_dt"+lastRow+" #unusedShouhizeiRitu"      ).attr('id','JuhacchuuMeisaiDt'+lastRow+'ShouhizeiRitu'     ).attr('name','data[JuhacchuuMeisaiDt]['+lastRow+'][shouhizei_ritu]');
		j$("#juhacchuu_meisai_dt"+lastRow+" #unusedNouki"              ).attr('id','JuhacchuuMeisaiDt'+lastRow+'Nouki'             ).attr('name','data[JuhacchuuMeisaiDt]['+lastRow+'][nouki]')        ;
		j$("#juhacchuu_meisai_dt"+lastRow+" #unusedBikou"              ).attr('id','JuhacchuuMeisaiDt'+lastRow+'Bikou'             ).attr('name','data[JuhacchuuMeisaiDt]['+lastRow+'][bikou]')        ;
		j$("#juhacchuu_meisai_dt"+lastRow+" #unusedBashoTanaSoukoMrId" ).attr('id','JuhacchuuMeisaiDt'+lastRow+'BashoTanaSoukoMrId').attr('name','data[JuhacchuuMeisaiDt]['+lastRow+'][basho_tana_souko_mr_id]');
		j$("#juhacchuu_meisai_dt"+lastRow+" #mytable0"                 ).attr('id','mytable'+lastRow);
		j$("#mytable"            +lastRow+" #sikyuu_meisai_dt0"        ).attr('id','sikyuu_meisai_dt'+lastRow);
		j$("#mytable"            +lastRow+" #trAddSikyuu0"             ).attr('id','trAddSikyuu'+lastRow);
		j$("#trAddSikyuu"        +lastRow+" #btnAddSikyuu0"            ).attr('id','btnAddSikyuu_'+lastRow);
		j$("#JuhacchuuMeisaiDt"  +lastRow+"GyouBangou").val(lastRow);
		InputCalendar.createOnLoaded('JuhacchuuMeisaiDt'+lastRow+'Nouki', {format: 'yyyy-mm-dd', lang:'ja'});
		lastRows[lastRow]=0;
	}
	
	function removeJuhacchuuMeisaiDt(x) {
		j$("#juhacchuu_meisai_dt"+x).remove();
	}

	function addSikyuuMeisaiDt(this1) {
		var arrayIdData = this1.id.split("_");	//"btnAddSikyuu_9"の形のidが入る。
		var theRow = arrayIdData[1];		//alert(theRow);
		lastRows[theRow]++;			//alert(lastRows[theRow]);
		var newRow = theRow+"_"+lastRows[theRow];	//	alert(newRow);
		cntSikyuu++;
		j$("#mytable"+theRow+" #sikyuu_meisai_dt"+theRow).clone(true).attr("id","sikyuu_meisai_dt"+newRow).removeAttr("style").insertBefore("#mytable"+theRow+" #trAddSikyuu"+theRow);
		j$("#sikyuu_meisai_dt"+newRow+" #btnDelSikyuu0").attr("id","btnDelSikyuu"+newRow);	//"btnDelSikyuu9_9"の形のidになる。
		j$("#sikyuu_meisai_dt"+newRow+" #unused0GyouBangou"         ).attr("id","SikyuuJuhacchuuMeisaiDt"+cntSikyuu+"GyouBangou"        ).attr("name","data[SikyuuJuhacchuuMeisaiDt]["+cntSikyuu+"][gyou_bangou]")  ;
		j$("#sikyuu_meisai_dt"+newRow+" #hinmoku_prettyPopin00"     ).attr('onclick','hinmoku_prettyPopin('+cntSikyuu+',"Sikyuu")');
		j$("#sikyuu_meisai_dt"+newRow+" #unused0HinmokuMrId"        ).attr("id","SikyuuJuhacchuuMeisaiDt"+cntSikyuu+"HinmokuMrId"       ).attr("name","data[SikyuuJuhacchuuMeisaiDt]["+cntSikyuu+"][hinmoku_mr_id]");
		j$("#sikyuu_meisai_dt"+newRow+" #unused0HinmokuCode"        ).attr("id","unusedSikyuu"           +cntSikyuu+"HinmokuCode"       ).attr("name","data[unusedSikyuu]["+cntSikyuu+"][hinmoku_code]")            ;
		j$("#sikyuu_meisai_dt"+newRow+" #unused0HinmokuMei"         ).attr("id","SikyuuJuhacchuuMeisaiDt"+cntSikyuu+"HinmokuMei"        ).attr("name","data[SikyuuJuhacchuuMeisaiDt]["+cntSikyuu+"][hinmoku_mei]")  ;
		j$("#sikyuu_meisai_dt"+newRow+" #unused0Lot"                ).attr("id","SikyuuJuhacchuuMeisaiDt"+cntSikyuu+"Lot"               ).attr("name","data[SikyuuJuhacchuuMeisaiDt]["+cntSikyuu+"][lot]")          ;
		j$("#sikyuu_meisai_dt"+newRow+" #unused0Suu"                ).attr("id","SikyuuJuhacchuuMeisaiDt"+cntSikyuu+"Suu"               ).attr("name","data[SikyuuJuhacchuuMeisaiDt]["+cntSikyuu+"][suu]")          ;
		j$("#sikyuu_meisai_dt"+newRow+" #unused0TanniMrId"          ).attr("id","SikyuuJuhacchuuMeisaiDt"+cntSikyuu+"TanniMrId"         ).attr("name","data[SikyuuJuhacchuuMeisaiDt]["+cntSikyuu+"][tanni_mr_id]")  ;
		j$("#sikyuu_meisai_dt"+newRow+" #unused0Suu2"               ).attr("id","SikyuuJuhacchuuMeisaiDt"+cntSikyuu+"Suu2"              ).attr("name","data[SikyuuJuhacchuuMeisaiDt]["+cntSikyuu+"][suu2]")         ;
		j$("#sikyuu_meisai_dt"+newRow+" #unused0TanniMr2Id"         ).attr("id","SikyuuJuhacchuuMeisaiDt"+cntSikyuu+"TanniMr2Id"        ).attr("name","data[SikyuuJuhacchuuMeisaiDt]["+cntSikyuu+"][tanni_mr2_id]") ;
		j$("#sikyuu_meisai_dt"+newRow+" #unused0TankaIti"           ).attr("id","SikyuuJuhacchuuMeisaiDt"+cntSikyuu+"TankaIti"          ).attr("name","data[SikyuuJuhacchuuMeisaiDt]["+cntSikyuu+"][tanka_iti]")    ;
		j$("#sikyuu_meisai_dt"+newRow+" #unused0OyaJuhacchuuMeisaiDtId").attr("id","SikyuuJuhacchuuMeisaiDt"+cntSikyuu+"OyaJuhacchuuMeisaiDtId").attr("name","data[SikyuuJuhacchuuMeisaiDt]["+cntSikyuu+"][OyaJuhacchuuMeisaiDtId]");
		j$("#sikyuu_meisai_dt"+newRow+" #unused0SikyuuTanni"        ).attr("id","SikyuuJuhacchuuMeisaiDt"+cntSikyuu+"SikyuuTanni"       ).attr("name","data[SikyuuJuhacchuuMeisaiDt]["+cntSikyuu+"][SikyuuTanni]")  ;
		j$("#sikyuu_meisai_dt"+newRow+" #unused0Bikou"              ).attr("id","SikyuuJuhacchuuMeisaiDt"+cntSikyuu+"Bikou"             ).attr("name","data[SikyuuJuhacchuuMeisaiDt]["+cntSikyuu+"][bikou]")        ;
		j$("#sikyuu_meisai_dt"+newRow+" #unused0BashoTanaSoukoMrId" ).attr("id","SikyuuJuhacchuuMeisaiDt"+cntSikyuu+"BashoTanaSoukoMrId").attr("name","data[SikyuuJuhacchuuMeisaiDt]["+cntSikyuu+"][basho_tana_souko_mr_id]");
		j$("#SikyuuJuhacchuuMeisaiDt"+cntSikyuu+"GyouBangou").val(lastRows[theRow]);
	}

	function delSikyuuMeisaiDt(this1) {
		var theRows = this1.id.replace("btnDelSikyuu","");	alert(this1.id);
		j$("#sikyuu_meisai_dt"+theRows).remove();
	}

</script>

<!-- 高密度表示 -->
<?php echo $this->Html->css(array("iura"), array("inline"=>false)) ;?>

