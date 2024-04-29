<x-modal.open
    :iterator="$aboutType->name"
    :name="ModalName::APP_ABOUT"
    :type="ModalType::CREATE"
    :custom-color="AppColor::PRIMARY"
    :icon="$createIcon"
    :fit="true"
    :radius="false"
    :background="true"
/>

<x-accordion name="adminAbouts{{$aboutType->name}}">
    @foreach($aboutItems as $about)
        <div class="d-flex justify-content-between align-items-center">
            <x-accordion.item
                accordion="adminAbouts{{$aboutType->name}}"
                :name="$about->id"
                :padding="false"
            >
                <x-slot:actions>
                    @include('app.admin.content.about.partials.items.create', ['item' => $about])
                    @include('app.admin.content.about.partials.edit', ['item' => $about])
                    @include('app.admin.content.about.partials.delete', ['item' => $about])
                </x-slot:actions>

                <x-slot:title>
                    <div class="d-flex align-items-center gap-4">
                        <img class="admin-about-image" src="{{asset($about->image)}}" alt="about"/>
                        {{$about->locale->title}}
                    </div>
                </x-slot:title>

                <x-slot:content>
                    @foreach($about->items as $item)
                        <div class="admin-content-item">
                            {{$item->locale->content}}

                            <div class="d-flex">
                                @include('app.admin.content.about.partials.items.edit', ['item' => $item])
                                @include('app.admin.content.about.partials.items.delete', ['item' => $item])
                            </div>
                        </div>
                    @endforeach
                </x-slot:content>
            </x-accordion.item>
        </div>
    @endforeach
</x-accordion>

@include('app.admin.content.about.partials.create')
