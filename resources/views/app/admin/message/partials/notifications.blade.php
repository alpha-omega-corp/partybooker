<div class="admin-messages">
    <table class="table table-hover">
        <thead>
        <th>Phone</th>
        <th>Date</th>
        <th>Message</th>
        <th>Action</th>
        <th>User</th>
        </thead>

        <tbody>
        @foreach ($notifications as $item)
            <tr>
                <td>
                    {{$item->phone}}
                </td>

                <td>
                    {{$item->created_at}}
                </td>

                <td @class([
                        'bg-primary' => $item->is_resolved,
                        'bg-warning' => !$item->is_resolved,
                ])>
                    @include('app.admin.message.partials.message')
                </td>

                <td>
                    <form
                        method="POST"
                        action="{{route('admin.notification.status', ['notification' => $item])}}"
                    >
                        @csrf
                        @method('PUT')

                        @if(!$item->is_resolved)
                            <button type="submit" class="btn btn-outline-primary w-100 tippy"
                                    data-tippy-content="Mark unresolved">
                                @svg('heroicon-o-check-circle')
                            </button>
                        @else
                            <button type="submit" class="btn btn-outline-warning w-100 tippy"
                                    data-tippy-content="Mark unresolved">
                                @svg('heroicon-o-arrow-uturn-left')
                            </button>
                        @endif
                    </form>
                </td>


                <td>
                    @if($item->user)
                        <span class="badge text-bg-accent text-white">{{$item->user->name}}</span>
                    @else
                        <span class="badge text-bg-secondary">{{__('home.guest')}}  </span>

                    @endif
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
