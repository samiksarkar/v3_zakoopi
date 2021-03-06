<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Feed Recent'), ['action' => 'add']) ?></li>
    </ul>
</div>
<div class="feedRecent index large-10 medium-9 columns">
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
    <?php foreach ($feedRecent as $feedRecent): ?>
        <tr>
            <td><?= $this->Number->format($feedRecent->id) ?></td>
            <td><?= $this->Number->format($feedRecent->key) ?></td>
            <td><?= h($feedRecent->model) ?></td>
            <td><?= $this->Number->format($feedRecent->order) ?></td>
            <td><?= h($feedRecent->timestamp) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $feedRecent->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $feedRecent->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $feedRecent->id], ['confirm' => __('Are you sure you want to delete # {0}?', $feedRecent->id)]) ?>
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
