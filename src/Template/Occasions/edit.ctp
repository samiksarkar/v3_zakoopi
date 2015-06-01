<div class="row">
    <div class="col-lg-10">
        <div class = "occasions form large-10 medium-9 columns">
            <?= $this->Form->create($occasion);
            ?>
            <fieldset>
                <legend><?= __('Edit Occasion') ?></legend>
                <?php
                                echo $this->Form->input('occasion', ['class' => 'form-control', 'div' => ['class' => 'form-group']] );
                            echo $this->Form->input('offerings._ids', ['options' => $offerings, 'class' => 'form-control', 'div' => ['class' => 'form-group']]);
                        
                
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
                ['action' => 'delete', $occasion->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $occasion->id)]
                )
                ?></li>
                        <li class="btn btn-default"><?= $this->Html->link(__('List Occasions'), ['action' => 'index']) ?></li>
                        <li class="btn btn-default"><?=
                $this->Html->link(__('List Offerings'), ['controller' => 'Offerings', 'action' => 'index']) ?> </li>
                <li class = "btn btn-default"><?= $this->Html->link(__('New Offering'), ['controller' => 'Offerings', 'action' => 'add']) ?> </li>
                    </ul>
    </div>
</div>

            
