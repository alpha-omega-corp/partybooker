<x-dashboard.modal
    id="editCategory"
    :button="__('partner.edit')"
    icon="heroicon-o-cube-transparent"
    size="modal-sm"
    :action="Auth::user()->type == 'admin'
        ? url(App\Http\Middleware\LocaleMiddleware::getLocale().'/cp/partner-cp/edit-category')
        : url(App\Http\Middleware\LocaleMiddleware::getLocale().'/partner-cp/edit-category')"
    method="POST">

    <x-slot:image>
        @svg('heroicon-o-cube-transparent')
    </x-slot:image>

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

            <hr>

            <div class="d-flex">
                @for($i = 1; $i <= $option->sub_categories_count; $i++)
                    @foreach($categoriesList as $categ)
                        <div class="categories subcat w-100 {{$categ->code}}" style="display: none;">
                            <div class="d-flex flex-column w-100">
                                <label class="select">{{__('partner.subcategory')}}<span>*</span></label>
                                <select name="category[{{$categ->id}}][]" class="form-select">
                                    <option selected disabled></option>
                                    @foreach($categ->subCategories as $sub)
                                        <option value="{{$sub->id}}">{{$sub->lang->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    @endforeach
                @endfor
            </div>
        </div>
            <?php $cat++; ?>
    @endforeach




    @if (Auth::user()->type == 'admin')
        <input type="text" name="id_partner" value="{{$user->partnerInfo->id_partner}}" hidden/>
    @else
        <input type="text" name="id_partner" value="{{Auth::user()->id_partner}}" hidden/>
    @endif
</x-dashboard.modal>

