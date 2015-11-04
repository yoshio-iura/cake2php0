<div class="row">
	<h3><?php echo '一覧表 '.__('取引先'); ?></h3>
	<?php	echo $this->Form->create('TorihikisakiMr', array('action'=>'popup')); ?>
	<table cellpadding="0" cellspacing="0"><tr><td>
	<?php	echo $this->Form->input('search', array('label'=>'コードか名称の一部を入れてください')); ?>
	</td><td>
	<?php	echo $this->Form->end('検索'); ?>
	</td><td>
	<a href="#" rel='close'>閉じる</a>
	</td></tr></table>
	<table class="tbl1">
	<thead>
	<tr>
			<th></th>
			<th><?php echo $this->Paginator->sort('code'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($torihikisaki_mrs as $torihikisaki_mr): ?>
	<tr>
		<td class="actions">
			<a rel="close" href="#" onclick="torihikisaki_mr_id=<?php echo $torihikisaki_mr['TorihikisakiMr']['id']; ?>;torihikisaki_mr_code='<?php echo $torihikisaki_mr['TorihikisakiMr']['code']; ?>';torihikisaki_mr_name='<?php echo $torihikisaki_mr['TorihikisakiMr']['name']; ?>';">選択</a>
		</td>
		<td><?php echo h($torihikisaki_mr['TorihikisakiMr']['code']); ?>&nbsp;</td>
		<td><?php echo h($torihikisaki_mr['TorihikisakiMr']['name']); ?>&nbsp;</td>
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
			echo '<div class="pagination">';
				echo $this->Paginator->first('最初', $options = array());
				echo $this->Paginator->prev('前へ', array(), null, array('class' => 'prev disabled'));
				echo $this->Paginator->numbers(array('separator' => ''));
				echo $this->Paginator->next('次へ', array(), null, array('class' => 'next disabled'));
				echo $this->Paginator->last('最後', $options = array());
			echo '</div>';
		?>
	</div>
</div>
