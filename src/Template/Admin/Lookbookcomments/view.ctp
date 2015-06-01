<div class="row">
    <div class="col-lg-10">
        <div class="box">
            <div class="box-body">
                <div class="lookbookcomments view large-10 medium-9 columns">
                    <h2><?= h($lookbookcomment->id) ?></h2>
                    <div class="row">
                                                <div class="col-lg-12">
                                                                                    <h6 class="subheader"><?= __('Lookbook') ?></h6>
                            <p><?= $lookbookcomment->has('lookbook') ? $this->Html->link($lookbookcomment->lookbook->title, ['controller' => 'Lookbooks', 'action' => 'view', $lookbookcomment->lookbook->id]) : '' ?></p>
                                                                                                                <h6 class="subheader"><?= __('User') ?></h6>
                            <p><?= $lookbookcomment->has('user') ? $this->Html->link($lookbookcomment->user->id, ['controller' => 'Users', 'action' => 'view', $lookbookcomment->user->id]) : '' ?></p>
                                                                                                                <b class="subheader"><?= __('Timestamp') ?></b>
                            <p><?= h($lookbookcomment->timestamp) ?></p>
                                                                                                                <b class="subheader"><?= __('Status') ?></b>
                            <p><?= h($lookbookcomment->status) ?></p>
                                                                                </div>
                                                                        <div class="col-lg-12">
                                                        <b class="subheader"><?= __('Id') ?></b>
                            <p><?= $this->Number->format($lookbookcomment->id) ?></p>
                                                    </div>
                                                                                            </div>
                                                            <div class="row texts">
                        <div class="col-lg-12">
                            <b class="subheader"><?= __('Comment') ?></b>
                            <?= $this->Text->autoParagraph(h($lookbookcomment->comment)); ?>

                        </div>
                    </div>
                                                        </div>
                    </div>
    <div class="col-lg-2">
        <ul class="btn-group-vertical">
            <li class="btn btn-default"><?= $this->Html->link(__('Edit Lookbookcomment'), ['action' => 'edit', $lookbookcomment->id]) ?> </li>
            <li class="btn btn-danger"><?= $this->Form->postLink(__('Delete Lookbookcomment'), ['action' => 'delete', $lookbookcomment->id], ['confirm' => __('Are you sure you want to delete # {0}?', $lookbookcomment->id)]) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('List Lookbookcomments'), ['action' => 'index']) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('New Lookbookcomment'), ['action' => 'add']) ?> </li>
                        <li class="btn btn-default"><?= $this->Html->link(__('List Lookbooks'), ['controller' => 'Lookbooks', 'action' => 'index']) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('New Lookbook'), ['controller' => 'Lookbooks', 'action' => 'add']) ?> </li>
                        <li class="btn btn-default"><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
                    </ul>
    </div>

</div>


