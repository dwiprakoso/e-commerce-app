<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Categories;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index()
    {
        $categories = Categories::all();
        return view('admin.page.categories.index', compact('categories'));
    }
    public function createForm()
    {
        return view('admin.page.categories.create');
    }
}
