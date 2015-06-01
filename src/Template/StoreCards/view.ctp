<div class="row">
    <div class="col-lg-10">
        <div class="box">
            <div class="box-body">
                <div class="storeCards view large-10 medium-9 columns">
                    <h2><?= h($storeCard->id) ?></h2>
                    <div class="row">
                                                <div class="col-lg-12">
                                                                                    <h6 class="subheader"><?= __('Store') ?></h6>
                            <p><?= $storeCard->has('store') ? $this->Html->link($storeCard->store->id, ['controller' => 'Stores', 'action' => 'view', $storeCard->store->id]) : '' ?></p>
                                                                                                                <h6 class="subheader"><?= __('Card') ?></h6>
                            <p><?= $storeCard->has('card') ? $this->Html->link($storeCard->card->id, ['controller' => 'Cards', 'action' => 'view', $storeCard->card->id]) : '' ?></p>
                                                                                </div>
                                                                        <div class="col-lg-12">
                                                        <b class="subheader"><?= __('Id') ?></b>
                            <p><?= $this->Number->format($storeCard->id) ?></p>
                                                    </div>
                                                                                            </div>
                                    </div>
                    </div>
    <div class="col-lg-2">
        <ul class="btn-group-vertical">
            <li class="btn btn-default"><?= $this->Html->link(__('Edit Store Card'), ['action' => 'edit', $storeCard->id]) ?> </li>
            <li class="btn btn-danger"><?= $this->Form->postLink(__('Delete Store Card'), ['action' => 'delete', $storeCard->id], ['confirm' => __('Are you sure you want to delete # {0}?', $storeCard->id)]) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('List Store Cards'), ['action' => 'index']) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('New Store Card'), ['action' => 'add']) ?> </li>
                        <li class="btn btn-default"><?= $this->Html->link(__('List Stores'), ['controller' => 'Stores', 'action' => 'index']) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('New Store'), ['controller' => 'Stores', 'action' => 'add']) ?> </li>
                        <li class="btn btn-default"><?= $this->Html->link(__('List Cards'), ['controller' => 'Cards', 'action' => 'index']) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('New Card'), ['controller' => 'Cards', 'action' => 'add']) ?> </li>
                    </ul>
    </div>

</div>


