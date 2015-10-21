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
	<?php echo $this->Html->css(array('jquery-ui/jquery-ui.min','jquery-ui/jquery-ui.theme.min','jquery-ui/jquery-ui.structure.min')); ?>

	<?php
		echo $this->fetch('meta');
		echo $this->fetch('css');
	?>
</head>

<body>
<?php echo $this->Html->script(array('jquery-1.11.3.min','jquery-migrate.min','bootstrap.min','jquery-ui/jquery-ui.min')); ?>

<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid" style="background-image: url('/cake2erp0/img/woody/desk.jpg')">
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
        <li class="active"><a href="#">
	<?php	if ($loginUser) {
			echo $this->Html->image('woody/User.png', array('alt' => 'User', 'border' => '0'));
			echo $loginUser['username'].':'.$loginUser['name'].' さん ';
		}
	?>
        <span class="sr-only">(current)</span></a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
      </ul>
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
        <li><?php echo $this->Html->link('新規 '.__('Juhacchuu Dt'), array('controller' => 'juhacchuu_dts', 'action' => 'add')); ?></li>
        <li><?php echo $this->Html->link(__('logout'), array('controller' => 'users', 'action' => 'logout')); ?></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
	<div class="container">
<!--
		<h1>Bootstrap starter template</h1>
-->
		<?php echo $this->Session->flash(); ?>
		<?php	echo $this->Session->flash('auth');	//復活20150917iura//削除20150917m.s.	?>

		<?php echo $this->Flash->render(); ?>
		<?php echo $this->fetch('content'); ?>

	</div> <!-- /container -->

	<!-- Le javascript
    ================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<?php echo $this->fetch('script'); ?>
	<?php echo $this->element('sql_dump'); ?>

</body>
</html>
