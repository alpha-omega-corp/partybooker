<?php

namespace App\Http\Controllers;

use App\Enums\Language;
use App\Http\Requests\UpdateCompanyContactRequest;
use App\Http\Requests\UpdateCompanyDescriptionRequest;
use App\Http\Requests\UpdateCompanyLocationRequest;
use App\Http\Requests\UpdateCompanyRequest;
use App\Http\Requests\UpdateCompanyStatsRequest;
use App\Interfaces\IFileService;
use App\Models\Company;
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

    public function updateLocation(Company $company, UpdateCompanyLocationRequest $request)
    {
        $data = $request->validated();

        //TODO: remove if statement after migration
        if ($company->location) {
            $company->location->update([
                'address' => $data['address'],
                'city' => $data['city'],
                'state' => $data['state'],
                'zip' => $data['zip'],
                'country' => $data['country'],
            ]);
        } else {
            $loc = $company->location()->create([
                'address' => $data['address'],
                'city' => $data['city'],
                'state' => $data['state'],
                'zip' => $data['zip'],
                'country' => $data['country'],
            ]);

            $company->update([
                'company_location_id' => $loc->id,
            ]);
        }


        return back()->with('success', 'Company location updated successfully');
    }

    public function update(Company $company, UpdateCompanyRequest $request)
    {
        $data = $request->validated();

        if (isset($data['logo'])) {
            $logo = $this->fileService->companyLogo($data['logo']);
        }

        $company->update([
            'logo' => $logo ?? $company->logo,
            'name' => $data['name'],
            'slug' => $data['slug'],
        ]);

        return back()->with('success', 'Company updated successfully');
    }

    public function updateDescription(Company $company, UpdateCompanyDescriptionRequest $request)
    {
        $data = $request->validated();

        $company->ofLang(Language::FR)->first()->locale->update([
            'slogan' => $data['slogan_fr'],
            'description' => $data['description_fr'],
        ]);
        $company->ofLang(Language::EN)->first()->locale->update([
            'slogan' => $data['slogan_en'],
            'description' => $data['description_en'],
        ]);

        return back()->with('success', 'Company updated successfully');
    }

    public function updateContact(Company $company, UpdateCompanyContactRequest $request)
    {
        $data = $request->validated();

        $company->contact->update([
            'email' => $data['email'],
            'phone' => $data['phone'],
            'fax' => $data['fax'],
        ]);

        return back()->with('success', 'Company contacts updated successfully');
    }

    public function updateStatistics(Company $company, UpdateCompanyStatsRequest $request)
    {
        $data = $request->validated();

        $company->statistics->update([
            'clicks' => $data['clicks'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'website' => $data['website'],
            'instagram' => $data['instagram'],
            'facebook' => $data['facebook'],
            'youtube' => $data['youtube'],
            'twitter' => $data['twitter'],
            'linkedin' => $data['linkedin'],
        ]);

        return back()->with('success', 'Company statistics updated successfully');
    }

    public function request()
    {
    }

}
