<div class="row">
    <div class="col-lg-10">
        <div class="box">
            <div class="box-body">
                <div class="users view large-10 medium-9 columns">
                    <h2><?= h($user->id) ?></h2>
                    <div class="row">
                                                <div class="col-lg-12">
                                                                                    <b class="subheader"><?= __('Email') ?></b>
                            <p><?= h($user->email) ?></p>
                                                                                                                <b class="subheader"><?= __('First Name') ?></b>
                            <p><?= h($user->first_name) ?></p>
                                                                                                                <b class="subheader"><?= __('Last Name') ?></b>
                            <p><?= h($user->last_name) ?></p>
                                                                                                                <b class="subheader"><?= __('Password') ?></b>
                            <p><?= h($user->password) ?></p>
                                                                                                                <b class="subheader"><?= __('Age') ?></b>
                            <p><?= h($user->age) ?></p>
                                                                                                                <b class="subheader"><?= __('Uid') ?></b>
                            <p><?= h($user->uid) ?></p>
                                                                                                                <b class="subheader"><?= __('Img') ?></b>
                            <p><?= h($user->img) ?></p>
                                                                                                                <b class="subheader"><?= __('Pass Hash') ?></b>
                            <p><?= h($user->pass_hash) ?></p>
                                                                                </div>
                                                                        <div class="col-lg-12">
                                                        <b class="subheader"><?= __('Id') ?></b>
                            <p><?= $this->Number->format($user->id) ?></p>
                                                        <b class="subheader"><?= __('IsArticleUser') ?></b>
                            <p><?= $this->Number->format($user->isArticleUser) ?></p>
                                                        <b class="subheader"><?= __('IsExpertUser') ?></b>
                            <p><?= $this->Number->format($user->isExpertUser) ?></p>
                                                        <b class="subheader"><?= __('Is Active') ?></b>
                            <p><?= $this->Number->format($user->is_active) ?></p>
                                                    </div>
                                                                        <div class="col-lg-12">
                                                        <b class="subheader"><?= __('Created On') ?></b>
                            <p><?= h($user->created_on) ?></p>
                                                    </div>
                                                                        <div class="col-lg-12">
                                                        <b class="subheader"><?= __('Gender') ?></b>
                            <p><?= $user->gender ? __('Yes') : __('No'); ?></p>
                                                    </div>
                                            </div>
                                                            <div class="row texts">
                        <div class="col-lg-12">
                            <b class="subheader"><?= __('Location') ?></b>
                            <?= $this->Text->autoParagraph(h($user->location)); ?>

                        </div>
                    </div>
                                        <div class="row texts">
                        <div class="col-lg-12">
                            <b class="subheader"><?= __('Roles') ?></b>
                            <?= $this->Text->autoParagraph(h($user->roles)); ?>

                        </div>
                    </div>
                                        <div class="row texts">
                        <div class="col-lg-12">
                            <b class="subheader"><?= __('Badge') ?></b>
                            <?= $this->Text->autoParagraph(h($user->badge)); ?>

                        </div>
                    </div>
                                        <div class="row texts">
                        <div class="col-lg-12">
                            <b class="subheader"><?= __('Fb Link') ?></b>
                            <?= $this->Text->autoParagraph(h($user->fb_link)); ?>

                        </div>
                    </div>
                                        <div class="row texts">
                        <div class="col-lg-12">
                            <b class="subheader"><?= __('Twitter Link') ?></b>
                            <?= $this->Text->autoParagraph(h($user->twitter_link)); ?>

                        </div>
                    </div>
                                        <div class="row texts">
                        <div class="col-lg-12">
                            <b class="subheader"><?= __('Google Link') ?></b>
                            <?= $this->Text->autoParagraph(h($user->google_link)); ?>

                        </div>
                    </div>
                                        <div class="row texts">
                        <div class="col-lg-12">
                            <b class="subheader"><?= __('Other Website') ?></b>
                            <?= $this->Text->autoParagraph(h($user->other_website)); ?>

                        </div>
                    </div>
                                        <div class="row texts">
                        <div class="col-lg-12">
                            <b class="subheader"><?= __('About') ?></b>
                            <?= $this->Text->autoParagraph(h($user->about)); ?>

                        </div>
                    </div>
                                                        </div>
                                <div class="row">
                    <div class="col-lg-12">
                        <div class="box">
                            <div class="box-header">
                                <h3 class="box-title"><?= __('Related ArticleHits') ?></h3>
                            </div>
                            <div class="box-body table-responsive no-padding">
                                <?php if (!empty($user->article_hits)): ?>
                                <table cellpadding="0" cellspacing="0" class="table table-striped table-responsive table-hover">
                                    <tr>
                                                                                <th><?= __('Id') ?></th>
                                                                                <th><?= __('Article Id') ?></th>
                                                                                <th><?= __('User Id') ?></th>
                                                                                <th><?= __('Created') ?></th>
                                                                                <th class="actions"><?= __('Actions') ?></th>
                                    </tr>
                                    <?php foreach ($user->article_hits as $articleHits): ?>
                                    <tr>
                                        <td><?= h($articleHits->id) ?></td>
                                        <td><?= h($articleHits->article_id) ?></td>
                                        <td><?= h($articleHits->user_id) ?></td>
                                        <td><?= h($articleHits->created) ?></td>

                                        <td class="actions">
                                            <?=
                                            $this->Html->link(__('View'), ['controller' => 'ArticleHits', 'action' => 'view', $articleHits->id], ['class' => 'btn btn-default']) ?>

                <?= $this->Html->link('<i class="fa fa-edit"></i>', ['controller' => 'ArticleHits', 'action' => 'edit', $articleHits->id], ['class' => 'btn btn-default', 'escape' => false]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'ArticleHits', 'action' => 'delete', $articleHits->id], ['confirm' => __('Are you sure you want to delete # {0}?', $articleHits->id), 'class' => 'btn btn-danger']) ?>

            </td>
                                            </tr>

                                            <?php endforeach;
                                            ?>
                                </table>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
                        <div class="row">
                    <div class="col-lg-12">
                        <div class="box">
                            <div class="box-header">
                                <h3 class="box-title"><?= __('Related Lookbookcomments') ?></h3>
                            </div>
                            <div class="box-body table-responsive no-padding">
                                <?php if (!empty($user->lookbookcomments)): ?>
                                <table cellpadding="0" cellspacing="0" class="table table-striped table-responsive table-hover">
                                    <tr>
                                                                                <th><?= __('Id') ?></th>
                                                                                <th><?= __('Lookbook Id') ?></th>
                                                                                <th><?= __('User Id') ?></th>
                                                                                <th><?= __('Comment') ?></th>
                                                                                <th><?= __('Timestamp') ?></th>
                                                                                <th><?= __('Status') ?></th>
                                                                                <th class="actions"><?= __('Actions') ?></th>
                                    </tr>
                                    <?php foreach ($user->lookbookcomments as $lookbookcomments): ?>
                                    <tr>
                                        <td><?= h($lookbookcomments->id) ?></td>
                                        <td><?= h($lookbookcomments->lookbook_id) ?></td>
                                        <td><?= h($lookbookcomments->user_id) ?></td>
                                        <td><?= h($lookbookcomments->comment) ?></td>
                                        <td><?= h($lookbookcomments->timestamp) ?></td>
                                        <td><?= h($lookbookcomments->status) ?></td>

                                        <td class="actions">
                                            <?=
                                            $this->Html->link(__('View'), ['controller' => 'Lookbookcomments', 'action' => 'view', $lookbookcomments->id], ['class' => 'btn btn-default']) ?>

                <?= $this->Html->link('<i class="fa fa-edit"></i>', ['controller' => 'Lookbookcomments', 'action' => 'edit', $lookbookcomments->id], ['class' => 'btn btn-default', 'escape' => false]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Lookbookcomments', 'action' => 'delete', $lookbookcomments->id], ['confirm' => __('Are you sure you want to delete # {0}?', $lookbookcomments->id), 'class' => 'btn btn-danger']) ?>

            </td>
                                            </tr>

                                            <?php endforeach;
                                            ?>
                                </table>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
                        <div class="row">
                    <div class="col-lg-12">
                        <div class="box">
                            <div class="box-header">
                                <h3 class="box-title"><?= __('Related Lookbooklikes') ?></h3>
                            </div>
                            <div class="box-body table-responsive no-padding">
                                <?php if (!empty($user->lookbooklikes)): ?>
                                <table cellpadding="0" cellspacing="0" class="table table-striped table-responsive table-hover">
                                    <tr>
                                                                                <th><?= __('Id') ?></th>
                                                                                <th><?= __('Lookbook Id') ?></th>
                                                                                <th><?= __('User Id') ?></th>
                                                                                <th><?= __('Timestamp') ?></th>
                                                                                <th class="actions"><?= __('Actions') ?></th>
                                    </tr>
                                    <?php foreach ($user->lookbooklikes as $lookbooklikes): ?>
                                    <tr>
                                        <td><?= h($lookbooklikes->id) ?></td>
                                        <td><?= h($lookbooklikes->lookbook_id) ?></td>
                                        <td><?= h($lookbooklikes->user_id) ?></td>
                                        <td><?= h($lookbooklikes->timestamp) ?></td>

                                        <td class="actions">
                                            <?=
                                            $this->Html->link(__('View'), ['controller' => 'Lookbooklikes', 'action' => 'view', $lookbooklikes->id], ['class' => 'btn btn-default']) ?>

                <?= $this->Html->link('<i class="fa fa-edit"></i>', ['controller' => 'Lookbooklikes', 'action' => 'edit', $lookbooklikes->id], ['class' => 'btn btn-default', 'escape' => false]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Lookbooklikes', 'action' => 'delete', $lookbooklikes->id], ['confirm' => __('Are you sure you want to delete # {0}?', $lookbooklikes->id), 'class' => 'btn btn-danger']) ?>

            </td>
                                            </tr>

                                            <?php endforeach;
                                            ?>
                                </table>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
                        <div class="row">
                    <div class="col-lg-12">
                        <div class="box">
                            <div class="box-header">
                                <h3 class="box-title"><?= __('Related Lookbooks') ?></h3>
                            </div>
                            <div class="box-body table-responsive no-padding">
                                <?php if (!empty($user->lookbooks)): ?>
                                <table cellpadding="0" cellspacing="0" class="table table-striped table-responsive table-hover">
                                    <tr>
                                                                                <th><?= __('Id') ?></th>
                                                                                <th><?= __('Title') ?></th>
                                                                                <th><?= __('User Id') ?></th>
                                                                                <th><?= __('Tags') ?></th>
                                                                                <th><?= __('Status') ?></th>
                                                                                <th><?= __('Timesstamp') ?></th>
                                                                                <th><?= __('Lookbookcomment Count') ?></th>
                                                                                <th><?= __('Lookbooklike Count') ?></th>
                                                                                <th><?= __('View Count') ?></th>
                                                                                <th class="actions"><?= __('Actions') ?></th>
                                    </tr>
                                    <?php foreach ($user->lookbooks as $lookbooks): ?>
                                    <tr>
                                        <td><?= h($lookbooks->id) ?></td>
                                        <td><?= h($lookbooks->title) ?></td>
                                        <td><?= h($lookbooks->user_id) ?></td>
                                        <td><?= h($lookbooks->tags) ?></td>
                                        <td><?= h($lookbooks->status) ?></td>
                                        <td><?= h($lookbooks->timesstamp) ?></td>
                                        <td><?= h($lookbooks->lookbookcomment_count) ?></td>
                                        <td><?= h($lookbooks->lookbooklike_count) ?></td>
                                        <td><?= h($lookbooks->view_count) ?></td>

                                        <td class="actions">
                                            <?=
                                            $this->Html->link(__('View'), ['controller' => 'Lookbooks', 'action' => 'view', $lookbooks->id], ['class' => 'btn btn-default']) ?>

                <?= $this->Html->link('<i class="fa fa-edit"></i>', ['controller' => 'Lookbooks', 'action' => 'edit', $lookbooks->id], ['class' => 'btn btn-default', 'escape' => false]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Lookbooks', 'action' => 'delete', $lookbooks->id], ['confirm' => __('Are you sure you want to delete # {0}?', $lookbooks->id), 'class' => 'btn btn-danger']) ?>

            </td>
                                            </tr>

                                            <?php endforeach;
                                            ?>
                                </table>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
                        <div class="row">
                    <div class="col-lg-12">
                        <div class="box">
                            <div class="box-header">
                                <h3 class="box-title"><?= __('Related ReportErrors') ?></h3>
                            </div>
                            <div class="box-body table-responsive no-padding">
                                <?php if (!empty($user->report_errors)): ?>
                                <table cellpadding="0" cellspacing="0" class="table table-striped table-responsive table-hover">
                                    <tr>
                                                                                <th><?= __('Id') ?></th>
                                                                                <th><?= __('Store Id') ?></th>
                                                                                <th><?= __('User Id') ?></th>
                                                                                <th><?= __('Error Subject') ?></th>
                                                                                <th><?= __('Error Msg') ?></th>
                                                                                <th class="actions"><?= __('Actions') ?></th>
                                    </tr>
                                    <?php foreach ($user->report_errors as $reportErrors): ?>
                                    <tr>
                                        <td><?= h($reportErrors->id) ?></td>
                                        <td><?= h($reportErrors->store_id) ?></td>
                                        <td><?= h($reportErrors->user_id) ?></td>
                                        <td><?= h($reportErrors->error_subject) ?></td>
                                        <td><?= h($reportErrors->error_msg) ?></td>

                                        <td class="actions">
                                            <?=
                                            $this->Html->link(__('View'), ['controller' => 'ReportErrors', 'action' => 'view', $reportErrors->id], ['class' => 'btn btn-default']) ?>

                <?= $this->Html->link('<i class="fa fa-edit"></i>', ['controller' => 'ReportErrors', 'action' => 'edit', $reportErrors->id], ['class' => 'btn btn-default', 'escape' => false]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'ReportErrors', 'action' => 'delete', $reportErrors->id], ['confirm' => __('Are you sure you want to delete # {0}?', $reportErrors->id), 'class' => 'btn btn-danger']) ?>

            </td>
                                            </tr>

                                            <?php endforeach;
                                            ?>
                                </table>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
                        <div class="row">
                    <div class="col-lg-12">
                        <div class="box">
                            <div class="box-header">
                                <h3 class="box-title"><?= __('Related StoreRatings') ?></h3>
                            </div>
                            <div class="box-body table-responsive no-padding">
                                <?php if (!empty($user->store_ratings)): ?>
                                <table cellpadding="0" cellspacing="0" class="table table-striped table-responsive table-hover">
                                    <tr>
                                                                                <th><?= __('Id') ?></th>
                                                                                <th><?= __('User Id') ?></th>
                                                                                <th><?= __('Store Id') ?></th>
                                                                                <th><?= __('Cost') ?></th>
                                                                                <th><?= __('Style') ?></th>
                                                                                <th><?= __('Fabric') ?></th>
                                                                                <th><?= __('Finesse') ?></th>
                                                                                <th><?= __('Created Date') ?></th>
                                                                                <th class="actions"><?= __('Actions') ?></th>
                                    </tr>
                                    <?php foreach ($user->store_ratings as $storeRatings): ?>
                                    <tr>
                                        <td><?= h($storeRatings->id) ?></td>
                                        <td><?= h($storeRatings->user_id) ?></td>
                                        <td><?= h($storeRatings->store_id) ?></td>
                                        <td><?= h($storeRatings->cost) ?></td>
                                        <td><?= h($storeRatings->style) ?></td>
                                        <td><?= h($storeRatings->fabric) ?></td>
                                        <td><?= h($storeRatings->finesse) ?></td>
                                        <td><?= h($storeRatings->created_date) ?></td>

                                        <td class="actions">
                                            <?=
                                            $this->Html->link(__('View'), ['controller' => 'StoreRatings', 'action' => 'view', $storeRatings->id], ['class' => 'btn btn-default']) ?>

                <?= $this->Html->link('<i class="fa fa-edit"></i>', ['controller' => 'StoreRatings', 'action' => 'edit', $storeRatings->id], ['class' => 'btn btn-default', 'escape' => false]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'StoreRatings', 'action' => 'delete', $storeRatings->id], ['confirm' => __('Are you sure you want to delete # {0}?', $storeRatings->id), 'class' => 'btn btn-danger']) ?>

            </td>
                                            </tr>

                                            <?php endforeach;
                                            ?>
                                </table>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
                        <div class="row">
                    <div class="col-lg-12">
                        <div class="box">
                            <div class="box-header">
                                <h3 class="box-title"><?= __('Related StoreReviews') ?></h3>
                            </div>
                            <div class="box-body table-responsive no-padding">
                                <?php if (!empty($user->store_reviews)): ?>
                                <table cellpadding="0" cellspacing="0" class="table table-striped table-responsive table-hover">
                                    <tr>
                                                                                <th><?= __('Id') ?></th>
                                                                                <th><?= __('User Id') ?></th>
                                                                                <th><?= __('Store Id') ?></th>
                                                                                <th><?= __('Review') ?></th>
                                                                                <th><?= __('Istrending') ?></th>
                                                                                <th><?= __('Created Date') ?></th>
                                                                                <th class="actions"><?= __('Actions') ?></th>
                                    </tr>
                                    <?php foreach ($user->store_reviews as $storeReviews): ?>
                                    <tr>
                                        <td><?= h($storeReviews->id) ?></td>
                                        <td><?= h($storeReviews->user_id) ?></td>
                                        <td><?= h($storeReviews->store_id) ?></td>
                                        <td><?= h($storeReviews->review) ?></td>
                                        <td><?= h($storeReviews->istrending) ?></td>
                                        <td><?= h($storeReviews->created_date) ?></td>

                                        <td class="actions">
                                            <?=
                                            $this->Html->link(__('View'), ['controller' => 'StoreReviews', 'action' => 'view', $storeReviews->id], ['class' => 'btn btn-default']) ?>

                <?= $this->Html->link('<i class="fa fa-edit"></i>', ['controller' => 'StoreReviews', 'action' => 'edit', $storeReviews->id], ['class' => 'btn btn-default', 'escape' => false]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'StoreReviews', 'action' => 'delete', $storeReviews->id], ['confirm' => __('Are you sure you want to delete # {0}?', $storeReviews->id), 'class' => 'btn btn-danger']) ?>

            </td>
                                            </tr>

                                            <?php endforeach;
                                            ?>
                                </table>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
                        <div class="row">
                    <div class="col-lg-12">
                        <div class="box">
                            <div class="box-header">
                                <h3 class="box-title"><?= __('Related UserCheckins') ?></h3>
                            </div>
                            <div class="box-body table-responsive no-padding">
                                <?php if (!empty($user->user_checkins)): ?>
                                <table cellpadding="0" cellspacing="0" class="table table-striped table-responsive table-hover">
                                    <tr>
                                                                                <th><?= __('Id') ?></th>
                                                                                <th><?= __('User Id') ?></th>
                                                                                <th><?= __('Store Id') ?></th>
                                                                                <th class="actions"><?= __('Actions') ?></th>
                                    </tr>
                                    <?php foreach ($user->user_checkins as $userCheckins): ?>
                                    <tr>
                                        <td><?= h($userCheckins->id) ?></td>
                                        <td><?= h($userCheckins->user_id) ?></td>
                                        <td><?= h($userCheckins->store_id) ?></td>

                                        <td class="actions">
                                            <?=
                                            $this->Html->link(__('View'), ['controller' => 'UserCheckins', 'action' => 'view', $userCheckins->id], ['class' => 'btn btn-default']) ?>

                <?= $this->Html->link('<i class="fa fa-edit"></i>', ['controller' => 'UserCheckins', 'action' => 'edit', $userCheckins->id], ['class' => 'btn btn-default', 'escape' => false]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'UserCheckins', 'action' => 'delete', $userCheckins->id], ['confirm' => __('Are you sure you want to delete # {0}?', $userCheckins->id), 'class' => 'btn btn-danger']) ?>

            </td>
                                            </tr>

                                            <?php endforeach;
                                            ?>
                                </table>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
                        <div class="row">
                    <div class="col-lg-12">
                        <div class="box">
                            <div class="box-header">
                                <h3 class="box-title"><?= __('Related UserFavourites') ?></h3>
                            </div>
                            <div class="box-body table-responsive no-padding">
                                <?php if (!empty($user->user_favourites)): ?>
                                <table cellpadding="0" cellspacing="0" class="table table-striped table-responsive table-hover">
                                    <tr>
                                                                                <th><?= __('Id') ?></th>
                                                                                <th><?= __('User Id') ?></th>
                                                                                <th><?= __('Store Id') ?></th>
                                                                                <th class="actions"><?= __('Actions') ?></th>
                                    </tr>
                                    <?php foreach ($user->user_favourites as $userFavourites): ?>
                                    <tr>
                                        <td><?= h($userFavourites->id) ?></td>
                                        <td><?= h($userFavourites->user_id) ?></td>
                                        <td><?= h($userFavourites->store_id) ?></td>

                                        <td class="actions">
                                            <?=
                                            $this->Html->link(__('View'), ['controller' => 'UserFavourites', 'action' => 'view', $userFavourites->id], ['class' => 'btn btn-default']) ?>

                <?= $this->Html->link('<i class="fa fa-edit"></i>', ['controller' => 'UserFavourites', 'action' => 'edit', $userFavourites->id], ['class' => 'btn btn-default', 'escape' => false]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'UserFavourites', 'action' => 'delete', $userFavourites->id], ['confirm' => __('Are you sure you want to delete # {0}?', $userFavourites->id), 'class' => 'btn btn-danger']) ?>

            </td>
                                            </tr>

                                            <?php endforeach;
                                            ?>
                                </table>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            </div>
    <div class="col-lg-2">
        <ul class="btn-group-vertical">
            <li class="btn btn-default"><?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id]) ?> </li>
            <li class="btn btn-danger"><?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('New User'), ['action' => 'add']) ?> </li>
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


