@php use App\Helpers\BudgetsHelper; @endphp


@php

    $cantonNames = [
        __('cantons.ag_loc'),
        __('cantons.ai_loc'),
        __('cantons.ar_loc'),
        __('cantons.bs_loc'),
        __('cantons.bl_loc'),
        __('cantons.be_loc'),
        __('cantons.fr_loc'),
        __('cantons.ge_loc'),
        __('cantons.gl_loc'),
        __('cantons.gr_loc'),
        __('cantons.ju_loc'),
        __('cantons.lu_loc'),
        __('cantons.ne_loc'),
        __('cantons.nw_loc'),
        __('cantons.ow_loc'),
        __('cantons.sh_loc'),
        __('cantons.sz_loc'),
        __('cantons.so_loc'),
        __('cantons.sg_loc'),
        __('cantons.tg_loc'),
        __('cantons.ti_loc'),
        __('cantons.ur_loc'),
        __('cantons.vs_loc'),
        __('cantons.vd_loc'),
        __('cantons.zg_loc'),
        __('cantons.zh_loc'),
    ];

    $cantonShortCodes = [
        __('cantons.ag'),
        __('cantons.ai'),
        __('cantons.ar'),
        __('cantons.bs'),
        __('cantons.bl'),
        __('cantons.be'),
        __('cantons.fr'),
        __('cantons.ge'),
        __('cantons.gl'),
        __('cantons.gr'),
        __('cantons.ju'),
        __('cantons.lu'),
        __('cantons.ne'),
        __('cantons.nw'),
        __('cantons.ow'),
        __('cantons.sh'),
        __('cantons.sz'),
        __('cantons.so'),
        __('cantons.sg'),
        __('cantons.tg'),
        __('cantons.ti'),
        __('cantons.ur'),
        __('cantons.vs'),
        __('cantons.vd'),
        __('cantons.zg'),
        __('cantons.zh'),
    ];

@endphp

<div class="btn-group dropstart">
    <button type="button" class="btn btn-labeled btn-accent text-uppercase" data-bs-toggle="dropdown"
            data-bs-display="static" aria-expanded="false">
        <span class="btn-label">
            @svg('heroicon-o-globe-americas')
        </span>
        <span class="btn-text">

            Cantons

        </span>
    </button>
    <ul class="dropdown-menu">

        @foreach ($cantonNames as $k => $v)
            <li class="dropdown-item p-2">
                <a data-value="{{ $cantonShortCodes[$k] }}"
                   href="{{ request()->url(). '?place=' . $cantonShortCodes[$k] }}"
                   class="text-dark">
                    {{ $v }}
                </a>
            </li>
        @endforeach
    </ul>
</div>
