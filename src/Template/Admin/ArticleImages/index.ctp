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
                                                        <th><?= $this->Paginator->sort('name') ?></th>
                                                        <th><?= $this->Paginator->sort('coverPhoto') ?></th>
                                                        <th><?= $this->Paginator->sort('title') ?></th>
                                                        <th><?= $this->Paginator->sort('url') ?></th>
                                                        <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($articleImages as $articleImage): ?>
                        <tr>
                                                        <td><?= $this->Number->format($articleImage->id) ?></td>
                                                        <td>
                                <?= $articleImage->has('article') ? $this->Html->link($articleImage->article->title, ['controller' => 'Articles', 'action' => 'view', $articleImage->article->id]) : '' ?>
                            </td>
                                                        <td><?= h($articleImage->name) ?></td>
                                                        <td><?= $this->Number->format($articleImage->coverPhoto) ?></td>
                                                        <td><?= h($articleImage->title) ?></td>
                                                        <td><?= h($articleImage->url) ?></td>
                                                        <td class="actions">
                                <?= $this->Html->link(__('View'), ['action' => 'view', $articleImage->id], ['class' => 'btn btn-default']) ?>
                                <?= $this->Html->link('<i class="fa fa-edit"></i>', ['action' => 'edit', $articleImage->id], ['class' => 'btn btn-default', 'escape' => false]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $articleImage->id], ['confirm' => __('Are you sure you want to delete # {0}?', $articleImage->id), 'class' => 'btn btn-danger']) ?>
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
            <li class="btn btn-default"><?= $this->Html->link(__('New Article Image'), ['action' => 'add']) ?></li>
                        <li class="btn btn-default"><?= $this->Html->link(__('List Articles'), ['controller' => 'Articles', 'action' => 'index']) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('New Article'), ['controller' => 'Articles', 'action' => 'add']) ?> </li>
                    </ul>
    </div>
</div>