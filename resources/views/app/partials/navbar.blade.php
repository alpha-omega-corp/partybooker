<x-navigation.group>

    <div class="app-navigation-actions">
        <!-- User -->
        @include('app.partials.user')

        <!-- Locale -->
        @include('app.partials.language')
    </div>

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


