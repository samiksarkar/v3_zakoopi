<div class="row">

    <div class="col-lg-10">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title"></h3>
                <div class="box-tools">

                    <ul class="pagination pagination-sm no-margin pull-right">
                        <?= $this->Paginator->prev('< ' . __('previous')) ?>
                        <?= $this->Paginator->numbers() ?>
                        <?= $this->Paginator->next(__('next') . ' >') ?>
                    </ul>
                    <p><?= $this->Paginator->counter() ?></p>
                </div>
            </div><!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
                <table class="table table-striped table-responsive table-hover">
                    <thead>
                        <tr>
                                                        <th><?= $this->Paginator->sort('id') ?></th>
                                                        <th><?= $this->Paginator->sort('type') ?></th>
                                                        <th><?= $this->Paginator->sort('status') ?></th>
                                                        <th><?= $this->Paginator->sort('tagline') ?></th>
                                                        <th><?= $this->Paginator->sort('rate_of_ad') ?></th>
                                                        <th><?= $this->Paginator->sort('store_id') ?></th>
                                                        <th><?= $this->Paginator->sort('keywords') ?></th>
                                                        <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($storeAds as $storeAd): ?>
                        <tr>
                                                        <td><?= $this->Number->format($storeAd->id) ?></td>
                                                        <td><?= h($storeAd->type) ?></td>
                                                        <td><?= h($storeAd->status) ?></td>
                                                        <td><?= h($storeAd->tagline) ?></td>
                                                        <td><?= $this->Number->format($storeAd->rate_of_ad) ?></td>
                                                        <td>
                                <?= $storeAd->has('store') ? $this->Html->link($storeAd->store->id, ['controller' => 'Stores', 'action' => 'view', $storeAd->store->id]) : '' ?>
                            </td>
                                                        <td><?= h($storeAd->keywords) ?></td>
                                                        <td class="actions">
                                <?= $this->Html->link(__('View'), ['action' => 'view', $storeAd->id], ['class' => 'btn btn-default']) ?>
                                <?= $this->Html->link('<i class="fa fa-edit"></i>', ['action' => 'edit', $storeAd->id], ['class' => 'btn btn-default', 'escape' => false]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $storeAd->id], ['confirm' => __('Are you sure you want to delete # {0}?', $storeAd->id), 'class' => 'btn btn-danger']) ?>
                            </td>
                        </tr>

                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div><!-- /.box-body -->
        </div>
    </div>
    <div class="col-lg-2">
        <ul class="btn-group-vertical">
            <li class="btn btn-default"><?= $this->Html->link(__('New Store Ad'), ['action' => 'add']) ?></li>
                        <li class="btn btn-default"><?= $this->Html->link(__('List Stores'), ['controller' => 'Stores', 'action' => 'index']) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('New Store'), ['controller' => 'Stores', 'action' => 'add']) ?> </li>
                        <li class="btn btn-default"><?= $this->Html->link(__('List Regions'), ['controller' => 'Regions', 'action' => 'index']) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('New Region'), ['controller' => 'Regions', 'action' => 'add']) ?> </li>
                    </ul>
    </div>
</div>