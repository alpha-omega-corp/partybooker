@props([
    'name',
    'data',
    'title',
])

<div class="app-repeater" x-data="keywords('{{json_encode($data)}}')">
    <div class="repeater-header">
        <h6>{{__('advert.keywords')}}</h6>
        <div @click="add()" class="repeater-button">
            @svg('heroicon-o-plus')
        </div>
    </div>

    <div class="repeater-content">
        <template x-for="(item, index) in values" :key="index">
            <div class="repeater-item">
                <!-- x-model="item.keyword" -->
                <x-forms.input
                    model="item.keyword"
                    type="text"
                    name="{{$name}}[]"
                    :label="__('advert.keyword')"
                    class="form-control"
                    placeholder="{{__('seo.keywords')}}">
                    @svg($tagIcon)
                </x-forms.input>

                <button type="button" @click="remove(index)" class="btn btn-light-danger">
                    @svg('heroicon-o-trash', 'text-danger')
                </button>
            </div>
        </template>
    </div>
</div>

