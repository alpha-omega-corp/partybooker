<?php


namespace App\Http\Controllers;

use App\Models\SwisswinDirectory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SwisswinDirectoryController extends Controller
{

	public function swisswin()
	{
		$items = SwisswinDirectory::all();
		return \view('admin.swisswine.index', ['items' => $items]);
	}

	public function getAjax($id)
	{
		$item = SwisswinDirectory::find($id);
		if (!$item) {
			return response()->json(['message' => 'Not found'], 400);
		}

		return response()->json($item, 200);
	}


	public function remove($id)
	{
		try {
			$item = SwisswinDirectory::find($id);
			if (!$item)
				return redirect()->back()->with('error', 'Item not found');

			Storage::delete('swisswine_directories/' . $item->image);
			$item->delete();
			return redirect()->back();
		} catch (\Exception $e) {
			return redirect()->back()->with('error', $e->getMessage());
		}
	}


	public function store(Request $request)
	{
		try {
			$validator = \Validator::make($request->all(), [
				'title' => 'required',
				'url' => 'required',
			]);

			if ($validator->fails()) {
				return redirect()->back()->withErrors($validator->errors())->withInput();
			}

			$file = $request->file('image');
			$file_name = time() . '_' . $file->getClientOriginalName();

			$file->storeAs('swisswine_directories', $file_name);

			$model = new SwisswinDirectory();
			$model->title = $request->get('title');
			$model->url = $request->get('url');
                        $model->image_alt = $request->get('image_alt');
                        $model->image_alt_fr = $request->get('image_alt_fr');
			$model->image = $file_name;
			if ($model->save()) {
				return redirect()->back();
			}
			return redirect()->back()->with('error', 'Can`t save data');
		} catch (\Exception $e) {
			return redirect()->back()->with('error', $e->getMessage());
		}
	}

	public function update(Request $request)
	{
		try {
			$validator = \Validator::make($request->all(), [
				'title' => 'required',
				'url' => 'required',
			]);

			if ($validator->fails()) {
				return redirect()->back()->withErrors($validator->errors())->withInput();
			}

			$model = SwisswinDirectory::find($request->get('id'));
			$model->title = $request->get('title');
			$model->url = $request->get('url');
                        $model->image_alt = $request->get('image_alt');
                        $model->image_alt_fr = $request->get('image_alt_fr');
			$file_name = null;
			$oldImage = $model->image;

			if ($request->has('image')) {
				$file = $request->file('image');
				$file_name = time() . '_' . $file->getClientOriginalName();
				$file->storeAs('swisswine_directories', $file_name);
				Storage::delete('swisswine_directories/' . $oldImage);
			}

			$model->image = $request->file('image') ? $file_name : $model->image;
			if ($model->update()) {

				return redirect()->back();
			}
			return redirect()->back()->with('error', 'Can`t update data');
		} catch (\Exception $e) {
			return redirect()->back()->with('error', $e->getMessage());
		}
	}

}
