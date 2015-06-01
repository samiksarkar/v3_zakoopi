<div class="row">
    <div class="col-lg-10">
        <div class = "searchAds form large-10 medium-9 columns">
            <?= $this->Form->create($searchAd);
            ?>
            <fieldset>
                <legend><?= __('Add Search Ad') ?></legend>
                <?php
                                echo $this->Form->input('type', ['class' => 'form-control', 'div' => ['class' => 'form-group']] );
                                echo $this->Form->input('status', ['class' => 'form-control', 'div' => ['class' => 'form-group']] );
                                echo $this->Form->input('tagline', ['class' => 'form-control', 'div' => ['class' => 'form-group']] );
                                echo $this->Form->input('rate_of_ad', ['class' => 'form-control', 'div' => ['class' => 'form-group']] );
                                echo $this->Form->input('redirectto', ['class' => 'form-control', 'div' => ['class' => 'form-group']] );
                            echo $this->Form->input('store_id', ['options' => $stores, 'class' => 'form-control', 'div' => ['class' => 'form-group']]);
                                echo $this->Form->input('keywords', ['class' => 'form-control', 'div' => ['class' => 'form-group']] );
                                echo $this->Form->input('image', ['class' => 'form-control', 'div' => ['class' => 'form-group']] );
                            echo $this->Form->input('regions._ids', ['options' => $regions, 'class' => 'form-control', 'div' => ['class' => 'form-group']]);
                        
                
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
<?= $this->Form->end() ?>
        </div>
    </div>
    <div class="col-lg-2">
        <ul class="btn-group-vertical">
                        <li class="btn btn-default"><?= $this->Html->link(__('List Search Ads'), ['action' => 'index']) ?></li>
                        <li class="btn btn-default"><?=
                $this->Html->link(__('List Stores'), ['controller' => 'Stores', 'action' => 'index']) ?> </li>
                <li class = "btn btn-default"><?= $this->Html->link(__('New Store'), ['controller' => 'Stores', 'action' => 'add']) ?> </li>
                            <li class="btn btn-default"><?=
                $this->Html->link(__('List Regions'), ['controller' => 'Regions', 'action' => 'index']) ?> </li>
                <li class = "btn btn-default"><?= $this->Html->link(__('New Region'), ['controller' => 'Regions', 'action' => 'add']) ?> </li>
                    </ul>
    </div>
</div>

            
