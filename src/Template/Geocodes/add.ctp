<div class="row">
    <div class="col-lg-10">
        <div class = "geocodes form large-10 medium-9 columns">
            <?= $this->Form->create($geocode);
            ?>
            <fieldset>
                <legend><?= __('Add Geocode') ?></legend>
                <?php
                                echo $this->Form->input('place', ['class' => 'form-control', 'div' => ['class' => 'form-group']] );
                                echo $this->Form->input('lat', ['class' => 'form-control', 'div' => ['class' => 'form-group']] );
                                echo $this->Form->input('lng', ['class' => 'form-control', 'div' => ['class' => 'form-group']] );
                        
                
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
<?= $this->Form->end() ?>
        </div>
    </div>
    <div class="col-lg-2">
        <ul class="btn-group-vertical">
                        <li class="btn btn-default"><?= $this->Html->link(__('List Geocodes'), ['action' => 'index']) ?></li>
                </ul>
    </div>
</div>

            
