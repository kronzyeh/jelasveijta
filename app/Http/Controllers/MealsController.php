<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Meal;

class MealsController extends Controller
{
    public function index(Request $request)
{
    $perPage = $request->input('per_page', 5);
    $query = $request->input('query');
    $category = $request->input('category');

    $meals = Meal::query();

    if ($category) {
        $meals = $meals->whereHas('category', function ($query) use ($category) {
            $query->where('name', $category);
        });
    }

    if ($query) {
        $meals = $meals->where('title', 'like', '%' . $query . '%');
    }

    $meals = $meals->paginate($perPage);

    return view('meals.index', [
        'meals' => $meals,
        'query' => $query,
        'category' => $category,
    ]);
}


}