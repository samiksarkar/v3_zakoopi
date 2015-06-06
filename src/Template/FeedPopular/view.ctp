<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Feed Popular'), ['action' => 'edit', $feedPopular->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Feed Popular'), ['action' => 'delete', $feedPopular->id], ['confirm' => __('Are you sure you want to delete # {0}?', $feedPopular->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Feed Popular'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Feed Popular'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="feedPopular view large-10 medium-9 columns">
    <h2><?= h($feedPopular->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Model') ?></h6>
            <p><?= h($feedPopular->model) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($feedPopular->id) ?></p>
            <h6 class="subheader"><?= __('Key') ?></h6>
            <p><?= $this->Number->format($feedPopular->key) ?></p>
            <h6 class="subheader"><?= __('Order') ?></h6>
            <p><?= $this->Number->format($feedPopular->order) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Timestamp') ?></h6>
            <p><?= h($feedPopular->timestamp) ?></p>
        </div>
    </div>
</div>
