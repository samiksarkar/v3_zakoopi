<div class="row">
    <div class="col-lg-10">
        <div class = "storeOfferingsStyles form large-10 medium-9 columns">
            <?= $this->Form->create($storeOfferingsStyle);
            ?>
            <fieldset>
                <legend><?= __('Add Store Offerings Style') ?></legend>
                <?php
                            echo $this->Form->input('store_offering_id', ['options' => $storeOfferings, 'class' => 'form-control', 'div' => ['class' => 'form-group']]);
                            echo $this->Form->input('style_id', ['options' => $styles, 'class' => 'form-control', 'div' => ['class' => 'form-group']]);
                        
                
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
<?= $this->Form->end() ?>
        </div>
    </div>
    <div class="col-lg-2">
        <ul class="btn-group-vertical">
                        <li class="btn btn-default"><?= $this->Html->link(__('List Store Offerings Styles'), ['action' => 'index']) ?></li>
                        <li class="btn btn-default"><?=
                $this->Html->link(__('List Store Offerings'), ['controller' => 'StoreOfferings', 'action' => 'index']) ?> </li>
                <li class = "btn btn-default"><?= $this->Html->link(__('New Store Offering'), ['controller' => 'StoreOfferings', 'action' => 'add']) ?> </li>
                            <li class="btn btn-default"><?=
                $this->Html->link(__('List Styles'), ['controller' => 'Styles', 'action' => 'index']) ?> </li>
                <li class = "btn btn-default"><?= $this->Html->link(__('New Style'), ['controller' => 'Styles', 'action' => 'add']) ?> </li>
                    </ul>
    </div>
</div>

            
