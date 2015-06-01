<div class="row">
    <div class="col-lg-10">
        <div class="box">
            <div class="box-body">
                <div class="storeAds view large-10 medium-9 columns">
                    <h2><?= h($storeAd->id) ?></h2>
                    <div class="row">
                                                <div class="col-lg-12">
                                                                                    <b class="subheader"><?= __('Type') ?></b>
                            <p><?= h($storeAd->type) ?></p>
                                                                                                                <b class="subheader"><?= __('Tagline') ?></b>
                            <p><?= h($storeAd->tagline) ?></p>
                                                                                                                <h6 class="subheader"><?= __('Store') ?></h6>
                            <p><?= $storeAd->has('store') ? $this->Html->link($storeAd->store->id, ['controller' => 'Stores', 'action' => 'view', $storeAd->store->id]) : '' ?></p>
                                                                                                                <b class="subheader"><?= __('Keywords') ?></b>
                            <p><?= h($storeAd->keywords) ?></p>
                                                                                                                <b class="subheader"><?= __('Image') ?></b>
                            <p><?= h($storeAd->image) ?></p>
                                                                                </div>
                                                                        <div class="col-lg-12">
                                                        <b class="subheader"><?= __('Id') ?></b>
                            <p><?= $this->Number->format($storeAd->id) ?></p>
                                                        <b class="subheader"><?= __('Rate Of Ad') ?></b>
                            <p><?= $this->Number->format($storeAd->rate_of_ad) ?></p>
                                                    </div>
                                                                                                <div class="col-lg-12">
                                                        <b class="subheader"><?= __('Status') ?></b>
                            <p><?= $storeAd->status ? __('Yes') : __('No'); ?></p>
                                                    </div>
                                            </div>
                                                            <div class="row texts">
                        <div class="col-lg-12">
                            <b class="subheader"><?= __('Redirectto') ?></b>
                            <?= $this->Text->autoParagraph(h($storeAd->redirectto)); ?>

                        </div>
                    </div>
                                                        </div>
                                <div class="row">
                    <div class="col-lg-12">
                        <div class="box">
                            <div class="box-header">
                                <h3 class="box-title"><?= __('Related Regions') ?></h3>
                            </div>
                            <div class="box-body table-responsive no-padding">
                                <?php if (!empty($storeAd->regions)): ?>
                                <table cellpadding="0" cellspacing="0" class="table table-striped table-responsive table-hover">
                                    <tr>
                                                                                <th><?= __('Id') ?></th>
                                                                                <th><?= __('Name') ?></th>
                                                                                <th class="actions"><?= __('Actions') ?></th>
                                    </tr>
                                    <?php foreach ($storeAd->regions as $regions): ?>
                                    <tr>
                                        <td><?= h($regions->id) ?></td>
                                        <td><?= h($regions->name) ?></td>

                                        <td class="actions">
                                            <?=
                                            $this->Html->link(__('View'), ['controller' => 'Regions', 'action' => 'view', $regions->id], ['class' => 'btn btn-default']) ?>

                <?= $this->Html->link('<i class="fa fa-edit"></i>', ['controller' => 'Regions', 'action' => 'edit', $regions->id], ['class' => 'btn btn-default', 'escape' => false]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Regions', 'action' => 'delete', $regions->id], ['confirm' => __('Are you sure you want to delete # {0}?', $regions->id), 'class' => 'btn btn-danger']) ?>

            </td>
                                            </tr>

                                            <?php endforeach;
                                            ?>
                                </table>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            </div>
    <div class="col-lg-2">
        <ul class="btn-group-vertical">
            <li class="btn btn-default"><?= $this->Html->link(__('Edit Store Ad'), ['action' => 'edit', $storeAd->id]) ?> </li>
            <li class="btn btn-danger"><?= $this->Form->postLink(__('Delete Store Ad'), ['action' => 'delete', $storeAd->id], ['confirm' => __('Are you sure you want to delete # {0}?', $storeAd->id)]) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('List Store Ads'), ['action' => 'index']) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('New Store Ad'), ['action' => 'add']) ?> </li>
                        <li class="btn btn-default"><?= $this->Html->link(__('List Stores'), ['controller' => 'Stores', 'action' => 'index']) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('New Store'), ['controller' => 'Stores', 'action' => 'add']) ?> </li>
                        <li class="btn btn-default"><?= $this->Html->link(__('List Regions'), ['controller' => 'Regions', 'action' => 'index']) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('New Region'), ['controller' => 'Regions', 'action' => 'add']) ?> </li>
                    </ul>
    </div>

</div>


