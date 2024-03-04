<?php

namespace App\Http\Controllers;


use App\Http\Requests\UpdateCompanyRequest;
use App\Interfaces\IFileService;
use App\Models\Company;
use App\Models\Partner;
use App\Services\FileService;

class CompanyController extends Controller
{

    private IFileService $fileService;

    public function __construct(FileService $fileService)
    {
        $this->fileService = $fileService;
    }

    public function show(Company $company)
    {
        return view('app.listing.company', [
            'company' => $company,
        ]);
    }

    public function update(Partner $partner, UpdateCompanyRequest $request)
    {
        $data = $request->validated();

        if (isset($data['logo'])) {
            $logo = $this->fileService->companyLogo($data['logo']);
        }

        $partner->company->update([
            'logo' => $logo ?? $partner->company->logo,
            'name' => $data['name'],
            'slug' => $data['slug'],
        ]);

        $partner->company->contact->update([
            'email' => $data['email'],
            'phone' => $data['phone'],
            'fax' => $data['fax'],
        ]);

        return back()->with('success', 'Company updated successfully');
    }

    public function request()
    {
    }

}
