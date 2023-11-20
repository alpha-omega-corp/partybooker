@extends('admin.admin')

@section('page')
    page="swisswine"
@endsection

@section('title')
    <title>{{ __('partybooker-cp.swisswine_directories') }} | {{ __('partybooker-cp.www') }}</title>
@endsection

@section('content')
    <div id="page">
        <div class="container card-block">
            @if ($message = Session::get('success'))
                <div class="alert alert-success alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>{{ $message }}</strong>
                </div>
            @endif


            @if ($message = Session::get('error'))
                <div class="alert alert-danger alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>{{ $message }}</strong>
                </div>
            @endif

            <div class="row">
                <div class="col-12">
                    <a href="#" class="btn button" data-toggle="modal" data-target="#create-modal">Add new
                        directory</a>
                </div>
            </div>
            <br>
            <div class="row">
                @foreach ($items as $item)
                    <div class="card col-lg-3 col-md-4 col-sm-6">
                        <div class="card-body">
                            <a href="/cp/swisswin/remove/{{ $item->id }}" class="btn button btn-remove">Remove</a>
                            <a href="#" id="edit-button" data-id="{{ $item->id }}" class="btn button"
                               data-toggle="modal" data-target="#modal-edit">Edit</a>
                        </div>
                        <a href="{{ $item->url }}" target="_blank">
                            <img src="{{ Vite::image('storage/swisswine_directories/' . $item->image) }}"
                                 class="card-img-top">
                            <h5 class="card-title">{{ $item->title }}</h5>
                        </a>

                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="modal fade" id="create-modal" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Add new</h4>
                </div>
                <div class="modal-body">
                    <form method="post" action="/cp/swisswin/store" enctype="multipart/form-data">
                        @csrf
                        <label>Title</label>
                        <input type="text" name="title" required>

                        <label>Website</label>
                        <input type="url" name="url" required>

                        <label>Select image</label>
                        <input type="file" name="image" required>

                        <label>Image ALT</label>
                        <input type="text" name="image_alt">

                        <label>Image ALT FR</label>
                        <input type="text" name="image_alt_fr">
                        <div class="row">
                            <button type="button" style="float: right" class="btn btn-default" data-dismiss="modal">
                                Close
                            </button>
                            <button type="submit" style="float: right" class="btn btn-primary">Create</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>


    <div class="modal fade" id="modal-edit" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Edit</h4>
                </div>
                <div class="modal-body">
                    <form id="form-edit" method="post" action="/cp/swisswin/update" enctype="multipart/form-data">
                        @csrf
                        <input id="id" type="hidden" name="id">
                        <label>Title</label>
                        <input id="title" type="text" name="title" required>

                        <label>Website</label>
                        <input id="url" type="url" name="url" required>

                        <label>Select image</label>
                        <input type="file" name="image">


                        <label>Image ALT</label>
                        <input type="text" name="image_alt" id="image_alt">
                        <label>Image ALT FR</label>
                        <input type="text" name="image_alt_fr" id="image_alt_fr">
                        <div class="row">
                            <button type="button" style="float: right" class="btn btn-default" data-dismiss="modal">
                                Close
                            </button>
                            <button type="submit" style="float: right" class="btn btn-primary">Edit</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
@endsection

@push('head')
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
@endpush

@push('footer')
    <script>
        $('a#edit-button').on('click', function () {

            var id = $(this).data('id');

            $.ajax({
                url: '/cp/swisswin/' + id,
                type: 'GET',
                success: function (data) {
                    var form = $('form#form-edit');
                    form.find('input#id').val(data.id);
                    form.find('input#title').val(data.title);
                    form.find('input#url').val(data.url);
                    form.find('input#image_alt').val(data.image_alt);
                    form.find('input#image_alt_fr').val(data.image_alt_fr);
                    form.find('img#image').attr('src',
                        '{{ asset('storage/swisswine_directories') }}/' + data.image);
                },
                error: function (r) {
                    var data = JSON.parse(r.responseText);
                    alert(data.message);
                    return false;
                }
            });

        });
    </script>
@endpush
