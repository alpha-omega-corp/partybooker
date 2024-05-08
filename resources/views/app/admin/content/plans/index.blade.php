<div class="admin-plans-container">
    @foreach($plans as $item)
        <div class="admin-plan-card">
            <div class="d-flex gap-4 justify-content-between align-items-center">
                <x-plan.title :plan="$item" class="plan-card-title"/>

                <div class="d-flex">
                    @include('app.admin.content.plans.partials.preview', ['item' => $item])
                    @include('app.admin.content.plans.partials.edit', ['item' => $item])
                </div>
            </div>
        </div>
    @endforeach
</div>
