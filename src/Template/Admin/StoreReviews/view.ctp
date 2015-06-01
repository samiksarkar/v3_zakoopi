<div class="row">
    <div class="col-lg-10">
        <div class="box">
            <div class="box-body">
                <div class="storeReviews view large-10 medium-9 columns">
                    <h2><?= h($storeReview->id) ?></h2>
                    <div class="row">
                                                <div class="col-lg-12">
                                                                                    <h6 class="subheader"><?= __('User') ?></h6>
                            <p><?= $storeReview->has('user') ? $this->Html->link($storeReview->user->id, ['controller' => 'Users', 'action' => 'view', $storeReview->user->id]) : '' ?></p>
                                                                                                                <h6 class="subheader"><?= __('Store') ?></h6>
                            <p><?= $storeReview->has('store') ? $this->Html->link($storeReview->store->id, ['controller' => 'Stores', 'action' => 'view', $storeReview->store->id]) : '' ?></p>
                                                                                </div>
                                                                        <div class="col-lg-12">
                                                        <b class="subheader"><?= __('Id') ?></b>
                            <p><?= $this->Number->format($storeReview->id) ?></p>
                                                    </div>
                                                                        <div class="col-lg-12">
                                                        <b class="subheader"><?= __('Created Date') ?></b>
                            <p><?= h($storeReview->created_date) ?></p>
                                                    </div>
                                                                        <div class="col-lg-12">
                                                        <b class="subheader"><?= __('Istrending') ?></b>
                            <p><?= $storeReview->istrending ? __('Yes') : __('No'); ?></p>
                                                    </div>
                                            </div>
                                                            <div class="row texts">
                        <div class="col-lg-12">
                            <b class="subheader"><?= __('Review') ?></b>
                            <?= $this->Text->autoParagraph(h($storeReview->review)); ?>

                        </div>
                    </div>
                                                        </div>
                    </div>
    <div class="col-lg-2">
        <ul class="btn-group-vertical">
            <li class="btn btn-default"><?= $this->Html->link(__('Edit Store Review'), ['action' => 'edit', $storeReview->id]) ?> </li>
            <li class="btn btn-danger"><?= $this->Form->postLink(__('Delete Store Review'), ['action' => 'delete', $storeReview->id], ['confirm' => __('Are you sure you want to delete # {0}?', $storeReview->id)]) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('List Store Reviews'), ['action' => 'index']) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('New Store Review'), ['action' => 'add']) ?> </li>
                        <li class="btn btn-default"><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
                        <li class="btn btn-default"><?= $this->Html->link(__('List Stores'), ['controller' => 'Stores', 'action' => 'index']) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('New Store'), ['controller' => 'Stores', 'action' => 'add']) ?> </li>
                    </ul>
    </div>

</div>


