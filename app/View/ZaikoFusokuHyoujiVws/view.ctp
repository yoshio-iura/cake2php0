<div class="row-fluid">
	<div class="span9">
		<h2><?php  echo __('Zaiko Fusoku Hyouji Vw');?></h2>
		<dl>
			<dt><?php echo __('Hinmoku Mr Id'); ?></dt>
			<dd>
				<?php echo h($zaikoFusokuHyoujiVw['ZaikoFusokuHyoujiVw']['hinmoku_mr_id']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Code'); ?></dt>
			<dd>
				<?php echo h($zaikoFusokuHyoujiVw['ZaikoFusokuHyoujiVw']['code']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Name'); ?></dt>
			<dd>
				<?php echo h($zaikoFusokuHyoujiVw['ZaikoFusokuHyoujiVw']['name']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Tanni Mr Id'); ?></dt>
			<dd>
				<?php echo h($zaikoFusokuHyoujiVw['ZaikoFusokuHyoujiVw']['tanni_mr_id']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Hinsitu Kbn Id'); ?></dt>
			<dd>
				<?php echo h($zaikoFusokuHyoujiVw['ZaikoFusokuHyoujiVw']['hinsitu_kbn_id']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Anzen Zaiko Suu'); ?></dt>
			<dd>
				<?php echo h($zaikoFusokuHyoujiVw['ZaikoFusokuHyoujiVw']['anzen_zaiko_suu']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Zaiko'); ?></dt>
			<dd>
				<?php echo h($zaikoFusokuHyoujiVw['ZaikoFusokuHyoujiVw']['zaiko']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Nouzan'); ?></dt>
			<dd>
				<?php echo h($zaikoFusokuHyoujiVw['ZaikoFusokuHyoujiVw']['nouzan']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Kafusoku'); ?></dt>
			<dd>
				<?php echo h($zaikoFusokuHyoujiVw['ZaikoFusokuHyoujiVw']['kafusoku']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Chuuzan'); ?></dt>
			<dd>
				<?php echo h($zaikoFusokuHyoujiVw['ZaikoFusokuHyoujiVw']['chuuzan']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('You Hachuu'); ?></dt>
			<dd>
				<?php echo h($zaikoFusokuHyoujiVw['ZaikoFusokuHyoujiVw']['you_hachuu']); ?>
				&nbsp;
			</dd>
		</dl>
	</div>
	<div class="span3">
		<div class="well" style="padding: 8px 0; margin-top:8px;">
		<ul class="nav nav-list">
			<li class="nav-header"><?php echo __('Actions'); ?></li>
			<li><?php echo $this->Html->link(__('Edit %s', __('Zaiko Fusoku Hyouji Vw')), array('action' => 'edit', $zaikoFusokuHyoujiVw['ZaikoFusokuHyoujiVw']['hinmoku_mr_id'])); ?> </li>
			<li><?php echo $this->Form->postLink(__('Delete %s', __('Zaiko Fusoku Hyouji Vw')), array('action' => 'delete', $zaikoFusokuHyoujiVw['ZaikoFusokuHyoujiVw']['hinmoku_mr_id']), null, __('Are you sure you want to delete # %s?', $zaikoFusokuHyoujiVw['ZaikoFusokuHyoujiVw']['hinmoku_mr_id'])); ?> </li>
			<li><?php echo $this->Html->link(__('List %s', __('Zaiko Fusoku Hyouji Vws')), array('action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New %s', __('Zaiko Fusoku Hyouji Vw')), array('action' => 'add')); ?> </li>
		</ul>
		</div>
	</div>
</div>

