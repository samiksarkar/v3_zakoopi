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
                                                        <th><?= $this->Paginator->sort('article_id') ?></th>
                                                        <th><?= $this->Paginator->sort('sort_order') ?></th>
                                                        <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($articlesSorttrendings as $articlesSorttrending): ?>
                        <tr>
                                                        <td><?= $this->Number->format($articlesSorttrending->id) ?></td>
                                                        <td>
                                <?= $articlesSorttrending->has('city') ? $this->Html->link($articlesSorttrending->city->id, ['controller' => 'Cities', 'action' => 'view', $articlesSorttrending->city->id]) : '' ?>
                            </td>
                                                        <td>
                                <?= $articlesSorttrending->has('article') ? $this->Html->link($articlesSorttrending->article->title, ['controller' => 'Articles', 'action' => 'view', $articlesSorttrending->article->id]) : '' ?>
                            </td>
                                                        <td><?= $this->Number->format($articlesSorttrending->sort_order) ?></td>
                                                        <td class="actions">
                                <?= $this->Html->link(__('View'), ['action' => 'view', $articlesSorttrending->id], ['class' => 'btn btn-default']) ?>
                                <?= $this->Html->link('<i class="fa fa-edit"></i>', ['action' => 'edit', $articlesSorttrending->id], ['class' => 'btn btn-default', 'escape' => false]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $articlesSorttrending->id], ['confirm' => __('Are you sure you want to delete # {0}?', $articlesSorttrending->id), 'class' => 'btn btn-danger']) ?>
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
            <li class="btn btn-default"><?= $this->Html->link(__('New Articles Sorttrending'), ['action' => 'add']) ?></li>
                        <li class="btn btn-default"><?= $this->Html->link(__('List Cities'), ['controller' => 'Cities', 'action' => 'index']) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('New City'), ['controller' => 'Cities', 'action' => 'add']) ?> </li>
                        <li class="btn btn-default"><?= $this->Html->link(__('List Articles'), ['controller' => 'Articles', 'action' => 'index']) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('New Article'), ['controller' => 'Articles', 'action' => 'add']) ?> </li>
                    </ul>
    </div>
</div>