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
                                                        <th><?= $this->Paginator->sort('store_name') ?></th>
                                                        <th><?= $this->Paginator->sort('customer_name') ?></th>
                                                        <th><?= $this->Paginator->sort('contact_number') ?></th>
                                                        <th><?= $this->Paginator->sort('contact_time') ?></th>
                                                        <th><?= $this->Paginator->sort('store_address') ?></th>
                                                        <th><?= $this->Paginator->sort('isOwner') ?></th>
                                                        <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($enquiries as $enquiry): ?>
                        <tr>
                                                        <td><?= $this->Number->format($enquiry->id) ?></td>
                                                        <td><?= h($enquiry->store_name) ?></td>
                                                        <td><?= h($enquiry->customer_name) ?></td>
                                                        <td><?= $this->Number->format($enquiry->contact_number) ?></td>
                                                        <td><?= h($enquiry->contact_time) ?></td>
                                                        <td><?= h($enquiry->store_address) ?></td>
                                                        <td><?= h($enquiry->isOwner) ?></td>
                                                        <td class="actions">
                                <?= $this->Html->link(__('View'), ['action' => 'view', $enquiry->id], ['class' => 'btn btn-default']) ?>
                                <?= $this->Html->link('<i class="fa fa-edit"></i>', ['action' => 'edit', $enquiry->id], ['class' => 'btn btn-default', 'escape' => false]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $enquiry->id], ['confirm' => __('Are you sure you want to delete # {0}?', $enquiry->id), 'class' => 'btn btn-danger']) ?>
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
            <li class="btn btn-default"><?= $this->Html->link(__('New Enquiry'), ['action' => 'add']) ?></li>
                    </ul>
    </div>
</div>