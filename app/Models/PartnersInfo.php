<?php

namespace App\Models;


use App\User;
use Illuminate\Database\Eloquent\Model;

class PartnersInfo extends Model
{
    public $timestamps = false;
    protected $table = "partners_info";
    
    protected $fillable = [
        "plan",
        "plan_option",
        "plans_id",
        "public",
        "category_1",
        "category_2",
        "category_3",
        "subcat_1",
        "subcat_2",
        "subcat_3",
        "id_partner",
        "payed",
        "expiration_date",
        "payment_status",
        "waiting_approve_plan",
        'slug',
        'en_company_name',
        'fr_company_name',
        'location_code',
        'address',
        'lat',
        'lon',
        'phone',
        'company_phone',
        'fax',
        'logo',
        'en_slogan',
        'en_short_descr',
        'en_full_descr',
        'fr_slogan',
        'fr_short_descr',
        'fr_full_descr',
        'language',
        'other_lang',
        'www',
        'facebook',
        'twitter',
        'instagram',
        'linkedin',
        'youtube',
        'vimeo',
        'main_img',
        'images',
        'price',
        'is_commission',
        'commission_amount',
        'plan_option_group',
        'prev_plan_option_group',
        'prev_plan_id',
        'plans_id',
        'priority',
        'en_seo_desc',
        'fr_seo_desc',
        'en_seo_title',
        'fr_seo_title',
        'en_seo_keywords',
        'fr_seo_keywords'
    ];

    public function currentPlan()
    {
        return $this->hasOne(Plan::class, 'id', 'plans_id');
    }

    public function vipPlan()
    {
        return $this->hasOne(PartnerVipPlan::class, 'partners_info_id', 'id');
    }

    public function images()
    {
        return $this->hasMany(ServiceImage::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'id_partner', 'id_partner');
    }

    public function rates()
    {
        return $this->hasMany(Rate::class, 'id_partner', 'id_partner');
    }

    public function statistic()
    {
        return $this->hasOne(Statistic::class, 'id_partner', 'id_partner');
    }

    public function planOptions()
    {
        return $this->hasMany(PartnerPlanOption::class, 'partners_info_id', 'id');
    }

    public function categories()
    {
        return $this->hasMany(AdvertCategory::class, 'partners_info_id', 'id');
    }

    public function services()
    {
        return $this->hasMany(Advert::class, 'partners_info_id', 'id');
    }


    public function eventTypes()
    {
        return $this->belongsToMany(EventType::class, 'partner_event_types');
    }
}
