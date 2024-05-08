<?php

namespace App\Http\Controllers\App;

use App\Enums\Language;
use App\Http\Controllers\Controller;
use App\Http\Requests\UpdatePlanRequest;
use App\Models\AppPlan;
use Illuminate\Http\RedirectResponse;

class PlanController extends Controller
{
    public function update(AppPlan $plan, UpdatePlanRequest $request): RedirectResponse
    {
        $data = $request->validated();

        $plan->update([
            'color' => $data['color'],
            'price' => $data['price'],
            'upload_count' => $data['upload_count'],
            'advert_count' => $data['advert_count'],
            'tag_count' => $data['tag_count'],
        ]);

        $plan->ofLang(Language::FR)->first()->locale->update([
            'name' => $data['name_fr'],
            'description' => $data['description_fr'],
        ]);

        $plan->ofLang(Language::EN)->first()->locale->update([
            'name' => $data['name_en'],
            'description' => $data['description_en'],
        ]);

        return back()->with('success', 'Plan updated successfully!');
    }
}
