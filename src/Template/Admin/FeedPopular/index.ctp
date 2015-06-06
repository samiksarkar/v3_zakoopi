<?php 
debug($feedPopular->toArray());
exit;
?>
<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Feed Popular'), ['action' => 'add']) ?></li>
    </ul>
</div>
<div class="feedPopular index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('key') ?></th>
            <th><?= $this->Paginator->sort('model') ?></th>
            <th><?= $this->Paginator->sort('order') ?></th>
            <th><?= $this->Paginator->sort('timestamp') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($feedPopular as $feedPopular): ?>
        <tr>
            <td><?= $this->Number->format($feedPopular->id) ?></td>
            <td><?= $this->Number->format($feedPopular->key) ?></td>
            <td><?= h($feedPopular->model) ?></td>
            <td><?= $this->Number->format($feedPopular->order) ?></td>
            <td><?= h($feedPopular->timestamp) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $feedPopular->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $feedPopular->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $feedPopular->id], ['confirm' => __('Are you sure you want to delete # {0}?', $feedPopular->id)]) ?>
            </td>
        </tr>

    <?php endforeach; ?>
    </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
