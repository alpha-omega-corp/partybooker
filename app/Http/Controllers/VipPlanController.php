<?php


namespace App\Http\Controllers;


use App\Http\Middleware\LocaleMiddleware;
use App\Models\Partner;
use App\Models\PartnerVipPlan;
use App\Models\PartnerVipPlanCategory;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class VipPlanController extends Controller
{

    public function updateData(Request $request)
    {
        \DB::beginTransaction();
        try {
            $id = $request->get('id_partner');
            $partner = Partner::where('id_partner', $id)->first();
            if (!$partner) {
                throw new \Exception("Partner not found");
            }

            $vip = PartnerVipPlan::where('partners_info_id', $partner->id)->first();
            $vip->website_url = $request->get('website_url');
            if ($request->get('category')) {
                $temp = [];
                foreach ($request->get('category') as $cat) {
                    $temp[] = [
                        'partner_vip_plans_id' => $vip->id,
                        'category' => $cat
                    ];
                }

                PartnerVipPlanCategory::where('partner_vip_plans_id', $vip->id)->delete();
                PartnerVipPlanCategory::insert($temp);
            }

            if ($request->hasFile('files')) {
                $imageName = $partner->id_partner . '_' . $request->file('files')->getClientOriginalName();
                $request->file('files')->storeAs('banners', $imageName);
                if ($vip->image) {
                    Storage::delete('banners/' . $vip->image);
                }
                $vip->image = $imageName;
            }

            $vip->update();

            \DB::commit();
            if (Auth::user()->type == 'admin') {
                return redirect()->back()->with('success', 'Data updated');
            } else {
                return redirect()->back();
            }
        } catch (\Exception $e) {
            \DB::rollBack();
            if (Auth::user()->type == 'admin') {
                return redirect()->back()->with("error", $e->getMessage());
            } else {
                return redirect()->back()->with("error", $e->getMessage());
            }
        }
    }

}
