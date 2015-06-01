<div class="row">
    <div class="col-lg-10">
        <div class = "regions form large-10 medium-9 columns">
            <?= $this->Form->create($region);
            ?>
            <fieldset>
                <legend><?= __('Add Region') ?></legend>
                <?php
                                echo $this->Form->input('name', ['class' => 'form-control', 'div' => ['class' => 'form-group']] );
                            echo $this->Form->input('homepage_ads._ids', ['options' => $homepageAds, 'class' => 'form-control', 'div' => ['class' => 'form-group']]);
                            echo $this->Form->input('search_ads._ids', ['options' => $searchAds, 'class' => 'form-control', 'div' => ['class' => 'form-group']]);
                            echo $this->Form->input('store_ads._ids', ['options' => $storeAds, 'class' => 'form-control', 'div' => ['class' => 'form-group']]);
                        
                
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
<?= $this->Form->end() ?>
        </div>
    </div>
    <div class="col-lg-2">
        <ul class="btn-group-vertical">
                        <li class="btn btn-default"><?= $this->Html->link(__('List Regions'), ['action' => 'index']) ?></li>
                        <li class="btn btn-default"><?=
                $this->Html->link(__('List Homepage Ads'), ['controller' => 'HomepageAds', 'action' => 'index']) ?> </li>
                <li class = "btn btn-default"><?= $this->Html->link(__('New Homepage Ad'), ['controller' => 'HomepageAds', 'action' => 'add']) ?> </li>
                            <li class="btn btn-default"><?=
                $this->Html->link(__('List Search Ads'), ['controller' => 'SearchAds', 'action' => 'index']) ?> </li>
                <li class = "btn btn-default"><?= $this->Html->link(__('New Search Ad'), ['controller' => 'SearchAds', 'action' => 'add']) ?> </li>
                            <li class="btn btn-default"><?=
                $this->Html->link(__('List Store Ads'), ['controller' => 'StoreAds', 'action' => 'index']) ?> </li>
                <li class = "btn btn-default"><?= $this->Html->link(__('New Store Ad'), ['controller' => 'StoreAds', 'action' => 'add']) ?> </li>
                    </ul>
    </div>
</div>

            
