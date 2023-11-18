@props([
    'name',
    'partner',
    'lang'
])

<div class="row mb-4 mt-2" x-data="handler()"
     x-init="loadFields('{{$lang === 'fr' ? $partner->fr_seo_keywords : $partner->en_seo_keywords}}')">
    <div class="input-group mt-2">
        <div class="input-group-text  shadow-sm w-100">
            <div class="d-flex align-items-center text-center w-100 p-2"
                 style="border-radius: 5px;">

                <div @click="addNewField()" style="cursor: pointer;">
                    @svg('heroicon-o-plus', 'text-white d-flex align-items-center me-2 bg-primary rounded-circle')
                </div>
                <span class="w-100 fw-bold text-uppercase text-standard">
                    {{__('form.seo_keywords')}}
                </span>
            </div>
        </div>


        <div class="d-flex flex-wrap">

            <template x-for="(field, index) in fields" :key="index">
                <div class="d-flex justify-content-center">
                    <input x-model="field.keyword"
                           type="text"
                           name="{{$name}}[]"
                           class="form-control mt-2"
                           placeholder="SEO">

                    <div class="cursor-pointer mt-2" @click="removeField(index)">
                        @svg('heroicon-o-trash', 'text-danger m-3')
                    </div>
                </div>
            </template>
            <hr>
        </div>

    </div>
</div>

<script>
    function handler() {
        return {
            fields: [],
            loadFields(fields) {
                JSON.parse(fields).forEach((field) => {
                    this.fields.push({
                        keyword: field,
                    });
                });
            },
            addNewField() {
                this.fields.push({
                    keyword: '',
                });
            },
            removeField(index) {
                this.fields.splice(index, 1);
            }
        }
    }
</script>
