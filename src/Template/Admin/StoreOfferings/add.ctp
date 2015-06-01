<div class="row">
    <div class="col-lg-10">
        <div class = "storeOfferings form large-10 medium-9 columns">
            <?= $this->Form->create($storeOffering);
            ?>
            <fieldset>
                <legend><?= __('Add Store Offering') ?></legend>
                <?php
                            echo $this->Form->input('store_id', ['options' => $stores, 'class' => 'form-control', 'div' => ['class' => 'form-group']]);
                            echo $this->Form->input('offering_id', ['options' => $offerings, 'empty' => true, 'class' => 'form-control', 'div' => ['class' => 'form-group']]);
                                echo $this->Form->input('price_range_from', ['class' => 'form-control', 'div' => ['class' => 'form-group']] );
                                echo $this->Form->input('price_range_to', ['class' => 'form-control', 'div' => ['class' => 'form-group']] );
                                echo $this->Form->input('customization_possible', ['class' => 'form-control', 'div' => ['class' => 'form-group']] );
                                echo $this->Form->input('customization_days', ['class' => 'form-control', 'div' => ['class' => 'form-group']] );
                            echo $this->Form->input('fabrics._ids', ['options' => $fabrics, 'class' => 'form-control', 'div' => ['class' => 'form-group']]);
                            echo $this->Form->input('styles._ids', ['options' => $styles, 'class' => 'form-control', 'div' => ['class' => 'form-group']]);
                        
                
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
<?= $this->Form->end() ?>
        </div>
    </div>
    <div class="col-lg-2">
        <ul class="btn-group-vertical">
                        <li class="btn btn-default"><?= $this->Html->link(__('List Store Offerings'), ['action' => 'index']) ?></li>
                        <li class="btn btn-default"><?=
                $this->Html->link(__('List Stores'), ['controller' => 'Stores', 'action' => 'index']) ?> </li>
                <li class = "btn btn-default"><?= $this->Html->link(__('New Store'), ['controller' => 'Stores', 'action' => 'add']) ?> </li>
                            <li class="btn btn-default"><?=
                $this->Html->link(__('List Offerings'), ['controller' => 'Offerings', 'action' => 'index']) ?> </li>
                <li class = "btn btn-default"><?= $this->Html->link(__('New Offering'), ['controller' => 'Offerings', 'action' => 'add']) ?> </li>
                            <li class="btn btn-default"><?=
                $this->Html->link(__('List Fabrics'), ['controller' => 'Fabrics', 'action' => 'index']) ?> </li>
                <li class = "btn btn-default"><?= $this->Html->link(__('New Fabric'), ['controller' => 'Fabrics', 'action' => 'add']) ?> </li>
                            <li class="btn btn-default"><?=
                $this->Html->link(__('List Styles'), ['controller' => 'Styles', 'action' => 'index']) ?> </li>
                <li class = "btn btn-default"><?= $this->Html->link(__('New Style'), ['controller' => 'Styles', 'action' => 'add']) ?> </li>
                    </ul>
    </div>
</div>

            
