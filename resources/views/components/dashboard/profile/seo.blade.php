@props([
    'lang',
    'partner'
])

<br>


<label class="seo-info text-start text-uppercase fw-bold mt-5 mb-4">{{__('form.seo')}}</label>

<x-dashboard.card-info>
    {{__('form.seo_info_1')}}
</x-dashboard.card-info>

<x-dashboard.card-info>
    {{__('form.seo_info_2')}}
</x-dashboard.card-info>

<div class="description-card-seo mt-4">


    <div class="input-group">
        <span class="input-group-text seo-input-title ">
            {{__('form.seo_title')}}
        </span>
        <input name="{{$lang}}_seo_title" class="form-control" value="{{
            $lang === 'fr'
                ? $partner->fr_seo_title
                : $partner->en_seo_title
        }}"/>
    </div>

    <div class="input-group mt-2">
        <span class="input-group-text seo-input-title">
            {{__('form.seo_description')}}
        </span>
        <textarea name="{{$lang}}_seo_desc" class="form-control">{{$lang === 'fr'
                ? $partner->fr_seo_desc
                : $partner->en_seo_desc }}
        </textarea>
    </div>

    <x-repeater name="{{$lang}}_seo_keywords" :partner="$partner" :lang="$lang"/>
</div>
