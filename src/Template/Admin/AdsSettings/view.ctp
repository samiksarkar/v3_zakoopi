<div class="row">
    <div class="col-lg-10">
        <div class="box">
            <div class="box-body">
                <div class="adsSettings view large-10 medium-9 columns">
                    <h2><?= h($adsSetting->id) ?></h2>
                    <div class="row">
                                                                        <div class="col-lg-12">
                                                        <b class="subheader"><?= __('Id') ?></b>
                            <p><?= $this->Number->format($adsSetting->id) ?></p>
                                                    </div>
                                                                                            </div>
                                                            <div class="row texts">
                        <div class="col-lg-12">
                            <b class="subheader"><?= __('Ad Type') ?></b>
                            <?= $this->Text->autoParagraph(h($adsSetting->ad_type)); ?>

                        </div>
                    </div>
                                        <div class="row texts">
                        <div class="col-lg-12">
                            <b class="subheader"><?= __('Settings') ?></b>
                            <?= $this->Text->autoParagraph(h($adsSetting->settings)); ?>

                        </div>
                    </div>
                                                        </div>
                    </div>
    <div class="col-lg-2">
        <ul class="btn-group-vertical">
            <li class="btn btn-default"><?= $this->Html->link(__('Edit Ads Setting'), ['action' => 'edit', $adsSetting->id]) ?> </li>
            <li class="btn btn-danger"><?= $this->Form->postLink(__('Delete Ads Setting'), ['action' => 'delete', $adsSetting->id], ['confirm' => __('Are you sure you want to delete # {0}?', $adsSetting->id)]) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('List Ads Settings'), ['action' => 'index']) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('New Ads Setting'), ['action' => 'add']) ?> </li>
                    </ul>
    </div>

</div>


