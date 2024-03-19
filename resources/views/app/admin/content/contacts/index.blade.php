@include('app.admin.content.contacts.partials.edit', ['contacts' => $appContacts])

<div class="contacts-card">
    <div class="card-list">
        <x-admin.contact title="Address" :value="$appContacts->address"/>
        <x-admin.contact title="Email" :value="$appContacts->email"/>
        <x-admin.contact title="Phone" :value="$appContacts->phone"/>
        <x-admin.contact title="Facebook" :value="$appContacts->facebook"/>
        <x-admin.contact title="Instagram" :value="$appContacts->instagram"/>
        <x-admin.contact title="Linkedin" :value="$appContacts->linkedin"/>
        <x-admin.contact title="Twitter" :value="$appContacts->x"/>
    </div>
</div>
