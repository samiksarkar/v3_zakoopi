<div class="row">
    <div class="col-lg-10">
        <div class = "offerings form large-10 medium-9 columns">
            <?= $this->Form->create($offering);
            ?>
            <fieldset>
                <legend><?= __('Edit Offering') ?></legend>
                <?php
                                echo $this->Form->input('name', ['class' => 'form-control', 'div' => ['class' => 'form-group']] );
                                echo $this->Form->input('gender', ['class' => 'form-control', 'div' => ['class' => 'form-group']] );
                                echo $this->Form->input('category', ['class' => 'form-control', 'div' => ['class' => 'form-group']] );
                                echo $this->Form->input('timestamp', ['class' => 'form-control', 'div' => ['class' => 'form-group']] );
                            echo $this->Form->input('occasions._ids', ['options' => $occasions, 'class' => 'form-control', 'div' => ['class' => 'form-group']]);
                        
                
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
                ['action' => 'delete', $offering->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $offering->id)]
                )
                ?></li>
                        <li class="btn btn-default"><?= $this->Html->link(__('List Offerings'), ['action' => 'index']) ?></li>
                        <li class="btn btn-default"><?=
                $this->Html->link(__('List Occasions'), ['controller' => 'Occasions', 'action' => 'index']) ?> </li>
                <li class = "btn btn-default"><?= $this->Html->link(__('New Occasion'), ['controller' => 'Occasions', 'action' => 'add']) ?> </li>
                    </ul>
    </div>
</div>

            
