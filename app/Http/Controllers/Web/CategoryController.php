<?php


namespace App\Http\Controllers\Web;


use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;


class CategoryController extends Controller
{
    public function getCategoriesAjax(Request $request)
    {
        if (!$request->ajax()) {
            return response()->json([], 200);
        }

        $data = Category::whereNull('parent_id')->with(['lang', 'subCategories', 'subCategories.lang'])->get();

        return response()->json($data, 200);
    }

}

