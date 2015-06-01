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
                                                        <th><?= $this->Paginator->sort('city_id') ?></th>
                                                        <th><?= $this->Paginator->sort('store_id') ?></th>
                                                        <th><?= $this->Paginator->sort('store_name') ?></th>
                                                        <th><?= $this->Paginator->sort('store_slug') ?></th>
                                                        <th><?= $this->Paginator->sort('cover_photo') ?></th>
                                                        <th><?= $this->Paginator->sort('created_date') ?></th>
                                                        <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($saleTownStores as $saleTownStore): ?>
                        <tr>
                                                        <td><?= $this->Number->format($saleTownStore->id) ?></td>
                                                        <td>
                                <?= $saleTownStore->has('city') ? $this->Html->link($saleTownStore->city->id, ['controller' => 'Cities', 'action' => 'view', $saleTownStore->city->id]) : '' ?>
                            </td>
                                                        <td>
                                <?= $saleTownStore->has('store') ? $this->Html->link($saleTownStore->store->id, ['controller' => 'Stores', 'action' => 'view', $saleTownStore->store->id]) : '' ?>
                            </td>
                                                        <td><?= h($saleTownStore->store_name) ?></td>
                                                        <td><?= h($saleTownStore->store_slug) ?></td>
                                                        <td><?= h($saleTownStore->cover_photo) ?></td>
                                                        <td><?= h($saleTownStore->created_date) ?></td>
                                                        <td class="actions">
                                <?= $this->Html->link(__('View'), ['action' => 'view', $saleTownStore->id], ['class' => 'btn btn-default']) ?>
                                <?= $this->Html->link('<i class="fa fa-edit"></i>', ['action' => 'edit', $saleTownStore->id], ['class' => 'btn btn-default', 'escape' => false]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $saleTownStore->id], ['confirm' => __('Are you sure you want to delete # {0}?', $saleTownStore->id), 'class' => 'btn btn-danger']) ?>
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
            <li class="btn btn-default"><?= $this->Html->link(__('New Sale Town Store'), ['action' => 'add']) ?></li>
                        <li class="btn btn-default"><?= $this->Html->link(__('List Cities'), ['controller' => 'Cities', 'action' => 'index']) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('New City'), ['controller' => 'Cities', 'action' => 'add']) ?> </li>
                        <li class="btn btn-default"><?= $this->Html->link(__('List Stores'), ['controller' => 'Stores', 'action' => 'index']) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('New Store'), ['controller' => 'Stores', 'action' => 'add']) ?> </li>
                    </ul>
    </div>
</div>