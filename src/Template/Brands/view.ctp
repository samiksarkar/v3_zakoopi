<div class="row">
    <div class="col-lg-10">
        <div class="box">
            <div class="box-body">
                <div class="brands view large-10 medium-9 columns">
                    <h2><?= h($brand->id) ?></h2>
                    <div class="row">
                                                <div class="col-lg-12">
                                                                                    <b class="subheader"><?= __('Brand Name') ?></b>
                            <p><?= h($brand->brand_name) ?></p>
                                                                                                                <b class="subheader"><?= __('Logo Path') ?></b>
                            <p><?= h($brand->logo_path) ?></p>
                                                                                                                <b class="subheader"><?= __('Status') ?></b>
                            <p><?= h($brand->status) ?></p>
                                                                                </div>
                                                                        <div class="col-lg-12">
                                                        <b class="subheader"><?= __('Id') ?></b>
                            <p><?= $this->Number->format($brand->id) ?></p>
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
                                <?php if (!empty($brand->stores)): ?>
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
                                    <?php foreach ($brand->stores as $stores): ?>
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
            </div>
    <div class="col-lg-2">
        <ul class="btn-group-vertical">
            <li class="btn btn-default"><?= $this->Html->link(__('Edit Brand'), ['action' => 'edit', $brand->id]) ?> </li>
            <li class="btn btn-danger"><?= $this->Form->postLink(__('Delete Brand'), ['action' => 'delete', $brand->id], ['confirm' => __('Are you sure you want to delete # {0}?', $brand->id)]) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('List Brands'), ['action' => 'index']) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('New Brand'), ['action' => 'add']) ?> </li>
                        <li class="btn btn-default"><?= $this->Html->link(__('List Stores'), ['controller' => 'Stores', 'action' => 'index']) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('New Store'), ['controller' => 'Stores', 'action' => 'add']) ?> </li>
                    </ul>
    </div>

</div>


