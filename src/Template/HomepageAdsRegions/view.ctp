<div class="row">
    <div class="col-lg-10">
        <div class="box">
            <div class="box-body">
                <div class="homepageAdsRegions view large-10 medium-9 columns">
                    <h2><?= h($homepageAdsRegion->id) ?></h2>
                    <div class="row">
                                                <div class="col-lg-12">
                                                                                    <h6 class="subheader"><?= __('Homepage Ad') ?></h6>
                            <p><?= $homepageAdsRegion->has('homepage_ad') ? $this->Html->link($homepageAdsRegion->homepage_ad->id, ['controller' => 'HomepageAds', 'action' => 'view', $homepageAdsRegion->homepage_ad->id]) : '' ?></p>
                                                                                                                <h6 class="subheader"><?= __('Region') ?></h6>
                            <p><?= $homepageAdsRegion->has('region') ? $this->Html->link($homepageAdsRegion->region->name, ['controller' => 'Regions', 'action' => 'view', $homepageAdsRegion->region->id]) : '' ?></p>
                                                                                </div>
                                                                        <div class="col-lg-12">
                                                        <b class="subheader"><?= __('Id') ?></b>
                            <p><?= $this->Number->format($homepageAdsRegion->id) ?></p>
                                                    </div>
                                                                                            </div>
                                    </div>
                    </div>
    <div class="col-lg-2">
        <ul class="btn-group-vertical">
            <li class="btn btn-default"><?= $this->Html->link(__('Edit Homepage Ads Region'), ['action' => 'edit', $homepageAdsRegion->id]) ?> </li>
            <li class="btn btn-danger"><?= $this->Form->postLink(__('Delete Homepage Ads Region'), ['action' => 'delete', $homepageAdsRegion->id], ['confirm' => __('Are you sure you want to delete # {0}?', $homepageAdsRegion->id)]) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('List Homepage Ads Regions'), ['action' => 'index']) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('New Homepage Ads Region'), ['action' => 'add']) ?> </li>
                        <li class="btn btn-default"><?= $this->Html->link(__('List Homepage Ads'), ['controller' => 'HomepageAds', 'action' => 'index']) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('New Homepage Ad'), ['controller' => 'HomepageAds', 'action' => 'add']) ?> </li>
                        <li class="btn btn-default"><?= $this->Html->link(__('List Regions'), ['controller' => 'Regions', 'action' => 'index']) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('New Region'), ['controller' => 'Regions', 'action' => 'add']) ?> </li>
                    </ul>
    </div>

</div>


