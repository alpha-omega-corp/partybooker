<?php


namespace App\Http\Controllers;

use App\Http\Requests\StoreServiceRequest;
use App\Http\Requests\StoreServiceRequestCaterer;
use App\Interfaces\IRequestService;
use App\Models\DirectMessage;
use App\Models\Partner;
use App\Services\RequestService;
use Illuminate\Http\RedirectResponse;

class ServiceRequestController extends Controller
{
    private RequestService $requestService;

    public function __construct(IRequestService $requestService)
    {
        $this->requestService = $requestService;
    }

    public function requestFormAction(StoreServiceRequest $request): RedirectResponse
    {
        $validated = $request->validated();
        $partner = Partner::find($validated['partner-info-id']);

        $this->requestService->sendRequest($partner, $validated, DirectMessage::TYPE_GENERAL);

        return redirect()->back()->with('success', 'Your request was sent successfully');
    }

    public function catererFormAction(StoreServiceRequestCaterer $request): RedirectResponse
    {
        $validated = $request->validated();
        $partner = Partner::find($validated['partner-info-id']);
        $this->requestService->sendRequest($partner, $validated, DirectMessage::TYPE_CATERER);

        return redirect()->back()->with('success', 'Your request was sent successfully');

    }
}
