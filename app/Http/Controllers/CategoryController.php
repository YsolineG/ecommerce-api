<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;


class CategoryController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function index()
    {
     
     $categories = Category::all();

     return response()->json($categories);

    }

    public function create(Request $request)
    {
        $categories = new Category;

        $categories->name= $request->name;

        $categories->save();

        return response()->json($categories);
    }

    public function show($id)
    {
        $categories = Category::find($id);

        return response()->json($categories);
    }

    public function update(Request $request, $id)
    { 
        $categories= Category::find($id);

        $categories->name = $request->input('name');
        $categories->save();
        return response()->json($categories);
    }

    public function destroy($id)
    {
        $categories = Category::find($id);
        $categories->delete();

        return response()->json('product removed successfully');
    }
}