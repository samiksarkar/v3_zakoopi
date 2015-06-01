<div class="row">
    <div class="col-lg-10">
        <div class = "trendCities form large-10 medium-9 columns">
            <?= $this->Form->create($trendCity);
            ?>
            <fieldset>
                <legend><?= __('Add Trend City') ?></legend>
                <?php
                            echo $this->Form->input('city_id', ['options' => $cities, 'class' => 'form-control', 'div' => ['class' => 'form-group']]);
                            echo $this->Form->input('trend_id', ['options' => $trends, 'class' => 'form-control', 'div' => ['class' => 'form-group']]);
                                echo $this->Form->input('sort_order', ['class' => 'form-control', 'div' => ['class' => 'form-group']] );
                        
                
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
<?= $this->Form->end() ?>
        </div>
    </div>
    <div class="col-lg-2">
        <ul class="btn-group-vertical">
                        <li class="btn btn-default"><?= $this->Html->link(__('List Trend Cities'), ['action' => 'index']) ?></li>
                        <li class="btn btn-default"><?=
                $this->Html->link(__('List Cities'), ['controller' => 'Cities', 'action' => 'index']) ?> </li>
                <li class = "btn btn-default"><?= $this->Html->link(__('New City'), ['controller' => 'Cities', 'action' => 'add']) ?> </li>
                            <li class="btn btn-default"><?=
                $this->Html->link(__('List Trends'), ['controller' => 'Trends', 'action' => 'index']) ?> </li>
                <li class = "btn btn-default"><?= $this->Html->link(__('New Trend'), ['controller' => 'Trends', 'action' => 'add']) ?> </li>
                    </ul>
    </div>
</div>

            
