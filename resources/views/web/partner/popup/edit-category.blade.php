<x-dashboard.modal
    id="editCategory"
    :button="__('partner.edit')"
    icon="heroicon-o-cube-transparent"
    size="modal-md"
    :action="Auth::user()->type == 'admin'
        ? url(App\Http\Middleware\LocaleMiddleware::getLocale().'/cp/partner-cp/edit-category')
        : url(App\Http\Middleware\LocaleMiddleware::getLocale().'/partner-cp/edit-category')"
    method="POST">

    <x-slot:image>
        @svg('heroicon-o-cube-transparent')
    </x-slot:image>

    <?php $cat = 1; ?>
    <div class="edit-category">

        <x-dashboard.card-info icon="heroicon-o-check-circle" color="text-primary">
            {{__('form.change_categories')}}
        </x-dashboard.card-info>
        <hr>
        @foreach($partnerOptions as $k => $option)
            <div class="option-{{$cat}} text-dark">
                <div class="categories cat">
                    <label class="select">{{__('partner.category')}}<span>*</span></label>
                    <select option="{{$cat}}" required class="form-select">
                        <option value="" disabled selected></option>
                        @foreach($categories as $categ)
                            <option value="{{$categ->code}}">{{$categ->lang->name}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="d-flex flex-column">
                    @for($i = 1; $i <= $option->sub_categories_count; $i++)
                        <label class="select">{{__('partner.subcategory')}}<span>*</span></label>
                        @foreach($categories as $categ)
                            <div class="categories subcat w-100 {{$categ->code}}" style="display: none;">
                                <div class="d-flex flex-column w-100">
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

            <hr>

                <?php $cat++; ?>
        @endforeach
    </div>


    @if (Auth::user()->type == 'admin')
        <input type="text" name="id_partner" value="{{$user->partnerInfo->id_partner}}" hidden/>
    @else
        <input type="text" name="id_partner" value="{{Auth::user()->id_partner}}" hidden/>
    @endif
</x-dashboard.modal>

