<x-dashboard.modal
    id="editCategory"
    :title="__('partner.choose_cat_and_subcat')"
    :button="__('partner.edit')"
    :action="Auth::user()->type == 'admin'
        ? url(App\Http\Middleware\LocaleMiddleware::getLocale().'/cp/partner-cp/edit-category')
        : url(App\Http\Middleware\LocaleMiddleware::getLocale().'/partner-cp/edit-category')"
    method="POST">


    <?php $cat = 1; ?>
    @foreach($partnerPlanOptions as $k => $option)
        <div class="option-{{$cat}}">
            <div class="categories cat">
                <label for="category" class="select">{{__('partner.category')}}</label>
                <select option="{{$cat}}" required id="category" class="form-select">
                    <option selected disabled>--</option>
                    @foreach($categoriesList as $c)
                        <option value="{{$c->code}}">{{$c->lang->name}}</option>
                    @endforeach
                </select>
            </div>

            @for($i = 1; $i <= $option->sub_categories_count; $i++)
                @foreach($categoriesList as $categ)
                    <div class="categories subcat d-none w-100 {{$categ->code}}">
                        <div class="d-flex flex-column w-100">
                            <label for="subCat" class="select">{{__('partner.subcategory')}}</label>
                            <select name="category[{{$categ->id}}][]" id="subCat" class="form-select w-100">
                                <option selected disabled>--</option>
                                @foreach($categ->subCategories as $sub)
                                    <option value="{{$sub->id}}">{{$sub->lang->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                @endforeach
            @endfor
        </div>
            <?php $cat++; ?>
    @endforeach


    @if (Auth::user()->type == 'admin')
        <input type="text" name="id_partner" value="{{$user->partnerInfo->id_partner}}" hidden/>
    @else
        <input type="text" name="id_partner" value="{{Auth::user()->id_partner}}" hidden/>
    @endif
</x-dashboard.modal>


