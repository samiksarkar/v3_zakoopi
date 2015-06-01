<div class="row">
    <div class="col-lg-10">
        <div class = "storeOfferingsFabrics form large-10 medium-9 columns">
            <?= $this->Form->create($storeOfferingsFabric);
            ?>
            <fieldset>
                <legend><?= __('Edit Store Offerings Fabric') ?></legend>
                <?php
                            echo $this->Form->input('store_offering_id', ['options' => $storeOfferings, 'class' => 'form-control', 'div' => ['class' => 'form-group']]);
                            echo $this->Form->input('fabric_id', ['options' => $fabrics, 'class' => 'form-control', 'div' => ['class' => 'form-group']]);
                        
                
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
                ['action' => 'delete', $storeOfferingsFabric->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $storeOfferingsFabric->id)]
                )
                ?></li>
                        <li class="btn btn-default"><?= $this->Html->link(__('List Store Offerings Fabrics'), ['action' => 'index']) ?></li>
                        <li class="btn btn-default"><?=
                $this->Html->link(__('List Store Offerings'), ['controller' => 'StoreOfferings', 'action' => 'index']) ?> </li>
                <li class = "btn btn-default"><?= $this->Html->link(__('New Store Offering'), ['controller' => 'StoreOfferings', 'action' => 'add']) ?> </li>
                            <li class="btn btn-default"><?=
                $this->Html->link(__('List Fabrics'), ['controller' => 'Fabrics', 'action' => 'index']) ?> </li>
                <li class = "btn btn-default"><?= $this->Html->link(__('New Fabric'), ['controller' => 'Fabrics', 'action' => 'add']) ?> </li>
                    </ul>
    </div>
</div>

            
