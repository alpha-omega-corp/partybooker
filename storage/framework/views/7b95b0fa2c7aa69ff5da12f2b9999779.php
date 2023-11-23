<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
    'name',
    'partner',
    'lang'
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'name',
    'partner',
    'lang'
]); ?>
<?php foreach (array_filter(([
    'name',
    'partner',
    'lang'
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<div class="row mb-4 mt-2" x-data="handler()"
     x-init="loadFields('<?php echo e($lang === 'fr' ? $partner->fr_seo_keywords : $partner->en_seo_keywords); ?>')">
    <div class="mt-2">
        <div class="d-flex align-items-center justify-content-between w-100 p-2 mb-2"
             style="border-radius: 5px;">

            <div>
                <div @click="addNewField()" style="cursor: pointer;"
                     class="">
                    <?php echo e(svg('heroicon-o-plus', 'text-primary fw-bold me-2')); ?>
                </div>
            </div>
            <span class="fw-bold text-uppercase text-standard">
                    <?php echo e(__('form.seo_keywords')); ?>

                </span>
        </div>


        <div class="seo-keywords">
            <div class="d-flex flex-wrap">
                <template x-for="(field, index) in fields" :key="index">
                    <div class="d-flex align-items-center m-1">
                        <input x-model="field.keyword"
                               type="text"
                               name="<?php echo e($name); ?>[]"
                               class="form-control"
                               placeholder="SEO">

                        <div style="cursor:pointer;" class="d-flex align-items-center justify-content-center"
                             @click="removeField(index)">
                            <?php echo e(svg('heroicon-o-trash', 'text-danger m-2')); ?>
                        </div>
                    </div>
                </template>
                <hr>
            </div>
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
<?php /**PATH /home/nanstis/PhpstormProjects/pb-live/resources/views/components/repeater.blade.php ENDPATH**/ ?>