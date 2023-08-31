<div class="row justify-content-center">
    <div class="line-group col-md-10">
        <div class="input-group">
            <input class="col-lg-4 d-none" type="text" placeholder="{{__('main.name')}}" name="filter_name" value="" data-value="@if(isset($name) && $name != 'null'){{$name}}@endif">
            <div class="line"></div>
            <div class="custom-dropdown dropdown col-lg-4" data-toggle="dropdown">
                <input type="text" class="value-dropdown" placeholder="{{__('main.category')}}" disabled>
                <input type="hidden" name="filter_category">
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
                <select class="custom-dropdown_select" name="filter_place" data-value="@if(isset($place) && $place != 'null'){{$place}}@endif">
                    <option selected="true" value="null">{{__('main.place')}}</option>
                    @include('common.cantons')
                </select>
            </div>
            <div class="line"></div>
            <div class="custom-dropdown col-lg">
                <select class="custom-dropdown_select" name="filter_budget" data-value="@if(isset($budget) && $budget != 'null'){{$budget}}@endif">
                    <option selected="true" value="null">{{__('main.budget')}}</option>
                    @include('common.budget')
                </select>
            </div>
        </div>
        <a href="#" class="btn-orange filter-btn">{{__('main.search')}}</a>


                            
                        
    </div>
    <div class="col-md-6 text-justify left-info-block">{{__('main.left-info-block')}}</div>
                            <div class="col-md-6 text-justify right-info-block">{{__('main.right-info-block')}}</div>
</div>


@push('footer')
    <script>
        $('.custom-dropdown .dropdown-menu li#<?php echo isset($category) ? $category : ''  ?> span').trigger('click');
        $('.custom-dropdown .dropdown-menu li#<?php echo isset($category) ? $category : ''?> span').trigger('click');
    </script>
@endpush
