<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $appDownload->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $appDownload->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List App Downloads'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="appDownloads form large-10 medium-9 columns">
    <?= $this->Form->create($appDownload) ?>
    <fieldset>
        <legend><?= __('Edit App Download') ?></legend>
        <?php
            echo $this->Form->input('uuid');
            echo $this->Form->input('first_started_at');
            echo $this->Form->input('last_started_at');
            echo $this->Form->input('version');
            echo $this->Form->input('visit_count');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
