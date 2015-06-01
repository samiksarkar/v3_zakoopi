<div class="row">
    <div class="col-lg-10">
        <div class = "reportErrors form large-10 medium-9 columns">
            <?= $this->Form->create($reportError);
            ?>
            <fieldset>
                <legend><?= __('Edit Report Error') ?></legend>
                <?php
                            echo $this->Form->input('store_id', ['options' => $stores, 'class' => 'form-control', 'div' => ['class' => 'form-group']]);
                            echo $this->Form->input('user_id', ['options' => $users, 'class' => 'form-control', 'div' => ['class' => 'form-group']]);
                                echo $this->Form->input('error_subject', ['class' => 'form-control', 'div' => ['class' => 'form-group']] );
                                echo $this->Form->input('error_msg', ['class' => 'form-control', 'div' => ['class' => 'form-group']] );
                        
                
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
                ['action' => 'delete', $reportError->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $reportError->id)]
                )
                ?></li>
                        <li class="btn btn-default"><?= $this->Html->link(__('List Report Errors'), ['action' => 'index']) ?></li>
                        <li class="btn btn-default"><?=
                $this->Html->link(__('List Stores'), ['controller' => 'Stores', 'action' => 'index']) ?> </li>
                <li class = "btn btn-default"><?= $this->Html->link(__('New Store'), ['controller' => 'Stores', 'action' => 'add']) ?> </li>
                            <li class="btn btn-default"><?=
                $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
                <li class = "btn btn-default"><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
                    </ul>
    </div>
</div>

            
