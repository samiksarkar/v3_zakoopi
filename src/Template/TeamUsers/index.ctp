<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Team User'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Teams'), ['controller' => 'Teams', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Team'), ['controller' => 'Teams', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="teamUsers index large-10 medium-9 columns">
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
    <?php foreach ($teamUsers as $teamUser): ?>
        <tr>
            <td><?= $this->Number->format($teamUser->id) ?></td>
            <td>
                <?= $teamUser->has('user') ? $this->Html->link($teamUser->user->first_name, ['controller' => 'Users', 'action' => 'view', $teamUser->user->id]) : '' ?>
            </td>
            <td>
                <?= $teamUser->has('team') ? $this->Html->link($teamUser->team->title, ['controller' => 'Teams', 'action' => 'view', $teamUser->team->id]) : '' ?>
            </td>
            <td><?= h($teamUser->timestamp) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $teamUser->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $teamUser->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $teamUser->id], ['confirm' => __('Are you sure you want to delete # {0}?', $teamUser->id)]) ?>
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
