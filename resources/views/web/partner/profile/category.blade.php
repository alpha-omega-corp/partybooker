@if (!count($currentCategories))
    <x-dashboard.card-info>
        {{__('partner.choose_category')}}
    </x-dashboard.card-info>

@else
    <div class="option-active-content mt-2">
        @foreach($currentCategories as $key => $category)
            <ul class="text-start p-0">
                <b class="text-uppercase ">{{$category->lang->name}}</b>

                <ul>

                    @foreach($category->subCategories as $sub)
                        <li>{{$sub->lang->name}}</li>
                    @endforeach
                </ul>
            </ul>
            <hr>
        @endforeach
    </div>
@endif



