<div class="row">
    <div class="col-lg-10">
        <div class="box">
            <div class="box-body">
                <div class="userFavourites view large-10 medium-9 columns">
                    <h2><?= h($userFavourite->id) ?></h2>
                    <div class="row">
                                                <div class="col-lg-12">
                                                                                    <h6 class="subheader"><?= __('User') ?></h6>
                            <p><?= $userFavourite->has('user') ? $this->Html->link($userFavourite->user->id, ['controller' => 'Users', 'action' => 'view', $userFavourite->user->id]) : '' ?></p>
                                                                                                                <h6 class="subheader"><?= __('Store') ?></h6>
                            <p><?= $userFavourite->has('store') ? $this->Html->link($userFavourite->store->id, ['controller' => 'Stores', 'action' => 'view', $userFavourite->store->id]) : '' ?></p>
                                                                                </div>
                                                                        <div class="col-lg-12">
                                                        <b class="subheader"><?= __('Id') ?></b>
                            <p><?= $this->Number->format($userFavourite->id) ?></p>
                                                    </div>
                                                                                            </div>
                                    </div>
                    </div>
    <div class="col-lg-2">
        <ul class="btn-group-vertical">
            <li class="btn btn-default"><?= $this->Html->link(__('Edit User Favourite'), ['action' => 'edit', $userFavourite->id]) ?> </li>
            <li class="btn btn-danger"><?= $this->Form->postLink(__('Delete User Favourite'), ['action' => 'delete', $userFavourite->id], ['confirm' => __('Are you sure you want to delete # {0}?', $userFavourite->id)]) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('List User Favourites'), ['action' => 'index']) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('New User Favourite'), ['action' => 'add']) ?> </li>
                        <li class="btn btn-default"><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
                        <li class="btn btn-default"><?= $this->Html->link(__('List Stores'), ['controller' => 'Stores', 'action' => 'index']) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('New Store'), ['controller' => 'Stores', 'action' => 'add']) ?> </li>
                    </ul>
    </div>

</div>


