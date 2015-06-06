<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Feed Popular'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="feedPopular form large-10 medium-9 columns">
    <?= $this->Form->create($feedPopular) ?>
    <fieldset>
        <legend><?= __('Add Feed Popular') ?></legend>
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
