<div class="row">
    <div class="col-lg-10">
        <div class = "homepageAdsRegions form large-10 medium-9 columns">
            <?= $this->Form->create($homepageAdsRegion);
            ?>
            <fieldset>
                <legend><?= __('Edit Homepage Ads Region') ?></legend>
                <?php
                            echo $this->Form->input('homepage_ad_id', ['options' => $homepageAds, 'class' => 'form-control', 'div' => ['class' => 'form-group']]);
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
                ['action' => 'delete', $homepageAdsRegion->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $homepageAdsRegion->id)]
                )
                ?></li>
                        <li class="btn btn-default"><?= $this->Html->link(__('List Homepage Ads Regions'), ['action' => 'index']) ?></li>
                        <li class="btn btn-default"><?=
                $this->Html->link(__('List Homepage Ads'), ['controller' => 'HomepageAds', 'action' => 'index']) ?> </li>
                <li class = "btn btn-default"><?= $this->Html->link(__('New Homepage Ad'), ['controller' => 'HomepageAds', 'action' => 'add']) ?> </li>
                            <li class="btn btn-default"><?=
                $this->Html->link(__('List Regions'), ['controller' => 'Regions', 'action' => 'index']) ?> </li>
                <li class = "btn btn-default"><?= $this->Html->link(__('New Region'), ['controller' => 'Regions', 'action' => 'add']) ?> </li>
                    </ul>
    </div>
</div>

            
