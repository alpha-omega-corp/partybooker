<div class="plans-content-card">
    @foreach($plans as $plan)
        <x-plan.card :plan="$plan"></x-plan.card>
    @endforeach
</div>
