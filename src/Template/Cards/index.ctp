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
                                                        <th><?= $this->Paginator->sort('photo_path') ?></th>
                                                        <th><?= $this->Paginator->sort('lookbook_id') ?></th>
                                                        <th><?= $this->Paginator->sort('timestamp') ?></th>
                                                        <th><?= $this->Paginator->sort('status') ?></th>
                                                        <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($cards as $card): ?>
                        <tr>
                                                        <td><?= $this->Number->format($card->id) ?></td>
                                                        <td><?= h($card->photo_path) ?></td>
                                                        <td>
                                <?= $card->has('lookbook') ? $this->Html->link($card->lookbook->title, ['controller' => 'Lookbooks', 'action' => 'view', $card->lookbook->id]) : '' ?>
                            </td>
                                                        <td><?= h($card->timestamp) ?></td>
                                                        <td><?= h($card->status) ?></td>
                                                        <td class="actions">
                                <?= $this->Html->link(__('View'), ['action' => 'view', $card->id], ['class' => 'btn btn-default']) ?>
                                <?= $this->Html->link('<i class="fa fa-edit"></i>', ['action' => 'edit', $card->id], ['class' => 'btn btn-default', 'escape' => false]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $card->id], ['confirm' => __('Are you sure you want to delete # {0}?', $card->id), 'class' => 'btn btn-danger']) ?>
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
            <li class="btn btn-default"><?= $this->Html->link(__('New Card'), ['action' => 'add']) ?></li>
                        <li class="btn btn-default"><?= $this->Html->link(__('List Lookbooks'), ['controller' => 'Lookbooks', 'action' => 'index']) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('New Lookbook'), ['controller' => 'Lookbooks', 'action' => 'add']) ?> </li>
                    </ul>
    </div>
</div>