<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Feed Recent'), ['action' => 'edit', $feedRecent->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Feed Recent'), ['action' => 'delete', $feedRecent->id], ['confirm' => __('Are you sure you want to delete # {0}?', $feedRecent->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Feed Recent'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Feed Recent'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="feedRecent view large-10 medium-9 columns">
    <h2><?= h($feedRecent->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Model') ?></h6>
            <p><?= h($feedRecent->model) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($feedRecent->id) ?></p>
            <h6 class="subheader"><?= __('Key') ?></h6>
            <p><?= $this->Number->format($feedRecent->key) ?></p>
            <h6 class="subheader"><?= __('Order') ?></h6>
            <p><?= $this->Number->format($feedRecent->order) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Timestamp') ?></h6>
            <p><?= h($feedRecent->timestamp) ?></p>
        </div>
    </div>
</div>
