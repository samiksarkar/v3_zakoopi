<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Team Like'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Teams'), ['controller' => 'Teams', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Team'), ['controller' => 'Teams', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="teamLikes index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('user_id') ?></th>
            <th><?= $this->Paginator->sort('team_id') ?></th>
            <th><?= $this->Paginator->sort('timestamp') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($teamLikes as $teamLike): ?>
        <tr>
            <td><?= $this->Number->format($teamLike->id) ?></td>
            <td>
                <?= $teamLike->has('user') ? $this->Html->link($teamLike->user->first_name, ['controller' => 'Users', 'action' => 'view', $teamLike->user->id]) : '' ?>
            </td>
            <td>
                <?= $teamLike->has('team') ? $this->Html->link($teamLike->team->title, ['controller' => 'Teams', 'action' => 'view', $teamLike->team->id]) : '' ?>
            </td>
            <td><?= h($teamLike->timestamp) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $teamLike->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $teamLike->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $teamLike->id], ['confirm' => __('Are you sure you want to delete # {0}?', $teamLike->id)]) ?>
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
