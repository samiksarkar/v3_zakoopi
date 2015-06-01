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
                                                        <th><?= $this->Paginator->sort('article_id') ?></th>
                                                        <th><?= $this->Paginator->sort('store_id') ?></th>
                                                        <th><?= $this->Paginator->sort('name') ?></th>
                                                        <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($articleStores as $articleStore): ?>
                        <tr>
                                                        <td><?= $this->Number->format($articleStore->id) ?></td>
                                                        <td>
                                <?= $articleStore->has('article') ? $this->Html->link($articleStore->article->title, ['controller' => 'Articles', 'action' => 'view', $articleStore->article->id]) : '' ?>
                            </td>
                                                        <td>
                                <?= $articleStore->has('store') ? $this->Html->link($articleStore->store->id, ['controller' => 'Stores', 'action' => 'view', $articleStore->store->id]) : '' ?>
                            </td>
                                                        <td><?= h($articleStore->name) ?></td>
                                                        <td class="actions">
                                <?= $this->Html->link(__('View'), ['action' => 'view', $articleStore->id], ['class' => 'btn btn-default']) ?>
                                <?= $this->Html->link('<i class="fa fa-edit"></i>', ['action' => 'edit', $articleStore->id], ['class' => 'btn btn-default', 'escape' => false]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $articleStore->id], ['confirm' => __('Are you sure you want to delete # {0}?', $articleStore->id), 'class' => 'btn btn-danger']) ?>
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
            <li class="btn btn-default"><?= $this->Html->link(__('New Article Store'), ['action' => 'add']) ?></li>
                        <li class="btn btn-default"><?= $this->Html->link(__('List Articles'), ['controller' => 'Articles', 'action' => 'index']) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('New Article'), ['controller' => 'Articles', 'action' => 'add']) ?> </li>
                        <li class="btn btn-default"><?= $this->Html->link(__('List Stores'), ['controller' => 'Stores', 'action' => 'index']) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('New Store'), ['controller' => 'Stores', 'action' => 'add']) ?> </li>
                    </ul>
    </div>
</div>