<div class="row">
    <div class="col-lg-10">
        <div class = "stores form large-10 medium-9 columns">
            <?= $this->Form->create($store);
            ?>
            <fieldset>
                <legend><?= __('Add Store') ?></legend>
                <?php
                                echo $this->Form->input('store_name', ['class' => 'form-control', 'div' => ['class' => 'form-group']] );
                            echo $this->Form->input('city_id', ['options' => $cities, 'class' => 'form-control', 'div' => ['class' => 'form-group']]);
                                echo $this->Form->input('slug', ['class' => 'form-control', 'div' => ['class' => 'form-group']] );
                                echo $this->Form->input('store_address', ['class' => 'form-control', 'div' => ['class' => 'form-group']] );
                                echo $this->Form->input('area', ['class' => 'form-control', 'div' => ['class' => 'form-group']] );
                                echo $this->Form->input('market', ['class' => 'form-control', 'div' => ['class' => 'form-group']] );
                                echo $this->Form->input('city', ['class' => 'form-control', 'div' => ['class' => 'form-group']] );
                                echo $this->Form->input('pin_code', ['class' => 'form-control', 'div' => ['class' => 'form-group']] );
                                echo $this->Form->input('reference_no', ['class' => 'form-control', 'div' => ['class' => 'form-group']] );
                                echo $this->Form->input('store_timing_from', ['class' => 'form-control', 'div' => ['class' => 'form-group']] );
                                echo $this->Form->input('store_timing_to', ['class' => 'form-control', 'div' => ['class' => 'form-group']] );
                                echo $this->Form->input('metro_longitude', ['class' => 'form-control', 'div' => ['class' => 'form-group']] );
                                echo $this->Form->input('metro_latitude', ['class' => 'form-control', 'div' => ['class' => 'form-group']] );
                                echo $this->Form->input('store_type', ['class' => 'form-control', 'div' => ['class' => 'form-group']] );
                                echo $this->Form->input('latitude', ['class' => 'form-control', 'div' => ['class' => 'form-group']] );
                                echo $this->Form->input('longitude', ['class' => 'form-control', 'div' => ['class' => 'form-group']] );
                                echo $this->Form->input('closed_day', ['class' => 'form-control', 'div' => ['class' => 'form-group']] );
                                echo $this->Form->input('ads_type', ['class' => 'form-control', 'div' => ['class' => 'form-group']] );
                                echo $this->Form->input('payment_mode', ['class' => 'form-control', 'div' => ['class' => 'form-group']] );
                                echo $this->Form->input('telephone', ['class' => 'form-control', 'div' => ['class' => 'form-group']] );
                                echo $this->Form->input('parking_type', ['class' => 'form-control', 'div' => ['class' => 'form-group']] );
                                echo $this->Form->input('store_email_address', ['class' => 'form-control', 'div' => ['class' => 'form-group']] );
                                echo $this->Form->input('website', ['class' => 'form-control', 'div' => ['class' => 'form-group']] );
                                echo $this->Form->input('facebook_link', ['class' => 'form-control', 'div' => ['class' => 'form-group']] );
                                echo $this->Form->input('twitter_link', ['class' => 'form-control', 'div' => ['class' => 'form-group']] );
                                echo $this->Form->input('tags', ['class' => 'form-control', 'div' => ['class' => 'form-group']] );
                                echo $this->Form->input('age_from', ['class' => 'form-control', 'div' => ['class' => 'form-group']] );
                                echo $this->Form->input('age_to', ['class' => 'form-control', 'div' => ['class' => 'form-group']] );
                                echo $this->Form->input('alteration_possible', ['class' => 'form-control', 'div' => ['class' => 'form-group']] );
                                echo $this->Form->input('renting_possible', ['class' => 'form-control', 'div' => ['class' => 'form-group']] );
                                echo $this->Form->input('store_representative_name', ['class' => 'form-control', 'div' => ['class' => 'form-group']] );
                                echo $this->Form->input('data_collected_by', ['class' => 'form-control', 'div' => ['class' => 'form-group']] );
                                echo $this->Form->input('is_active', ['class' => 'form-control', 'div' => ['class' => 'form-group']] );
                                echo $this->Form->input('is_trending', ['class' => 'form-control', 'div' => ['class' => 'form-group']] );
                                echo $this->Form->input('trending_image_name', ['class' => 'form-control', 'div' => ['class' => 'form-group']] );
                                echo $this->Form->input('user_favourite_count', ['class' => 'form-control', 'div' => ['class' => 'form-group']] );
                                echo $this->Form->input('user_checkin_count', ['class' => 'form-control', 'div' => ['class' => 'form-group']] );
                                echo $this->Form->input('store_rating_count', ['class' => 'form-control', 'div' => ['class' => 'form-group']] );
                                echo $this->Form->input('store_review_count', ['class' => 'form-control', 'div' => ['class' => 'form-group']] );
                                echo $this->Form->input('overall_ratings', ['class' => 'form-control', 'div' => ['class' => 'form-group']] );
                                echo $this->Form->input('tagged_count', ['class' => 'form-control', 'div' => ['class' => 'form-group']] );
                                echo $this->Form->input('google_plus_link', ['class' => 'form-control', 'div' => ['class' => 'form-group']] );
                                echo $this->Form->input('instagram_link', ['class' => 'form-control', 'div' => ['class' => 'form-group']] );
                                echo $this->Form->input('linkedin_link', ['class' => 'form-control', 'div' => ['class' => 'form-group']] );
                                echo $this->Form->input('youtube_link', ['class' => 'form-control', 'div' => ['class' => 'form-group']] );
                                echo $this->Form->input('any_other_link', ['class' => 'form-control', 'div' => ['class' => 'form-group']] );
                            echo $this->Form->input('brand_id', ['options' => $brands, 'empty' => true, 'class' => 'form-control', 'div' => ['class' => 'form-group']]);
                                echo $this->Form->input('date_of_data_collection', ['class' => 'form-control', 'div' => ['class' => 'form-group']] );
                                echo $this->Form->input('data_validated_by', ['class' => 'form-control', 'div' => ['class' => 'form-group']] );
                                echo $this->Form->input('data_collection_method', ['class' => 'form-control', 'div' => ['class' => 'form-group']] );
                                echo $this->Form->input('comments', ['class' => 'form-control', 'div' => ['class' => 'form-group']] );
                                echo $this->Form->input('timestamp', ['class' => 'form-control', 'div' => ['class' => 'form-group']] );
                        
                
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
<?= $this->Form->end() ?>
        </div>
    </div>
    <div class="col-lg-2">
        <ul class="btn-group-vertical">
                        <li class="btn btn-default"><?= $this->Html->link(__('List Stores'), ['action' => 'index']) ?></li>
                        <li class="btn btn-default"><?=
                $this->Html->link(__('List Cities'), ['controller' => 'Cities', 'action' => 'index']) ?> </li>
                <li class = "btn btn-default"><?= $this->Html->link(__('New City'), ['controller' => 'Cities', 'action' => 'add']) ?> </li>
                            <li class="btn btn-default"><?=
                $this->Html->link(__('List Brands'), ['controller' => 'Brands', 'action' => 'index']) ?> </li>
                <li class = "btn btn-default"><?= $this->Html->link(__('New Brand'), ['controller' => 'Brands', 'action' => 'add']) ?> </li>
                            <li class="btn btn-default"><?=
                $this->Html->link(__('List Homepage Ads'), ['controller' => 'HomepageAds', 'action' => 'index']) ?> </li>
                <li class = "btn btn-default"><?= $this->Html->link(__('New Homepage Ad'), ['controller' => 'HomepageAds', 'action' => 'add']) ?> </li>
                            <li class="btn btn-default"><?=
                $this->Html->link(__('List Report Errors'), ['controller' => 'ReportErrors', 'action' => 'index']) ?> </li>
                <li class = "btn btn-default"><?= $this->Html->link(__('New Report Error'), ['controller' => 'ReportErrors', 'action' => 'add']) ?> </li>
                            <li class="btn btn-default"><?=
                $this->Html->link(__('List Sale Hot Deals'), ['controller' => 'SaleHotDeals', 'action' => 'index']) ?> </li>
                <li class = "btn btn-default"><?= $this->Html->link(__('New Sale Hot Deal'), ['controller' => 'SaleHotDeals', 'action' => 'add']) ?> </li>
                            <li class="btn btn-default"><?=
                $this->Html->link(__('List Sale Town Deals'), ['controller' => 'SaleTownDeals', 'action' => 'index']) ?> </li>
                <li class = "btn btn-default"><?= $this->Html->link(__('New Sale Town Deal'), ['controller' => 'SaleTownDeals', 'action' => 'add']) ?> </li>
                            <li class="btn btn-default"><?=
                $this->Html->link(__('List Search Ads'), ['controller' => 'SearchAds', 'action' => 'index']) ?> </li>
                <li class = "btn btn-default"><?= $this->Html->link(__('New Search Ad'), ['controller' => 'SearchAds', 'action' => 'add']) ?> </li>
                            <li class="btn btn-default"><?=
                $this->Html->link(__('List Store Ads'), ['controller' => 'StoreAds', 'action' => 'index']) ?> </li>
                <li class = "btn btn-default"><?= $this->Html->link(__('New Store Ad'), ['controller' => 'StoreAds', 'action' => 'add']) ?> </li>
                            <li class="btn btn-default"><?=
                $this->Html->link(__('List Store Cards'), ['controller' => 'StoreCards', 'action' => 'index']) ?> </li>
                <li class = "btn btn-default"><?= $this->Html->link(__('New Store Card'), ['controller' => 'StoreCards', 'action' => 'add']) ?> </li>
                            <li class="btn btn-default"><?=
                $this->Html->link(__('List Store Images'), ['controller' => 'StoreImages', 'action' => 'index']) ?> </li>
                <li class = "btn btn-default"><?= $this->Html->link(__('New Store Image'), ['controller' => 'StoreImages', 'action' => 'add']) ?> </li>
                            <li class="btn btn-default"><?=
                $this->Html->link(__('List Store Offerings'), ['controller' => 'StoreOfferings', 'action' => 'index']) ?> </li>
                <li class = "btn btn-default"><?= $this->Html->link(__('New Store Offering'), ['controller' => 'StoreOfferings', 'action' => 'add']) ?> </li>
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

            
