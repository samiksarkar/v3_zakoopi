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
                                                        <th><?= $this->Paginator->sort('name') ?></th>
                                                        <th><?= $this->Paginator->sort('store_id') ?></th>
                                                        <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($storeImages as $storeImage): ?>
                        <tr>
                                                        <td><?= $this->Number->format($storeImage->id) ?></td>
                                                        <td><?= h($storeImage->name) ?></td>
                                                        <td>
                                <?= $storeImage->has('store') ? $this->Html->link($storeImage->store->id, ['controller' => 'Stores', 'action' => 'view', $storeImage->store->id]) : '' ?>
                            </td>
                                                        <td class="actions">
                                <?= $this->Html->link(__('View'), ['action' => 'view', $storeImage->id], ['class' => 'btn btn-default']) ?>
                                <?= $this->Html->link('<i class="fa fa-edit"></i>', ['action' => 'edit', $storeImage->id], ['class' => 'btn btn-default', 'escape' => false]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $storeImage->id], ['confirm' => __('Are you sure you want to delete # {0}?', $storeImage->id), 'class' => 'btn btn-danger']) ?>
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
            <li class="btn btn-default"><?= $this->Html->link(__('New Store Image'), ['action' => 'add']) ?></li>
                        <li class="btn btn-default"><?= $this->Html->link(__('List Stores'), ['controller' => 'Stores', 'action' => 'index']) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('New Store'), ['controller' => 'Stores', 'action' => 'add']) ?> </li>
                    </ul>
    </div>
</div>