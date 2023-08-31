<div class="row justify-content-center">
    <div class="line-group col-md-10">
        <div class="input-group">
            <input class="col-lg-3 d-none" type="text" placeholder="{{__('main.name')}}" name="filter_name" value="{{ Request::get('name') }}" data-value="{{ Request::get('name') }}" >
            <div class="line"></div>
            <div class="custom-dropdown dropdown col-lg-4" data-toggle="dropdown">
                <input type="text" class="value-dropdown" placeholder="{{ Request::has('cat') ? __('categories.' . Request::get('cat')) : __('main.category') }}" disabled>
                <input type="hidden" name="filter_category" value="{{ Request::get('cat') }}" data-value="{{ Request::get('cat') }}">
                <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu">
                    @foreach($categories as $cat)
{{--                        <li class="dropdown-item"><span>{{$category->lang->name}}</span></li>--}}
                        <li class="dropdown-submenu" id="{{$cat->code}}" data-code="{{$cat->code}}">
                            <span>{{$cat->lang->name}}</span>
                            <ul class="dropdown-menu">
                                @foreach($cat->subcategories as $sub)
                                    <li id="{{$sub->code}}" data-code="{{$sub->code}}" class="dropdown-item"><span>{{$sub->lang->name}}</span></li>
                                @endforeach
                            </ul>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="line md-hide"></div>
            <div class="custom-dropdown col-lg-4">
                <select class="custom-dropdown_select" name="filter_place">
                    <option selected="true" value="null">{{__('main.place')}}</option>
                    @include('web.common.cantons')
                </select>
            </div>
            <div class="line"></div>
            <div class="custom-dropdown col-lg">
                <select class="custom-dropdown_select" name="filter_budget" >
                    <option selected="true" value="null">{{__('main.budget')}}</option>
                    @include('web.common.budget')
                </select>
            </div>
        </div>
        <a href="#" class="btn-orange filter-btn">{{__('main.search')}}</a>


    </div>
</div>


@push('footer')

@endpush
