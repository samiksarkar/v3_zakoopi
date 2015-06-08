<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Team'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Team Likes'), ['controller' => 'TeamLikes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Team Like'), ['controller' => 'TeamLikes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Team Users'), ['controller' => 'TeamUsers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Team User'), ['controller' => 'TeamUsers', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="teams index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('title') ?></th>
            <th><?= $this->Paginator->sort('timestamp') ?></th>
            <th><?= $this->Paginator->sort('hits') ?></th>
            <th><?= $this->Paginator->sort('img') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($teams as $team): ?>
        <tr>
            <td><?= $this->Number->format($team->id) ?></td>
            <td><?= h($team->title) ?></td>
            <td><?= h($team->timestamp) ?></td>
            <td><?= $this->Number->format($team->hits) ?></td>
            <td><?= $this->Number->format($team->img) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $team->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $team->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $team->id], ['confirm' => __('Are you sure you want to delete # {0}?', $team->id)]) ?>
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
