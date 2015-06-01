<div class="row">
    <div class="col-lg-10">
        <div class="box">
            <div class="box-body">
                <div class="saleTownDeals view large-10 medium-9 columns">
                    <h2><?= h($saleTownDeal->id) ?></h2>
                    <div class="row">
                                                <div class="col-lg-12">
                                                                                    <h6 class="subheader"><?= __('Store') ?></h6>
                            <p><?= $saleTownDeal->has('store') ? $this->Html->link($saleTownDeal->store->id, ['controller' => 'Stores', 'action' => 'view', $saleTownDeal->store->id]) : '' ?></p>
                                                                                                                <b class="subheader"><?= __('Market Name') ?></b>
                            <p><?= h($saleTownDeal->market_name) ?></p>
                                                                                                                <b class="subheader"><?= __('Punch One') ?></b>
                            <p><?= h($saleTownDeal->punch_one) ?></p>
                                                                                                                <b class="subheader"><?= __('Punch Two') ?></b>
                            <p><?= h($saleTownDeal->punch_two) ?></p>
                                                                                                                <b class="subheader"><?= __('Store Cover') ?></b>
                            <p><?= h($saleTownDeal->store_cover) ?></p>
                                                                                                                <b class="subheader"><?= __('Conditions') ?></b>
                            <p><?= h($saleTownDeal->conditions) ?></p>
                                                                                </div>
                                                                        <div class="col-lg-12">
                                                        <b class="subheader"><?= __('Id') ?></b>
                            <p><?= $this->Number->format($saleTownDeal->id) ?></p>
                                                        <b class="subheader"><?= __('Status') ?></b>
                            <p><?= $this->Number->format($saleTownDeal->status) ?></p>
                                                    </div>
                                                                        <div class="col-lg-12">
                                                        <b class="subheader"><?= __('Deal Date') ?></b>
                            <p><?= h($saleTownDeal->deal_date) ?></p>
                                                        <b class="subheader"><?= __('Created Date') ?></b>
                            <p><?= h($saleTownDeal->created_date) ?></p>
                                                        <b class="subheader"><?= __('Modified Date') ?></b>
                            <p><?= h($saleTownDeal->modified_date) ?></p>
                                                    </div>
                                                                    </div>
                                    </div>
                    </div>
    <div class="col-lg-2">
        <ul class="btn-group-vertical">
            <li class="btn btn-default"><?= $this->Html->link(__('Edit Sale Town Deal'), ['action' => 'edit', $saleTownDeal->id]) ?> </li>
            <li class="btn btn-danger"><?= $this->Form->postLink(__('Delete Sale Town Deal'), ['action' => 'delete', $saleTownDeal->id], ['confirm' => __('Are you sure you want to delete # {0}?', $saleTownDeal->id)]) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('List Sale Town Deals'), ['action' => 'index']) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('New Sale Town Deal'), ['action' => 'add']) ?> </li>
                        <li class="btn btn-default"><?= $this->Html->link(__('List Stores'), ['controller' => 'Stores', 'action' => 'index']) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('New Store'), ['controller' => 'Stores', 'action' => 'add']) ?> </li>
                    </ul>
    </div>

</div>


