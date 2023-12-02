<div>

    <h1>{{strtoupper('Demande de service')}}</h1>
    <a href="{{url('annonce/' . $partner->slug)}}">Page Du Service</a>
    <hr>

    <table style="width: 100%">
        <thead>
        <th>Nom</th>
        <th>Téléphone</th>
        <th>Email</th>
        <th>Type d'événement</th>
        <th>Date de l'événement</th>
        <th>Date alternative</th>
        <th>Nombre de participants</th>
        <th>Type de clients</th>
        <th>Langue</th>
        <th>Zone Géographique</th>
        <th>Budget</th>
        <th>Traiteur</th>
        <th>Message</th>
        </thead>
        <tbody>
        <tr>
            <td>{{$data['name']}}</td>
            <td>{{$data['phone']}}</td>
            <td>{{$data['email']}}</td>
            <td>{{$data['event']}}</td>
            <td>{{$data['event-date']}}</td>
            <td>{{$data['alternative-date']}}</td>
            <td>{{$data['participants']}}</td>
            <td>{{$data['guests']}}</td>
            <td>{{$data['language']}}</td>
            <td>{{$data['zone']}}</td>
            <td>{{$data['budget']}}</td>
            <td>{{ucfirst($data['caterer'])}}</td>
            <td>{{$data['message']}}</td>
        </tr>
        </tbody>
    </table>

    <br>
    <br>

    <h1>{{strtoupper('Service Request')}}</h1>
    <a href="{{url('en/listing/' . $partner->slug)}}">Service Page</a>
    <hr>

    <table style="width: 100%">
        <thead>
        <th>Name</th>
        <th>Phone</th>
        <th>Email</th>
        <th>Event Type</th>
        <th>Event Date</th>
        <th>Alternative Date</th>
        <th>Participants</th>
        <th>Guests Type</th>
        <th>Language</th>
        <th>Geographical Zone</th>
        <th>Budget</th>
        <th>Caterer</th>
        <th>Message</th>
        </thead>
        <tbody>
        <tr>
            <td>{{$data['name']}}</td>
            <td>{{$data['phone']}}</td>
            <td>{{$data['email']}}</td>
            <td>{{$data['event']}}</td>
            <td>{{$data['event-date']}}</td>
            <td>{{$data['alternative-date']}}</td>
            <td>{{$data['participants']}}</td>
            <td>{{$data['guests']}}</td>
            <td>{{$data['language']}}</td>
            <td>{{$data['zone']}}</td>
            <td>{{$data['budget']}}</td>
            <td>{{ucfirst($data['caterer'])}}</td>
            <td>{{$data['message']}}</td>
        </tr>
        </tbody>
    </table>
</div>
