<div class="hacchuuDts form">
<?php echo $this->Form->create('HacchuuDt'); ?>
	<fieldset>
		<legend><?php echo __d('cake', ucfirst($this->action).' %s', 'Hacchuu Dt'); ?></legend>
	<?php
		if ($this->action == 'edit') {
			echo $this->Form->input('id');
		}
		echo '<table border=0>'.$this->Html->tableCells(array(
			$this->Form->input('HacchuuDt.code'),
			$this->Form->input('HacchuuDt.bi',array('type'=>'text','size'=>"10")),
			$this->Form->input('HacchuuDt.torihikisaki_mr_id', array('empty' => ''))
		)).'</table>';
		echo '<table border=0>'.$this->Html->tableCells(array(
			$this->Form->input('HacchuuDt.user_id', array('empty' => '')),
			$this->Html->link('検索', '/users/popup', array('rel' => 'browse_user')),
			$this->Form->input('HacchuuDt.bumon_mr_id', array('empty' => '')),
			$this->Form->input('HacchuuDt.nouki', array('type'=>'text','size'=>"10"))
		)).'</table>';
		echo '<table border=0>'.$this->Html->tableCells(array(
			$this->Form->input('HacchuuDt.bikou')
		)).'</table>';
		echo '<table border=0>'.$this->Html->tableCells(array(
			$this->Form->input('HacchuuDt.juchuu_dt_id', array('empty' => '')),
			$this->Form->input('HacchuuDt.basho_tana_souko_mr_id', array('empty' => '')),
			$this->Form->input('HacchuuDt.kingaku_goukei'),
			$this->Form->input('HacchuuDt.shouhizei_kingaku'),
			$this->Form->input('HacchuuDt.utizei_flg'),
			$this->Form->input('HacchuuDt.matome_kazei_flg'),
		)).'</table>';
		echo '<table border=0>'.$this->Html->tableCells(array(
			$this->Form->input('HacchuuDt.kaisi_nitiji', array('type'=>'text','size'=>"10")),
			$this->Form->input('HacchuuDt.id_moto'),
			$this->Form->input('HacchuuDt.kinsi_flg'),
			$this->Form->input('HacchuuDt.shuuryou_nitiji', array('type'=>'text','size'=>"10"))
		)).'</table>';
		echo $this->Form->hidden('HacchuuDt.sakusei_user_id', array('value' => $this->action == 'add' ? $loginUser['id'] : ''));
		echo $this->Form->hidden('HacchuuDt.kousin_user_id', array('value' => $this->action == 'edit' ? $loginUser['id'] : ''));


/*		if ($this->action == 'edit') {
			echo $this->Form->input('HacchuuMeisaiDt.0.id');
		}
		echo '<table border=0>'.$this->Html->tableCells(array(
			$this->Form->input('HacchuuMeisaiDt.0.hacchuu_dt_id', array('empty' => '')),
			$this->Form->input('HacchuuMeisaiDt.0.gyou_bangou'),
		)).'</table>';
		echo '<table border=0>'.$this->Html->tableCells(array(
			$this->Form->input('HacchuuMeisaiDt.0.hinmoku_mr_id', array('empty' => '')),
			$this->Form->input('HacchuuMeisaiDt.0.hinmoku_mei'),
		)).'</table>';
		echo '<table border=0>'.$this->Html->tableCells(array(
			$this->Form->input('HacchuuMeisaiDt.0.suu'),
			$this->Form->input('HacchuuMeisaiDt.0.tanni_mr_id', array('empty' => '')),
			$this->Form->input('HacchuuMeisaiDt.0.suu2'),
			$this->Form->input('HacchuuMeisaiDt.0.tanni_mr2_id', array('empty' => '')),
			$this->Form->input('HacchuuMeisaiDt.0.tanka_iti'),
			$this->Form->input('HacchuuMeisaiDt.0.tanka'),
			$this->Form->input('HacchuuMeisaiDt.0.siire_tanka'),
			$this->Form->input('HacchuuMeisaiDt.0.utizei_flg'),
			$this->Form->input('HacchuuMeisaiDt.0.kingaku'),
			$this->Form->input('HacchuuMeisaiDt.0.shouhizei_ritu'),
		)).'</table>';
		echo '<table border=0>'.$this->Html->tableCells(array(
			$this->Form->input('HacchuuMeisaiDt.0.ukeire_yotei_bi', array('type'=>'text','size'=>"10")),//'dateFormat' => 'YMD', 'monthNames' => false)),
			$this->Form->input('HacchuuMeisaiDt.0.bikou'),
			$this->Form->input('HacchuuMeisaiDt.0.basho_tana_souko_mr_id', array('empty' => ''))
		)).'</table>';
		echo $this->Form->hidden('HacchuuMeisaiDt.0.sakusei_user_id', array('value' => $this->action == 'add' ? $loginUser['id'] : ''));
		echo $this->Form->hidden('HacchuuMeisaiDt.0.kousin_user_id', array('value' => $this->action == 'edit' ? $loginUser['id'] : ''));
*/

	?>
	</fieldset>

	<h2>HacchuuMeisaiDts</h2>
	<table id="mytable">
	<tr><th></th><th>hinmoku_mei</th><th>suu</th><th>tanka</th><th>bikou</th></tr>
	<tr id="hacchuu_meisai_dt0" style="display:none;">
		<td><?php echo $this->Form->button('&nbsp;-&nbsp;',array('type'=>'button','title'=>'Click Here to remove this hacchuu_meisai_dt')); ?></td>
		<td><?php echo $this->Form->input('unused.hinmoku_mei',array('label'=>'','type'=>'text')); ?></td>
		<td><?php echo $this->Form->input('unused.suu',array('label'=>'','type'=>'text')); ?></td>
		<td><?php echo $this->Form->input('unused.tanka',array('label'=>'','type'=>'text')); ?></td>
		<td><?php echo $this->Form->input('unused.bikou',array('label'=>'','type'=>'text')); ?></td>
	</tr>
	<tr id="trAdd"><td> <?php echo $this->Form->button('+',array('type'=>'button','title'=>'Click Here to add another hacchuu_meisai_dt','onclick'=>'addHacchuuMeisaiDt()')); ?> </td><td></td><td></td><td></td><td></td></tr>
	</table>

<?php echo $this->Form->end(__('Submit')); ?>
</div>


<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<?php if ($this->action == 'edit'): ?>
			<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('HacchuuDt.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('HacchuuDt.id')))); ?></li>
		<?php endif; ?>
		<li><?php echo $this->Html->link(__('List Hacchuu Dts'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Torihikisaki Mrs'), array('controller' => 'torihikisaki_mrs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Torihikisaki Mr'), array('controller' => 'torihikisaki_mrs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Bumon Mrs'), array('controller' => 'bumon_mrs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Bumon Mr'), array('controller' => 'bumon_mrs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Juchuu Dts'), array('controller' => 'juchuu_dts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Juchuu Dt'), array('controller' => 'juchuu_dts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Basho Tana Souko Mrs'), array('controller' => 'basho_tana_souko_mrs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Basho Tana Souko Mr'), array('controller' => 'basho_tana_souko_mrs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Hacchuu Meisai Dts'), array('controller' => 'hacchuu_meisai_dts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hacchuu Meisai Dt'), array('controller' => 'hacchuu_meisai_dts', 'action' => 'add')); ?> </li>
	</ul>
</div>

<!-- jQueryとprototype.jsを共存させる方法 http://select.rash.jp/jquery/760/ -->
<!-- 1:prototype.jsを読み込む \app\View\Layouts\default.ctp のHEADで読み込んである -->
<!-- 2：prototypeを動かすための記述を書き込む  -->
	<-- 日付選択ボックス -->
<script type="text/javascript">
	InputCalendar.createOnLoaded('HacchuuDtBi', {format: 'yyyy-mm-dd', lang:'ja'});
	InputCalendar.createOnLoaded('HacchuuDtNouki', {format: 'yyyy-mm-dd', lang:'ja'});
	InputCalendar.createOnLoaded('HacchuuDtKaisi_nitiji', {format: 'yyyy-mm-dd', lang:'ja'});
	InputCalendar.createOnLoaded('HacchuuDtShuuryouNitiji', {format: 'yyyy-mm-dd', lang:'ja'});
	InputCalendar.createOnLoaded('HacchuuMeisaiDt0UkeireYoteiBi', {format: 'yyyy-mm-dd', lang:'ja'});
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
j$(document).ready(function(){
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
				document.getElementById('HacchuuDtUserId').value=user_id;
			}
			user_id = 0;
		}
	})
});
</script>

	<!-- 明細行追加削除 -->
<script type='text/javascript'>
	var lastRow=0;
	addHacchuuMeisaiDt();
	
	function addHacchuuMeisaiDt() {
		lastRow++;
		j$("#mytable tbody>tr:#hacchuu_meisai_dt0").clone(true).attr('id','hacchuu_meisai_dt'+lastRow).removeAttr('style').insertBefore("#mytable tbody>tr:#trAdd");
		j$("#hacchuu_meisai_dt"+lastRow+" button").attr('onclick','removeHacchuuMeisaiDt('+lastRow+')');
		j$("#hacchuu_meisai_dt"+lastRow+" input:first").attr('name','data[HacchuuMeisaiDt]['+lastRow+'][hinmoku_mei]').attr('id','HacchuuMeisaiDt'+lastRow+'HinmokuMei');
		j$("#hacchuu_meisai_dt"+lastRow+" input:eq(1)").attr('name','data[HacchuuMeisaiDt]['+lastRow+'][suu]').attr('id','HacchuuMeisaiDt'+lastRow+'Suu');
		j$("#hacchuu_meisai_dt"+lastRow+" input:eq(2)").attr('name','data[HacchuuMeisaiDt]['+lastRow+'][tanka]').attr('id','HacchuuMeisaiDt'+lastRow+'Tanka');
		j$("#hacchuu_meisai_dt"+lastRow+" input:eq(3)").attr('name','data[HacchuuMeisaiDt]['+lastRow+'][bikou]').attr('id','HacchuuMeisaiDt'+lastRow+'Bikou');
	}
	
	function removeHacchuuMeisaiDt(x) {
		j$("#hacchuu_meisai_dt"+x).remove();
	}
</script>

<!-- 高密度表示 -->
<?php echo $this->Html->css(array('iura'), array('inline'=>false)) ;?>

