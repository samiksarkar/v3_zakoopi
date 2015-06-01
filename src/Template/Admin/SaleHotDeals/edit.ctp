<div class="row">
    <div class="col-lg-10">
        <div class = "saleHotDeals form large-10 medium-9 columns">
            <?= $this->Form->create($saleHotDeal);
            ?>
            <fieldset>
                <legend><?= __('Edit Sale Hot Deal') ?></legend>
                <?php
                            echo $this->Form->input('store_id', ['options' => $stores, 'class' => 'form-control', 'div' => ['class' => 'form-group']]);
                                echo $this->Form->input('store_name', ['class' => 'form-control', 'div' => ['class' => 'form-group']] );
                                echo $this->Form->input('sale_amount', ['class' => 'form-control', 'div' => ['class' => 'form-group']] );
                                echo $this->Form->input('sale_description', ['class' => 'form-control', 'div' => ['class' => 'form-group']] );
                                echo $this->Form->input('cover_photo', ['class' => 'form-control', 'div' => ['class' => 'form-group']] );
                                echo $this->Form->input('voucher_photo', ['class' => 'form-control', 'div' => ['class' => 'form-group']] );
                                echo $this->Form->input('created_date', ['class' => 'form-control', 'div' => ['class' => 'form-group']] );
                                echo $this->Form->input('modified_date', ['class' => 'form-control', 'div' => ['class' => 'form-group']] );
                                echo $this->Form->input('status', ['class' => 'form-control', 'div' => ['class' => 'form-group']] );
                                echo $this->Form->input('voucher_count', ['class' => 'form-control', 'div' => ['class' => 'form-group']] );
                        
                
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
                ['action' => 'delete', $saleHotDeal->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $saleHotDeal->id)]
                )
                ?></li>
                        <li class="btn btn-default"><?= $this->Html->link(__('List Sale Hot Deals'), ['action' => 'index']) ?></li>
                        <li class="btn btn-default"><?=
                $this->Html->link(__('List Stores'), ['controller' => 'Stores', 'action' => 'index']) ?> </li>
                <li class = "btn btn-default"><?= $this->Html->link(__('New Store'), ['controller' => 'Stores', 'action' => 'add']) ?> </li>
                    </ul>
    </div>
</div>

            
