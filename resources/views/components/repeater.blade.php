@props([
    'name',
])

<div class="row mb-4 mt-2" x-data="keywords">
    <div class="mt-2">
        <div class="d-flex align-items-center justify-content-between w-100 p-2 mb-2"
             style="border-radius: 5px;">

            <div>
                <div @click="add()" style="cursor: pointer;"
                     class="">
                    @svg('heroicon-o-plus', 'text-primary fw-bold me-2')
                </div>
            </div>
            <span class="fw-bold text-uppercase text-standard">
                    {{__('form.seo_keywords')}}
                </span>
        </div>

        <div class="seo-keywords">
            <div class="d-flex flex-wrap">
                <template x-for="(item, index) in values" :key="index">
                    <div class="d-flex align-items-center m-1">
                        <input x-model="item.keyword"
                               type="text"
                               name="{{$name}}[]"
                               class="form-control"
                               placeholder="SEO">

                        <div style="cursor:pointer;" class="d-flex align-items-center justify-content-center"
                             @click="remove(index)">
                            @svg('heroicon-o-trash', 'text-danger m-2')
                        </div>
                    </div>
                </template>
                <hr>
            </div>
        </div>

    </div>
</div>

