<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Store Entity.
 */
class Store extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'store_name' => true,
        'city_id' => true,
        'slug' => true,
        'store_address' => true,
        'area' => true,
        'market' => true,
        'city' => true,
        'pin_code' => true,
        'reference_no' => true,
        'store_timing_from' => true,
        'store_timing_to' => true,
        'metro_longitude' => true,
        'metro_latitude' => true,
        'store_type' => true,
        'latitude' => true,
        'longitude' => true,
        'closed_day' => true,
        'ads_type' => true,
        'payment_mode' => true,
        'telephone' => true,
        'parking_type' => true,
        'store_email_address' => true,
        'website' => true,
        'facebook_link' => true,
        'twitter_link' => true,
        'tags' => true,
        'age_from' => true,
        'age_to' => true,
        'alteration_possible' => true,
        'renting_possible' => true,
        'store_representative_name' => true,
        'data_collected_by' => true,
        'is_active' => true,
        'is_trending' => true,
        'trending_image_name' => true,
        'user_favourite_count' => true,
        'user_checkin_count' => true,
        'store_rating_count' => true,
        'store_review_count' => true,
        'overall_ratings' => true,
        'tagged_count' => true,
        'google_plus_link' => true,
        'instagram_link' => true,
        'linkedin_link' => true,
        'youtube_link' => true,
        'any_other_link' => true,
        'brand_id' => true,
        'date_of_data_collection' => true,
        'data_validated_by' => true,
        'data_collection_method' => true,
        'comments' => true,
        'timestamp' => true,
        'city' => true,
        'brand' => true,
        'homepage_ads' => true,
        'report_errors' => true,
        'sale_hot_deals' => true,
        'sale_town_deals' => true,
        'search_ads' => true,
        'store_ads' => true,
        'store_cards' => true,
        'store_images' => true,
        'store_offerings' => true,
        'store_ratings' => true,
        'store_reviews' => true,
        'user_checkins' => true,
        'user_favourites' => true,
    ];
}
