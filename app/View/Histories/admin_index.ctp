<div class="row-fluid">
	<div class="col-md-3">
		<div class="well" style="margin-top:20px;">
			<?php echo $this->BootstrapForm->create('History', array('action'=>'admin_index')); ?>
			<fieldset>
				<legend>検索</legend>
				<?php echo $this->BootstrapForm->input('user_id', array('label' => '利用者', 'class' => 'span12', 'empty' => true)); ?>
				<?php echo $this->BootstrapForm->input('gamen_page', array('label' => '画面ページ', 'class' => 'span12', 'placeholder' => '画面ページを対象に検索')); ?>
				<div class="control-group">
					<?php echo $this->BootstrapForm->label('from', '期間', array('class' => 'control-label')); ?>
					<div class="controls">
						<?php echo $this->BootstrapForm->text('from', array('class' => 'span6','id'=>'From')); ?>
						<?php echo $this->BootstrapForm->text('to', array('class' => 'span6','id'=>'To')); ?>
					</div>
				</div>
			</fieldset>
			<?php echo $this->BootstrapForm->submit('検索',array('class'=>'btn-lg btn-primary')); ?>
		</div>
	</div>
	<div class="col-md-9">
		<h2><?php echo __('List %s', __('Histories'));?></h2>

		<p>
			<?php echo $this->BootstrapPaginator->counter(array('format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')));?>
		</p>

		<table class="table">
			<tr>
				<th><?php echo $this->BootstrapPaginator->sort('id');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('created');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('user_id');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('gamen_page');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('from_page');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('pc_ip');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('browser');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('bikou');?></th>
			</tr>
		<?php foreach ($histories as $history): ?>
			<tr>
				<td><?php echo h($history['History']['id']); ?>&nbsp;</td>
				<td><?php echo h($history['History']['created']); ?>&nbsp;</td>
				<td>
					<?php echo $this->Html->link($history['User']['name'], array('controller' => 'users', 'action' => 'view', $history['User']['id'])); ?>
				</td>
				<td><?php echo h($history['History']['gamen_page']); ?>&nbsp;</td>
				<td><?php echo h($history['History']['from_page']); ?>&nbsp;</td>
				<td><?php echo h($history['History']['pc_ip']); ?>&nbsp;</td>
				<td><?php echo h($history['History']['browser']); ?>&nbsp;</td>
				<td><?php echo h($history['History']['bikou']); ?>&nbsp;</td>
			</tr>
		<?php endforeach; ?>
		</table>

		<?php echo $this->BootstrapPaginator->pagination(); ?>
	</div>

</div>

<!-- 日付選択ボックス date picker -->
<script type="text/javascript">
	$(function() {
		$('#From').datepicker({dateFormat:'yy-mm-dd 00:00:00'});
		$('#To').datepicker({dateFormat:'yy-mm-dd 23:59:59'});
	});
</script>