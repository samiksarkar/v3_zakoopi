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
                                                        <th><?= $this->Paginator->sort('user_id') ?></th>
                                                        <th><?= $this->Paginator->sort('store_id') ?></th>
                                                        <th><?= $this->Paginator->sort('cost') ?></th>
                                                        <th><?= $this->Paginator->sort('style') ?></th>
                                                        <th><?= $this->Paginator->sort('fabric') ?></th>
                                                        <th><?= $this->Paginator->sort('finesse') ?></th>
                                                        <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($storeRatings as $storeRating): ?>
                        <tr>
                                                        <td><?= $this->Number->format($storeRating->id) ?></td>
                                                        <td>
                                <?= $storeRating->has('user') ? $this->Html->link($storeRating->user->id, ['controller' => 'Users', 'action' => 'view', $storeRating->user->id]) : '' ?>
                            </td>
                                                        <td>
                                <?= $storeRating->has('store') ? $this->Html->link($storeRating->store->id, ['controller' => 'Stores', 'action' => 'view', $storeRating->store->id]) : '' ?>
                            </td>
                                                        <td><?= $this->Number->format($storeRating->cost) ?></td>
                                                        <td><?= $this->Number->format($storeRating->style) ?></td>
                                                        <td><?= $this->Number->format($storeRating->fabric) ?></td>
                                                        <td><?= $this->Number->format($storeRating->finesse) ?></td>
                                                        <td class="actions">
                                <?= $this->Html->link(__('View'), ['action' => 'view', $storeRating->id], ['class' => 'btn btn-default']) ?>
                                <?= $this->Html->link('<i class="fa fa-edit"></i>', ['action' => 'edit', $storeRating->id], ['class' => 'btn btn-default', 'escape' => false]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $storeRating->id], ['confirm' => __('Are you sure you want to delete # {0}?', $storeRating->id), 'class' => 'btn btn-danger']) ?>
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
            <li class="btn btn-default"><?= $this->Html->link(__('New Store Rating'), ['action' => 'add']) ?></li>
                        <li class="btn btn-default"><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
                        <li class="btn btn-default"><?= $this->Html->link(__('List Stores'), ['controller' => 'Stores', 'action' => 'index']) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('New Store'), ['controller' => 'Stores', 'action' => 'add']) ?> </li>
                    </ul>
    </div>
</div>