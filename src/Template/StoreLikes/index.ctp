<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Store Like'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Stores'), ['controller' => 'Stores', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Store'), ['controller' => 'Stores', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="storeLikes index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('store_id') ?></th>
            <th><?= $this->Paginator->sort('user_id') ?></th>
            <th><?= $this->Paginator->sort('timestamp') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($storeLikes as $storeLike): ?>
        <tr>
            <td><?= $this->Number->format($storeLike->id) ?></td>
            <td>
                <?= $storeLike->has('store') ? $this->Html->link($storeLike->store->id, ['controller' => 'Stores', 'action' => 'view', $storeLike->store->id]) : '' ?>
            </td>
            <td>
                <?= $storeLike->has('user') ? $this->Html->link($storeLike->user->first_name, ['controller' => 'Users', 'action' => 'view', $storeLike->user->id]) : '' ?>
            </td>
            <td><?= h($storeLike->timestamp) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $storeLike->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $storeLike->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $storeLike->id], ['confirm' => __('Are you sure you want to delete # {0}?', $storeLike->id)]) ?>
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
