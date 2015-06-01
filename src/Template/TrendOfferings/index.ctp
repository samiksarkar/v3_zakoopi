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
                                                        <th><?= $this->Paginator->sort('trend_id') ?></th>
                                                        <th><?= $this->Paginator->sort('offering_id') ?></th>
                                                        <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($trendOfferings as $trendOffering): ?>
                        <tr>
                                                        <td><?= $this->Number->format($trendOffering->id) ?></td>
                                                        <td>
                                <?= $trendOffering->has('trend') ? $this->Html->link($trendOffering->trend->id, ['controller' => 'Trends', 'action' => 'view', $trendOffering->trend->id]) : '' ?>
                            </td>
                                                        <td>
                                <?= $trendOffering->has('offering') ? $this->Html->link($trendOffering->offering->name, ['controller' => 'Offerings', 'action' => 'view', $trendOffering->offering->id]) : '' ?>
                            </td>
                                                        <td class="actions">
                                <?= $this->Html->link(__('View'), ['action' => 'view', $trendOffering->id], ['class' => 'btn btn-default']) ?>
                                <?= $this->Html->link('<i class="fa fa-edit"></i>', ['action' => 'edit', $trendOffering->id], ['class' => 'btn btn-default', 'escape' => false]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $trendOffering->id], ['confirm' => __('Are you sure you want to delete # {0}?', $trendOffering->id), 'class' => 'btn btn-danger']) ?>
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
            <li class="btn btn-default"><?= $this->Html->link(__('New Trend Offering'), ['action' => 'add']) ?></li>
                        <li class="btn btn-default"><?= $this->Html->link(__('List Trends'), ['controller' => 'Trends', 'action' => 'index']) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('New Trend'), ['controller' => 'Trends', 'action' => 'add']) ?> </li>
                        <li class="btn btn-default"><?= $this->Html->link(__('List Offerings'), ['controller' => 'Offerings', 'action' => 'index']) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('New Offering'), ['controller' => 'Offerings', 'action' => 'add']) ?> </li>
                    </ul>
    </div>
</div>