<?php


namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Interfaces\IPlanService;
use App\Models\Advert;
use App\Models\AdvertCategory;
use App\Models\PartnersInfo;
use App\Models\PlanOption;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PlanOptionController extends Controller
{
    private IPlanService $planService;

    public function __construct(IPlanService $planService)
    {
        $this->planService = $planService;
    }

    public function getPlanOptionsAjax($idPartner, Request $request)
    {
        if (!$request->ajax()) {
            return response()->json([], 400);
        }

        if (Auth::user()->type != 'admin') {
            $idPartner = Auth::user()->id_partner;
        }
        $partner = PartnersInfo::where('id_partner', $idPartner)->first();
        if (!$partner) {
            return response()->json([]);
        }

        $options = PlanOption::where('plans_id', $partner->plans_id)->get();
        $temp = [];
        foreach ($options as $option) {
            $temp[$option->group][] = $option;
        }

        $list = [];

        foreach ($temp as $id => $opt) {
            $name = "";
            $j = 0;
            foreach ($opt as $item) {
                $name = $name . "{$item->categories_count} cat. ({$item->sub_categories_count} sub.cat. per cat.)";
                $j++;
                if ($j != count($opt)) {
                    $name = $name . " and ";
                } else {
                    $list[] = [
                        'group' => $id,
                        'name' => rtrim($name, "")
                    ];
                    $name = '';
                }
            }
        }

        return response()->json($list, 200);
    }


    public function editOption(Request $request)
    {
        if (Auth::user()->type == 'admin') {
            $id = $request->id_partner;
        } else {
            $id = Auth::user()->id_partner;
        }

        DB::beginTransaction();
        try {
            $partner = PartnersInfo::where('id_partner', $id)->first();
            if (!$partner) {
                throw new Exception('Partner not found');
            }

            $this->planService->applyOptions($partner->id, $partner->plans_id, $request->get('option'));
            AdvertCategory::where('partners_info_id', $partner->id)->delete();

            $advert = Advert::where('partners_info_id', $partner->id);
            $advert->update(['status' => Advert::STATUS_INACTIVE]);


            $partner->plan_option_group = $request->get('option');
            $partner->public = 0;
            if (!$partner->save()) {
                throw new Exception("Cant update partner info");
            }
            DB::commit();

            return redirect()->back()->with('success', 'Plan option selected');
        } catch (Exception $e) {

            DB::rollBack();
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
}
