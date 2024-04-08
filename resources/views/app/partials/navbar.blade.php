<x-navigation.group>
    <x-slot:header>
        <x-logo class="app-logo-offcanvas"/>
    </x-slot:header>

    <x-navigation.item
        :href="url(route('guest.home.index'))"
        :text="__('nav.home')"
        icon="heroicon-o-home"
    />

    <x-navigation.item
        :href="url(route('guest.listing.index'))"
        :text="__('nav.listing')"
        icon="heroicon-o-queue-list"
    />

    <x-navigation.item
        :href="url(route('guest.home.about'))"
        :text="__('nav.about')"
        icon="heroicon-o-information-circle"
    />

    <x-navigation.item
        :href="url(route('guest.home.partnership'))"
        :text="__('nav.partnership')"
        icon="heroicon-o-identification"
    />

    <x-navigation.item
        :href="url(route('guest.home.blog'))"
        :text="__('nav.blog')"
        icon="heroicon-o-book-open"
    />

    <x-navigation.item
        :href="url(route('guest.home.faq'))"
        :text="__('nav.faq')"
        icon="heroicon-o-question-mark-circle"
    />
</x-navigation.group>

@if(Auth::check() && Auth::user()->isAdmin())
    <div class="admin-navigation">
        <x-navigation.group>

            <x-navigation.item
                :href="url(route('admin.dashboard.content'))"
                text="contents"
                :icon="$boxIcon"
            />
            <x-navigation.item
                :href="url(route('admin.dashboard.partners'))"
                text="partners"
                :icon="$userIcon"
            />
            <x-navigation.item
                :href="url(route('admin.dashboard.forms'))"
                text="forms"
                icon="heroicon-o-film"
            />
            <x-navigation.item
                :href="url(route('admin.dashboard.messages'))"
                text="messages"
                :icon="$emailIcon"
            />
        </x-navigation.group>
    </div>
@endif
