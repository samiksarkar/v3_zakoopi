<div class="row">
    <div class="col-lg-10">
        <div class="box">
            <div class="box-body">
                <div class="reportErrors view large-10 medium-9 columns">
                    <h2><?= h($reportError->id) ?></h2>
                    <div class="row">
                                                <div class="col-lg-12">
                                                                                    <h6 class="subheader"><?= __('Store') ?></h6>
                            <p><?= $reportError->has('store') ? $this->Html->link($reportError->store->id, ['controller' => 'Stores', 'action' => 'view', $reportError->store->id]) : '' ?></p>
                                                                                                                <h6 class="subheader"><?= __('User') ?></h6>
                            <p><?= $reportError->has('user') ? $this->Html->link($reportError->user->id, ['controller' => 'Users', 'action' => 'view', $reportError->user->id]) : '' ?></p>
                                                                                                                <b class="subheader"><?= __('Error Subject') ?></b>
                            <p><?= h($reportError->error_subject) ?></p>
                                                                                </div>
                                                                        <div class="col-lg-12">
                                                        <b class="subheader"><?= __('Id') ?></b>
                            <p><?= $this->Number->format($reportError->id) ?></p>
                                                    </div>
                                                                                            </div>
                                                            <div class="row texts">
                        <div class="col-lg-12">
                            <b class="subheader"><?= __('Error Msg') ?></b>
                            <?= $this->Text->autoParagraph(h($reportError->error_msg)); ?>

                        </div>
                    </div>
                                                        </div>
                    </div>
    <div class="col-lg-2">
        <ul class="btn-group-vertical">
            <li class="btn btn-default"><?= $this->Html->link(__('Edit Report Error'), ['action' => 'edit', $reportError->id]) ?> </li>
            <li class="btn btn-danger"><?= $this->Form->postLink(__('Delete Report Error'), ['action' => 'delete', $reportError->id], ['confirm' => __('Are you sure you want to delete # {0}?', $reportError->id)]) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('List Report Errors'), ['action' => 'index']) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('New Report Error'), ['action' => 'add']) ?> </li>
                        <li class="btn btn-default"><?= $this->Html->link(__('List Stores'), ['controller' => 'Stores', 'action' => 'index']) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('New Store'), ['controller' => 'Stores', 'action' => 'add']) ?> </li>
                        <li class="btn btn-default"><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
                    </ul>
    </div>

</div>


