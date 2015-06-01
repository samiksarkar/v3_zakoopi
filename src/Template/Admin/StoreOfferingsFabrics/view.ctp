<div class="row">
    <div class="col-lg-10">
        <div class="box">
            <div class="box-body">
                <div class="storeOfferingsFabrics view large-10 medium-9 columns">
                    <h2><?= h($storeOfferingsFabric->id) ?></h2>
                    <div class="row">
                                                <div class="col-lg-12">
                                                                                    <h6 class="subheader"><?= __('Store Offering') ?></h6>
                            <p><?= $storeOfferingsFabric->has('store_offering') ? $this->Html->link($storeOfferingsFabric->store_offering->id, ['controller' => 'StoreOfferings', 'action' => 'view', $storeOfferingsFabric->store_offering->id]) : '' ?></p>
                                                                                                                <h6 class="subheader"><?= __('Fabric') ?></h6>
                            <p><?= $storeOfferingsFabric->has('fabric') ? $this->Html->link($storeOfferingsFabric->fabric->name, ['controller' => 'Fabrics', 'action' => 'view', $storeOfferingsFabric->fabric->id]) : '' ?></p>
                                                                                </div>
                                                                        <div class="col-lg-12">
                                                        <b class="subheader"><?= __('Id') ?></b>
                            <p><?= $this->Number->format($storeOfferingsFabric->id) ?></p>
                                                    </div>
                                                                                            </div>
                                    </div>
                    </div>
    <div class="col-lg-2">
        <ul class="btn-group-vertical">
            <li class="btn btn-default"><?= $this->Html->link(__('Edit Store Offerings Fabric'), ['action' => 'edit', $storeOfferingsFabric->id]) ?> </li>
            <li class="btn btn-danger"><?= $this->Form->postLink(__('Delete Store Offerings Fabric'), ['action' => 'delete', $storeOfferingsFabric->id], ['confirm' => __('Are you sure you want to delete # {0}?', $storeOfferingsFabric->id)]) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('List Store Offerings Fabrics'), ['action' => 'index']) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('New Store Offerings Fabric'), ['action' => 'add']) ?> </li>
                        <li class="btn btn-default"><?= $this->Html->link(__('List Store Offerings'), ['controller' => 'StoreOfferings', 'action' => 'index']) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('New Store Offering'), ['controller' => 'StoreOfferings', 'action' => 'add']) ?> </li>
                        <li class="btn btn-default"><?= $this->Html->link(__('List Fabrics'), ['controller' => 'Fabrics', 'action' => 'index']) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('New Fabric'), ['controller' => 'Fabrics', 'action' => 'add']) ?> </li>
                    </ul>
    </div>

</div>


