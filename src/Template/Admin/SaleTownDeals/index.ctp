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
                                                        <th><?= $this->Paginator->sort('market_name') ?></th>
                                                        <th><?= $this->Paginator->sort('punch_one') ?></th>
                                                        <th><?= $this->Paginator->sort('punch_two') ?></th>
                                                        <th><?= $this->Paginator->sort('store_cover') ?></th>
                                                        <th><?= $this->Paginator->sort('conditions') ?></th>
                                                        <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($saleTownDeals as $saleTownDeal): ?>
                        <tr>
                                                        <td><?= $this->Number->format($saleTownDeal->id) ?></td>
                                                        <td>
                                <?= $saleTownDeal->has('store') ? $this->Html->link($saleTownDeal->store->id, ['controller' => 'Stores', 'action' => 'view', $saleTownDeal->store->id]) : '' ?>
                            </td>
                                                        <td><?= h($saleTownDeal->market_name) ?></td>
                                                        <td><?= h($saleTownDeal->punch_one) ?></td>
                                                        <td><?= h($saleTownDeal->punch_two) ?></td>
                                                        <td><?= h($saleTownDeal->store_cover) ?></td>
                                                        <td><?= h($saleTownDeal->conditions) ?></td>
                                                        <td class="actions">
                                <?= $this->Html->link(__('View'), ['action' => 'view', $saleTownDeal->id], ['class' => 'btn btn-default']) ?>
                                <?= $this->Html->link('<i class="fa fa-edit"></i>', ['action' => 'edit', $saleTownDeal->id], ['class' => 'btn btn-default', 'escape' => false]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $saleTownDeal->id], ['confirm' => __('Are you sure you want to delete # {0}?', $saleTownDeal->id), 'class' => 'btn btn-danger']) ?>
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
            <li class="btn btn-default"><?= $this->Html->link(__('New Sale Town Deal'), ['action' => 'add']) ?></li>
                        <li class="btn btn-default"><?= $this->Html->link(__('List Stores'), ['controller' => 'Stores', 'action' => 'index']) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('New Store'), ['controller' => 'Stores', 'action' => 'add']) ?> </li>
                    </ul>
    </div>
</div>