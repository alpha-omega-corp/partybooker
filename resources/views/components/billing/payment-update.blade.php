<!-- Payment Index -->
<a data-bs-toggle="modal" data-bs-target="#paymentModalUpdate" class="d-none" id="update-card"></a>

<div class="modal fade" id="paymentModalUpdate" tabindex="-1" aria-labelledby="paymentModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5 text-uppercase fw-bold" id="paymentModalLabel">
                    {{ __('partner.payment') }}
                </h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <x-billing.payment :intent="$intent" :update="true"/>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
