<h3>ログイン画面</h3>
<?php echo $this->Form->create('User'); ?>
<table class="tbl1", align="center", valign="middle">
  <tr>
     <th>ユーザーID</th>
     <td><?php echo $this->Form->input('username', array('label' => '')); ?></td>
  </tr>
  <tr>
      <th>パスワード</th>
      <td><?php echo $this->Form->input('password', array('label' => '')); ?></td>
  </tr>
  <tr>
      <td colspan="2" class="center"><?php echo $this->Form->end('ログイン'); ?></td>
  </tr>
</table>
<!-- 高密度表示 -->
<?php echo $this->Html->css(array("iurabs"), array("inline"=>false)) ;?>

