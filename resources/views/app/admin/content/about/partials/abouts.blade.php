<x-accordion name="adminAbouts">
    @foreach($items as $about)
        <div class="d-flex justify-content-between align-items-center">
            <x-accordion.item
                accordion="adminAbouts"
                :name="$about->id"
            >
                <x-slot:title>
                    <div class="d-flex align-items-center gap-4">
                        <img class="admin-about-image" src="{{asset($about->image)}}" alt="about"/>
                        {{$about->locale->title}}
                    </div>
                </x-slot:title>

                <x-slot:content>
                    <ul class="admin-about-content">
                        @foreach($about->items as $item)
                            <li>
                                <div class="d-flex align-items-center gap-4 justify-content-between">
                                    <p class="m-0">{{$item->locale->content}}</p>

                                    <div class="d-flex">
                                        @include('app.admin.content.about.partials.items.edit', ['item' => $item])
                                        @include('app.admin.content.about.partials.items.delete', ['item' => $item])
                                    </div>
                                </div>
                            </li>
                        @endforeach
                    </ul>

                </x-slot:content>

                <div class="d-flex">
                    @include('app.admin.content.about.partials.items.create', ['item' => $about])
                    @include('app.admin.content.about.partials.edit', ['item' => $about])
                    @include('app.admin.content.about.partials.delete', ['item' => $about])
                </div>
            </x-accordion.item>
        </div>
    @endforeach
</x-accordion>
