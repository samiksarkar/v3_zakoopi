<div class="row">
    <div class="col-lg-10">
        <div class = "lookbookcomments form large-10 medium-9 columns">
            <?= $this->Form->create($lookbookcomment);
            ?>
            <fieldset>
                <legend><?= __('Add Lookbookcomment') ?></legend>
                <?php
                            echo $this->Form->input('lookbook_id', ['options' => $lookbooks, 'class' => 'form-control', 'div' => ['class' => 'form-group']]);
                            echo $this->Form->input('user_id', ['options' => $users, 'class' => 'form-control', 'div' => ['class' => 'form-group']]);
                                echo $this->Form->input('comment', ['class' => 'form-control', 'div' => ['class' => 'form-group']] );
                                echo $this->Form->input('timestamp', ['class' => 'form-control', 'div' => ['class' => 'form-group']] );
                                echo $this->Form->input('status', ['class' => 'form-control', 'div' => ['class' => 'form-group']] );
                        
                
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
<?= $this->Form->end() ?>
        </div>
    </div>
    <div class="col-lg-2">
        <ul class="btn-group-vertical">
                        <li class="btn btn-default"><?= $this->Html->link(__('List Lookbookcomments'), ['action' => 'index']) ?></li>
                        <li class="btn btn-default"><?=
                $this->Html->link(__('List Lookbooks'), ['controller' => 'Lookbooks', 'action' => 'index']) ?> </li>
                <li class = "btn btn-default"><?= $this->Html->link(__('New Lookbook'), ['controller' => 'Lookbooks', 'action' => 'add']) ?> </li>
                            <li class="btn btn-default"><?=
                $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
                <li class = "btn btn-default"><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
                    </ul>
    </div>
</div>

            
