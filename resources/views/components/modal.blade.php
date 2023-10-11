@props([
    'name',
    'action',
    'title',
    'submit',
])

<div class="modal fade" id="{{$name}}" aria-hidden="true" aria-labelledby="login" tabindex="-1">
    <form method="POST" action="{{ $action }}">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5 text-uppercase fw-bold text-primary" id="login">
                        {{ $title }}
                    </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    @csrf
                    {{$slot}}
                </div>
                <div class="modal-footer hstack">
                    <div>
                        <button type="submit" class="btn btn-primary text-white">
                            Submit
                        </button>
                    </div>

                    <div>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                            {{ __('main.close') }}
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
