<div class="btn-group dropstart">
    <button class="btn btn-labeled btn-primary text-uppercase" data-bs-toggle="dropdown" data-bs-display="static"
        aria-expanded="false">
        <span class="btn-label">
            <i class="bi bi-tags"></i>
        </span>
        <span class="btn-text">
            {{ __('main.event-types') }}
        </span>
    </button>
    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-lg-start">
        <form action="{{ $partners->url(1) }}">
            @foreach ($eventTypes as $key => $et)
                <li>
                    <div class="form-check form-switch dropdown-item" x-data=""
                        @click.debounce.100ms="document.getElementById('etSubmit').click()">
                        <input class="form-check-input" type="checkbox" role="switch" id="{{ 'eventType-' . $key }}"
                            @if (\Request::has('event_types') && in_array($et['slug'], \Request::get('event_types'))) checked @endif name="event_types[]"
                            value="{{ $et['slug'] }}" />
                        <label class="form-check-label" for="{{ 'eventType-' . $key }}" x-data=""
                            @click.debounce.100ms="document.getElementById('etSubmit').click()">
                            {{ $et['name'] }}
                        </label>
                    </div>
                </li>
            @endforeach
            <button id="etSubmit" type="submit" x-cloak></button>
        </form>
    </ul>
</div>
