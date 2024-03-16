@include('app.admin.content.posts.partials.create')

@foreach($posts as $post)
    <div class="d-flex gap-2">
        <div class="admin-post-card">
            <div class="post-card-content">
                <img src="{{asset($post->image)}}" alt="{{$post->locale->alt}}"/>

                <div class="card-content-text">
                    <h6>
                        <a href="{{route('guest.blog.show', ['post' => $post])}}" target="_:blank">
                            {{$post->slug}}
                        </a>
                    </h6>
                    <p>
                        {{$post->locale->title}}
                    </p>
                </div>
            </div>
        </div>

        <div>
            <div class="d-flex gap-2">
                @include('app.admin.content.posts.partials.edit', ['item' => $post])
                @include('app.admin.content.posts.partials.delete', ['item' => $post])
            </div>
        </div>
    </div>
@endforeach
