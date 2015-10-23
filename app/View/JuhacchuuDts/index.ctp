<div class="juhacchuuDts index">
	<h2><?php echo __('Juhacchuu Dts'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('juchuu_flg'); ?></th>
			<th><?php echo $this->Paginator->sort('bi'); ?></th>
			<th><?php echo $this->Paginator->sort('torihikisaki_mr_id'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('bumon_mr_id'); ?></th>
			<th><?php echo $this->Paginator->sort('nouki'); ?></th>
			<th><?php echo $this->Paginator->sort('bikou'); ?></th>
			<th><?php echo $this->Paginator->sort('kingaku_goukei'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($juhacchuuDts as $juhacchuuDt): ?>
	<tr>
		<td align='center'><?php echo h($juhacchuuDt['JuhacchuuDt']['id']); ?>&nbsp;</td>
		<td align='center'><?php echo h($juhacchuuDt['JuhacchuuDt']['juchuu_flg']); ?>&nbsp;</td>
		<td><?php echo substr(h($juhacchuuDt['JuhacchuuDt']['bi']),0,10); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($juhacchuuDt['TorihikisakiMr']['name'], array('controller' => 'torihikisaki_mrs', 'action' => 'view', $juhacchuuDt['TorihikisakiMr']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($juhacchuuDt['User']['name'], array('controller' => 'users', 'action' => 'view', $juhacchuuDt['User']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($juhacchuuDt['BumonMr']['name'], array('controller' => 'bumon_mrs', 'action' => 'view', $juhacchuuDt['BumonMr']['id'])); ?>
		</td>
		<td><?php echo substr(h($juhacchuuDt['JuhacchuuDt']['nouki']),0,10); ?>&nbsp;</td>
		<td><?php echo h($juhacchuuDt['JuhacchuuDt']['bikou']); ?>&nbsp;</td>
		<td align='right'><?php echo h($juhacchuuDt['JuhacchuuDt']['kingaku_goukei']); ?>&nbsp;</td>
		<td><?php echo substr(h($juhacchuuDt['JuhacchuuDt']['created']),0,14); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $juhacchuuDt['JuhacchuuDt']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $juhacchuuDt['JuhacchuuDt']['id'])); ?>
		</td>
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
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Juhacchuu Dt'), array('action' => 'add')); ?></li>
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
		<li><?php echo $this->Html->link(__('List Juhacchuu Meisai Dts'), array('controller' => 'juhacchuu_meisai_dts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Juhacchuu Meisai Dt'), array('controller' => 'juhacchuu_meisai_dts', 'action' => 'add')); ?> </li>
	</ul>
</div>

<!-- ˆä‰Y—¬•\Ž¦ -->
<?php echo $this->Html->css(array("iurabs"), array("inline"=>false)) ;?>
