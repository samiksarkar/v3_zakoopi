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
                                                        <th><?= $this->Paginator->sort('store_id') ?></th>
                                                        <th><?= $this->Paginator->sort('offering_id') ?></th>
                                                        <th><?= $this->Paginator->sort('price_range_from') ?></th>
                                                        <th><?= $this->Paginator->sort('price_range_to') ?></th>
                                                        <th><?= $this->Paginator->sort('customization_possible') ?></th>
                                                        <th><?= $this->Paginator->sort('customization_days') ?></th>
                                                        <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($storeOfferings as $storeOffering): ?>
                        <tr>
                                                        <td><?= $this->Number->format($storeOffering->id) ?></td>
                                                        <td>
                                <?= $storeOffering->has('store') ? $this->Html->link($storeOffering->store->id, ['controller' => 'Stores', 'action' => 'view', $storeOffering->store->id]) : '' ?>
                            </td>
                                                        <td>
                                <?= $storeOffering->has('offering') ? $this->Html->link($storeOffering->offering->name, ['controller' => 'Offerings', 'action' => 'view', $storeOffering->offering->id]) : '' ?>
                            </td>
                                                        <td><?= h($storeOffering->price_range_from) ?></td>
                                                        <td><?= h($storeOffering->price_range_to) ?></td>
                                                        <td><?= h($storeOffering->customization_possible) ?></td>
                                                        <td><?= h($storeOffering->customization_days) ?></td>
                                                        <td class="actions">
                                <?= $this->Html->link(__('View'), ['action' => 'view', $storeOffering->id], ['class' => 'btn btn-default']) ?>
                                <?= $this->Html->link('<i class="fa fa-edit"></i>', ['action' => 'edit', $storeOffering->id], ['class' => 'btn btn-default', 'escape' => false]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $storeOffering->id], ['confirm' => __('Are you sure you want to delete # {0}?', $storeOffering->id), 'class' => 'btn btn-danger']) ?>
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
            <li class="btn btn-default"><?= $this->Html->link(__('New Store Offering'), ['action' => 'add']) ?></li>
                        <li class="btn btn-default"><?= $this->Html->link(__('List Stores'), ['controller' => 'Stores', 'action' => 'index']) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('New Store'), ['controller' => 'Stores', 'action' => 'add']) ?> </li>
                        <li class="btn btn-default"><?= $this->Html->link(__('List Offerings'), ['controller' => 'Offerings', 'action' => 'index']) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('New Offering'), ['controller' => 'Offerings', 'action' => 'add']) ?> </li>
                        <li class="btn btn-default"><?= $this->Html->link(__('List Fabrics'), ['controller' => 'Fabrics', 'action' => 'index']) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('New Fabric'), ['controller' => 'Fabrics', 'action' => 'add']) ?> </li>
                        <li class="btn btn-default"><?= $this->Html->link(__('List Styles'), ['controller' => 'Styles', 'action' => 'index']) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('New Style'), ['controller' => 'Styles', 'action' => 'add']) ?> </li>
                    </ul>
    </div>
</div>