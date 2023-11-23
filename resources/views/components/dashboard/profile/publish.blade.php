@php use App\Http\Middleware\LocaleMiddleware; @endphp
@props([
    'partner',
    'service'
])

<x-dashboard.card :title="$partner->fr_company_name">
    <x-slot:badge>
        @if ($partner->public == 0)
            <span
                class="status-badge badge text-bg-danger text-white">{{ __('partner.not_published') }}</span>
        @else
            <span
                class="status-badge badge text-bg-primary text-white">{{ __('partner.published') }}</span>
        @endif
    </x-slot:badge>

    @if($service->canPublish($partner->id_partner) || \Illuminate\Support\Facades\Auth::user()->type === 'admin')
        <div class="d-flex flex-column m-0">
            @if ($partner->public == 0)
                <a class="status-button text-primary shadow-lg" role="button"
                   data-id="{{ $partner->id_partner }}">
                    {{ __('partner.publish')}}
                </a>
            @else
                <a class="status-button text-danger shadow-lg" role="button"
                   data-id="{{ $partner->id_partner }}">
                    {{ __('partner.draft') }}
                </a>
            @endif
        </div>

    @endif

    <hr>
    <x-dashboard.company-info :tooltip="__('partner.link')" icon="heroicon-o-globe-alt">
        <a target="_blank" class="text-gray"
           href="{{url(LocaleMiddleware::getLocale() . '/' . __('urls.listing') . '/' . $partner->slug)}}">
            {{'partybooker.ch/' . __('urls.listing') . '/' . $partner->slug}}
        </a>
    </x-dashboard.company-info>
</x-dashboard.card>

<script type="module">
    $('.status-button').on('click', function (e) {
        e.preventDefault();
        if (!$(this).hasClass('disabled')) {
            $('.dashboard-card-badge .status-badge').removeClass('text-bg-primary').removeClass('text-bg-danger');
            $('.status-button').removeClass('text-danger').removeClass('text-primary');

            var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
            var id = $(this).data('id');
            var admin = $('.partner-cp').data('type');
            if (admin == 'admin') {
                var url = '/cp/partner-cp/publish';
            } else {
                var url = '/partner-cp/publish';
            }
            $.ajax({
                url: url,
                type: 'POST',
                data: {
                    _token: CSRF_TOKEN,
                    id_partner: id
                },
                success: function (data) {
                    $('.status-button').html(data.msg);
                    $('.dashboard-card-badge .status-badge').html(data.stat);

                    if (data.status) {
                        $('.dashboard-card-badge .status-badge').addClass('text-bg-primary');
                        $('.status-button').addClass('text-danger');
                    } else {
                        $('.dashboard-card-badge .status-badge').addClass('text-bg-danger');
                        $('.status-button').addClass('text-primary');

                    }


                }
            });
        }
    });
</script>
