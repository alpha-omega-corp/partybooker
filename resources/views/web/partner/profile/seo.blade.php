<li class="li"><span>EN Title:</span> {{$user->partnerInfo->en_seo_title ?? $user->partnerInfo->en_company_name}}</li>
<li class="li"><span>FR Title:</span> {{$user->partnerInfo->fr_seo_title ?? $user->partnerInfo->fr_company_name}}</li>
<li class="li">
    <span>EN Description:</span> {{trim(strip_tags($user->partnerInfo->en_seo_desc ?? $user->partnerInfo->en_full_descr))}}
</li>
<li class="li">
    <span>FR Description</span> {{trim(strip_tags($user->partnerInfo->fr_seo_desc ?? $user->partnerInfo->fr_full_descr))}}
</li>
<li class="li"><span>EN Keywords</span> {{$user->partnerInfo->en_seo_keywords}}</li>
<li class="li"><span>FR Keywords</span> {{$user->partnerInfo->fr_seo_keywords}}</li>

<li class="li"><a href="#" class="button">{{__('partner.edit')}}</a></li>

