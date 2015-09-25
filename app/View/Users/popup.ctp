<div class="users index">
	<h2><?php echo __('Users'); ?></h2>
	<?php	echo $this->Form->create('User', array('action'=>'popup')); ?>
	<table cellpadding="0" cellspacing="0"><tr><td>
	<?php	echo $this->Form->input('search', array('label'=>'氏名の一部を入れてください')); ?>
	</td><td>
	<?php	echo $this->Form->end('検索'); ?>
	</td><td>
	<a href="#" rel='close'>閉じる</a>
	</td></tr></table>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
		<!-- 	<th><?php echo $this->Paginator->sort('kana_mei'); ?></th>
			<th><?php echo $this->Paginator->sort('kigou'); ?></th>
			<th><?php echo $this->Paginator->sort('bumon_mr_id'); ?></th>
			<th><?php echo $this->Paginator->sort('mail_address'); ?></th>		-->
			<th><?php echo $this->Paginator->sort('username'); ?></th>
		<!--	<th><?php echo $this->Paginator->sort('password'); ?></th>
			<th><?php echo $this->Paginator->sort('thema_mr_id'); ?></th>
			<th><?php echo $this->Paginator->sort('torihikisaki_mr_id'); ?></th>
			<th><?php echo $this->Paginator->sort('shokushu_kbn_id'); ?></th>
			<th><?php echo $this->Paginator->sort('shounin_kengen_mr_id'); ?></th>
			<th><?php echo $this->Paginator->sort('kaisi_nitiji'); ?></th>
			<th><?php echo $this->Paginator->sort('id_moto'); ?></th>
			<th><?php echo $this->Paginator->sort('kinsi_flg'); ?></th>
			<th><?php echo $this->Paginator->sort('shuuryou_nitiji'); ?></th>
			<th><?php echo $this->Paginator->sort('sakusei_user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('kousin_user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('updated'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>		-->
	</tr>
	</thead>
	<tbody>
	<?php foreach ($users as $user): ?>
	<tr>
		<td class="actions">
			<a rel="close" href="#" onclick="user_id=<?php echo $user['User']['id']; ?>;">選択</a>
		</td>
		<!-- <td><?php echo h($user['User']['id']); ?>&nbsp;</td> -->
		<td><?php echo h($user['User']['name']); ?>&nbsp;</td>
		<!-- <td><?php echo h($user['User']['kana_mei']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['kigou']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($user['BumonMr']['name'], array('controller' => 'bumon_mrs', 'action' => 'view', $user['BumonMr']['id'])); ?>
		</td>
		<td><?php echo h($user['User']['mail_address']); ?>&nbsp;</td> -->
		<td><?php echo h($user['User']['username']); ?>&nbsp;</td>
		<!-- <td><?php echo h($user['User']['password']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($user['ThemaMr']['name'], array('controller' => 'thema_mrs', 'action' => 'view', $user['ThemaMr']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($user['TorihikisakiMr']['name'], array('controller' => 'torihikisaki_mrs', 'action' => 'view', $user['TorihikisakiMr']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($user['ShokushuKbn']['name'], array('controller' => 'shokushu_kbns', 'action' => 'view', $user['ShokushuKbn']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($user['ShouninKengenMr']['name'], array('controller' => 'shounin_kengen_mrs', 'action' => 'view', $user['ShouninKengenMr']['id'])); ?>
		</td>
		<td><?php echo h($user['User']['kaisi_nitiji']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['id_moto']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['kinsi_flg']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['shuuryou_nitiji']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['sakusei_user_id']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['created']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['kousin_user_id']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['updated']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $user['User']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $user['User']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $user['User']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $user['User']['id']))); ?>
		</td> -->
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
		'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array('rel' => 'internal'), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => '', 'rel' => 'internal'));
		echo $this->Paginator->next(__('next') . ' >', array('rel' => 'internal'), null, array('class' => 'next disabled'));
	?>
	</div>
<?php echo $this->Html->css(array('prettyPopin'), array('inline'=>false)) ;?>
</div>
