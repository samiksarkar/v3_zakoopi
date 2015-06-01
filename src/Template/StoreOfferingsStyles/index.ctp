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
                                                        <th><?= $this->Paginator->sort('style_id') ?></th>
                                                        <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($storeOfferingsStyles as $storeOfferingsStyle): ?>
                        <tr>
                                                        <td><?= $this->Number->format($storeOfferingsStyle->id) ?></td>
                                                        <td>
                                <?= $storeOfferingsStyle->has('store_offering') ? $this->Html->link($storeOfferingsStyle->store_offering->id, ['controller' => 'StoreOfferings', 'action' => 'view', $storeOfferingsStyle->store_offering->id]) : '' ?>
                            </td>
                                                        <td>
                                <?= $storeOfferingsStyle->has('style') ? $this->Html->link($storeOfferingsStyle->style->name, ['controller' => 'Styles', 'action' => 'view', $storeOfferingsStyle->style->id]) : '' ?>
                            </td>
                                                        <td class="actions">
                                <?= $this->Html->link(__('View'), ['action' => 'view', $storeOfferingsStyle->id], ['class' => 'btn btn-default']) ?>
                                <?= $this->Html->link('<i class="fa fa-edit"></i>', ['action' => 'edit', $storeOfferingsStyle->id], ['class' => 'btn btn-default', 'escape' => false]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $storeOfferingsStyle->id], ['confirm' => __('Are you sure you want to delete # {0}?', $storeOfferingsStyle->id), 'class' => 'btn btn-danger']) ?>
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
            <li class="btn btn-default"><?= $this->Html->link(__('New Store Offerings Style'), ['action' => 'add']) ?></li>
                        <li class="btn btn-default"><?= $this->Html->link(__('List Store Offerings'), ['controller' => 'StoreOfferings', 'action' => 'index']) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('New Store Offering'), ['controller' => 'StoreOfferings', 'action' => 'add']) ?> </li>
                        <li class="btn btn-default"><?= $this->Html->link(__('List Styles'), ['controller' => 'Styles', 'action' => 'index']) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('New Style'), ['controller' => 'Styles', 'action' => 'add']) ?> </li>
                    </ul>
    </div>
</div>