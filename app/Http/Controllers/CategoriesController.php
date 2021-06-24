<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categories;

class CategoriesController extends Controller
{
    public function getCategories() {
        return response()->json(Categories::all(), 200);
    }


    public function getCategoriesById($id) {
        $categori = Categories::find($id);
        if(is_null($categori)) {
            return response()->json(['message' => 'Categories Not Found'], 404);
        }
        return response()->json($Categories::find($id), 200);
    }

    public function addCategories(Request $request) {
        $categori = Categories::create($request->all());
        return response($categori, 201);
    }

    public function updateCategories(Request $request, $id) {
        $categori = Categories::find($id);
        if(is_null($categori)) {
            return response()->json(['message' => 'Categories Not Found'], 404);
        }
        $categori->update($request->all());
        return response($categori, 200);
    }

    public function deleteCategories(Request $request, $id) {
        $categori = Categories::find($id);
        if(is_null($categori)) {
            return response()->json(['message' => 'Categories Not Found'], 404);
        }
        $categori->delete();
        return response()->json(null, 204);
    }
}
