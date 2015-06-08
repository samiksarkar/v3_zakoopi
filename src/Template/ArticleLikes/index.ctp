<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Article Like'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Articles'), ['controller' => 'Articles', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Article'), ['controller' => 'Articles', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="articleLikes index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('article_id') ?></th>
            <th><?= $this->Paginator->sort('user_id') ?></th>
            <th><?= $this->Paginator->sort('timestamp') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($articleLikes as $articleLike): ?>
        <tr>
            <td><?= $this->Number->format($articleLike->id) ?></td>
            <td>
                <?= $articleLike->has('article') ? $this->Html->link($articleLike->article->title, ['controller' => 'Articles', 'action' => 'view', $articleLike->article->id]) : '' ?>
            </td>
            <td>
                <?= $articleLike->has('user') ? $this->Html->link($articleLike->user->first_name, ['controller' => 'Users', 'action' => 'view', $articleLike->user->id]) : '' ?>
            </td>
            <td><?= h($articleLike->timestamp) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $articleLike->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $articleLike->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $articleLike->id], ['confirm' => __('Are you sure you want to delete # {0}?', $articleLike->id)]) ?>
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
