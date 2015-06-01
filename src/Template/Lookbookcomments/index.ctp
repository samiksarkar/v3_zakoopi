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
                                                        <th><?= $this->Paginator->sort('lookbook_id') ?></th>
                                                        <th><?= $this->Paginator->sort('user_id') ?></th>
                                                        <th><?= $this->Paginator->sort('timestamp') ?></th>
                                                        <th><?= $this->Paginator->sort('status') ?></th>
                                                        <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($lookbookcomments as $lookbookcomment): ?>
                        <tr>
                                                        <td><?= $this->Number->format($lookbookcomment->id) ?></td>
                                                        <td>
                                <?= $lookbookcomment->has('lookbook') ? $this->Html->link($lookbookcomment->lookbook->title, ['controller' => 'Lookbooks', 'action' => 'view', $lookbookcomment->lookbook->id]) : '' ?>
                            </td>
                                                        <td>
                                <?= $lookbookcomment->has('user') ? $this->Html->link($lookbookcomment->user->id, ['controller' => 'Users', 'action' => 'view', $lookbookcomment->user->id]) : '' ?>
                            </td>
                                                        <td><?= h($lookbookcomment->timestamp) ?></td>
                                                        <td><?= h($lookbookcomment->status) ?></td>
                                                        <td class="actions">
                                <?= $this->Html->link(__('View'), ['action' => 'view', $lookbookcomment->id], ['class' => 'btn btn-default']) ?>
                                <?= $this->Html->link('<i class="fa fa-edit"></i>', ['action' => 'edit', $lookbookcomment->id], ['class' => 'btn btn-default', 'escape' => false]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $lookbookcomment->id], ['confirm' => __('Are you sure you want to delete # {0}?', $lookbookcomment->id), 'class' => 'btn btn-danger']) ?>
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
            <li class="btn btn-default"><?= $this->Html->link(__('New Lookbookcomment'), ['action' => 'add']) ?></li>
                        <li class="btn btn-default"><?= $this->Html->link(__('List Lookbooks'), ['controller' => 'Lookbooks', 'action' => 'index']) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('New Lookbook'), ['controller' => 'Lookbooks', 'action' => 'add']) ?> </li>
                        <li class="btn btn-default"><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
                    </ul>
    </div>
</div>