<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit App Download'), ['action' => 'edit', $appDownload->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete App Download'), ['action' => 'delete', $appDownload->id], ['confirm' => __('Are you sure you want to delete # {0}?', $appDownload->id)]) ?> </li>
        <li><?= $this->Html->link(__('List App Downloads'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New App Download'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="appDownloads view large-10 medium-9 columns">
    <h2><?= h($appDownload->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Uuid') ?></h6>
            <p><?= h($appDownload->uuid) ?></p>
            <h6 class="subheader"><?= __('First Started At') ?></h6>
            <p><?= h($appDownload->first_started_at) ?></p>
            <h6 class="subheader"><?= __('Last Started At') ?></h6>
            <p><?= h($appDownload->last_started_at) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($appDownload->id) ?></p>
            <h6 class="subheader"><?= __('Visit Count') ?></h6>
            <p><?= $this->Number->format($appDownload->visit_count) ?></p>
        </div>
    </div>
    <div class="row texts">
        <div class="columns large-9">
            <h6 class="subheader"><?= __('Version') ?></h6>
            <?= $this->Text->autoParagraph(h($appDownload->version)); ?>

        </div>
    </div>
</div>
