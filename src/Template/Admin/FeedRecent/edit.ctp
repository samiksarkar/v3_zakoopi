<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $feedRecent->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $feedRecent->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Feed Recent'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="feedRecent form large-10 medium-9 columns">
    <?= $this->Form->create($feedRecent) ?>
    <fieldset>
        <legend><?= __('Edit Feed Recent') ?></legend>
        <?php
            echo $this->Form->input('key');
            echo $this->Form->input('model');
            echo $this->Form->input('order');
            echo $this->Form->input('timestamp');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
