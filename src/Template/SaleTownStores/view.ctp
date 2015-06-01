<div class="row">
    <div class="col-lg-10">
        <div class="box">
            <div class="box-body">
                <div class="saleTownStores view large-10 medium-9 columns">
                    <h2><?= h($saleTownStore->id) ?></h2>
                    <div class="row">
                                                <div class="col-lg-12">
                                                                                    <h6 class="subheader"><?= __('City') ?></h6>
                            <p><?= $saleTownStore->has('city') ? $this->Html->link($saleTownStore->city->id, ['controller' => 'Cities', 'action' => 'view', $saleTownStore->city->id]) : '' ?></p>
                                                                                                                <h6 class="subheader"><?= __('Store') ?></h6>
                            <p><?= $saleTownStore->has('store') ? $this->Html->link($saleTownStore->store->id, ['controller' => 'Stores', 'action' => 'view', $saleTownStore->store->id]) : '' ?></p>
                                                                                                                <b class="subheader"><?= __('Store Name') ?></b>
                            <p><?= h($saleTownStore->store_name) ?></p>
                                                                                                                <b class="subheader"><?= __('Store Slug') ?></b>
                            <p><?= h($saleTownStore->store_slug) ?></p>
                                                                                                                <b class="subheader"><?= __('Cover Photo') ?></b>
                            <p><?= h($saleTownStore->cover_photo) ?></p>
                                                                                </div>
                                                                        <div class="col-lg-12">
                                                        <b class="subheader"><?= __('Id') ?></b>
                            <p><?= $this->Number->format($saleTownStore->id) ?></p>
                                                        <b class="subheader"><?= __('Status') ?></b>
                            <p><?= $this->Number->format($saleTownStore->status) ?></p>
                                                    </div>
                                                                        <div class="col-lg-12">
                                                        <b class="subheader"><?= __('Created Date') ?></b>
                            <p><?= h($saleTownStore->created_date) ?></p>
                                                        <b class="subheader"><?= __('Modified Date') ?></b>
                            <p><?= h($saleTownStore->modified_date) ?></p>
                                                    </div>
                                                                    </div>
                                    </div>
                    </div>
    <div class="col-lg-2">
        <ul class="btn-group-vertical">
            <li class="btn btn-default"><?= $this->Html->link(__('Edit Sale Town Store'), ['action' => 'edit', $saleTownStore->id]) ?> </li>
            <li class="btn btn-danger"><?= $this->Form->postLink(__('Delete Sale Town Store'), ['action' => 'delete', $saleTownStore->id], ['confirm' => __('Are you sure you want to delete # {0}?', $saleTownStore->id)]) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('List Sale Town Stores'), ['action' => 'index']) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('New Sale Town Store'), ['action' => 'add']) ?> </li>
                        <li class="btn btn-default"><?= $this->Html->link(__('List Cities'), ['controller' => 'Cities', 'action' => 'index']) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('New City'), ['controller' => 'Cities', 'action' => 'add']) ?> </li>
                        <li class="btn btn-default"><?= $this->Html->link(__('List Stores'), ['controller' => 'Stores', 'action' => 'index']) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('New Store'), ['controller' => 'Stores', 'action' => 'add']) ?> </li>
                    </ul>
    </div>

</div>


