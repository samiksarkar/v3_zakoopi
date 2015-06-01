<div class="row">
    <div class="col-lg-10">
        <div class="box">
            <div class="box-body">
                <div class="regionsSearchAds view large-10 medium-9 columns">
                    <h2><?= h($regionsSearchAd->id) ?></h2>
                    <div class="row">
                                                <div class="col-lg-12">
                                                                                    <h6 class="subheader"><?= __('Search Ad') ?></h6>
                            <p><?= $regionsSearchAd->has('search_ad') ? $this->Html->link($regionsSearchAd->search_ad->id, ['controller' => 'SearchAds', 'action' => 'view', $regionsSearchAd->search_ad->id]) : '' ?></p>
                                                                                                                <h6 class="subheader"><?= __('Region') ?></h6>
                            <p><?= $regionsSearchAd->has('region') ? $this->Html->link($regionsSearchAd->region->name, ['controller' => 'Regions', 'action' => 'view', $regionsSearchAd->region->id]) : '' ?></p>
                                                                                </div>
                                                                        <div class="col-lg-12">
                                                        <b class="subheader"><?= __('Id') ?></b>
                            <p><?= $this->Number->format($regionsSearchAd->id) ?></p>
                                                    </div>
                                                                                            </div>
                                    </div>
                    </div>
    <div class="col-lg-2">
        <ul class="btn-group-vertical">
            <li class="btn btn-default"><?= $this->Html->link(__('Edit Regions Search Ad'), ['action' => 'edit', $regionsSearchAd->id]) ?> </li>
            <li class="btn btn-danger"><?= $this->Form->postLink(__('Delete Regions Search Ad'), ['action' => 'delete', $regionsSearchAd->id], ['confirm' => __('Are you sure you want to delete # {0}?', $regionsSearchAd->id)]) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('List Regions Search Ads'), ['action' => 'index']) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('New Regions Search Ad'), ['action' => 'add']) ?> </li>
                        <li class="btn btn-default"><?= $this->Html->link(__('List Search Ads'), ['controller' => 'SearchAds', 'action' => 'index']) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('New Search Ad'), ['controller' => 'SearchAds', 'action' => 'add']) ?> </li>
                        <li class="btn btn-default"><?= $this->Html->link(__('List Regions'), ['controller' => 'Regions', 'action' => 'index']) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('New Region'), ['controller' => 'Regions', 'action' => 'add']) ?> </li>
                    </ul>
    </div>

</div>


