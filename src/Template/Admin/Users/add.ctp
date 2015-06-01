<div class="row">
    <div class="col-lg-10">
        <div class = "users form large-10 medium-9 columns">
            <?= $this->Form->create($user);
            ?>
            <fieldset>
                <legend><?= __('Add User') ?></legend>
                <?php
                                echo $this->Form->input('email', ['class' => 'form-control', 'div' => ['class' => 'form-group']] );
                                echo $this->Form->input('first_name', ['class' => 'form-control', 'div' => ['class' => 'form-group']] );
                                echo $this->Form->input('last_name', ['class' => 'form-control', 'div' => ['class' => 'form-group']] );
                                echo $this->Form->input('password', ['class' => 'form-control', 'div' => ['class' => 'form-group']] );
                                echo $this->Form->input('age', ['class' => 'form-control', 'div' => ['class' => 'form-group']] );
                                echo $this->Form->input('gender', ['class' => 'form-control', 'div' => ['class' => 'form-group']] );
                                echo $this->Form->input('location', ['class' => 'form-control', 'div' => ['class' => 'form-group']] );
                                echo $this->Form->input('created_on', ['class' => 'form-control', 'div' => ['class' => 'form-group']] );
                                echo $this->Form->input('roles', ['class' => 'form-control', 'div' => ['class' => 'form-group']] );
                                echo $this->Form->input('isArticleUser', ['class' => 'form-control', 'div' => ['class' => 'form-group']] );
                                echo $this->Form->input('isExpertUser', ['class' => 'form-control', 'div' => ['class' => 'form-group']] );
                                echo $this->Form->input('uid', ['class' => 'form-control', 'div' => ['class' => 'form-group']] );
                                echo $this->Form->input('is_active', ['class' => 'form-control', 'div' => ['class' => 'form-group']] );
                                echo $this->Form->input('img', ['class' => 'form-control', 'div' => ['class' => 'form-group']] );
                                echo $this->Form->input('badge', ['class' => 'form-control', 'div' => ['class' => 'form-group']] );
                                echo $this->Form->input('fb_link', ['class' => 'form-control', 'div' => ['class' => 'form-group']] );
                                echo $this->Form->input('twitter_link', ['class' => 'form-control', 'div' => ['class' => 'form-group']] );
                                echo $this->Form->input('google_link', ['class' => 'form-control', 'div' => ['class' => 'form-group']] );
                                echo $this->Form->input('other_website', ['class' => 'form-control', 'div' => ['class' => 'form-group']] );
                                echo $this->Form->input('about', ['class' => 'form-control', 'div' => ['class' => 'form-group']] );
                                echo $this->Form->input('pass_hash', ['class' => 'form-control', 'div' => ['class' => 'form-group']] );
                        
                
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
<?= $this->Form->end() ?>
        </div>
    </div>
    <div class="col-lg-2">
        <ul class="btn-group-vertical">
                        <li class="btn btn-default"><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?></li>
                        <li class="btn btn-default"><?=
                $this->Html->link(__('List Article Hits'), ['controller' => 'ArticleHits', 'action' => 'index']) ?> </li>
                <li class = "btn btn-default"><?= $this->Html->link(__('New Article Hit'), ['controller' => 'ArticleHits', 'action' => 'add']) ?> </li>
                            <li class="btn btn-default"><?=
                $this->Html->link(__('List Lookbookcomments'), ['controller' => 'Lookbookcomments', 'action' => 'index']) ?> </li>
                <li class = "btn btn-default"><?= $this->Html->link(__('New Lookbookcomment'), ['controller' => 'Lookbookcomments', 'action' => 'add']) ?> </li>
                            <li class="btn btn-default"><?=
                $this->Html->link(__('List Lookbooklikes'), ['controller' => 'Lookbooklikes', 'action' => 'index']) ?> </li>
                <li class = "btn btn-default"><?= $this->Html->link(__('New Lookbooklike'), ['controller' => 'Lookbooklikes', 'action' => 'add']) ?> </li>
                            <li class="btn btn-default"><?=
                $this->Html->link(__('List Lookbooks'), ['controller' => 'Lookbooks', 'action' => 'index']) ?> </li>
                <li class = "btn btn-default"><?= $this->Html->link(__('New Lookbook'), ['controller' => 'Lookbooks', 'action' => 'add']) ?> </li>
                            <li class="btn btn-default"><?=
                $this->Html->link(__('List Report Errors'), ['controller' => 'ReportErrors', 'action' => 'index']) ?> </li>
                <li class = "btn btn-default"><?= $this->Html->link(__('New Report Error'), ['controller' => 'ReportErrors', 'action' => 'add']) ?> </li>
                            <li class="btn btn-default"><?=
                $this->Html->link(__('List Store Ratings'), ['controller' => 'StoreRatings', 'action' => 'index']) ?> </li>
                <li class = "btn btn-default"><?= $this->Html->link(__('New Store Rating'), ['controller' => 'StoreRatings', 'action' => 'add']) ?> </li>
                            <li class="btn btn-default"><?=
                $this->Html->link(__('List Store Reviews'), ['controller' => 'StoreReviews', 'action' => 'index']) ?> </li>
                <li class = "btn btn-default"><?= $this->Html->link(__('New Store Review'), ['controller' => 'StoreReviews', 'action' => 'add']) ?> </li>
                            <li class="btn btn-default"><?=
                $this->Html->link(__('List User Checkins'), ['controller' => 'UserCheckins', 'action' => 'index']) ?> </li>
                <li class = "btn btn-default"><?= $this->Html->link(__('New User Checkin'), ['controller' => 'UserCheckins', 'action' => 'add']) ?> </li>
                            <li class="btn btn-default"><?=
                $this->Html->link(__('List User Favourites'), ['controller' => 'UserFavourites', 'action' => 'index']) ?> </li>
                <li class = "btn btn-default"><?= $this->Html->link(__('New User Favourite'), ['controller' => 'UserFavourites', 'action' => 'add']) ?> </li>
                    </ul>
    </div>
</div>

            
