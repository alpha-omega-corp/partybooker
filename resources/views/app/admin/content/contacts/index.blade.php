@include('app.admin.content.contacts.partials.edit', ['contacts' => $appContacts])

<div class="contacts-card">
    <ul class="card-list">
        <li>
            {{$appContacts->address}}
        </li>
        <li>
            {{$appContacts->email}}
        </li>
        <li>
            {{$appContacts->phone}}
        </li>
        <li>
            {{$appContacts->facebook}}
        </li>
        <li>
            {{$appContacts->instagram}}
        </li>
        <li>
            {{$appContacts->x}}
        </li>
    </ul>
</div>
