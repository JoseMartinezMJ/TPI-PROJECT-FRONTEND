<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function getCategory()
    {
        return view('Admin_Category');
    }

    public function createCategory()
    {
        return view('Admin_New_Category');
    }

    public function updateCategory(Category $category)
    {
        return view('Admin_Update_Category', ['category' => $category]);
    }

    public function getProducts()
    {
        return view('Admin_Products');
    }

    
    
}
