<div class="row">
    <div class="col-lg-10">
        <div class = "saleTownMarkets form large-10 medium-9 columns">
            <?= $this->Form->create($saleTownMarket);
            ?>
            <fieldset>
                <legend><?= __('Add Sale Town Market') ?></legend>
                <?php
                            echo $this->Form->input('city_id', ['options' => $cities, 'class' => 'form-control', 'div' => ['class' => 'form-group']]);
                            echo $this->Form->input('market_id', ['options' => $markets, 'class' => 'form-control', 'div' => ['class' => 'form-group']]);
                                echo $this->Form->input('cover_photo', ['class' => 'form-control', 'div' => ['class' => 'form-group']] );
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
                        <li class="btn btn-default"><?= $this->Html->link(__('List Sale Town Markets'), ['action' => 'index']) ?></li>
                        <li class="btn btn-default"><?=
                $this->Html->link(__('List Cities'), ['controller' => 'Cities', 'action' => 'index']) ?> </li>
                <li class = "btn btn-default"><?= $this->Html->link(__('New City'), ['controller' => 'Cities', 'action' => 'add']) ?> </li>
                            <li class="btn btn-default"><?=
                $this->Html->link(__('List Markets'), ['controller' => 'Markets', 'action' => 'index']) ?> </li>
                <li class = "btn btn-default"><?= $this->Html->link(__('New Market'), ['controller' => 'Markets', 'action' => 'add']) ?> </li>
                    </ul>
    </div>
</div>

            
