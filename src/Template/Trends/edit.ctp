<div class="row">
    <div class="col-lg-10">
        <div class = "trends form large-10 medium-9 columns">
            <?= $this->Form->create($trend);
            ?>
            <fieldset>
                <legend><?= __('Edit Trend') ?></legend>
                <?php
                                echo $this->Form->input('trend_name', ['class' => 'form-control', 'div' => ['class' => 'form-group']] );
                            echo $this->Form->input('city_id', ['options' => $cities, 'class' => 'form-control', 'div' => ['class' => 'form-group']]);
                        
                
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
                ['action' => 'delete', $trend->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $trend->id)]
                )
                ?></li>
                        <li class="btn btn-default"><?= $this->Html->link(__('List Trends'), ['action' => 'index']) ?></li>
                        <li class="btn btn-default"><?=
                $this->Html->link(__('List Cities'), ['controller' => 'Cities', 'action' => 'index']) ?> </li>
                <li class = "btn btn-default"><?= $this->Html->link(__('New City'), ['controller' => 'Cities', 'action' => 'add']) ?> </li>
                            <li class="btn btn-default"><?=
                $this->Html->link(__('List Trend Cities'), ['controller' => 'TrendCities', 'action' => 'index']) ?> </li>
                <li class = "btn btn-default"><?= $this->Html->link(__('New Trend City'), ['controller' => 'TrendCities', 'action' => 'add']) ?> </li>
                            <li class="btn btn-default"><?=
                $this->Html->link(__('List Trend Offerings'), ['controller' => 'TrendOfferings', 'action' => 'index']) ?> </li>
                <li class = "btn btn-default"><?= $this->Html->link(__('New Trend Offering'), ['controller' => 'TrendOfferings', 'action' => 'add']) ?> </li>
                    </ul>
    </div>
</div>

            
