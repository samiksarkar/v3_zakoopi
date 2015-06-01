<div class="row">
    <div class="col-lg-10">
        <div class="box">
            <div class="box-body">
                <div class="cities view large-10 medium-9 columns">
                    <h2><?= h($city->id) ?></h2>
                    <div class="row">
                                                <div class="col-lg-12">
                                                                                    <b class="subheader"><?= __('City Name') ?></b>
                            <p><?= h($city->city_name) ?></p>
                                                                                                                <b class="subheader"><?= __('Modified') ?></b>
                            <p><?= h($city->modified) ?></p>
                                                                                                                <b class="subheader"><?= __('Created') ?></b>
                            <p><?= h($city->created) ?></p>
                                                                                </div>
                                                                        <div class="col-lg-12">
                                                        <b class="subheader"><?= __('Id') ?></b>
                            <p><?= $this->Number->format($city->id) ?></p>
                                                    </div>
                                                                                            </div>
                                    </div>
                                <div class="row">
                    <div class="col-lg-12">
                        <div class="box">
                            <div class="box-header">
                                <h3 class="box-title"><?= __('Related Articles') ?></h3>
                            </div>
                            <div class="box-body table-responsive no-padding">
                                <?php if (!empty($city->articles)): ?>
                                <table cellpadding="0" cellspacing="0" class="table table-striped table-responsive table-hover">
                                    <tr>
                                                                                <th><?= __('Id') ?></th>
                                                                                <th><?= __('City Id') ?></th>
                                                                                <th><?= __('Title') ?></th>
                                                                                <th><?= __('Slug') ?></th>
                                                                                <th><?= __('Description') ?></th>
                                                                                <th><?= __('Summary') ?></th>
                                                                                <th><?= __('Tags') ?></th>
                                                                                <th><?= __('Status') ?></th>
                                                                                <th><?= __('Sponsored') ?></th>
                                                                                <th><?= __('Trending') ?></th>
                                                                                <th><?= __('Hits') ?></th>
                                                                                <th><?= __('Sort') ?></th>
                                                                                <th><?= __('Created') ?></th>
                                                                                <th><?= __('CreatedBy') ?></th>
                                                                                <th><?= __('Approved') ?></th>
                                                                                <th><?= __('Modified') ?></th>
                                                                                <th><?= __('ModifiedBy') ?></th>
                                                                                <th class="actions"><?= __('Actions') ?></th>
                                    </tr>
                                    <?php foreach ($city->articles as $articles): ?>
                                    <tr>
                                        <td><?= h($articles->id) ?></td>
                                        <td><?= h($articles->city_id) ?></td>
                                        <td><?= h($articles->title) ?></td>
                                        <td><?= h($articles->slug) ?></td>
                                        <td><?= h($articles->description) ?></td>
                                        <td><?= h($articles->summary) ?></td>
                                        <td><?= h($articles->tags) ?></td>
                                        <td><?= h($articles->status) ?></td>
                                        <td><?= h($articles->sponsored) ?></td>
                                        <td><?= h($articles->trending) ?></td>
                                        <td><?= h($articles->hits) ?></td>
                                        <td><?= h($articles->sort) ?></td>
                                        <td><?= h($articles->created) ?></td>
                                        <td><?= h($articles->createdBy) ?></td>
                                        <td><?= h($articles->approved) ?></td>
                                        <td><?= h($articles->modified) ?></td>
                                        <td><?= h($articles->modifiedBy) ?></td>

                                        <td class="actions">
                                            <?=
                                            $this->Html->link(__('View'), ['controller' => 'Articles', 'action' => 'view', $articles->id], ['class' => 'btn btn-default']) ?>

                <?= $this->Html->link('<i class="fa fa-edit"></i>', ['controller' => 'Articles', 'action' => 'edit', $articles->id], ['class' => 'btn btn-default', 'escape' => false]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Articles', 'action' => 'delete', $articles->id], ['confirm' => __('Are you sure you want to delete # {0}?', $articles->id), 'class' => 'btn btn-danger']) ?>

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
                                <h3 class="box-title"><?= __('Related ArticlesSorttrendings') ?></h3>
                            </div>
                            <div class="box-body table-responsive no-padding">
                                <?php if (!empty($city->articles_sorttrendings)): ?>
                                <table cellpadding="0" cellspacing="0" class="table table-striped table-responsive table-hover">
                                    <tr>
                                                                                <th><?= __('Id') ?></th>
                                                                                <th><?= __('City Id') ?></th>
                                                                                <th><?= __('Article Id') ?></th>
                                                                                <th><?= __('Sort Order') ?></th>
                                                                                <th class="actions"><?= __('Actions') ?></th>
                                    </tr>
                                    <?php foreach ($city->articles_sorttrendings as $articlesSorttrendings): ?>
                                    <tr>
                                        <td><?= h($articlesSorttrendings->id) ?></td>
                                        <td><?= h($articlesSorttrendings->city_id) ?></td>
                                        <td><?= h($articlesSorttrendings->article_id) ?></td>
                                        <td><?= h($articlesSorttrendings->sort_order) ?></td>

                                        <td class="actions">
                                            <?=
                                            $this->Html->link(__('View'), ['controller' => 'ArticlesSorttrendings', 'action' => 'view', $articlesSorttrendings->id], ['class' => 'btn btn-default']) ?>

                <?= $this->Html->link('<i class="fa fa-edit"></i>', ['controller' => 'ArticlesSorttrendings', 'action' => 'edit', $articlesSorttrendings->id], ['class' => 'btn btn-default', 'escape' => false]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'ArticlesSorttrendings', 'action' => 'delete', $articlesSorttrendings->id], ['confirm' => __('Are you sure you want to delete # {0}?', $articlesSorttrendings->id), 'class' => 'btn btn-danger']) ?>

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
                                <h3 class="box-title"><?= __('Related Markets') ?></h3>
                            </div>
                            <div class="box-body table-responsive no-padding">
                                <?php if (!empty($city->markets)): ?>
                                <table cellpadding="0" cellspacing="0" class="table table-striped table-responsive table-hover">
                                    <tr>
                                                                                <th><?= __('Id') ?></th>
                                                                                <th><?= __('City Id') ?></th>
                                                                                <th><?= __('Market Name') ?></th>
                                                                                <th><?= __('Created') ?></th>
                                                                                <th><?= __('Modified') ?></th>
                                                                                <th class="actions"><?= __('Actions') ?></th>
                                    </tr>
                                    <?php foreach ($city->markets as $markets): ?>
                                    <tr>
                                        <td><?= h($markets->id) ?></td>
                                        <td><?= h($markets->city_id) ?></td>
                                        <td><?= h($markets->market_name) ?></td>
                                        <td><?= h($markets->created) ?></td>
                                        <td><?= h($markets->modified) ?></td>

                                        <td class="actions">
                                            <?=
                                            $this->Html->link(__('View'), ['controller' => 'Markets', 'action' => 'view', $markets->id], ['class' => 'btn btn-default']) ?>

                <?= $this->Html->link('<i class="fa fa-edit"></i>', ['controller' => 'Markets', 'action' => 'edit', $markets->id], ['class' => 'btn btn-default', 'escape' => false]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Markets', 'action' => 'delete', $markets->id], ['confirm' => __('Are you sure you want to delete # {0}?', $markets->id), 'class' => 'btn btn-danger']) ?>

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
                                <h3 class="box-title"><?= __('Related SaleTownMarkets') ?></h3>
                            </div>
                            <div class="box-body table-responsive no-padding">
                                <?php if (!empty($city->sale_town_markets)): ?>
                                <table cellpadding="0" cellspacing="0" class="table table-striped table-responsive table-hover">
                                    <tr>
                                                                                <th><?= __('Id') ?></th>
                                                                                <th><?= __('City Id') ?></th>
                                                                                <th><?= __('Market Id') ?></th>
                                                                                <th><?= __('Cover Photo') ?></th>
                                                                                <th><?= __('Created Date') ?></th>
                                                                                <th><?= __('Modified Date') ?></th>
                                                                                <th><?= __('Status') ?></th>
                                                                                <th class="actions"><?= __('Actions') ?></th>
                                    </tr>
                                    <?php foreach ($city->sale_town_markets as $saleTownMarkets): ?>
                                    <tr>
                                        <td><?= h($saleTownMarkets->id) ?></td>
                                        <td><?= h($saleTownMarkets->city_id) ?></td>
                                        <td><?= h($saleTownMarkets->market_id) ?></td>
                                        <td><?= h($saleTownMarkets->cover_photo) ?></td>
                                        <td><?= h($saleTownMarkets->created_date) ?></td>
                                        <td><?= h($saleTownMarkets->modified_date) ?></td>
                                        <td><?= h($saleTownMarkets->status) ?></td>

                                        <td class="actions">
                                            <?=
                                            $this->Html->link(__('View'), ['controller' => 'SaleTownMarkets', 'action' => 'view', $saleTownMarkets->id], ['class' => 'btn btn-default']) ?>

                <?= $this->Html->link('<i class="fa fa-edit"></i>', ['controller' => 'SaleTownMarkets', 'action' => 'edit', $saleTownMarkets->id], ['class' => 'btn btn-default', 'escape' => false]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'SaleTownMarkets', 'action' => 'delete', $saleTownMarkets->id], ['confirm' => __('Are you sure you want to delete # {0}?', $saleTownMarkets->id), 'class' => 'btn btn-danger']) ?>

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
                                <h3 class="box-title"><?= __('Related SaleTownStores') ?></h3>
                            </div>
                            <div class="box-body table-responsive no-padding">
                                <?php if (!empty($city->sale_town_stores)): ?>
                                <table cellpadding="0" cellspacing="0" class="table table-striped table-responsive table-hover">
                                    <tr>
                                                                                <th><?= __('Id') ?></th>
                                                                                <th><?= __('City Id') ?></th>
                                                                                <th><?= __('Store Id') ?></th>
                                                                                <th><?= __('Store Name') ?></th>
                                                                                <th><?= __('Store Slug') ?></th>
                                                                                <th><?= __('Cover Photo') ?></th>
                                                                                <th><?= __('Created Date') ?></th>
                                                                                <th><?= __('Modified Date') ?></th>
                                                                                <th><?= __('Status') ?></th>
                                                                                <th class="actions"><?= __('Actions') ?></th>
                                    </tr>
                                    <?php foreach ($city->sale_town_stores as $saleTownStores): ?>
                                    <tr>
                                        <td><?= h($saleTownStores->id) ?></td>
                                        <td><?= h($saleTownStores->city_id) ?></td>
                                        <td><?= h($saleTownStores->store_id) ?></td>
                                        <td><?= h($saleTownStores->store_name) ?></td>
                                        <td><?= h($saleTownStores->store_slug) ?></td>
                                        <td><?= h($saleTownStores->cover_photo) ?></td>
                                        <td><?= h($saleTownStores->created_date) ?></td>
                                        <td><?= h($saleTownStores->modified_date) ?></td>
                                        <td><?= h($saleTownStores->status) ?></td>

                                        <td class="actions">
                                            <?=
                                            $this->Html->link(__('View'), ['controller' => 'SaleTownStores', 'action' => 'view', $saleTownStores->id], ['class' => 'btn btn-default']) ?>

                <?= $this->Html->link('<i class="fa fa-edit"></i>', ['controller' => 'SaleTownStores', 'action' => 'edit', $saleTownStores->id], ['class' => 'btn btn-default', 'escape' => false]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'SaleTownStores', 'action' => 'delete', $saleTownStores->id], ['confirm' => __('Are you sure you want to delete # {0}?', $saleTownStores->id), 'class' => 'btn btn-danger']) ?>

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
                                <h3 class="box-title"><?= __('Related Stores') ?></h3>
                            </div>
                            <div class="box-body table-responsive no-padding">
                                <?php if (!empty($city->stores)): ?>
                                <table cellpadding="0" cellspacing="0" class="table table-striped table-responsive table-hover">
                                    <tr>
                                                                                <th><?= __('Id') ?></th>
                                                                                <th><?= __('Store Name') ?></th>
                                                                                <th><?= __('City Id') ?></th>
                                                                                <th><?= __('Slug') ?></th>
                                                                                <th><?= __('Store Address') ?></th>
                                                                                <th><?= __('Area') ?></th>
                                                                                <th><?= __('Market') ?></th>
                                                                                <th><?= __('City') ?></th>
                                                                                <th><?= __('Pin Code') ?></th>
                                                                                <th><?= __('Reference No') ?></th>
                                                                                <th><?= __('Store Timing From') ?></th>
                                                                                <th><?= __('Store Timing To') ?></th>
                                                                                <th><?= __('Metro Longitude') ?></th>
                                                                                <th><?= __('Metro Latitude') ?></th>
                                                                                <th><?= __('Store Type') ?></th>
                                                                                <th><?= __('Latitude') ?></th>
                                                                                <th><?= __('Longitude') ?></th>
                                                                                <th><?= __('Closed Day') ?></th>
                                                                                <th><?= __('Ads Type') ?></th>
                                                                                <th><?= __('Payment Mode') ?></th>
                                                                                <th><?= __('Telephone') ?></th>
                                                                                <th><?= __('Parking Type') ?></th>
                                                                                <th><?= __('Store Email Address') ?></th>
                                                                                <th><?= __('Website') ?></th>
                                                                                <th><?= __('Facebook Link') ?></th>
                                                                                <th><?= __('Twitter Link') ?></th>
                                                                                <th><?= __('Tags') ?></th>
                                                                                <th><?= __('Age From') ?></th>
                                                                                <th><?= __('Age To') ?></th>
                                                                                <th><?= __('Alteration Possible') ?></th>
                                                                                <th><?= __('Renting Possible') ?></th>
                                                                                <th><?= __('Store Representative Name') ?></th>
                                                                                <th><?= __('Data Collected By') ?></th>
                                                                                <th><?= __('Is Active') ?></th>
                                                                                <th><?= __('Is Trending') ?></th>
                                                                                <th><?= __('Trending Image Name') ?></th>
                                                                                <th><?= __('User Favourite Count') ?></th>
                                                                                <th><?= __('User Checkin Count') ?></th>
                                                                                <th><?= __('Store Rating Count') ?></th>
                                                                                <th><?= __('Store Review Count') ?></th>
                                                                                <th><?= __('Overall Ratings') ?></th>
                                                                                <th><?= __('Tagged Count') ?></th>
                                                                                <th><?= __('Google Plus Link') ?></th>
                                                                                <th><?= __('Instagram Link') ?></th>
                                                                                <th><?= __('Linkedin Link') ?></th>
                                                                                <th><?= __('Youtube Link') ?></th>
                                                                                <th><?= __('Any Other Link') ?></th>
                                                                                <th><?= __('Brand Id') ?></th>
                                                                                <th><?= __('Date Of Data Collection') ?></th>
                                                                                <th><?= __('Data Validated By') ?></th>
                                                                                <th><?= __('Data Collection Method') ?></th>
                                                                                <th><?= __('Comments') ?></th>
                                                                                <th><?= __('Timestamp') ?></th>
                                                                                <th class="actions"><?= __('Actions') ?></th>
                                    </tr>
                                    <?php foreach ($city->stores as $stores): ?>
                                    <tr>
                                        <td><?= h($stores->id) ?></td>
                                        <td><?= h($stores->store_name) ?></td>
                                        <td><?= h($stores->city_id) ?></td>
                                        <td><?= h($stores->slug) ?></td>
                                        <td><?= h($stores->store_address) ?></td>
                                        <td><?= h($stores->area) ?></td>
                                        <td><?= h($stores->market) ?></td>
                                        <td><?= h($stores->city) ?></td>
                                        <td><?= h($stores->pin_code) ?></td>
                                        <td><?= h($stores->reference_no) ?></td>
                                        <td><?= h($stores->store_timing_from) ?></td>
                                        <td><?= h($stores->store_timing_to) ?></td>
                                        <td><?= h($stores->metro_longitude) ?></td>
                                        <td><?= h($stores->metro_latitude) ?></td>
                                        <td><?= h($stores->store_type) ?></td>
                                        <td><?= h($stores->latitude) ?></td>
                                        <td><?= h($stores->longitude) ?></td>
                                        <td><?= h($stores->closed_day) ?></td>
                                        <td><?= h($stores->ads_type) ?></td>
                                        <td><?= h($stores->payment_mode) ?></td>
                                        <td><?= h($stores->telephone) ?></td>
                                        <td><?= h($stores->parking_type) ?></td>
                                        <td><?= h($stores->store_email_address) ?></td>
                                        <td><?= h($stores->website) ?></td>
                                        <td><?= h($stores->facebook_link) ?></td>
                                        <td><?= h($stores->twitter_link) ?></td>
                                        <td><?= h($stores->tags) ?></td>
                                        <td><?= h($stores->age_from) ?></td>
                                        <td><?= h($stores->age_to) ?></td>
                                        <td><?= h($stores->alteration_possible) ?></td>
                                        <td><?= h($stores->renting_possible) ?></td>
                                        <td><?= h($stores->store_representative_name) ?></td>
                                        <td><?= h($stores->data_collected_by) ?></td>
                                        <td><?= h($stores->is_active) ?></td>
                                        <td><?= h($stores->is_trending) ?></td>
                                        <td><?= h($stores->trending_image_name) ?></td>
                                        <td><?= h($stores->user_favourite_count) ?></td>
                                        <td><?= h($stores->user_checkin_count) ?></td>
                                        <td><?= h($stores->store_rating_count) ?></td>
                                        <td><?= h($stores->store_review_count) ?></td>
                                        <td><?= h($stores->overall_ratings) ?></td>
                                        <td><?= h($stores->tagged_count) ?></td>
                                        <td><?= h($stores->google_plus_link) ?></td>
                                        <td><?= h($stores->instagram_link) ?></td>
                                        <td><?= h($stores->linkedin_link) ?></td>
                                        <td><?= h($stores->youtube_link) ?></td>
                                        <td><?= h($stores->any_other_link) ?></td>
                                        <td><?= h($stores->brand_id) ?></td>
                                        <td><?= h($stores->date_of_data_collection) ?></td>
                                        <td><?= h($stores->data_validated_by) ?></td>
                                        <td><?= h($stores->data_collection_method) ?></td>
                                        <td><?= h($stores->comments) ?></td>
                                        <td><?= h($stores->timestamp) ?></td>

                                        <td class="actions">
                                            <?=
                                            $this->Html->link(__('View'), ['controller' => 'Stores', 'action' => 'view', $stores->id], ['class' => 'btn btn-default']) ?>

                <?= $this->Html->link('<i class="fa fa-edit"></i>', ['controller' => 'Stores', 'action' => 'edit', $stores->id], ['class' => 'btn btn-default', 'escape' => false]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Stores', 'action' => 'delete', $stores->id], ['confirm' => __('Are you sure you want to delete # {0}?', $stores->id), 'class' => 'btn btn-danger']) ?>

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
                                <h3 class="box-title"><?= __('Related Synonyms') ?></h3>
                            </div>
                            <div class="box-body table-responsive no-padding">
                                <?php if (!empty($city->synonyms)): ?>
                                <table cellpadding="0" cellspacing="0" class="table table-striped table-responsive table-hover">
                                    <tr>
                                                                                <th><?= __('Id') ?></th>
                                                                                <th><?= __('City Id') ?></th>
                                                                                <th><?= __('Synonym Name') ?></th>
                                                                                <th class="actions"><?= __('Actions') ?></th>
                                    </tr>
                                    <?php foreach ($city->synonyms as $synonyms): ?>
                                    <tr>
                                        <td><?= h($synonyms->id) ?></td>
                                        <td><?= h($synonyms->city_id) ?></td>
                                        <td><?= h($synonyms->synonym_name) ?></td>

                                        <td class="actions">
                                            <?=
                                            $this->Html->link(__('View'), ['controller' => 'Synonyms', 'action' => 'view', $synonyms->id], ['class' => 'btn btn-default']) ?>

                <?= $this->Html->link('<i class="fa fa-edit"></i>', ['controller' => 'Synonyms', 'action' => 'edit', $synonyms->id], ['class' => 'btn btn-default', 'escape' => false]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Synonyms', 'action' => 'delete', $synonyms->id], ['confirm' => __('Are you sure you want to delete # {0}?', $synonyms->id), 'class' => 'btn btn-danger']) ?>

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
                                <h3 class="box-title"><?= __('Related Trends') ?></h3>
                            </div>
                            <div class="box-body table-responsive no-padding">
                                <?php if (!empty($city->trends)): ?>
                                <table cellpadding="0" cellspacing="0" class="table table-striped table-responsive table-hover">
                                    <tr>
                                                                                <th><?= __('Id') ?></th>
                                                                                <th><?= __('Trend Name') ?></th>
                                                                                <th><?= __('Created') ?></th>
                                                                                <th><?= __('Modified') ?></th>
                                                                                <th><?= __('City Id') ?></th>
                                                                                <th class="actions"><?= __('Actions') ?></th>
                                    </tr>
                                    <?php foreach ($city->trends as $trends): ?>
                                    <tr>
                                        <td><?= h($trends->id) ?></td>
                                        <td><?= h($trends->trend_name) ?></td>
                                        <td><?= h($trends->created) ?></td>
                                        <td><?= h($trends->modified) ?></td>
                                        <td><?= h($trends->city_id) ?></td>

                                        <td class="actions">
                                            <?=
                                            $this->Html->link(__('View'), ['controller' => 'Trends', 'action' => 'view', $trends->id], ['class' => 'btn btn-default']) ?>

                <?= $this->Html->link('<i class="fa fa-edit"></i>', ['controller' => 'Trends', 'action' => 'edit', $trends->id], ['class' => 'btn btn-default', 'escape' => false]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Trends', 'action' => 'delete', $trends->id], ['confirm' => __('Are you sure you want to delete # {0}?', $trends->id), 'class' => 'btn btn-danger']) ?>

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
            <li class="btn btn-default"><?= $this->Html->link(__('Edit City'), ['action' => 'edit', $city->id]) ?> </li>
            <li class="btn btn-danger"><?= $this->Form->postLink(__('Delete City'), ['action' => 'delete', $city->id], ['confirm' => __('Are you sure you want to delete # {0}?', $city->id)]) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('List Cities'), ['action' => 'index']) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('New City'), ['action' => 'add']) ?> </li>
                        <li class="btn btn-default"><?= $this->Html->link(__('List Articles'), ['controller' => 'Articles', 'action' => 'index']) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('New Article'), ['controller' => 'Articles', 'action' => 'add']) ?> </li>
                        <li class="btn btn-default"><?= $this->Html->link(__('List Articles Sorttrendings'), ['controller' => 'ArticlesSorttrendings', 'action' => 'index']) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('New Articles Sorttrending'), ['controller' => 'ArticlesSorttrendings', 'action' => 'add']) ?> </li>
                        <li class="btn btn-default"><?= $this->Html->link(__('List Markets'), ['controller' => 'Markets', 'action' => 'index']) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('New Market'), ['controller' => 'Markets', 'action' => 'add']) ?> </li>
                        <li class="btn btn-default"><?= $this->Html->link(__('List Sale Town Markets'), ['controller' => 'SaleTownMarkets', 'action' => 'index']) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('New Sale Town Market'), ['controller' => 'SaleTownMarkets', 'action' => 'add']) ?> </li>
                        <li class="btn btn-default"><?= $this->Html->link(__('List Sale Town Stores'), ['controller' => 'SaleTownStores', 'action' => 'index']) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('New Sale Town Store'), ['controller' => 'SaleTownStores', 'action' => 'add']) ?> </li>
                        <li class="btn btn-default"><?= $this->Html->link(__('List Stores'), ['controller' => 'Stores', 'action' => 'index']) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('New Store'), ['controller' => 'Stores', 'action' => 'add']) ?> </li>
                        <li class="btn btn-default"><?= $this->Html->link(__('List Synonyms'), ['controller' => 'Synonyms', 'action' => 'index']) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('New Synonym'), ['controller' => 'Synonyms', 'action' => 'add']) ?> </li>
                        <li class="btn btn-default"><?= $this->Html->link(__('List Trends'), ['controller' => 'Trends', 'action' => 'index']) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('New Trend'), ['controller' => 'Trends', 'action' => 'add']) ?> </li>
                    </ul>
    </div>

</div>


