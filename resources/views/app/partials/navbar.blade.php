<x-navigation.group>
    <x-slot:header>
        <x-logo class="app-logo-offcanvas"/>
    </x-slot:header>

    <x-navigation.item
        :href="url(route(__('route.home')))"
        :text="__('nav.home')"
        icon="heroicon-o-home"
    />

    <x-navigation.item
        :href="url(route(__('route.listing')))"
        :text="__('nav.listing')"
        icon="heroicon-o-queue-list"
    />

    <x-navigation.item
        :href="url(route(__('route.about')))"
        :text="__('nav.about')"
        icon="heroicon-o-information-circle"
    />

    <x-navigation.item
        :href="url(route(__('route.partnership')))"
        :text="__('nav.partnership')"
        icon="heroicon-o-identification"
    />

    <x-navigation.item
        :href="url(route(__('route.blog')))"
        :text="__('nav.blog')"
        icon="heroicon-o-book-open"
    />

    <x-navigation.item
        :href="url(route(__('route.faq')))"
        :text="__('nav.faq')"
        icon="heroicon-o-question-mark-circle"
    />
</x-navigation.group>

@if(Auth::check() && Auth::user()->isAdmin())
    <div class="admin-navigation">
        <x-navigation.group>

            <x-navigation.item
                :href="url(route(__('route.admin-content')))"
                text="contents"
                :icon="$boxIcon"
            />
            <x-navigation.item
                :href="url(route('admin.partners'))"
                text="partners"
                :icon="$userIcon"
            />
            <x-navigation.item
                :href="url(route('admin.forms'))"
                text="forms"
                icon="heroicon-o-film"
            />
            <x-navigation.item
                :href="url(route('admin.messages'))"
                text="messages"
                :icon="$emailIcon"
            />
        </x-navigation.group>
    </div>
@endif
