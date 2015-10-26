<div class="users view">
<h2><?php echo __('User'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($user['User']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($user['User']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Kana Mei'); ?></dt>
		<dd>
			<?php echo h($user['User']['kana_mei']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Kigou'); ?></dt>
		<dd>
			<?php echo h($user['User']['kigou']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Bumon Mr'); ?></dt>
		<dd>
			<?php echo $this->Html->link($user['BumonMr']['name'], array('controller' => 'bumon_mrs', 'action' => 'view', $user['BumonMr']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mail Address'); ?></dt>
		<dd>
			<?php echo h($user['User']['mail_address']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Username'); ?></dt>
		<dd>
			<?php echo h($user['User']['username']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Password'); ?></dt>
		<dd>
			<?php echo h($user['User']['password']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Theme Mr'); ?></dt>
		<dd>
			<?php echo $this->Html->link($user['ThemeMr']['name'], array('controller' => 'theme_mrs', 'action' => 'view', $user['ThemeMr']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Torihikisaki Mr'); ?></dt>
		<dd>
			<?php echo $this->Html->link($user['TorihikisakiMr']['name'], array('controller' => 'torihikisaki_mrs', 'action' => 'view', $user['TorihikisakiMr']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Shokushu Kbn'); ?></dt>
		<dd>
			<?php echo $this->Html->link($user['ShokushuKbn']['name'], array('controller' => 'shokushu_kbns', 'action' => 'view', $user['ShokushuKbn']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Shounin Kengen Mr'); ?></dt>
		<dd>
			<?php echo $this->Html->link($user['ShouninKengenMr']['name'], array('controller' => 'shounin_kengen_mrs', 'action' => 'view', $user['ShouninKengenMr']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Kaisi Nitiji'); ?></dt>
		<dd>
			<?php echo h($user['User']['kaisi_nitiji']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Id Moto'); ?></dt>
		<dd>
			<?php echo h($user['User']['id_moto']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Kinsi Flg'); ?></dt>
		<dd>
			<?php echo h($user['User']['kinsi_flg']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Shuuryou Nitiji'); ?></dt>
		<dd>
			<?php echo h($user['User']['shuuryou_nitiji']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sakusei User Id'); ?></dt>
		<dd>
			<?php echo h($user['User']['sakusei_user_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($user['User']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Kousin User Id'); ?></dt>
		<dd>
			<?php echo h($user['User']['kousin_user_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated'); ?></dt>
		<dd>
			<?php echo h($user['User']['updated']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit User'), array('action' => 'edit', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete User'), array('action' => 'delete', $user['User']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $user['User']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Bumon Mrs'), array('controller' => 'bumon_mrs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Bumon Mr'), array('controller' => 'bumon_mrs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Theme Mrs'), array('controller' => 'theme_mrs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Theme Mr'), array('controller' => 'theme_mrs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Torihikisaki Mrs'), array('controller' => 'torihikisaki_mrs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Torihikisaki Mr'), array('controller' => 'torihikisaki_mrs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Shokushu Kbns'), array('controller' => 'shokushu_kbns', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Shokushu Kbn'), array('controller' => 'shokushu_kbns', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Shounin Kengen Mrs'), array('controller' => 'shounin_kengen_mrs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Shounin Kengen Mr'), array('controller' => 'shounin_kengen_mrs', 'action' => 'add')); ?> </li>
	</ul>
</div>
<!--
<div class="related">
	<h3><?php echo __('Related Shokushu Kbns'); ?></h3>
	<?php if (!empty($user['ShokushuKbn'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Kousin User Id'); ?></th>
		<th><?php echo __('Updated'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['ShokushuKbn'] as $shokushuKbn): ?>
		<tr>
			<td><?php echo $shokushuKbn['id']; ?></td>
			<td><?php echo $shokushuKbn['name']; ?></td>
			<td><?php echo $shokushuKbn['user_id']; ?></td>
			<td><?php echo $shokushuKbn['created']; ?></td>
			<td><?php echo $shokushuKbn['kousin_user_id']; ?></td>
			<td><?php echo $shokushuKbn['updated']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'shokushu_kbns', 'action' => 'view', $shokushuKbn['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'shokushu_kbns', 'action' => 'edit', $shokushuKbn['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'shokushu_kbns', 'action' => 'delete', $shokushuKbn['id']), array('confirm' => __('Are you sure you want to delete # %s?', $shokushuKbn['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Shokushu Kbn'), array('controller' => 'shokushu_kbns', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Torihikisaki Mrs'); ?></h3>
	<?php if (!empty($user['TorihikisakiMr'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Code'); ?></th>
		<th><?php echo __('Kaisi Bi'); ?></th>
		<th><?php echo __('Shuuryou Bi'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Mei Kana'); ?></th>
		<th><?php echo __('Tantou Bumon'); ?></th>
		<th><?php echo __('Tantousha Mei'); ?></th>
		<th><?php echo __('Yuubin Bangou'); ?></th>
		<th><?php echo __('Todoufukenn'); ?></th>
		<th><?php echo __('Juusho1'); ?></th>
		<th><?php echo __('Juusho2'); ?></th>
		<th><?php echo __('Juusho3'); ?></th>
		<th><?php echo __('Tel'); ?></th>
		<th><?php echo __('Fax'); ?></th>
		<th><?php echo __('Shuugyou Bi Mr Id'); ?></th>
		<th><?php echo __('Torihiki Kinsi Flg'); ?></th>
		<th><?php echo __('Zatu Flg'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Group Oya Torihikisaki Mr Id'); ?></th>
		<th><?php echo __('Siiresaki Ｆｌｇ'); ?></th>
		<th><?php echo __('Siiresaki Oya Torihikisaki Mr Id'); ?></th>
		<th><?php echo __('Kokyaku Flg'); ?></th>
		<th><?php echo __('Seikyuu Torihikisaki Mr Id'); ?></th>
		<th><?php echo __('Shukkasaki Flg'); ?></th>
		<th><?php echo __('Kokyaku Oya Torihikisaki Mr Id'); ?></th>
		<th><?php echo __('Shain Flg'); ?></th>
		<th><?php echo __('Shain Kazku Daihyou Torihikisaki Mr Id'); ?></th>
		<th><?php echo __('Bikou'); ?></th>
		<th><?php echo __('Kaisi Nitiji'); ?></th>
		<th><?php echo __('Id Moto'); ?></th>
		<th><?php echo __('Kinsi Flg'); ?></th>
		<th><?php echo __('Shuuryou Nitiji'); ?></th>
		<th><?php echo __('Sakusei User Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Kousin User Id'); ?></th>
		<th><?php echo __('Updated'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['TorihikisakiMr'] as $torihikisakiMr): ?>
		<tr>
			<td><?php echo $torihikisakiMr['id']; ?></td>
			<td><?php echo $torihikisakiMr['code']; ?></td>
			<td><?php echo $torihikisakiMr['kaisi_bi']; ?></td>
			<td><?php echo $torihikisakiMr['shuuryou_bi']; ?></td>
			<td><?php echo $torihikisakiMr['name']; ?></td>
			<td><?php echo $torihikisakiMr['mei_kana']; ?></td>
			<td><?php echo $torihikisakiMr['tantou_bumon']; ?></td>
			<td><?php echo $torihikisakiMr['tantousha_mei']; ?></td>
			<td><?php echo $torihikisakiMr['yuubin_bangou']; ?></td>
			<td><?php echo $torihikisakiMr['todoufukenn']; ?></td>
			<td><?php echo $torihikisakiMr['juusho1']; ?></td>
			<td><?php echo $torihikisakiMr['juusho2']; ?></td>
			<td><?php echo $torihikisakiMr['juusho3']; ?></td>
			<td><?php echo $torihikisakiMr['tel']; ?></td>
			<td><?php echo $torihikisakiMr['fax']; ?></td>
			<td><?php echo $torihikisakiMr['shuugyou_bi_mr_id']; ?></td>
			<td><?php echo $torihikisakiMr['torihiki_kinsi_flg']; ?></td>
			<td><?php echo $torihikisakiMr['zatu_flg']; ?></td>
			<td><?php echo $torihikisakiMr['user_id']; ?></td>
			<td><?php echo $torihikisakiMr['group_oya_torihikisaki_mr_id']; ?></td>
			<td><?php echo $torihikisakiMr['siiresaki_ｆｌｇ']; ?></td>
			<td><?php echo $torihikisakiMr['siiresaki_oya_torihikisaki_mr_id']; ?></td>
			<td><?php echo $torihikisakiMr['kokyaku_flg']; ?></td>
			<td><?php echo $torihikisakiMr['seikyuu_torihikisaki_mr_id']; ?></td>
			<td><?php echo $torihikisakiMr['shukkasaki_flg']; ?></td>
			<td><?php echo $torihikisakiMr['kokyaku_oya_torihikisaki_mr_id']; ?></td>
			<td><?php echo $torihikisakiMr['shain_flg']; ?></td>
			<td><?php echo $torihikisakiMr['shain_kazku_daihyou_torihikisaki_mr_id']; ?></td>
			<td><?php echo $torihikisakiMr['bikou']; ?></td>
			<td><?php echo $torihikisakiMr['kaisi_nitiji']; ?></td>
			<td><?php echo $torihikisakiMr['id_moto']; ?></td>
			<td><?php echo $torihikisakiMr['kinsi_flg']; ?></td>
			<td><?php echo $torihikisakiMr['shuuryou_nitiji']; ?></td>
			<td><?php echo $torihikisakiMr['sakusei_user_id']; ?></td>
			<td><?php echo $torihikisakiMr['created']; ?></td>
			<td><?php echo $torihikisakiMr['kousin_user_id']; ?></td>
			<td><?php echo $torihikisakiMr['updated']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'torihikisaki_mrs', 'action' => 'view', $torihikisakiMr['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'torihikisaki_mrs', 'action' => 'edit', $torihikisakiMr['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'torihikisaki_mrs', 'action' => 'delete', $torihikisakiMr['id']), array('confirm' => __('Are you sure you want to delete # %s?', $torihikisakiMr['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Torihikisaki Mr'), array('controller' => 'torihikisaki_mrs', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
-->
