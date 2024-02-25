<div class="row">
    <div class="col-4">
        <input type="hidden" name="status" value="{{$post ? $post->status : true}}"/>
        <x-forms.file name="image" :id="$post->id ? $post->id : 0" label="Cover Image" :file="$post->image"/>
        <hr>
        <div class="d-flex flex-column gap-2">
            <x-forms.input
                name="slug"
                label="Name"
                :value="$post->slug"
            >
                @svg('heroicon-o-archive-box')
            </x-forms.input>
        </div>
    </div>

    <div class="col-8">
        <x-tab
            :pages="['French', 'English']">

            <x-tab.item>
                <x-forms.list>
                    <x-forms.input
                        name="alt_fr"
                        label="Image"
                        :value="$post->alt_fr">
                        @svg('heroicon-o-photo')
                    </x-forms.input>

                    <x-forms.input
                        name="title_fr"
                        label="Title"
                        :value="$post->title_fr">
                        @svg('heroicon-o-document-text')
                    </x-forms.input>

                    <x-forms.editor name="content_fr" label="Content" :value="$post->content_fr"/>
                </x-forms.list>
            </x-tab.item>

            <x-tab.item>
                <x-forms.list>
                    <x-forms.input
                        name="alt_en"
                        label="Image"
                        :value="$post->alt_en">
                        @svg('heroicon-o-photo')
                    </x-forms.input>
                    <x-forms.input
                        name="title_en"
                        label="Title"
                        :value="$post->title_en">
                        @svg('heroicon-o-document-text')
                    </x-forms.input>

                    <x-forms.editor name="content_en" label="Content" :value="$post->content_en"/>
                </x-forms.list>
            </x-tab.item>
        </x-tab>
    </div>
</div>
