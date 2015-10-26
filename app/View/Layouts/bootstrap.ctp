<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>
		<?php echo __('CakePHP: the rapid development php framework:'); ?>
		<?php echo $title_for_layout; ?>
	</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- Le styles -->
	<?php echo $this->Html->css('bootstrap.min'); ?>
	<style>
	body {
		padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
	}
	</style>
	<?php echo $this->Html->css('bootstrap-responsive.min'); ?>
	<?php echo $this->Html->css(array('prettyPopin','jquery-ui/jquery-ui.min','jquery-ui/jquery-ui.theme.min','jquery-ui/jquery-ui.structure.min')); ?>
	<?php echo $this->Html->css(array('iurabs','../theme/'.$loginUser['ThemeMr']['code'].'/css/iurabs')); ?>

	<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- Le fav and touch icons -->
	<!--
	<link rel="shortcut icon" href="/ico/favicon.ico">
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="/ico/apple-touch-icon-144-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="/ico/apple-touch-icon-114-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="/ico/apple-touch-icon-72-precomposed.png">
	<link rel="apple-touch-icon-precomposed" href="/ico/apple-touch-icon-57-precomposed.png">
	-->
	<?php
	echo $this->fetch('meta');
	echo $this->fetch('css');
	?>
</head>

<body>
<?php echo $this->Html->script(array('jquery-1.11.3.min','jquery.prettyPopin','jquery-migrate.min','bootstrap.min','jquery-ui/jquery-ui.min','jquery-ui/ui.datepicker-ja','autoNumeric-min')); ?>

<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" style="padding:5px" target="_blank" href='http://www.simomura.jp/'>
        <?php echo $this->Html->image('simomuralogo.jpg', array('alt' => 'SIMOMURA.LOGO', 'width'=>'50', 'height'=>'40', 'border' => '0')); ?>
      </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active">
	<?php	if ($loginUser) {
			echo '<a href="'.$this->Html->webroot.'users/edit/'.$loginUser['id'].'">';
			echo $this->Html->image('woody/User.png', array('alt' => 'User', 'border' => '0'));
			echo $loginUser['username'].':'.$loginUser['name'].' さん ';
		}else{	echo '<a href="#">未認証';}
	?>
        <span class="sr-only">(current)</span></a></li>
        <li><?php echo $this->Html->link('新規 '.__('Juhacchuu Dt'), array('controller' => 'juhacchuu_dts', 'action' => 'add')); ?></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">日常メニュー<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><?php echo $this->Html->link('在庫不足確認', array('controller' => 'zaiko_fusoku_hyouji_vws', 'action' => 'index')); ?></li>
            <li><?php echo $this->Html->link('受発注一覧', array('controller' => 'juhacchuu_dts', 'action' => 'index')); ?></li>
            <li role="separator" class="divider"></li>
            <li class="dropdown-submenu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">データ照会</span></a>
              <ul class="dropdown-menu">
                <li><?php echo $this->Html->link('在庫', array('controller' => 'zaiko_dts', 'action' => 'index')); ?></li>
                <li><?php echo $this->Html->link('受発注明細', array('controller' => 'juhachuu_meisai_dts', 'action' => 'index')); ?></li>
                <li><?php echo $this->Html->link('仕入売上明細', array('controller' => 'siire_uriage_dts', 'action' => 'index')); ?></li>
                <li><?php echo $this->Html->link('ジャーナル', array('controller' => 'journal_dts', 'action' => 'index')); ?></li>
              </ul>
            </li>
            <li class="dropdown-submenu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">マスター登録</span></a>
              <ul class="dropdown-menu">
                <li><?php echo $this->Html->link('取引先', array('controller' => 'torihikisaki_mrs', 'action' => 'index')); ?></li>
                <li><?php echo $this->Html->link('品目', array('controller' => 'hinmoku_mrs', 'action' => 'index')); ?></li>
                <li><?php echo $this->Html->link('代替品目', array('controller' => 'daigae_hinmouku_mrs', 'action' => 'index')); ?></li>
              </ul>
            </li>
          </ul>
        </li>
      </ul>
<!--      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
-->      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">システム設定<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li class="dropdown-submenu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">区分表登録</span></a>
              <ul class="dropdown-menu">
                <li><?php echo $this->Html->link('品目', array('controller' => 'hinmoku_kbns', 'action' => 'index')); ?></li>
                <li><?php echo $this->Html->link('敬称', array('controller' => 'keishou_kbns', 'action' => 'index')); ?></li>
                <li><?php echo $this->Html->link('単位', array('controller' => 'tanni_kbns', 'action' => 'index')); ?></li>
                <li><?php echo $this->Html->link('品質', array('controller' => 'hinsitu_kbns', 'action' => 'index')); ?></li>
                <li><?php echo $this->Html->link('倉庫', array('controller' => 'souko_kbns', 'action' => 'index')); ?></li>
                <li><?php echo $this->Html->link('課税', array('controller' => 'kazei_kbns', 'action' => 'index')); ?></li>
                <li><?php echo $this->Html->link('税計算', array('controller' => 'zeikeisan_kbns', 'action' => 'index')); ?></li>
                <li><?php echo $this->Html->link('締日', array('controller' => 'simebi_kbns', 'action' => 'index')); ?></li>
                <li><?php echo $this->Html->link('支払日', array('controller' => 'siharaibi_kbns', 'action' => 'index')); ?></li>
                <li><?php echo $this->Html->link('支払方法', array('controller' => 'siharai_houhou_kbns', 'action' => 'index')); ?></li>
                <li><?php echo $this->Html->link('預金種類', array('controller' => 'yokin_shubetu_kbns', 'action' => 'index')); ?></li>
                <li><?php echo $this->Html->link('口座関係', array('controller' => 'kouza_kankei_kbns', 'action' => 'index')); ?></li>
                <li><?php echo $this->Html->link('振込負担', array('controller' => 'furikomi_futan_kbns', 'action' => 'index')); ?></li>
                <li><?php echo $this->Html->link('ジャーナル', array('controller' => 'journal_kbns', 'action' => 'index')); ?></li>
                <li><?php echo $this->Html->link('ジャーナル大', array('controller' => 'journal_dai_kbns', 'action' => 'index')); ?></li>
              </ul>
            </li>
            <li class="dropdown-submenu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">分類登録</span></a>
              <ul class="dropdown-menu">
                <li><?php echo $this->Html->link('品目1', array('controller' => 'hinmoku_bunrui1_kbns', 'action' => 'index')); ?></li>
                <li><?php echo $this->Html->link('品目2', array('controller' => 'hinmoku_bunrui2_kbns', 'action' => 'index')); ?></li>
                <li><?php echo $this->Html->link('品目3', array('controller' => 'hinmoku_bunrui3_kbns', 'action' => 'index')); ?></li>
                <li><?php echo $this->Html->link('品目4', array('controller' => 'hinmoku_bunrui4_kbns', 'action' => 'index')); ?></li>
                <li><?php echo $this->Html->link('品目5', array('controller' => 'hinmoku_bunrui5_kbns', 'action' => 'index')); ?></li>
                <li><?php echo $this->Html->link('取引先1', array('controller' => 'torihikisaki_bunrui1_kbns', 'action' => 'index')); ?></li>
                <li><?php echo $this->Html->link('取引先2', array('controller' => 'torihikisaki_bunrui2_kbns', 'action' => 'index')); ?></li>
                <li><?php echo $this->Html->link('取引先3', array('controller' => 'torihikisaki_bunrui3_kbns', 'action' => 'index')); ?></li>
                <li><?php echo $this->Html->link('取引先4', array('controller' => 'torihikisaki_bunrui4_kbns', 'action' => 'index')); ?></li>
                <li><?php echo $this->Html->link('取引先5', array('controller' => 'torihikisaki_bunrui5_kbns', 'action' => 'index')); ?></li>
              </ul>
            </li>
            <li class="dropdown-submenu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">マスター登録</span></a>
              <ul class="dropdown-menu">
                <li><?php echo $this->Html->link('場所棚倉庫', array('controller' => 'basho_tana_souko_mrs', 'action' => 'index')); ?></li>
                <li><?php echo $this->Html->link('利用者', array('controller' => 'users', 'action' => 'index')); ?></li>
                <li><?php echo $this->Html->link('部門', array('controller' => 'bumon_mrs', 'action' => 'index')); ?></li>
                <li><?php echo $this->Html->link('テーマ', array('controller' => 'theme_mrs', 'action' => 'index')); ?></li>
                <li><?php echo $this->Html->link('ジャーナル根源', array('controller' => 'journal_kongen_mrs', 'action' => 'index')); ?></li>
              </ul>
            </li>
          </ul>
        </li>
        <li><?php echo $this->Html->link('ヘルプ', array('controller' => 'helps', 'action' => 'index')); ?></li>
        <li><?php echo $this->Html->link(__('ログアウト'), array('controller' => 'users', 'action' => 'logout')); ?></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

	<div class="container">

	<!--	<h1>Bootstrap starter template</h1>	-->

		<?php echo $this->Session->flash(); ?>

		<?php echo $this->fetch('content'); ?>

	</div> <!-- /container -->

	<!-- Le javascript
    ================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<?php echo $this->fetch('script'); ?>
	<?php echo $this->element('sql_dump'); ?>

</body>
</html>
