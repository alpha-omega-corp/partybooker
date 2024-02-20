<x-card :title="__('dashboard.adverts')">
    <x-modal
        id="createAdvert"
        name="Advert"
        :type="ModalType::CREATE"
        :size="ModalSize::MD"
        :absolute="true"
        :route="route('admin.blog.store')"
    >
        <x-forms.list>
            <x-forms.input
                name="title"
                label="Title"
                type="text">
                @svg('heroicon-o-ticket')
            </x-forms.input>

        </x-forms.list>
    </x-modal>

    @foreach($partner->company->adverts as $advert)
        <div class="partner-advert">
            <div class="d-flex justify-content-between">
                <div class="d-flex flex-column">
                    {{$advert->title}}
                </div>

                <div>
                    @if($advert->is_main)
                        <span class="badge text-bg-accent">{{__('dashboard.main_advert')}}</span>
                    @endif
                </div>
            </div>
            <hr>
            <div class="d-flex gap-4">
                <x-utils.date :type="DateType::CREATED" :date="$advert->created_at"/>
                <x-utils.date :type="DateType::UPDATED" :date="$advert->updated_at"/>
            </div>
        </div>
    @endforeach
</x-card>
