<?php


namespace App\Http\Controllers;

use App\Models\PartnersInfo;
use App\Models\PlanOption;
use App\Models\Plans;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class PlanController extends BaseController
{
	private static $DAYS_PERIOD = 365;

	public function readAjax($id)
	{
		$plan = Plans::with('planOptions')->where('id', $id)->first();
		if ($plan == null) {
			return response()->json(['message' => 'not found'], 404);
		}


		return response()->json($plan);
	}


	public function store(Request $request)
	{

		$validator = Validator::make($request->all(),
			[
				'name' => 'required|unique:plans'
			]);

		if ($validator->fails()) {
			return response()->json(['message' => implode('<br>', $validator->errors()->all())], 400);
		}


		DB::beginTransaction();

		try {
			$plan = new Plans();
			$plan->name = $request->get('name');
			$plan->position = $request->get('position');
			$plan->listing = 0;
			$plan->photos_num = $request->get('photos');
			$plan->video = $request->get('video');
			$plan->direct_request = $request->get('d_request');
			$plan->price = $request->get('price');
			$plan->days_period = self::$DAYS_PERIOD;
			$plan->plan_created = date('Y-m-d h:m:s');

			if ($plan->save()) {
				$options = [];
				foreach ($request->get('option') as $k => $option) {
					$options[] = [
						'plans_id' => $plan->id,
						'categories_count' => $option['categories'],
						'sub_categories_count' => $option['sub_categories'],
						'group' => $option['group']
					];
				}

				PlanOption::insert($options);
			}
		} catch (\Exception $ex) {
			DB::rollBack();
			return response()->json(['message' => $ex->getMessage()]);
		}

		DB::commit();

		return response()->json(['message' => 'Plan created'], 200);
	}

	public function update(Request $request)
	{

		$plan = Plans::where('name', $request->get('name'))->first();
		if ($plan && $plan->id != $request->get('id')) {
			return response()->json(['message' => 'Plan name already taken'], 400);
		}

		DB::beginTransaction();

		try {

			$plan = Plans::where('id', $request->get('id'))->first();
			$plan->name = $request->get('name');
			$plan->position = $request->get('position');
			$plan->listing = 0;
			$plan->photos_num = $request->get('photos');
			$plan->video = $request->get('video');
			$plan->direct_request = $request->get('d_request');
			$plan->price = $request->get('price');
			$plan->days_period = self::$DAYS_PERIOD;

			if ($plan->update()) {
				PlanOption::where('plans_id', $plan->id)->delete();
				$options = [];
				foreach ($request->get('option') as $k => $option) {
					$options[] = [
						'plans_id' => $plan->id,
						'categories_count' => $option['categories'],
						'sub_categories_count' => $option['sub_categories'],
						'group' => $option['group']
					];
				}

				PlanOption::insert($options);
			}
		} catch (\Exception $ex) {
			DB::rollBack();
			return response()->json(['message' => $ex->getMessage()]);
		}

		DB::commit();

		return response()->json(['message' => 'Plan created'], 200);
	}


	public function delete($id)
	{
		$isUsed = PartnersInfo::where('plans_id', $id)->first();
		if ($isUsed) {
			return redirect($this->lang . '/cp/setting/plans')->with('success', 'This plan is used. Change all partners plans and try again.');
		}

		try {
			Plans::where('id', $id)->delete();
		} catch (\Exception $e) {
			return redirect()->back()->with('error', 'Can`t delete this plan.');
		}

		return redirect()->back()->with('success', 'Plan removed.');
	}

}
