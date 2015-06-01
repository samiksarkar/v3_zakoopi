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
                                                        <th><?= $this->Paginator->sort('trend_id') ?></th>
                                                        <th><?= $this->Paginator->sort('sort_order') ?></th>
                                                        <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($trendCities as $trendCity): ?>
                        <tr>
                                                        <td><?= $this->Number->format($trendCity->id) ?></td>
                                                        <td>
                                <?= $trendCity->has('city') ? $this->Html->link($trendCity->city->id, ['controller' => 'Cities', 'action' => 'view', $trendCity->city->id]) : '' ?>
                            </td>
                                                        <td>
                                <?= $trendCity->has('trend') ? $this->Html->link($trendCity->trend->id, ['controller' => 'Trends', 'action' => 'view', $trendCity->trend->id]) : '' ?>
                            </td>
                                                        <td><?= $this->Number->format($trendCity->sort_order) ?></td>
                                                        <td class="actions">
                                <?= $this->Html->link(__('View'), ['action' => 'view', $trendCity->id], ['class' => 'btn btn-default']) ?>
                                <?= $this->Html->link('<i class="fa fa-edit"></i>', ['action' => 'edit', $trendCity->id], ['class' => 'btn btn-default', 'escape' => false]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $trendCity->id], ['confirm' => __('Are you sure you want to delete # {0}?', $trendCity->id), 'class' => 'btn btn-danger']) ?>
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
            <li class="btn btn-default"><?= $this->Html->link(__('New Trend City'), ['action' => 'add']) ?></li>
                        <li class="btn btn-default"><?= $this->Html->link(__('List Cities'), ['controller' => 'Cities', 'action' => 'index']) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('New City'), ['controller' => 'Cities', 'action' => 'add']) ?> </li>
                        <li class="btn btn-default"><?= $this->Html->link(__('List Trends'), ['controller' => 'Trends', 'action' => 'index']) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('New Trend'), ['controller' => 'Trends', 'action' => 'add']) ?> </li>
                    </ul>
    </div>
</div>