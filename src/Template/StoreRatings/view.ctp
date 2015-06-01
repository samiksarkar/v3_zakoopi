<div class="row">
    <div class="col-lg-10">
        <div class="box">
            <div class="box-body">
                <div class="storeRatings view large-10 medium-9 columns">
                    <h2><?= h($storeRating->id) ?></h2>
                    <div class="row">
                                                <div class="col-lg-12">
                                                                                    <h6 class="subheader"><?= __('User') ?></h6>
                            <p><?= $storeRating->has('user') ? $this->Html->link($storeRating->user->id, ['controller' => 'Users', 'action' => 'view', $storeRating->user->id]) : '' ?></p>
                                                                                                                <h6 class="subheader"><?= __('Store') ?></h6>
                            <p><?= $storeRating->has('store') ? $this->Html->link($storeRating->store->id, ['controller' => 'Stores', 'action' => 'view', $storeRating->store->id]) : '' ?></p>
                                                                                </div>
                                                                        <div class="col-lg-12">
                                                        <b class="subheader"><?= __('Id') ?></b>
                            <p><?= $this->Number->format($storeRating->id) ?></p>
                                                        <b class="subheader"><?= __('Cost') ?></b>
                            <p><?= $this->Number->format($storeRating->cost) ?></p>
                                                        <b class="subheader"><?= __('Style') ?></b>
                            <p><?= $this->Number->format($storeRating->style) ?></p>
                                                        <b class="subheader"><?= __('Fabric') ?></b>
                            <p><?= $this->Number->format($storeRating->fabric) ?></p>
                                                        <b class="subheader"><?= __('Finesse') ?></b>
                            <p><?= $this->Number->format($storeRating->finesse) ?></p>
                                                    </div>
                                                                        <div class="col-lg-12">
                                                        <b class="subheader"><?= __('Created Date') ?></b>
                            <p><?= h($storeRating->created_date) ?></p>
                                                    </div>
                                                                    </div>
                                    </div>
                    </div>
    <div class="col-lg-2">
        <ul class="btn-group-vertical">
            <li class="btn btn-default"><?= $this->Html->link(__('Edit Store Rating'), ['action' => 'edit', $storeRating->id]) ?> </li>
            <li class="btn btn-danger"><?= $this->Form->postLink(__('Delete Store Rating'), ['action' => 'delete', $storeRating->id], ['confirm' => __('Are you sure you want to delete # {0}?', $storeRating->id)]) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('List Store Ratings'), ['action' => 'index']) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('New Store Rating'), ['action' => 'add']) ?> </li>
                        <li class="btn btn-default"><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
                        <li class="btn btn-default"><?= $this->Html->link(__('List Stores'), ['controller' => 'Stores', 'action' => 'index']) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('New Store'), ['controller' => 'Stores', 'action' => 'add']) ?> </li>
                    </ul>
    </div>

</div>


