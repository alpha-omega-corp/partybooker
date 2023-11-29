<?php

namespace App\Models;


use App\User;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class PartnersInfo extends Model
{
    public $timestamps = false;
    protected $table = "partners_info";
    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
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

    public function currentPlan(): HasOne
    {
        return $this->hasOne(Plan::class, 'id', 'plans_id');
    }

    public function vipPlan(): HasOne
    {
        return $this->hasOne(PartnerVipPlan::class, 'partners_info_id', 'id');
    }

    public function images(): HasMany
    {
        return $this->hasMany(ServiceImage::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'id_partner', 'id_partner');
    }

    public function rates(): HasMany
    {
        return $this->hasMany(Rate::class, 'id_partner', 'id_partner');
    }

    public function statistic(): HasOne
    {
        return $this->hasOne(Statistic::class, 'id_partner', 'id_partner');
    }

    public function planOptions(): HasMany
    {
        return $this->hasMany(PartnerPlanOption::class, 'partners_info_id', 'id');
    }

    public function categories(): HasMany
    {
        return $this->hasMany(AdvertCategory::class, 'partners_info_id', 'id');
    }

    public function services(): HasMany
    {
        return $this->hasMany(Advert::class, 'partners_info_id', 'id');
    }

    public function scopeListing(Builder $query): void
    {
        $query->where('public', 1)->where('payment_status', 1);
    }

    public function eventTypes(): BelongsToMany
    {
        return $this->belongsToMany(EventType::class,
            PartnerEventType::class,
            'partners_info_id',
            'event_type_id',
            'id', 'id');
    }
}
