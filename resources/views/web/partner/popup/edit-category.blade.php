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
        <div class="option-{{$cat}} text-dark">
            <div class="categories cat">
                <label class="select">{{__('partner.category')}}<span>*</span></label>
                <select option="{{$cat}}" required class="form-select">
                    <option selected disabled></option>
                    @foreach($categoriesList as $categ)
                        <option value="{{$categ->code}}">{{$categ->lang->name}}</option>
                    @endforeach
                </select>
            </div>

            @for($i = 1; $i <= $option->sub_categories_count; $i++)
                @foreach($categoriesList as $categ)
                    <div class="categories subcat {{$categ->code}}" style="display: none;">
                        <label class="select">{{__('partner.subcategory')}}<span>*</span></label>
                        <select name="category[{{$categ->id}}][]" class="form-select">
                            <option selected disabled></option>
                            @foreach($categ->subCategories as $sub)
                                <option value="{{$sub->id}}">{{$sub->lang->name}}</option>
                            @endforeach
                        </select>
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

