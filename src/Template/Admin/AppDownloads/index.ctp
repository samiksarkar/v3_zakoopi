<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New App Download'), ['action' => 'add']) ?></li>
    </ul>
</div>
<div class="appDownloads index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('uuid') ?></th>
            <th><?= $this->Paginator->sort('first_started_at') ?></th>
            <th><?= $this->Paginator->sort('last_started_at') ?></th>
            <th><?= $this->Paginator->sort('visit_count') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($appDownloads as $appDownload): ?>
        <tr>
            <td><?= $this->Number->format($appDownload->id) ?></td>
            <td><?= h($appDownload->uuid) ?></td>
            <td><?= h($appDownload->first_started_at) ?></td>
            <td><?= h($appDownload->last_started_at) ?></td>
            <td><?= $this->Number->format($appDownload->visit_count) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $appDownload->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $appDownload->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $appDownload->id], ['confirm' => __('Are you sure you want to delete # {0}?', $appDownload->id)]) ?>
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
