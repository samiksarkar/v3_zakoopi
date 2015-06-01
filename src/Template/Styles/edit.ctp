<div class="row">
    <div class="col-lg-10">
        <div class = "styles form large-10 medium-9 columns">
            <?= $this->Form->create($style);
            ?>
            <fieldset>
                <legend><?= __('Edit Style') ?></legend>
                <?php
                                echo $this->Form->input('name', ['class' => 'form-control', 'div' => ['class' => 'form-group']] );
                                echo $this->Form->input('is_visible', ['class' => 'form-control', 'div' => ['class' => 'form-group']] );
                            echo $this->Form->input('store_offerings._ids', ['options' => $storeOfferings, 'class' => 'form-control', 'div' => ['class' => 'form-group']]);
                        
                
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
                ['action' => 'delete', $style->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $style->id)]
                )
                ?></li>
                        <li class="btn btn-default"><?= $this->Html->link(__('List Styles'), ['action' => 'index']) ?></li>
                        <li class="btn btn-default"><?=
                $this->Html->link(__('List Store Offerings'), ['controller' => 'StoreOfferings', 'action' => 'index']) ?> </li>
                <li class = "btn btn-default"><?= $this->Html->link(__('New Store Offering'), ['controller' => 'StoreOfferings', 'action' => 'add']) ?> </li>
                    </ul>
    </div>
</div>

            
