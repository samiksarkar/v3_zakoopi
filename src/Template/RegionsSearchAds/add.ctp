<div class="row">
    <div class="col-lg-10">
        <div class = "regionsSearchAds form large-10 medium-9 columns">
            <?= $this->Form->create($regionsSearchAd);
            ?>
            <fieldset>
                <legend><?= __('Add Regions Search Ad') ?></legend>
                <?php
                            echo $this->Form->input('search_ad_id', ['options' => $searchAds, 'class' => 'form-control', 'div' => ['class' => 'form-group']]);
                            echo $this->Form->input('region_id', ['options' => $regions, 'class' => 'form-control', 'div' => ['class' => 'form-group']]);
                        
                
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
<?= $this->Form->end() ?>
        </div>
    </div>
    <div class="col-lg-2">
        <ul class="btn-group-vertical">
                        <li class="btn btn-default"><?= $this->Html->link(__('List Regions Search Ads'), ['action' => 'index']) ?></li>
                        <li class="btn btn-default"><?=
                $this->Html->link(__('List Search Ads'), ['controller' => 'SearchAds', 'action' => 'index']) ?> </li>
                <li class = "btn btn-default"><?= $this->Html->link(__('New Search Ad'), ['controller' => 'SearchAds', 'action' => 'add']) ?> </li>
                            <li class="btn btn-default"><?=
                $this->Html->link(__('List Regions'), ['controller' => 'Regions', 'action' => 'index']) ?> </li>
                <li class = "btn btn-default"><?= $this->Html->link(__('New Region'), ['controller' => 'Regions', 'action' => 'add']) ?> </li>
                    </ul>
    </div>
</div>

            
