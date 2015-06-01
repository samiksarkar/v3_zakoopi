<div class="row">
    <div class="col-lg-10">
        <div class="box">
            <div class="box-body">
                <div class="lookbooklikes view large-10 medium-9 columns">
                    <h2><?= h($lookbooklike->id) ?></h2>
                    <div class="row">
                                                <div class="col-lg-12">
                                                                                    <h6 class="subheader"><?= __('Lookbook') ?></h6>
                            <p><?= $lookbooklike->has('lookbook') ? $this->Html->link($lookbooklike->lookbook->title, ['controller' => 'Lookbooks', 'action' => 'view', $lookbooklike->lookbook->id]) : '' ?></p>
                                                                                                                <h6 class="subheader"><?= __('User') ?></h6>
                            <p><?= $lookbooklike->has('user') ? $this->Html->link($lookbooklike->user->id, ['controller' => 'Users', 'action' => 'view', $lookbooklike->user->id]) : '' ?></p>
                                                                                                                <b class="subheader"><?= __('Timestamp') ?></b>
                            <p><?= h($lookbooklike->timestamp) ?></p>
                                                                                </div>
                                                                        <div class="col-lg-12">
                                                        <b class="subheader"><?= __('Id') ?></b>
                            <p><?= $this->Number->format($lookbooklike->id) ?></p>
                                                    </div>
                                                                                            </div>
                                    </div>
                    </div>
    <div class="col-lg-2">
        <ul class="btn-group-vertical">
            <li class="btn btn-default"><?= $this->Html->link(__('Edit Lookbooklike'), ['action' => 'edit', $lookbooklike->id]) ?> </li>
            <li class="btn btn-danger"><?= $this->Form->postLink(__('Delete Lookbooklike'), ['action' => 'delete', $lookbooklike->id], ['confirm' => __('Are you sure you want to delete # {0}?', $lookbooklike->id)]) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('List Lookbooklikes'), ['action' => 'index']) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('New Lookbooklike'), ['action' => 'add']) ?> </li>
                        <li class="btn btn-default"><?= $this->Html->link(__('List Lookbooks'), ['controller' => 'Lookbooks', 'action' => 'index']) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('New Lookbook'), ['controller' => 'Lookbooks', 'action' => 'add']) ?> </li>
                        <li class="btn btn-default"><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
                    </ul>
    </div>

</div>


