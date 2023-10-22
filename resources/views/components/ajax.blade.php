@props([
    'url',
    'data'
])

<div>
    @php
        $request = new \Illuminate\Http\Request();
    @endphp

    <button onclick="post()" class="btn btn-primary">Submit</button>
    <input type="hidden" value="{{ $url }}" id="ajax-url">

    @foreach($data as $key => $value)
        <input type="hidden" name="{{$key}}" value="{{ $value }}" class="ajax-data">
    @endforeach
</div>


<script>
    const CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
    const body = document.getElementsByClassName('ajax-data');

    const data = {};
    data['_token'] = CSRF_TOKEN;
    for (let i = 0; i < body.length; i++) {
        data[body[i].name] = body[i].value
    }

    function post() {
        $.ajax({
            url: document.getElementById('ajax-url').value,
            type: 'POST',
            data: data
        })
    }

</script>
