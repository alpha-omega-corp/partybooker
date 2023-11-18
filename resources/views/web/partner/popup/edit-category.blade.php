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

        @foreach($partnerOptions as $k => $option)
            <div class="option-{{$cat}} text-dark">
                <div class="categories cat">
                    <label
                        class="select pb-2 text-center w-100 text-uppercase fw-bold">{{__('partner.category')}}</label>

                    <div class="d-flex">
                        @svg('heroicon-o-cube-transparent', 'mt-2 me-2')

                        <select option="{{$cat}}" required class="form-select">
                            <option value="" disabled selected></option>
                            @foreach($categories as $categ)
                                <option value="{{$categ->code}}">{{$categ->lang->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="d-flex flex-column mt-3">
                    @for($i = 1; $i <= $option->sub_categories_count; $i++)
                        @foreach($categories as $categ)
                            <div class="categories subcat w-100 {{$categ->code}}" style="display: none;">
                                <div class="d-flex flex-column w-100">
                                    <div class="d-flex">
                                        <span class="text-bg-accent p-1 rounded text-center me-2 w-100">#{{$k}}</span>
                                        <select name="category[{{$categ->id}}][]" class="form-select">
                                            <option selected disabled></option>
                                            @foreach($categ->subCategories as $sub)
                                                <option value="{{$sub->id}}">{{$sub->lang->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
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

