<div class="row">
    <div class="col-lg-10">
        <div class="box">
            <div class="box-body">
                <div class="storeOfferingsStyles view large-10 medium-9 columns">
                    <h2><?= h($storeOfferingsStyle->id) ?></h2>
                    <div class="row">
                                                <div class="col-lg-12">
                                                                                    <h6 class="subheader"><?= __('Store Offering') ?></h6>
                            <p><?= $storeOfferingsStyle->has('store_offering') ? $this->Html->link($storeOfferingsStyle->store_offering->id, ['controller' => 'StoreOfferings', 'action' => 'view', $storeOfferingsStyle->store_offering->id]) : '' ?></p>
                                                                                                                <h6 class="subheader"><?= __('Style') ?></h6>
                            <p><?= $storeOfferingsStyle->has('style') ? $this->Html->link($storeOfferingsStyle->style->name, ['controller' => 'Styles', 'action' => 'view', $storeOfferingsStyle->style->id]) : '' ?></p>
                                                                                </div>
                                                                        <div class="col-lg-12">
                                                        <b class="subheader"><?= __('Id') ?></b>
                            <p><?= $this->Number->format($storeOfferingsStyle->id) ?></p>
                                                    </div>
                                                                                            </div>
                                    </div>
                    </div>
    <div class="col-lg-2">
        <ul class="btn-group-vertical">
            <li class="btn btn-default"><?= $this->Html->link(__('Edit Store Offerings Style'), ['action' => 'edit', $storeOfferingsStyle->id]) ?> </li>
            <li class="btn btn-danger"><?= $this->Form->postLink(__('Delete Store Offerings Style'), ['action' => 'delete', $storeOfferingsStyle->id], ['confirm' => __('Are you sure you want to delete # {0}?', $storeOfferingsStyle->id)]) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('List Store Offerings Styles'), ['action' => 'index']) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('New Store Offerings Style'), ['action' => 'add']) ?> </li>
                        <li class="btn btn-default"><?= $this->Html->link(__('List Store Offerings'), ['controller' => 'StoreOfferings', 'action' => 'index']) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('New Store Offering'), ['controller' => 'StoreOfferings', 'action' => 'add']) ?> </li>
                        <li class="btn btn-default"><?= $this->Html->link(__('List Styles'), ['controller' => 'Styles', 'action' => 'index']) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('New Style'), ['controller' => 'Styles', 'action' => 'add']) ?> </li>
                    </ul>
    </div>

</div>


