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
                <x-modal.index
                    :iterator="$item->id"
                    :name="ModalName::ADMIN_MESSAGE"
                    :type="ModalType::READ"
                    :size="ModalSize::MD">
                    {{$item->message}}
                </x-modal.index>
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
