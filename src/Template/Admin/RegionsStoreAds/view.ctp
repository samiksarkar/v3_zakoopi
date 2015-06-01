<div class="row">
    <div class="col-lg-10">
        <div class="box">
            <div class="box-body">
                <div class="regionsStoreAds view large-10 medium-9 columns">
                    <h2><?= h($regionsStoreAd->id) ?></h2>
                    <div class="row">
                                                <div class="col-lg-12">
                                                                                    <h6 class="subheader"><?= __('Store Ad') ?></h6>
                            <p><?= $regionsStoreAd->has('store_ad') ? $this->Html->link($regionsStoreAd->store_ad->id, ['controller' => 'StoreAds', 'action' => 'view', $regionsStoreAd->store_ad->id]) : '' ?></p>
                                                                                                                <h6 class="subheader"><?= __('Region') ?></h6>
                            <p><?= $regionsStoreAd->has('region') ? $this->Html->link($regionsStoreAd->region->name, ['controller' => 'Regions', 'action' => 'view', $regionsStoreAd->region->id]) : '' ?></p>
                                                                                </div>
                                                                        <div class="col-lg-12">
                                                        <b class="subheader"><?= __('Id') ?></b>
                            <p><?= $this->Number->format($regionsStoreAd->id) ?></p>
                                                    </div>
                                                                                            </div>
                                    </div>
                    </div>
    <div class="col-lg-2">
        <ul class="btn-group-vertical">
            <li class="btn btn-default"><?= $this->Html->link(__('Edit Regions Store Ad'), ['action' => 'edit', $regionsStoreAd->id]) ?> </li>
            <li class="btn btn-danger"><?= $this->Form->postLink(__('Delete Regions Store Ad'), ['action' => 'delete', $regionsStoreAd->id], ['confirm' => __('Are you sure you want to delete # {0}?', $regionsStoreAd->id)]) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('List Regions Store Ads'), ['action' => 'index']) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('New Regions Store Ad'), ['action' => 'add']) ?> </li>
                        <li class="btn btn-default"><?= $this->Html->link(__('List Store Ads'), ['controller' => 'StoreAds', 'action' => 'index']) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('New Store Ad'), ['controller' => 'StoreAds', 'action' => 'add']) ?> </li>
                        <li class="btn btn-default"><?= $this->Html->link(__('List Regions'), ['controller' => 'Regions', 'action' => 'index']) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('New Region'), ['controller' => 'Regions', 'action' => 'add']) ?> </li>
                    </ul>
    </div>

</div>


