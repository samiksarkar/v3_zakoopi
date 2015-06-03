<div class="row">

    <div class="col-lg-10">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title"></h3>

                <div>
                    <?= $this->Paginator->counter(['format' => 'Page {{page}} of {{pages}} pages']) ?>
                    <ul class="pagination pagination-sm no-margin pull-right">
                        <?= $this->Paginator->prev('< ' . __('previous')) ?>
                        <?= $this->Paginator->numbers(['modulus' => 4]) ?>
                        <?= $this->Paginator->next(__('next') . ' >') ?>

                    </ul>
                </div>
            </div><!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
                <table class="table table-striped table-responsive table-hover">
                    <thead>
                        <tr>
                            <th><?= $this->Paginator->sort('id') ?></th>
                            <th>
                                <?= $this->Paginator->sort('email') ?> 
                                <?= $this->Paginator->sort('first_name') ?>
                                <?= $this->Paginator->sort('last_name') ?>
                                <?= $this->Paginator->sort('age') ?>
                            </th>
                            <th><?= $this->Paginator->sort('gender') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($users as $user): ?>
                            <tr>
                                <td>
                                    <img title="<?= $this->Number->format($user->id) ?>" onerror="javascript: this.src = '/uploads/profile_pics/profile_img_3.jpg'" style="border-radius: 50%; height: 100px;" src="/uploads/profile_pics/<?= $user->img ?>" />
                                </td>
                                <td>
                                    <b>Name: </b><?= h($user->first_name) ?> <?= h($user->last_name) ?><br />
                                    <b>E-Mail: </b><a href="mailto:<?= h($user->email) ?>"><?= h($user->email) ?></a><br />
                                    <b>Age: </b><?= h($user->age) ?><br />
                                    <b>Badge: </b><?= h($user->badge) ?><br />
                                    <b>Location: </b><?= h($user->location) ?><br />
                                    <b>Register On: </b><?= date("d-m-Y h:i A", strtotime($user->created_on)) ?><br />
                                </td>
                                <td><?= h($user->gender) ?></td>
                                <td class="actions">
                                    <?= $this->Html->link(__('View'), ['action' => 'view', $user->id], ['class' => 'btn btn-default']) ?>
                                    <?= $this->Html->link('<i class="fa fa-edit"></i>', ['action' => 'edit', $user->id], ['class' => 'btn btn-default', 'escape' => false]) ?>
                                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id), 'class' => 'btn btn-danger']) ?>
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
            <li class="btn btn-default"><?= $this->Html->link(__('New User'), ['action' => 'add']) ?></li>
            <li class="btn btn-default"><?= $this->Html->link(__('List Article Hits'), ['controller' => 'ArticleHits', 'action' => 'index']) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('New Article Hit'), ['controller' => 'ArticleHits', 'action' => 'add']) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('List Lookbookcomments'), ['controller' => 'Lookbookcomments', 'action' => 'index']) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('New Lookbookcomment'), ['controller' => 'Lookbookcomments', 'action' => 'add']) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('List Lookbooklikes'), ['controller' => 'Lookbooklikes', 'action' => 'index']) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('New Lookbooklike'), ['controller' => 'Lookbooklikes', 'action' => 'add']) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('List Lookbooks'), ['controller' => 'Lookbooks', 'action' => 'index']) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('New Lookbook'), ['controller' => 'Lookbooks', 'action' => 'add']) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('List Report Errors'), ['controller' => 'ReportErrors', 'action' => 'index']) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('New Report Error'), ['controller' => 'ReportErrors', 'action' => 'add']) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('List Store Ratings'), ['controller' => 'StoreRatings', 'action' => 'index']) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('New Store Rating'), ['controller' => 'StoreRatings', 'action' => 'add']) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('List Store Reviews'), ['controller' => 'StoreReviews', 'action' => 'index']) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('New Store Review'), ['controller' => 'StoreReviews', 'action' => 'add']) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('List User Checkins'), ['controller' => 'UserCheckins', 'action' => 'index']) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('New User Checkin'), ['controller' => 'UserCheckins', 'action' => 'add']) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('List User Favourites'), ['controller' => 'UserFavourites', 'action' => 'index']) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('New User Favourite'), ['controller' => 'UserFavourites', 'action' => 'add']) ?> </li>
        </ul>
    </div>
</div>