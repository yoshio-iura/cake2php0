<div class="hinmoku_mrs index">
	<h2><?php echo __('HinmokuMrs'); ?></h2>
	<?php	echo $this->Form->create('HinmokuMr', array('action'=>'popup')); ?>
	<table cellpadding="0" cellspacing="0"><tr><td>
	<?php	echo $this->Form->input('search', array('label'=>'コードか名称の一部を入れてください')); ?>
	</td><td>
	<?php	echo $this->Form->end('検索'); ?>
	</td><td>
	<a href="#" rel='close'>閉じる</a>
	</td></tr></table>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('code'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($hinmoku_mrs as $hinmoku_mr): ?>
	<tr>
		<td class="actions">
			<a rel="close" href="#" onclick="hinmoku_mr_id=<?php echo $hinmoku_mr['HinmokuMr']['id']; ?>;hinmoku_mr_code='<?php echo $hinmoku_mr['HinmokuMr']['code']; ?>';hinmoku_mr_name='<?php echo $hinmoku_mr['HinmokuMr']['name']; ?>';">選択</a>
		</td>
		<td><?php echo h($hinmoku_mr['HinmokuMr']['code']); ?>&nbsp;</td>
		<td><?php echo h($hinmoku_mr['HinmokuMr']['name']); ?>&nbsp;</td>
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
