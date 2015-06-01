<div class="row">
    <div class="col-lg-10">
        <div class = "storeReviews form large-10 medium-9 columns">
            <?= $this->Form->create($storeReview);
            ?>
            <fieldset>
                <legend><?= __('Add Store Review') ?></legend>
                <?php
                            echo $this->Form->input('user_id', ['options' => $users, 'class' => 'form-control', 'div' => ['class' => 'form-group']]);
                            echo $this->Form->input('store_id', ['options' => $stores, 'class' => 'form-control', 'div' => ['class' => 'form-group']]);
                                echo $this->Form->input('review', ['class' => 'form-control', 'div' => ['class' => 'form-group']] );
                                echo $this->Form->input('istrending', ['class' => 'form-control', 'div' => ['class' => 'form-group']] );
                                echo $this->Form->input('created_date', ['class' => 'form-control', 'div' => ['class' => 'form-group']] );
                        
                
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
<?= $this->Form->end() ?>
        </div>
    </div>
    <div class="col-lg-2">
        <ul class="btn-group-vertical">
                        <li class="btn btn-default"><?= $this->Html->link(__('List Store Reviews'), ['action' => 'index']) ?></li>
                        <li class="btn btn-default"><?=
                $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
                <li class = "btn btn-default"><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
                            <li class="btn btn-default"><?=
                $this->Html->link(__('List Stores'), ['controller' => 'Stores', 'action' => 'index']) ?> </li>
                <li class = "btn btn-default"><?= $this->Html->link(__('New Store'), ['controller' => 'Stores', 'action' => 'add']) ?> </li>
                    </ul>
    </div>
</div>

            
