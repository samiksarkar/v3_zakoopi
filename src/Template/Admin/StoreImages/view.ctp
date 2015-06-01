<div class="row">
    <div class="col-lg-10">
        <div class="box">
            <div class="box-body">
                <div class="storeImages view large-10 medium-9 columns">
                    <h2><?= h($storeImage->name) ?></h2>
                    <div class="row">
                                                <div class="col-lg-12">
                                                                                    <b class="subheader"><?= __('Name') ?></b>
                            <p><?= h($storeImage->name) ?></p>
                                                                                                                <h6 class="subheader"><?= __('Store') ?></h6>
                            <p><?= $storeImage->has('store') ? $this->Html->link($storeImage->store->id, ['controller' => 'Stores', 'action' => 'view', $storeImage->store->id]) : '' ?></p>
                                                                                </div>
                                                                        <div class="col-lg-12">
                                                        <b class="subheader"><?= __('Id') ?></b>
                            <p><?= $this->Number->format($storeImage->id) ?></p>
                                                    </div>
                                                                                            </div>
                                                            <div class="row texts">
                        <div class="col-lg-12">
                            <b class="subheader"><?= __('Desc') ?></b>
                            <?= $this->Text->autoParagraph(h($storeImage->desc)); ?>

                        </div>
                    </div>
                                                        </div>
                    </div>
    <div class="col-lg-2">
        <ul class="btn-group-vertical">
            <li class="btn btn-default"><?= $this->Html->link(__('Edit Store Image'), ['action' => 'edit', $storeImage->id]) ?> </li>
            <li class="btn btn-danger"><?= $this->Form->postLink(__('Delete Store Image'), ['action' => 'delete', $storeImage->id], ['confirm' => __('Are you sure you want to delete # {0}?', $storeImage->id)]) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('List Store Images'), ['action' => 'index']) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('New Store Image'), ['action' => 'add']) ?> </li>
                        <li class="btn btn-default"><?= $this->Html->link(__('List Stores'), ['controller' => 'Stores', 'action' => 'index']) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('New Store'), ['controller' => 'Stores', 'action' => 'add']) ?> </li>
                    </ul>
    </div>

</div>


