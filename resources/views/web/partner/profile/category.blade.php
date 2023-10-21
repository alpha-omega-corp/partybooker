@if (!count($currentCategories))
    <x-dashboard.card-item :title="__('partner.choose_category')"/>
    <button role="button" id="edit" class="btn btn-primary">{{__('partner.choose')}}</button>
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

    <button role="button" id="edit" class="btn btn-primary">{{__('partner.edit')}}</button>
@endif
