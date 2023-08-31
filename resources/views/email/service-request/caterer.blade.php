<p>
	Request for service: <a href="{{url('fr/listing/' . $partner->slug)}}">{{$partner->fr_company_name}}</a>
</p>
<p>
    Veuillez SVP copier contact@partybooker.ch sur votre première offre au client.
</p>

<p>Request from info:</p>
<ul>
	<li>
		Nom: {{$data['name']}}
	</li>
	<li>
		E-mail: {{$data['email']}}
	</li>
	<li>
		Téléphone: {{$data['phone']}}
	</li>
	<li>
                Type d'événement: {{$data['event']}}
        </li>
	<li>
		Date de l'événement: {{$data['event_date']}}
	</li>
	<li>
		Date alternative: {{$data['alternative_date']}}
	</li>
	<li>
		Nombre d'invités: {{$data['participant']}}
	</li>
	<li>
		Nombre de d'invités: {{$data['guests']}}
	</li>
	<li>
		Langue: {{$data['language']}}
	</li>
	<li>
		Zone géographique: {{$data['zone']}}
	</li>
	<li>
		Besoin d'un service traiteur: {{$data['caterer']}}
	</li>
	<li>
		Budget approxmatif: {{$data['budget']}}
	</li>
</ul>
<hr>
<p>
	Request for service: <a href="{{url('en/listing/' . $partner->slug)}}">{{$partner->en_company_name}}</a>
</p>
<p>
    Kindly copy contact@partybooker.ch on your initial offer
</p>
<p>Request from info:</p>
<ul>
	<li>
		Name: {{$data['name']}}
	</li>
	<li>
		Mail: {{$data['email']}}
	</li>
	<li>
		Phone: {{$data['phone']}}
	</li>
	<li>Type of event: {{$data['event']}}</li>
	<li>
		Date of Event: {{$data['event_date']}}
	</li>
	<li>
		Alternative date: {{$data['alternative_date']}}
	</li>
	<li>
		Amount of participants: {{$data['participant']}}
	</li>
	<li>
		Number of guests: {{$data['guests']}}
	</li>
	<li>
		Language: {{$data['language']}}
	</li>
	<li>
		Geographic Zone: {{$data['zone']}}
	</li>
	<li>
		Need a Caterer: {{$data['caterer']}}
	</li>
	<li>
		Approximate budget: {{$data['budget']}}
	</li>
</ul>
