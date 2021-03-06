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
                                                        <th><?= $this->Paginator->sort('title') ?></th>
                                                        <th><?= $this->Paginator->sort('user_id') ?></th>
                                                        <th><?= $this->Paginator->sort('status') ?></th>
                                                        <th><?= $this->Paginator->sort('timesstamp') ?></th>
                                                        <th><?= $this->Paginator->sort('lookbookcomment_count') ?></th>
                                                        <th><?= $this->Paginator->sort('lookbooklike_count') ?></th>
                                                        <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($lookbooks as $lookbook): ?>
                        <tr>
                                                        <td><?= $this->Number->format($lookbook->id) ?></td>
                                                        <td><?= h($lookbook->title) ?></td>
                                                        <td>
                                <?= $lookbook->has('user') ? $this->Html->link($lookbook->user->id, ['controller' => 'Users', 'action' => 'view', $lookbook->user->id]) : '' ?>
                            </td>
                                                        <td><?= h($lookbook->status) ?></td>
                                                        <td><?= h($lookbook->timesstamp) ?></td>
                                                        <td><?= $this->Number->format($lookbook->lookbookcomment_count) ?></td>
                                                        <td><?= $this->Number->format($lookbook->lookbooklike_count) ?></td>
                                                        <td class="actions">
                                <?= $this->Html->link(__('View'), ['action' => 'view', $lookbook->id], ['class' => 'btn btn-default']) ?>
                                <?= $this->Html->link('<i class="fa fa-edit"></i>', ['action' => 'edit', $lookbook->id], ['class' => 'btn btn-default', 'escape' => false]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $lookbook->id], ['confirm' => __('Are you sure you want to delete # {0}?', $lookbook->id), 'class' => 'btn btn-danger']) ?>
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
            <li class="btn btn-default"><?= $this->Html->link(__('New Lookbook'), ['action' => 'add']) ?></li>
                        <li class="btn btn-default"><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
                        <li class="btn btn-default"><?= $this->Html->link(__('List Cards'), ['controller' => 'Cards', 'action' => 'index']) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('New Card'), ['controller' => 'Cards', 'action' => 'add']) ?> </li>
                        <li class="btn btn-default"><?= $this->Html->link(__('List Lookbookcomments'), ['controller' => 'Lookbookcomments', 'action' => 'index']) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('New Lookbookcomment'), ['controller' => 'Lookbookcomments', 'action' => 'add']) ?> </li>
                        <li class="btn btn-default"><?= $this->Html->link(__('List Lookbooklikes'), ['controller' => 'Lookbooklikes', 'action' => 'index']) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('New Lookbooklike'), ['controller' => 'Lookbooklikes', 'action' => 'add']) ?> </li>
                    </ul>
    </div>
</div>