<div class="admin-messages">
    <table class="table table-hover table-striped-columns">
        <thead>
        <th>User</th>
        <th>Message</th>
        <th>Phone</th>
        <th>Date</th>
        </thead>

        <tbody>

        @foreach ($notifications as $item)
            <tr>
                <td>
                    {{$item->user->name}}
                </td>
                <td>
                    @include('app.admin.message.partials.message')
                </td>
                <td>
                    {{$item->phone}}
                </td>
                <td>
                    {{$item->created_at}}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
