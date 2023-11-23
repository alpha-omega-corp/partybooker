<div>
    <h1>{{strtoupper('Demande de service')}}</h1>

    <p>Veuillez s.v.p mettre contact@partybooker.ch en copie sur votre première offre au client.</p>
    <a href="{{url('annonce/' . $partner->slug)}}">Votre Page Publicitaire</a>
    <hr>

    <table style="width: 100%">
        <thead>
        <th>Nom</th>
        <th>Téléphone</th>
        <th>Type d'événement</th>
        <th>Date de l'événement</th>
        <th>Date alternative</th>
        <th>Nombre de participants</th>
        <th>Message</th>
        </thead>
        <tbody>
        <tr>
            <td>{{$data['name']}}</td>
            <td>{{$data['phone']}}</td>
            <td>{{$data['event']}}</td>
            <td>{{$data['event-date']}}</td>
            <td>{{$data['alternative-date']}}</td>
            <td>{{$data['participants']}}</td>
            <td>{{$data['message']}}</td>
        </tr>
        </tbody>
    </table>

    <br>
    <br>


    <h1>{{strtoupper('Service Request')}}</h1>
    <p>Please add contact@partybooker.ch as copy in your first client's offer</p>
    <a href="{{url('en/listing/' . $partner->slug)}}">Your Advertisement Page</a>
    <hr>

    <table style="width: 100%">
        <thead>
        <th>Name</th>
        <th>Phone</th>
        <th>Event Type</th>
        <th>Event Date</th>
        <th>Alternative Date</th>
        <th>Participants</th>
        <th>Message</th>
        </thead>
        <tbody>
        <tr>
            <td>{{$data['name']}}</td>
            <td>{{$data['phone']}}</td>
            <td>{{$data['event']}}</td>
            <td>{{$data['event-date']}}</td>
            <td>{{$data['alternative-date']}}</td>
            <td>{{$data['participants']}}</td>
            <td>{{$data['message']}}</td>
        </tr>
        </tbody>
    </table>
</div>
