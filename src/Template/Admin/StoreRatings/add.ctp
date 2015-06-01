<div class="row">
    <div class="col-lg-10">
        <div class = "storeRatings form large-10 medium-9 columns">
            <?= $this->Form->create($storeRating);
            ?>
            <fieldset>
                <legend><?= __('Add Store Rating') ?></legend>
                <?php
                            echo $this->Form->input('user_id', ['options' => $users, 'class' => 'form-control', 'div' => ['class' => 'form-group']]);
                            echo $this->Form->input('store_id', ['options' => $stores, 'class' => 'form-control', 'div' => ['class' => 'form-group']]);
                                echo $this->Form->input('cost', ['class' => 'form-control', 'div' => ['class' => 'form-group']] );
                                echo $this->Form->input('style', ['class' => 'form-control', 'div' => ['class' => 'form-group']] );
                                echo $this->Form->input('fabric', ['class' => 'form-control', 'div' => ['class' => 'form-group']] );
                                echo $this->Form->input('finesse', ['class' => 'form-control', 'div' => ['class' => 'form-group']] );
                                echo $this->Form->input('created_date', ['class' => 'form-control', 'div' => ['class' => 'form-group']] );
                        
                
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
<?= $this->Form->end() ?>
        </div>
    </div>
    <div class="col-lg-2">
        <ul class="btn-group-vertical">
                        <li class="btn btn-default"><?= $this->Html->link(__('List Store Ratings'), ['action' => 'index']) ?></li>
                        <li class="btn btn-default"><?=
                $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
                <li class = "btn btn-default"><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
                            <li class="btn btn-default"><?=
                $this->Html->link(__('List Stores'), ['controller' => 'Stores', 'action' => 'index']) ?> </li>
                <li class = "btn btn-default"><?= $this->Html->link(__('New Store'), ['controller' => 'Stores', 'action' => 'add']) ?> </li>
                    </ul>
    </div>
</div>

            
