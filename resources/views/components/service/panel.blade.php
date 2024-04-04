<div {{$attributes->merge(['class' => 'advert-service-panel'])}}>

    @if(isset($top))
        {{$top}}
    @endif


    <div class="d-flex gap-4">
        <div class="w-100">
            @if(isset($left))
                {{$left}}
            @endif
        </div>

        <div class="w-100">
            @if(isset($right))
                {{$right}}
            @endif


        </div>
    </div>
</div>

