<div class="row">
    <div class="col-lg-10">
        <div class = "adsSettings form large-10 medium-9 columns">
            <?= $this->Form->create($adsSetting);
            ?>
            <fieldset>
                <legend><?= __('Add Ads Setting') ?></legend>
                <?php
                                echo $this->Form->input('ad_type', ['class' => 'form-control', 'div' => ['class' => 'form-group']] );
                                echo $this->Form->input('settings', ['class' => 'form-control', 'div' => ['class' => 'form-group']] );
                        
                
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
<?= $this->Form->end() ?>
        </div>
    </div>
    <div class="col-lg-2">
        <ul class="btn-group-vertical">
                        <li class="btn btn-default"><?= $this->Html->link(__('List Ads Settings'), ['action' => 'index']) ?></li>
                </ul>
    </div>
</div>

            
