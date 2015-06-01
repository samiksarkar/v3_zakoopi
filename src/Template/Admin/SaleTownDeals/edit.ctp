<div class="row">
    <div class="col-lg-10">
        <div class = "saleTownDeals form large-10 medium-9 columns">
            <?= $this->Form->create($saleTownDeal);
            ?>
            <fieldset>
                <legend><?= __('Edit Sale Town Deal') ?></legend>
                <?php
                            echo $this->Form->input('store_id', ['options' => $stores, 'class' => 'form-control', 'div' => ['class' => 'form-group']]);
                                echo $this->Form->input('market_name', ['class' => 'form-control', 'div' => ['class' => 'form-group']] );
                                echo $this->Form->input('punch_one', ['class' => 'form-control', 'div' => ['class' => 'form-group']] );
                                echo $this->Form->input('punch_two', ['class' => 'form-control', 'div' => ['class' => 'form-group']] );
                                echo $this->Form->input('store_cover', ['class' => 'form-control', 'div' => ['class' => 'form-group']] );
                                echo $this->Form->input('conditions', ['class' => 'form-control', 'div' => ['class' => 'form-group']] );
                                echo $this->Form->input('deal_date', ['class' => 'form-control', 'div' => ['class' => 'form-group']] );
                                echo $this->Form->input('created_date', ['class' => 'form-control', 'div' => ['class' => 'form-group']] );
                                echo $this->Form->input('modified_date', ['class' => 'form-control', 'div' => ['class' => 'form-group']] );
                                echo $this->Form->input('status', ['class' => 'form-control', 'div' => ['class' => 'form-group']] );
                        
                
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
                ['action' => 'delete', $saleTownDeal->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $saleTownDeal->id)]
                )
                ?></li>
                        <li class="btn btn-default"><?= $this->Html->link(__('List Sale Town Deals'), ['action' => 'index']) ?></li>
                        <li class="btn btn-default"><?=
                $this->Html->link(__('List Stores'), ['controller' => 'Stores', 'action' => 'index']) ?> </li>
                <li class = "btn btn-default"><?= $this->Html->link(__('New Store'), ['controller' => 'Stores', 'action' => 'add']) ?> </li>
                    </ul>
    </div>
</div>

            
