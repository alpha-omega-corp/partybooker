<?php


namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Advert;
use App\Models\Partner;
use App\Models\Services\CatererService;
use DB;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Validator;

class CatererController extends Controller
{
    public function create($advertId, Request $request)
    {
        //SERVICE PROVIDER ID:
        if (Auth::user()->type == 'admin') {
            $id_partner = $request->id_partner;
        } else {
            $id_partner = Auth::user()->id_partner;
        }

        $validator = Validator::make($request->all(), [
            'comment' => 'max:500'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors());
        }

        DB::beginTransaction();
        try {

            $partner = Partner::where('id_partner', $id_partner)->first();
            if (!$partner) {
                throw new Exception('Partner info not found forbidden');
            }

            $advert = Advert::where('id', $advertId)->where('partners_info_id', $partner->id)->first();
            if (!$advert) {
                throw new Exception('Access forbidden');
            }

            $item = new CatererService();
            $item->id_partner = $id_partner;

            //WORKING SCHEDULE
            //Annual holidays
            $item->holidays = $request->holidays;

            //RATES & CONDITIONS
            //Price
//			$item->price_for = $request->price_for;

            //Payment methods
            $item->paymeny = json_encode($request->pay_methods);
            $item->other_payment = $request->otherpayment;

            //Deposit on booking
            $item->deposit = $request->deposit;

            //Payment terms & conditions
            $item->p_terms = $request->payment_terms;

            //GENERAl INFO
            //Geographical limit
            $item->geo = $request->geo;

            //Min/max guests
            $item->min_guests = $request->min_guests;
            $item->max_guests = $request->max_guests ?? null;

            //Smood.ch link
            $item->smood = $request->smood;

            //SPECIALITIES
            //Specialities
            $item->specialities = $request->specialties;

            //Menus
            $menus = [];
            if ($request->file('menu')) {
                foreach ($request->file('menu') as $key => $m) {
                    $keyq = $key + 1;
                    $menu = $id_partner . '-' . $m->getClientOriginalName();
                    if ($keyq <= $m) {
                        $m->storeAs('menus', $menu);
                        array_push($menus, $menu);
                    }
                }
            }
            $item->menu = json_encode($menus);

            //OTHER SERVICES
            //Logistic service
            $item->logistic = $request->logistic ? json_encode($request->logistic) : json_encode([]);

            //Staff
            $item->staff = $request->staff ? json_encode($request->staff) : json_encode([]);

            //Tableware
            $item->tableware = $request->tableware ? json_encode($request->tableware) : json_encode([]);

            //Furnishing equipment
            $item->furnishing = $request->furnishing ? json_encode($request->furnishing) : json_encode([]);

            //Decoration elements
            $item->decoration = $request->decoration ? json_encode($request->decoration) : json_encode([]);

            //Office
            $item->office = $request->office ? json_encode($request->office) : json_encode([]);

            //Other services
            $item->other_services = $request->other_services;

            //COMMENT
            $item->comment = $request->comment;

            Partner::where('id_partner', $id_partner)->update(['budget' => $request->budget]);

            $item->save();
            //$advert->service()->save($item);
            $advert->status = Advert::STATUS_ACTIVE;
            $item->advert()->save($advert);

            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error', $e->getMessage());
        }

        return redirect()->back()->with('success', 'Created');
    }

    public function editSpecialties($advertId, Request $request)
    {
        if (Auth::user()->type == 'admin') {
            $id_partner = $request->id_partner;
        } else {
            $id_partner = Auth::user()->id_partner;
        }

        DB::beginTransaction();


        try {
            $partner = Partner::where('id_partner', $id_partner)->first();
            if (!$partner) {
                throw new Exception('Partner info not found forbidden');
            }

            $advert = Advert::where('id', $advertId)->where('partners_info_id', $partner->id)->first();
            if (!$advert) {
                throw new Exception('Access forbidden');
            }

            $service = $advert->service();

            $specialties = $request->specialties;
            $fileNum = $request->fileNum;
            $filesMax = 5;

            $menus = [];
            $tempMenus = [];
            if ($request->file('menu')) {
                if ($fileNum < 1) {
                    foreach ($request->file('menu') as $key => $m) {
                        $keyq = $key + 1;
                        $menu = $id_partner . '-' . $m->getClientOriginalName();
                        if ($keyq <= $m) {
                            $m->storeAs('menus', $menu);
                            array_push($menus, $menu);
                        }
                    }
                    $menus = json_encode($menus);
                } else {
                    $allowed = $filesMax - $fileNum;
                    $menus = $advert->service->menu ? json_decode($advert->service->menu) : [];
                    foreach ($request->file('menu') as $key => $i) {
                        if ($key < $allowed) {
                            $menu = $id_partner . '-' . $i->getClientOriginalName();
                            $menus[] = $menu;
                            $tempMenus[] = $menu;
                            $i->storeAs('menus', $menu);
                        }
                    }
                }
            }
            $service->update(['specialities' => $specialties, 'menu' => $menus]);

            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
            foreach ($tempMenus as $m) {
                Storage::delete('menus/' . $m);
            }
            return redirect()->back()->with('error', $e->getMessage());
        }

        return redirect()->back()->with('success', 'Created');
    }

    public function removeMenu(Request $request)
    {

        $caterer = CatererService::where('id', $request->id)->first();
        $menus = $caterer->menu ? json_decode($caterer->menu) : [];

        try {
            $key = array_search($request->fileDel, $menus);
            if (false !== $key) {
                unset($menus[$key]);
                Storage::delete('menus/' . $request->fileDel);
            }
            $caterer->menu = $menus;
            $caterer->save();
        } catch (Exception $e) {
            return response()->json(['message' => $e->getMessage()], 400);
        }
        return response()->json(['message' => 'Ok'], 200);
    }
}
