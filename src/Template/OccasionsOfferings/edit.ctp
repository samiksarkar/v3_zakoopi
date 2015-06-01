<div class="row">
    <div class="col-lg-10">
        <div class = "occasionsOfferings form large-10 medium-9 columns">
            <?= $this->Form->create($occasionsOffering);
            ?>
            <fieldset>
                <legend><?= __('Edit Occasions Offering') ?></legend>
                <?php
                            echo $this->Form->input('occasion_id', ['options' => $occasions, 'class' => 'form-control', 'div' => ['class' => 'form-group']]);
                            echo $this->Form->input('offering_id', ['options' => $offerings, 'class' => 'form-control', 'div' => ['class' => 'form-group']]);
                        
                
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
                ['action' => 'delete', $occasionsOffering->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $occasionsOffering->id)]
                )
                ?></li>
                        <li class="btn btn-default"><?= $this->Html->link(__('List Occasions Offerings'), ['action' => 'index']) ?></li>
                        <li class="btn btn-default"><?=
                $this->Html->link(__('List Occasions'), ['controller' => 'Occasions', 'action' => 'index']) ?> </li>
                <li class = "btn btn-default"><?= $this->Html->link(__('New Occasion'), ['controller' => 'Occasions', 'action' => 'add']) ?> </li>
                            <li class="btn btn-default"><?=
                $this->Html->link(__('List Offerings'), ['controller' => 'Offerings', 'action' => 'index']) ?> </li>
                <li class = "btn btn-default"><?= $this->Html->link(__('New Offering'), ['controller' => 'Offerings', 'action' => 'add']) ?> </li>
                    </ul>
    </div>
</div>

            
