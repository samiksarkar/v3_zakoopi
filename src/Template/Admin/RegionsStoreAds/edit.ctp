<div class="row">
    <div class="col-lg-10">
        <div class = "regionsStoreAds form large-10 medium-9 columns">
            <?= $this->Form->create($regionsStoreAd);
            ?>
            <fieldset>
                <legend><?= __('Edit Regions Store Ad') ?></legend>
                <?php
                            echo $this->Form->input('store_ad_id', ['options' => $storeAds, 'class' => 'form-control', 'div' => ['class' => 'form-group']]);
                            echo $this->Form->input('region_id', ['options' => $regions, 'class' => 'form-control', 'div' => ['class' => 'form-group']]);
                        
                
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
<?= $this->Form->end() ?>
        </div>
    </div>
    <div class="col-lg-2">
        <ul class="btn-group-vertical">
                        <li class="btn btn-default"><?=
                $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $regionsStoreAd->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $regionsStoreAd->id)]
                )
                ?></li>
                        <li class="btn btn-default"><?= $this->Html->link(__('List Regions Store Ads'), ['action' => 'index']) ?></li>
                        <li class="btn btn-default"><?=
                $this->Html->link(__('List Store Ads'), ['controller' => 'StoreAds', 'action' => 'index']) ?> </li>
                <li class = "btn btn-default"><?= $this->Html->link(__('New Store Ad'), ['controller' => 'StoreAds', 'action' => 'add']) ?> </li>
                            <li class="btn btn-default"><?=
                $this->Html->link(__('List Regions'), ['controller' => 'Regions', 'action' => 'index']) ?> </li>
                <li class = "btn btn-default"><?= $this->Html->link(__('New Region'), ['controller' => 'Regions', 'action' => 'add']) ?> </li>
                    </ul>
    </div>
</div>

            
