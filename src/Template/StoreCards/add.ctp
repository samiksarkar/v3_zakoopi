<div class="row">
    <div class="col-lg-10">
        <div class = "storeCards form large-10 medium-9 columns">
            <?= $this->Form->create($storeCard);
            ?>
            <fieldset>
                <legend><?= __('Add Store Card') ?></legend>
                <?php
                            echo $this->Form->input('store_id', ['options' => $stores, 'class' => 'form-control', 'div' => ['class' => 'form-group']]);
                            echo $this->Form->input('card_id', ['options' => $cards, 'class' => 'form-control', 'div' => ['class' => 'form-group']]);
                        
                
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
<?= $this->Form->end() ?>
        </div>
    </div>
    <div class="col-lg-2">
        <ul class="btn-group-vertical">
                        <li class="btn btn-default"><?= $this->Html->link(__('List Store Cards'), ['action' => 'index']) ?></li>
                        <li class="btn btn-default"><?=
                $this->Html->link(__('List Stores'), ['controller' => 'Stores', 'action' => 'index']) ?> </li>
                <li class = "btn btn-default"><?= $this->Html->link(__('New Store'), ['controller' => 'Stores', 'action' => 'add']) ?> </li>
                            <li class="btn btn-default"><?=
                $this->Html->link(__('List Cards'), ['controller' => 'Cards', 'action' => 'index']) ?> </li>
                <li class = "btn btn-default"><?= $this->Html->link(__('New Card'), ['controller' => 'Cards', 'action' => 'add']) ?> </li>
                    </ul>
    </div>
</div>

            
