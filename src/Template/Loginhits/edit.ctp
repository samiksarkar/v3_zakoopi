<div class="row">
    <div class="col-lg-10">
        <div class = "loginhits form large-10 medium-9 columns">
            <?= $this->Form->create($loginhit);
            ?>
            <fieldset>
                <legend><?= __('Edit Loginhit') ?></legend>
                <?php
                                echo $this->Form->input('hit', ['class' => 'form-control', 'div' => ['class' => 'form-group']] );
                                echo $this->Form->input('log_hit', ['class' => 'form-control', 'div' => ['class' => 'form-group']] );
                        
                
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
                ['action' => 'delete', $loginhit->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $loginhit->id)]
                )
                ?></li>
                        <li class="btn btn-default"><?= $this->Html->link(__('List Loginhits'), ['action' => 'index']) ?></li>
                </ul>
    </div>
</div>

            
