<div class="btn-group">
    <button type="button" class="btn btn-secondary dropdown-toggle p-fixed text-uppercase" data-bs-toggle="dropdown"
        data-bs-display="static" aria-expanded="false">
        {{ __('main.event-types') }}
    </button>
    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-lg-start">
        <form action="{{ $partners->url(1) }}">
            @foreach ($eventTypes as $key => $et)
                <li>
                    <div class="form-check form-switch dropdown-item"
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

            <a href="{{ request()->url() }}">Clear Filters</a>
            <button id="etSubmit" type="submit" x-cloak></button>
        </form>

    </ul>
</div>


<div class="event-types-large">
    <h6 class="text-uppercase text-center fw-bold fs-2 filter-title">
        {{ __('main.event-types') }}
    </h6>
    <ul>
        <form action="{{ $partners->url(1) }}">
            @foreach ($eventTypes as $key => $et)
                <div class="form-check form-switch" @click.debounce.100ms="document.getElementById('etSubmit').click()">
                    <input class="form-check-input" type="checkbox" role="switch" id="{{ 'eventType-' . $key }}"
                        @if (\Request::has('event_types') && in_array($et['slug'], \Request::get('event_types'))) checked @endif name="event_types[]"
                        value="{{ $et['slug'] }}" />
                    <label class="form-check-label" for="{{ 'eventType-' . $key }}" x-data=""
                        @click.debounce.100ms="document.getElementById('etSubmit').click()">
                        {{ $et['name'] }}
                    </label>
                </div>
            @endforeach

            <a href="{{ request()->url() }}">Clear Filters</a>

            <button id="etSubmit" type="submit" x-cloak></button>


        </form>
    </ul>
</div>
