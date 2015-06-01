<div class="row">
    <div class="col-lg-10">
        <div class = "trendOfferings form large-10 medium-9 columns">
            <?= $this->Form->create($trendOffering);
            ?>
            <fieldset>
                <legend><?= __('Edit Trend Offering') ?></legend>
                <?php
                            echo $this->Form->input('trend_id', ['options' => $trends, 'class' => 'form-control', 'div' => ['class' => 'form-group']]);
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
                ['action' => 'delete', $trendOffering->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $trendOffering->id)]
                )
                ?></li>
                        <li class="btn btn-default"><?= $this->Html->link(__('List Trend Offerings'), ['action' => 'index']) ?></li>
                        <li class="btn btn-default"><?=
                $this->Html->link(__('List Trends'), ['controller' => 'Trends', 'action' => 'index']) ?> </li>
                <li class = "btn btn-default"><?= $this->Html->link(__('New Trend'), ['controller' => 'Trends', 'action' => 'add']) ?> </li>
                            <li class="btn btn-default"><?=
                $this->Html->link(__('List Offerings'), ['controller' => 'Offerings', 'action' => 'index']) ?> </li>
                <li class = "btn btn-default"><?= $this->Html->link(__('New Offering'), ['controller' => 'Offerings', 'action' => 'add']) ?> </li>
                    </ul>
    </div>
</div>

            
