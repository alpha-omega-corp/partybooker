@extends('admin.admin')

@section('page')
    page="blog"
@endsection

@section('title')
    <title>{{ __('partybooker-cp.blog')}} | {{ __('partybooker-cp.www')}}</title>
@endsection

@section('content')
    <div id="page">
        <div class="container">
            <h1 class="display-1">
                {{ __('partybooker-cp.blog')}}
            </h1>

            <div class="d-flex border-bottom pb-4 mb-4">
                <div class="d-flex align-items-start">
                    <button type="button" class="btn btn-primary text-white"
                            x-data="{modal: 'createPostModal'}"
                            @click="openModal(modal)">
                        @svg('heroicon-o-plus-circle') Post
                    </button>
                </div>
            </div>


            <div class="blog-list">
                <table class="w-100">
                    <thead>
                    <th>Date</th>
                    <th>Title</th>
                    <th>Slug</th>
                    <th>Status</th>
                    <th>Actions</th>
                    </thead>
                    <tbody>
                    @foreach ($posts as $post)
                        @php
                            @endphp
                        <a href="{{url(App\Http\Middleware\LocaleMiddleware::getLocale().'/cp/blog/post/'.$post->slug)}}">
                            <tr>

                                <td>{{$post->updated}}</td>
                                <td>{{$post->title_en}}</td>
                                <td>{{$post->slug}}</td>
                                <td>
                                    <x-service.list-bool :value="$post->status"/>
                                </td>
                                <td class="d-flex">
                                    <a href="{{url(App\Http\Middleware\LocaleMiddleware::getLocale().'/cp/blog/post/'.$post->slug)}}"
                                       class="d-flex">
                                        <button type="button" class="btn btn-accent text-white">
                                            @svg('heroicon-o-eye')
                                        </button>
                                    </a>

                                    @if($post->status)
                                        <button type="button" class="btn btn-yellow text-danger">
                                            @svg('heroicon-o-arrow-down-circle')
                                        </button>
                                    @else
                                        <button type="button" class="btn btn-primary text-white">
                                            @svg('heroicon-o-arrow-up-circle')
                                        </button>
                                    @endif
                                    <button type="button" class="btn btn-danger">
                                        @svg('heroicon-o-trash')
                                    </button>
                                </td>
                            </tr>
                        </a>
                    @endforeach
                    </tbody>
                </table>
            </div>

            <script type="module">
                tinymce.init({
                    selector: 'textarea.editor',
                    plugins: 'advlist code emoticons link lists table',
                    toolbar: 'bold italic | bullist numlist | link emoticons',
                });
            </script>
@endsection
