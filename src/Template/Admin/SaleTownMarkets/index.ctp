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
                                                        <th><?= $this->Paginator->sort('market_id') ?></th>
                                                        <th><?= $this->Paginator->sort('cover_photo') ?></th>
                                                        <th><?= $this->Paginator->sort('created_date') ?></th>
                                                        <th><?= $this->Paginator->sort('modified_date') ?></th>
                                                        <th><?= $this->Paginator->sort('status') ?></th>
                                                        <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($saleTownMarkets as $saleTownMarket): ?>
                        <tr>
                                                        <td><?= $this->Number->format($saleTownMarket->id) ?></td>
                                                        <td>
                                <?= $saleTownMarket->has('city') ? $this->Html->link($saleTownMarket->city->id, ['controller' => 'Cities', 'action' => 'view', $saleTownMarket->city->id]) : '' ?>
                            </td>
                                                        <td>
                                <?= $saleTownMarket->has('market') ? $this->Html->link($saleTownMarket->market->id, ['controller' => 'Markets', 'action' => 'view', $saleTownMarket->market->id]) : '' ?>
                            </td>
                                                        <td><?= h($saleTownMarket->cover_photo) ?></td>
                                                        <td><?= h($saleTownMarket->created_date) ?></td>
                                                        <td><?= h($saleTownMarket->modified_date) ?></td>
                                                        <td><?= $this->Number->format($saleTownMarket->status) ?></td>
                                                        <td class="actions">
                                <?= $this->Html->link(__('View'), ['action' => 'view', $saleTownMarket->id], ['class' => 'btn btn-default']) ?>
                                <?= $this->Html->link('<i class="fa fa-edit"></i>', ['action' => 'edit', $saleTownMarket->id], ['class' => 'btn btn-default', 'escape' => false]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $saleTownMarket->id], ['confirm' => __('Are you sure you want to delete # {0}?', $saleTownMarket->id), 'class' => 'btn btn-danger']) ?>
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
            <li class="btn btn-default"><?= $this->Html->link(__('New Sale Town Market'), ['action' => 'add']) ?></li>
                        <li class="btn btn-default"><?= $this->Html->link(__('List Cities'), ['controller' => 'Cities', 'action' => 'index']) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('New City'), ['controller' => 'Cities', 'action' => 'add']) ?> </li>
                        <li class="btn btn-default"><?= $this->Html->link(__('List Markets'), ['controller' => 'Markets', 'action' => 'index']) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('New Market'), ['controller' => 'Markets', 'action' => 'add']) ?> </li>
                    </ul>
    </div>
</div>