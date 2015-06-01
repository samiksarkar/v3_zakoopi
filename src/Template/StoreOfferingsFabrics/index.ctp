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
                                                        <th><?= $this->Paginator->sort('store_offering_id') ?></th>
                                                        <th><?= $this->Paginator->sort('fabric_id') ?></th>
                                                        <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($storeOfferingsFabrics as $storeOfferingsFabric): ?>
                        <tr>
                                                        <td><?= $this->Number->format($storeOfferingsFabric->id) ?></td>
                                                        <td>
                                <?= $storeOfferingsFabric->has('store_offering') ? $this->Html->link($storeOfferingsFabric->store_offering->id, ['controller' => 'StoreOfferings', 'action' => 'view', $storeOfferingsFabric->store_offering->id]) : '' ?>
                            </td>
                                                        <td>
                                <?= $storeOfferingsFabric->has('fabric') ? $this->Html->link($storeOfferingsFabric->fabric->name, ['controller' => 'Fabrics', 'action' => 'view', $storeOfferingsFabric->fabric->id]) : '' ?>
                            </td>
                                                        <td class="actions">
                                <?= $this->Html->link(__('View'), ['action' => 'view', $storeOfferingsFabric->id], ['class' => 'btn btn-default']) ?>
                                <?= $this->Html->link('<i class="fa fa-edit"></i>', ['action' => 'edit', $storeOfferingsFabric->id], ['class' => 'btn btn-default', 'escape' => false]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $storeOfferingsFabric->id], ['confirm' => __('Are you sure you want to delete # {0}?', $storeOfferingsFabric->id), 'class' => 'btn btn-danger']) ?>
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
            <li class="btn btn-default"><?= $this->Html->link(__('New Store Offerings Fabric'), ['action' => 'add']) ?></li>
                        <li class="btn btn-default"><?= $this->Html->link(__('List Store Offerings'), ['controller' => 'StoreOfferings', 'action' => 'index']) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('New Store Offering'), ['controller' => 'StoreOfferings', 'action' => 'add']) ?> </li>
                        <li class="btn btn-default"><?= $this->Html->link(__('List Fabrics'), ['controller' => 'Fabrics', 'action' => 'index']) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('New Fabric'), ['controller' => 'Fabrics', 'action' => 'add']) ?> </li>
                    </ul>
    </div>
</div>