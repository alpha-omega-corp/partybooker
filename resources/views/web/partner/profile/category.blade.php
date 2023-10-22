@if (!count($currentCategories))
    <x-dashboard.card-item :title="__('partner.choose_category')"/>
@else
    @foreach($currentCategories as $category)
        <x-dashboard.card-item :title="__('partner.category')">
            {{$category->lang->name}}
        </x-dashboard.card-item>

        @foreach($category->subCategories as $sub)
            <x-dashboard.card-item :title="__('partner.subcategory')">
                {{$sub->lang->name}}
            </x-dashboard.card-item>
        @endforeach
    @endforeach
@endif

<div class="edit-category">
    @include('web.partner.popup.edit-category')
</div>

