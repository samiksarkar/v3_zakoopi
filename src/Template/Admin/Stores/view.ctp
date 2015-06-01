<div class="row">
    <div class="col-lg-10">
        <div class="box">
            <div class="box-body">
                <div class="stores view large-10 medium-9 columns">
                    <h2><?= h($store->id) ?></h2>
                    <div class="row">
                                                <div class="col-lg-12">
                                                                                    <h6 class="subheader"><?= __('City') ?></h6>
                            <p><?= $store->has('city') ? $this->Html->link($store->city->id, ['controller' => 'Cities', 'action' => 'view', $store->city->id]) : '' ?></p>
                                                                                                                <b class="subheader"><?= __('Slug') ?></b>
                            <p><?= h($store->slug) ?></p>
                                                                                                                <b class="subheader"><?= __('Area') ?></b>
                            <p><?= h($store->area) ?></p>
                                                                                                                <b class="subheader"><?= __('Market') ?></b>
                            <p><?= h($store->market) ?></p>
                                                                                                                <b class="subheader"><?= __('City') ?></b>
                            <p><?= h($store->city) ?></p>
                                                                                                                <b class="subheader"><?= __('Reference No') ?></b>
                            <p><?= h($store->reference_no) ?></p>
                                                                                                                <b class="subheader"><?= __('Store Timing From') ?></b>
                            <p><?= h($store->store_timing_from) ?></p>
                                                                                                                <b class="subheader"><?= __('Store Timing To') ?></b>
                            <p><?= h($store->store_timing_to) ?></p>
                                                                                                                <b class="subheader"><?= __('Store Type') ?></b>
                            <p><?= h($store->store_type) ?></p>
                                                                                                                <b class="subheader"><?= __('Closed Day') ?></b>
                            <p><?= h($store->closed_day) ?></p>
                                                                                                                <b class="subheader"><?= __('Ads Type') ?></b>
                            <p><?= h($store->ads_type) ?></p>
                                                                                                                <b class="subheader"><?= __('Payment Mode') ?></b>
                            <p><?= h($store->payment_mode) ?></p>
                                                                                                                <b class="subheader"><?= __('Telephone') ?></b>
                            <p><?= h($store->telephone) ?></p>
                                                                                                                <b class="subheader"><?= __('Store Email Address') ?></b>
                            <p><?= h($store->store_email_address) ?></p>
                                                                                                                <b class="subheader"><?= __('Website') ?></b>
                            <p><?= h($store->website) ?></p>
                                                                                                                <b class="subheader"><?= __('Facebook Link') ?></b>
                            <p><?= h($store->facebook_link) ?></p>
                                                                                                                <b class="subheader"><?= __('Twitter Link') ?></b>
                            <p><?= h($store->twitter_link) ?></p>
                                                                                                                <b class="subheader"><?= __('Store Representative Name') ?></b>
                            <p><?= h($store->store_representative_name) ?></p>
                                                                                                                <b class="subheader"><?= __('Data Collected By') ?></b>
                            <p><?= h($store->data_collected_by) ?></p>
                                                                                                                <b class="subheader"><?= __('Trending Image Name') ?></b>
                            <p><?= h($store->trending_image_name) ?></p>
                                                                                                                <b class="subheader"><?= __('Google Plus Link') ?></b>
                            <p><?= h($store->google_plus_link) ?></p>
                                                                                                                <b class="subheader"><?= __('Instagram Link') ?></b>
                            <p><?= h($store->instagram_link) ?></p>
                                                                                                                <b class="subheader"><?= __('Linkedin Link') ?></b>
                            <p><?= h($store->linkedin_link) ?></p>
                                                                                                                <b class="subheader"><?= __('Youtube Link') ?></b>
                            <p><?= h($store->youtube_link) ?></p>
                                                                                                                <b class="subheader"><?= __('Any Other Link') ?></b>
                            <p><?= h($store->any_other_link) ?></p>
                                                                                                                <h6 class="subheader"><?= __('Brand') ?></h6>
                            <p><?= $store->has('brand') ? $this->Html->link($store->brand->id, ['controller' => 'Brands', 'action' => 'view', $store->brand->id]) : '' ?></p>
                                                                                                                <b class="subheader"><?= __('Date Of Data Collection') ?></b>
                            <p><?= h($store->date_of_data_collection) ?></p>
                                                                                                                <b class="subheader"><?= __('Data Validated By') ?></b>
                            <p><?= h($store->data_validated_by) ?></p>
                                                                                                                <b class="subheader"><?= __('Data Collection Method') ?></b>
                            <p><?= h($store->data_collection_method) ?></p>
                                                                                                                <b class="subheader"><?= __('Timestamp') ?></b>
                            <p><?= h($store->timestamp) ?></p>
                                                                                </div>
                                                                        <div class="col-lg-12">
                                                        <b class="subheader"><?= __('Id') ?></b>
                            <p><?= $this->Number->format($store->id) ?></p>
                                                        <b class="subheader"><?= __('Pin Code') ?></b>
                            <p><?= $this->Number->format($store->pin_code) ?></p>
                                                        <b class="subheader"><?= __('Metro Longitude') ?></b>
                            <p><?= $this->Number->format($store->metro_longitude) ?></p>
                                                        <b class="subheader"><?= __('Metro Latitude') ?></b>
                            <p><?= $this->Number->format($store->metro_latitude) ?></p>
                                                        <b class="subheader"><?= __('Latitude') ?></b>
                            <p><?= $this->Number->format($store->latitude) ?></p>
                                                        <b class="subheader"><?= __('Longitude') ?></b>
                            <p><?= $this->Number->format($store->longitude) ?></p>
                                                        <b class="subheader"><?= __('Age From') ?></b>
                            <p><?= $this->Number->format($store->age_from) ?></p>
                                                        <b class="subheader"><?= __('Age To') ?></b>
                            <p><?= $this->Number->format($store->age_to) ?></p>
                                                        <b class="subheader"><?= __('Is Active') ?></b>
                            <p><?= $this->Number->format($store->is_active) ?></p>
                                                        <b class="subheader"><?= __('Is Trending') ?></b>
                            <p><?= $this->Number->format($store->is_trending) ?></p>
                                                        <b class="subheader"><?= __('User Favourite Count') ?></b>
                            <p><?= $this->Number->format($store->user_favourite_count) ?></p>
                                                        <b class="subheader"><?= __('User Checkin Count') ?></b>
                            <p><?= $this->Number->format($store->user_checkin_count) ?></p>
                                                        <b class="subheader"><?= __('Store Rating Count') ?></b>
                            <p><?= $this->Number->format($store->store_rating_count) ?></p>
                                                        <b class="subheader"><?= __('Store Review Count') ?></b>
                            <p><?= $this->Number->format($store->store_review_count) ?></p>
                                                        <b class="subheader"><?= __('Overall Ratings') ?></b>
                            <p><?= $this->Number->format($store->overall_ratings) ?></p>
                                                        <b class="subheader"><?= __('Tagged Count') ?></b>
                            <p><?= $this->Number->format($store->tagged_count) ?></p>
                                                    </div>
                                                                                                <div class="col-lg-12">
                                                        <b class="subheader"><?= __('Alteration Possible') ?></b>
                            <p><?= $store->alteration_possible ? __('Yes') : __('No'); ?></p>
                                                        <b class="subheader"><?= __('Renting Possible') ?></b>
                            <p><?= $store->renting_possible ? __('Yes') : __('No'); ?></p>
                                                    </div>
                                            </div>
                                                            <div class="row texts">
                        <div class="col-lg-12">
                            <b class="subheader"><?= __('Store Name') ?></b>
                            <?= $this->Text->autoParagraph(h($store->store_name)); ?>

                        </div>
                    </div>
                                        <div class="row texts">
                        <div class="col-lg-12">
                            <b class="subheader"><?= __('Store Address') ?></b>
                            <?= $this->Text->autoParagraph(h($store->store_address)); ?>

                        </div>
                    </div>
                                        <div class="row texts">
                        <div class="col-lg-12">
                            <b class="subheader"><?= __('Parking Type') ?></b>
                            <?= $this->Text->autoParagraph(h($store->parking_type)); ?>

                        </div>
                    </div>
                                        <div class="row texts">
                        <div class="col-lg-12">
                            <b class="subheader"><?= __('Tags') ?></b>
                            <?= $this->Text->autoParagraph(h($store->tags)); ?>

                        </div>
                    </div>
                                        <div class="row texts">
                        <div class="col-lg-12">
                            <b class="subheader"><?= __('Comments') ?></b>
                            <?= $this->Text->autoParagraph(h($store->comments)); ?>

                        </div>
                    </div>
                                                        </div>
                                <div class="row">
                    <div class="col-lg-12">
                        <div class="box">
                            <div class="box-header">
                                <h3 class="box-title"><?= __('Related HomepageAds') ?></h3>
                            </div>
                            <div class="box-body table-responsive no-padding">
                                <?php if (!empty($store->homepage_ads)): ?>
                                <table cellpadding="0" cellspacing="0" class="table table-striped table-responsive table-hover">
                                    <tr>
                                                                                <th><?= __('Id') ?></th>
                                                                                <th><?= __('Type') ?></th>
                                                                                <th><?= __('Status') ?></th>
                                                                                <th><?= __('Tagline') ?></th>
                                                                                <th><?= __('Rate Of Ad') ?></th>
                                                                                <th><?= __('Redirectto') ?></th>
                                                                                <th><?= __('Store Id') ?></th>
                                                                                <th><?= __('Keywords') ?></th>
                                                                                <th><?= __('Image') ?></th>
                                                                                <th class="actions"><?= __('Actions') ?></th>
                                    </tr>
                                    <?php foreach ($store->homepage_ads as $homepageAds): ?>
                                    <tr>
                                        <td><?= h($homepageAds->id) ?></td>
                                        <td><?= h($homepageAds->type) ?></td>
                                        <td><?= h($homepageAds->status) ?></td>
                                        <td><?= h($homepageAds->tagline) ?></td>
                                        <td><?= h($homepageAds->rate_of_ad) ?></td>
                                        <td><?= h($homepageAds->redirectto) ?></td>
                                        <td><?= h($homepageAds->store_id) ?></td>
                                        <td><?= h($homepageAds->keywords) ?></td>
                                        <td><?= h($homepageAds->image) ?></td>

                                        <td class="actions">
                                            <?=
                                            $this->Html->link(__('View'), ['controller' => 'HomepageAds', 'action' => 'view', $homepageAds->id], ['class' => 'btn btn-default']) ?>

                <?= $this->Html->link('<i class="fa fa-edit"></i>', ['controller' => 'HomepageAds', 'action' => 'edit', $homepageAds->id], ['class' => 'btn btn-default', 'escape' => false]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'HomepageAds', 'action' => 'delete', $homepageAds->id], ['confirm' => __('Are you sure you want to delete # {0}?', $homepageAds->id), 'class' => 'btn btn-danger']) ?>

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
                                <?php if (!empty($store->report_errors)): ?>
                                <table cellpadding="0" cellspacing="0" class="table table-striped table-responsive table-hover">
                                    <tr>
                                                                                <th><?= __('Id') ?></th>
                                                                                <th><?= __('Store Id') ?></th>
                                                                                <th><?= __('User Id') ?></th>
                                                                                <th><?= __('Error Subject') ?></th>
                                                                                <th><?= __('Error Msg') ?></th>
                                                                                <th class="actions"><?= __('Actions') ?></th>
                                    </tr>
                                    <?php foreach ($store->report_errors as $reportErrors): ?>
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
                                <h3 class="box-title"><?= __('Related SaleHotDeals') ?></h3>
                            </div>
                            <div class="box-body table-responsive no-padding">
                                <?php if (!empty($store->sale_hot_deals)): ?>
                                <table cellpadding="0" cellspacing="0" class="table table-striped table-responsive table-hover">
                                    <tr>
                                                                                <th><?= __('Id') ?></th>
                                                                                <th><?= __('Store Id') ?></th>
                                                                                <th><?= __('Store Name') ?></th>
                                                                                <th><?= __('Sale Amount') ?></th>
                                                                                <th><?= __('Sale Description') ?></th>
                                                                                <th><?= __('Cover Photo') ?></th>
                                                                                <th><?= __('Voucher Photo') ?></th>
                                                                                <th><?= __('Created Date') ?></th>
                                                                                <th><?= __('Modified Date') ?></th>
                                                                                <th><?= __('Status') ?></th>
                                                                                <th><?= __('Voucher Count') ?></th>
                                                                                <th class="actions"><?= __('Actions') ?></th>
                                    </tr>
                                    <?php foreach ($store->sale_hot_deals as $saleHotDeals): ?>
                                    <tr>
                                        <td><?= h($saleHotDeals->id) ?></td>
                                        <td><?= h($saleHotDeals->store_id) ?></td>
                                        <td><?= h($saleHotDeals->store_name) ?></td>
                                        <td><?= h($saleHotDeals->sale_amount) ?></td>
                                        <td><?= h($saleHotDeals->sale_description) ?></td>
                                        <td><?= h($saleHotDeals->cover_photo) ?></td>
                                        <td><?= h($saleHotDeals->voucher_photo) ?></td>
                                        <td><?= h($saleHotDeals->created_date) ?></td>
                                        <td><?= h($saleHotDeals->modified_date) ?></td>
                                        <td><?= h($saleHotDeals->status) ?></td>
                                        <td><?= h($saleHotDeals->voucher_count) ?></td>

                                        <td class="actions">
                                            <?=
                                            $this->Html->link(__('View'), ['controller' => 'SaleHotDeals', 'action' => 'view', $saleHotDeals->id], ['class' => 'btn btn-default']) ?>

                <?= $this->Html->link('<i class="fa fa-edit"></i>', ['controller' => 'SaleHotDeals', 'action' => 'edit', $saleHotDeals->id], ['class' => 'btn btn-default', 'escape' => false]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'SaleHotDeals', 'action' => 'delete', $saleHotDeals->id], ['confirm' => __('Are you sure you want to delete # {0}?', $saleHotDeals->id), 'class' => 'btn btn-danger']) ?>

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
                                <h3 class="box-title"><?= __('Related SaleTownDeals') ?></h3>
                            </div>
                            <div class="box-body table-responsive no-padding">
                                <?php if (!empty($store->sale_town_deals)): ?>
                                <table cellpadding="0" cellspacing="0" class="table table-striped table-responsive table-hover">
                                    <tr>
                                                                                <th><?= __('Id') ?></th>
                                                                                <th><?= __('Store Id') ?></th>
                                                                                <th><?= __('Market Name') ?></th>
                                                                                <th><?= __('Punch One') ?></th>
                                                                                <th><?= __('Punch Two') ?></th>
                                                                                <th><?= __('Store Cover') ?></th>
                                                                                <th><?= __('Conditions') ?></th>
                                                                                <th><?= __('Deal Date') ?></th>
                                                                                <th><?= __('Created Date') ?></th>
                                                                                <th><?= __('Modified Date') ?></th>
                                                                                <th><?= __('Status') ?></th>
                                                                                <th class="actions"><?= __('Actions') ?></th>
                                    </tr>
                                    <?php foreach ($store->sale_town_deals as $saleTownDeals): ?>
                                    <tr>
                                        <td><?= h($saleTownDeals->id) ?></td>
                                        <td><?= h($saleTownDeals->store_id) ?></td>
                                        <td><?= h($saleTownDeals->market_name) ?></td>
                                        <td><?= h($saleTownDeals->punch_one) ?></td>
                                        <td><?= h($saleTownDeals->punch_two) ?></td>
                                        <td><?= h($saleTownDeals->store_cover) ?></td>
                                        <td><?= h($saleTownDeals->conditions) ?></td>
                                        <td><?= h($saleTownDeals->deal_date) ?></td>
                                        <td><?= h($saleTownDeals->created_date) ?></td>
                                        <td><?= h($saleTownDeals->modified_date) ?></td>
                                        <td><?= h($saleTownDeals->status) ?></td>

                                        <td class="actions">
                                            <?=
                                            $this->Html->link(__('View'), ['controller' => 'SaleTownDeals', 'action' => 'view', $saleTownDeals->id], ['class' => 'btn btn-default']) ?>

                <?= $this->Html->link('<i class="fa fa-edit"></i>', ['controller' => 'SaleTownDeals', 'action' => 'edit', $saleTownDeals->id], ['class' => 'btn btn-default', 'escape' => false]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'SaleTownDeals', 'action' => 'delete', $saleTownDeals->id], ['confirm' => __('Are you sure you want to delete # {0}?', $saleTownDeals->id), 'class' => 'btn btn-danger']) ?>

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
                                <h3 class="box-title"><?= __('Related SearchAds') ?></h3>
                            </div>
                            <div class="box-body table-responsive no-padding">
                                <?php if (!empty($store->search_ads)): ?>
                                <table cellpadding="0" cellspacing="0" class="table table-striped table-responsive table-hover">
                                    <tr>
                                                                                <th><?= __('Id') ?></th>
                                                                                <th><?= __('Type') ?></th>
                                                                                <th><?= __('Status') ?></th>
                                                                                <th><?= __('Tagline') ?></th>
                                                                                <th><?= __('Rate Of Ad') ?></th>
                                                                                <th><?= __('Redirectto') ?></th>
                                                                                <th><?= __('Store Id') ?></th>
                                                                                <th><?= __('Keywords') ?></th>
                                                                                <th><?= __('Image') ?></th>
                                                                                <th class="actions"><?= __('Actions') ?></th>
                                    </tr>
                                    <?php foreach ($store->search_ads as $searchAds): ?>
                                    <tr>
                                        <td><?= h($searchAds->id) ?></td>
                                        <td><?= h($searchAds->type) ?></td>
                                        <td><?= h($searchAds->status) ?></td>
                                        <td><?= h($searchAds->tagline) ?></td>
                                        <td><?= h($searchAds->rate_of_ad) ?></td>
                                        <td><?= h($searchAds->redirectto) ?></td>
                                        <td><?= h($searchAds->store_id) ?></td>
                                        <td><?= h($searchAds->keywords) ?></td>
                                        <td><?= h($searchAds->image) ?></td>

                                        <td class="actions">
                                            <?=
                                            $this->Html->link(__('View'), ['controller' => 'SearchAds', 'action' => 'view', $searchAds->id], ['class' => 'btn btn-default']) ?>

                <?= $this->Html->link('<i class="fa fa-edit"></i>', ['controller' => 'SearchAds', 'action' => 'edit', $searchAds->id], ['class' => 'btn btn-default', 'escape' => false]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'SearchAds', 'action' => 'delete', $searchAds->id], ['confirm' => __('Are you sure you want to delete # {0}?', $searchAds->id), 'class' => 'btn btn-danger']) ?>

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
                                <h3 class="box-title"><?= __('Related StoreAds') ?></h3>
                            </div>
                            <div class="box-body table-responsive no-padding">
                                <?php if (!empty($store->store_ads)): ?>
                                <table cellpadding="0" cellspacing="0" class="table table-striped table-responsive table-hover">
                                    <tr>
                                                                                <th><?= __('Id') ?></th>
                                                                                <th><?= __('Type') ?></th>
                                                                                <th><?= __('Status') ?></th>
                                                                                <th><?= __('Tagline') ?></th>
                                                                                <th><?= __('Rate Of Ad') ?></th>
                                                                                <th><?= __('Redirectto') ?></th>
                                                                                <th><?= __('Store Id') ?></th>
                                                                                <th><?= __('Keywords') ?></th>
                                                                                <th><?= __('Image') ?></th>
                                                                                <th class="actions"><?= __('Actions') ?></th>
                                    </tr>
                                    <?php foreach ($store->store_ads as $storeAds): ?>
                                    <tr>
                                        <td><?= h($storeAds->id) ?></td>
                                        <td><?= h($storeAds->type) ?></td>
                                        <td><?= h($storeAds->status) ?></td>
                                        <td><?= h($storeAds->tagline) ?></td>
                                        <td><?= h($storeAds->rate_of_ad) ?></td>
                                        <td><?= h($storeAds->redirectto) ?></td>
                                        <td><?= h($storeAds->store_id) ?></td>
                                        <td><?= h($storeAds->keywords) ?></td>
                                        <td><?= h($storeAds->image) ?></td>

                                        <td class="actions">
                                            <?=
                                            $this->Html->link(__('View'), ['controller' => 'StoreAds', 'action' => 'view', $storeAds->id], ['class' => 'btn btn-default']) ?>

                <?= $this->Html->link('<i class="fa fa-edit"></i>', ['controller' => 'StoreAds', 'action' => 'edit', $storeAds->id], ['class' => 'btn btn-default', 'escape' => false]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'StoreAds', 'action' => 'delete', $storeAds->id], ['confirm' => __('Are you sure you want to delete # {0}?', $storeAds->id), 'class' => 'btn btn-danger']) ?>

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
                                <h3 class="box-title"><?= __('Related StoreCards') ?></h3>
                            </div>
                            <div class="box-body table-responsive no-padding">
                                <?php if (!empty($store->store_cards)): ?>
                                <table cellpadding="0" cellspacing="0" class="table table-striped table-responsive table-hover">
                                    <tr>
                                                                                <th><?= __('Id') ?></th>
                                                                                <th><?= __('Store Id') ?></th>
                                                                                <th><?= __('Card Id') ?></th>
                                                                                <th class="actions"><?= __('Actions') ?></th>
                                    </tr>
                                    <?php foreach ($store->store_cards as $storeCards): ?>
                                    <tr>
                                        <td><?= h($storeCards->id) ?></td>
                                        <td><?= h($storeCards->store_id) ?></td>
                                        <td><?= h($storeCards->card_id) ?></td>

                                        <td class="actions">
                                            <?=
                                            $this->Html->link(__('View'), ['controller' => 'StoreCards', 'action' => 'view', $storeCards->id], ['class' => 'btn btn-default']) ?>

                <?= $this->Html->link('<i class="fa fa-edit"></i>', ['controller' => 'StoreCards', 'action' => 'edit', $storeCards->id], ['class' => 'btn btn-default', 'escape' => false]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'StoreCards', 'action' => 'delete', $storeCards->id], ['confirm' => __('Are you sure you want to delete # {0}?', $storeCards->id), 'class' => 'btn btn-danger']) ?>

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
                                <h3 class="box-title"><?= __('Related StoreImages') ?></h3>
                            </div>
                            <div class="box-body table-responsive no-padding">
                                <?php if (!empty($store->store_images)): ?>
                                <table cellpadding="0" cellspacing="0" class="table table-striped table-responsive table-hover">
                                    <tr>
                                                                                <th><?= __('Id') ?></th>
                                                                                <th><?= __('Name') ?></th>
                                                                                <th><?= __('Store Id') ?></th>
                                                                                <th><?= __('Desc') ?></th>
                                                                                <th class="actions"><?= __('Actions') ?></th>
                                    </tr>
                                    <?php foreach ($store->store_images as $storeImages): ?>
                                    <tr>
                                        <td><?= h($storeImages->id) ?></td>
                                        <td><?= h($storeImages->name) ?></td>
                                        <td><?= h($storeImages->store_id) ?></td>
                                        <td><?= h($storeImages->desc) ?></td>

                                        <td class="actions">
                                            <?=
                                            $this->Html->link(__('View'), ['controller' => 'StoreImages', 'action' => 'view', $storeImages->id], ['class' => 'btn btn-default']) ?>

                <?= $this->Html->link('<i class="fa fa-edit"></i>', ['controller' => 'StoreImages', 'action' => 'edit', $storeImages->id], ['class' => 'btn btn-default', 'escape' => false]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'StoreImages', 'action' => 'delete', $storeImages->id], ['confirm' => __('Are you sure you want to delete # {0}?', $storeImages->id), 'class' => 'btn btn-danger']) ?>

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
                                <h3 class="box-title"><?= __('Related StoreOfferings') ?></h3>
                            </div>
                            <div class="box-body table-responsive no-padding">
                                <?php if (!empty($store->store_offerings)): ?>
                                <table cellpadding="0" cellspacing="0" class="table table-striped table-responsive table-hover">
                                    <tr>
                                                                                <th><?= __('Id') ?></th>
                                                                                <th><?= __('Store Id') ?></th>
                                                                                <th><?= __('Offering Id') ?></th>
                                                                                <th><?= __('Price Range From') ?></th>
                                                                                <th><?= __('Price Range To') ?></th>
                                                                                <th><?= __('Customization Possible') ?></th>
                                                                                <th><?= __('Customization Days') ?></th>
                                                                                <th class="actions"><?= __('Actions') ?></th>
                                    </tr>
                                    <?php foreach ($store->store_offerings as $storeOfferings): ?>
                                    <tr>
                                        <td><?= h($storeOfferings->id) ?></td>
                                        <td><?= h($storeOfferings->store_id) ?></td>
                                        <td><?= h($storeOfferings->offering_id) ?></td>
                                        <td><?= h($storeOfferings->price_range_from) ?></td>
                                        <td><?= h($storeOfferings->price_range_to) ?></td>
                                        <td><?= h($storeOfferings->customization_possible) ?></td>
                                        <td><?= h($storeOfferings->customization_days) ?></td>

                                        <td class="actions">
                                            <?=
                                            $this->Html->link(__('View'), ['controller' => 'StoreOfferings', 'action' => 'view', $storeOfferings->id], ['class' => 'btn btn-default']) ?>

                <?= $this->Html->link('<i class="fa fa-edit"></i>', ['controller' => 'StoreOfferings', 'action' => 'edit', $storeOfferings->id], ['class' => 'btn btn-default', 'escape' => false]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'StoreOfferings', 'action' => 'delete', $storeOfferings->id], ['confirm' => __('Are you sure you want to delete # {0}?', $storeOfferings->id), 'class' => 'btn btn-danger']) ?>

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
                                <?php if (!empty($store->store_ratings)): ?>
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
                                    <?php foreach ($store->store_ratings as $storeRatings): ?>
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
                                <?php if (!empty($store->store_reviews)): ?>
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
                                    <?php foreach ($store->store_reviews as $storeReviews): ?>
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
                                <?php if (!empty($store->user_checkins)): ?>
                                <table cellpadding="0" cellspacing="0" class="table table-striped table-responsive table-hover">
                                    <tr>
                                                                                <th><?= __('Id') ?></th>
                                                                                <th><?= __('User Id') ?></th>
                                                                                <th><?= __('Store Id') ?></th>
                                                                                <th class="actions"><?= __('Actions') ?></th>
                                    </tr>
                                    <?php foreach ($store->user_checkins as $userCheckins): ?>
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
                                <?php if (!empty($store->user_favourites)): ?>
                                <table cellpadding="0" cellspacing="0" class="table table-striped table-responsive table-hover">
                                    <tr>
                                                                                <th><?= __('Id') ?></th>
                                                                                <th><?= __('User Id') ?></th>
                                                                                <th><?= __('Store Id') ?></th>
                                                                                <th class="actions"><?= __('Actions') ?></th>
                                    </tr>
                                    <?php foreach ($store->user_favourites as $userFavourites): ?>
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
            <li class="btn btn-default"><?= $this->Html->link(__('Edit Store'), ['action' => 'edit', $store->id]) ?> </li>
            <li class="btn btn-danger"><?= $this->Form->postLink(__('Delete Store'), ['action' => 'delete', $store->id], ['confirm' => __('Are you sure you want to delete # {0}?', $store->id)]) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('List Stores'), ['action' => 'index']) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('New Store'), ['action' => 'add']) ?> </li>
                        <li class="btn btn-default"><?= $this->Html->link(__('List Cities'), ['controller' => 'Cities', 'action' => 'index']) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('New City'), ['controller' => 'Cities', 'action' => 'add']) ?> </li>
                        <li class="btn btn-default"><?= $this->Html->link(__('List Brands'), ['controller' => 'Brands', 'action' => 'index']) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('New Brand'), ['controller' => 'Brands', 'action' => 'add']) ?> </li>
                        <li class="btn btn-default"><?= $this->Html->link(__('List Homepage Ads'), ['controller' => 'HomepageAds', 'action' => 'index']) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('New Homepage Ad'), ['controller' => 'HomepageAds', 'action' => 'add']) ?> </li>
                        <li class="btn btn-default"><?= $this->Html->link(__('List Report Errors'), ['controller' => 'ReportErrors', 'action' => 'index']) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('New Report Error'), ['controller' => 'ReportErrors', 'action' => 'add']) ?> </li>
                        <li class="btn btn-default"><?= $this->Html->link(__('List Sale Hot Deals'), ['controller' => 'SaleHotDeals', 'action' => 'index']) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('New Sale Hot Deal'), ['controller' => 'SaleHotDeals', 'action' => 'add']) ?> </li>
                        <li class="btn btn-default"><?= $this->Html->link(__('List Sale Town Deals'), ['controller' => 'SaleTownDeals', 'action' => 'index']) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('New Sale Town Deal'), ['controller' => 'SaleTownDeals', 'action' => 'add']) ?> </li>
                        <li class="btn btn-default"><?= $this->Html->link(__('List Search Ads'), ['controller' => 'SearchAds', 'action' => 'index']) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('New Search Ad'), ['controller' => 'SearchAds', 'action' => 'add']) ?> </li>
                        <li class="btn btn-default"><?= $this->Html->link(__('List Store Ads'), ['controller' => 'StoreAds', 'action' => 'index']) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('New Store Ad'), ['controller' => 'StoreAds', 'action' => 'add']) ?> </li>
                        <li class="btn btn-default"><?= $this->Html->link(__('List Store Cards'), ['controller' => 'StoreCards', 'action' => 'index']) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('New Store Card'), ['controller' => 'StoreCards', 'action' => 'add']) ?> </li>
                        <li class="btn btn-default"><?= $this->Html->link(__('List Store Images'), ['controller' => 'StoreImages', 'action' => 'index']) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('New Store Image'), ['controller' => 'StoreImages', 'action' => 'add']) ?> </li>
                        <li class="btn btn-default"><?= $this->Html->link(__('List Store Offerings'), ['controller' => 'StoreOfferings', 'action' => 'index']) ?> </li>
            <li class="btn btn-default"><?= $this->Html->link(__('New Store Offering'), ['controller' => 'StoreOfferings', 'action' => 'add']) ?> </li>
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


