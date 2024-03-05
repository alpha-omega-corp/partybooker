@props([
    'name',
    'data' => ''
])

<div class="app-repeater" x-data="keywords('{{json_encode($data)}}')">
    <div class="repeater-title">
        <h6>{{__('seo.keywords')}}</h6>
        <div @click="add()" class="repeater-button">
            @svg('heroicon-o-plus')
        </div>
    </div>


    <div class="repeater-content">
        <template x-for="(item, index) in values" :key="index">
            <div class="repeater-item">
                <button type="button" @click="remove(index)" class="btn btn-light-danger">
                    @svg('heroicon-o-trash', 'text-danger m-2')
                </button>

                <input x-model="item.keyword"
                       type="text"
                       name="{{$name}}[]"
                       class="form-control"
                       placeholder="{{__('seo.keywords')}}">
            </div>
        </template>
    </div>
</div>

