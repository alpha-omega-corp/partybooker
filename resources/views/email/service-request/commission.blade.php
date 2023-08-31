<p>
	Request for service: <a href="{{url('fr/listing/' . $partner->slug)}}">{{$partner->fr_company_name}}</a>
</p>
<p>
    Veuillez SVP copier contact@partybooker.ch sur votre première offre au client.
</p>
<p>Request from info:</p>
<ul>
	<li>
		Name: {{$data['name']}}
	</li>
	<li>
		E-mail: {{$data['email']}}
	</li>
	<li>
		Téléphone: {{$data['phone']}}
	</li>

	<li>
		Type d'événement: {{$data['event_date']}}
	</li>
	<li>
		Date de l'événement: {{$data['alternative_date']}}
	</li>
	<li>
		Nombre de d'invités?: {{$data['guests']}}
	</li>
	<li>
		Nombre de participants?: {{$data['participant']}}
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
		Email: {{$data['email']}}
	</li>
	<li>
		Phone: {{$data['phone']}}
	</li>

	<li>
		Date of Event: {{$data['event_date']}}
	</li>
	<li>
		Alternative date: {{$data['alternative_date']}}
	</li>
	<li>
		Number of guests: {{$data['guests']}}
	</li>
	<li>
		Amount of participants: {{$data['participant']}}
	</li>
</ul>
