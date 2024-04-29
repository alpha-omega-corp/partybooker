<x-slot:body>
    <x-forms.file
        name="thumbnail"
        label="Cover Image"
        :id="'editBlogThumbnail'. $item ? $item->id : 0"
        :file="$item->image"/>
    <hr>
    <div class="d-flex flex-column gap-2">

    </div>
</x-slot:body>

<x-tab.locale>
    <x-slot:french>
        @php($locale = $item->locale ? $item->ofLang(Language::FR)->first()->locale : $item)
        <x-forms.input
            name="slug_fr"
            label="Hyperlink"
            :value="$locale->slug"
        >
            @svg($linkIcon)
        </x-forms.input>
        <x-forms.input
            name="title_fr"
            label="Title"
            :value="$locale->title">
            @svg('heroicon-o-document-text')
        </x-forms.input>
        <x-forms.input
            name="alt_fr"
            label="Image Description"
            :value="$locale->alt">
            @svg('heroicon-o-photo')
        </x-forms.input>

        <x-forms.editor
            name="content_fr"
            label="Content"
            :id="'blogContentFrench' . $item->id"
            :value="$locale->content"/>
    </x-slot:french>

    <x-slot:english>
        @php($locale = $item->locale ? $item->ofLang(Language::EN)->first()->locale : $item)
        <x-forms.input
            name="slug_en"
            label="Hyperlink"
            :value="$locale->slug"
        >
            @svg($linkIcon)
        </x-forms.input>
        <x-forms.input
            name="title_en"
            label="Title"
            :value="$locale->title">
            @svg('heroicon-o-document-text')
        </x-forms.input>
        <x-forms.input
            name="alt_en"
            label="Image Description"
            :value="$locale->alt">
            @svg('heroicon-o-photo')
        </x-forms.input>

        <x-forms.editor
            name="content_en"
            label="Content"
            :id="'blogContentEnglish' . $item->id"
            :value="$locale->content"/>
    </x-slot:english>
</x-tab.locale>

