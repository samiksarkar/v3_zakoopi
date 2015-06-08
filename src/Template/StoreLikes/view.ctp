<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Store Like'), ['action' => 'edit', $storeLike->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Store Like'), ['action' => 'delete', $storeLike->id], ['confirm' => __('Are you sure you want to delete # {0}?', $storeLike->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Store Likes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Store Like'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Stores'), ['controller' => 'Stores', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Store'), ['controller' => 'Stores', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="storeLikes view large-10 medium-9 columns">
    <h2><?= h($storeLike->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Store') ?></h6>
            <p><?= $storeLike->has('store') ? $this->Html->link($storeLike->store->id, ['controller' => 'Stores', 'action' => 'view', $storeLike->store->id]) : '' ?></p>
            <h6 class="subheader"><?= __('User') ?></h6>
            <p><?= $storeLike->has('user') ? $this->Html->link($storeLike->user->first_name, ['controller' => 'Users', 'action' => 'view', $storeLike->user->id]) : '' ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($storeLike->id) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Timestamp') ?></h6>
            <p><?= h($storeLike->timestamp) ?></p>
        </div>
    </div>
</div>
