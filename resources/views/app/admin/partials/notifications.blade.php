<table class="table table-hover">
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
                <x-modal
                    id="readNotification-{{$item->id}}"
                    name="Post"
                    :type="ModalType::READ"
                    :size="ModalSize::MD"
                >
                    {{$item->message}}
                </x-modal>
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
