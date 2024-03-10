<table class="w-100 table table-hover">
    <thead>
    <th>Status</th>
    <th>Name</th>
    <th>Title</th>
    <th>Dates</th>
    <th>Actions</th>
    </thead>
    <tbody>
    @foreach ($posts as $post)
        <tr>
            <td>
                {{$post->status}}
            </td>
            <td>
                <a href="{{route('guest.blog.show', ['post' => $post])}}" target="_blank">
                    {{$post->slug}}
                </a>
            </td>
            <td>{{$post->title_en}}</td>

            <td class="d-flex flex-column">
                <x-utils.date :type="DateType::CREATED" :date="$post->created_at"/>
                <x-utils.date :type="DateType::UPDATED" :date="$post->updated_at"/>
            </td>

            <td>
                <div class="d-flex align-items-start gap-1">
                    <form method="POST" action="{{route('admin.blog.status', ['post' => $post])}}">
                        @method('PUT')
                        @csrf

                        @if($post->status)
                            <button
                                type="submit"
                                class="tippy btn btn-warning"
                                data-tippy-content="Draft">
                                @svg('heroicon-o-arrow-down-circle')
                            </button>
                        @else
                            <button
                                type="submit"
                                class="tippy btn btn-accent text-white"
                                data-tippy-content="Publish">
                                @svg('heroicon-o-arrow-up-circle')
                            </button>
                        @endif
                    </form>

                    @include('app.blog.partials.edit', ['post' => $post])
                    @include('app.blog.partials.delete', ['post' => $post])
                </div>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
