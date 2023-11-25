<?php

namespace App\Http\Controllers;

use App\Models\User;
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

    public function updateUser(User $user)
    {
        return view('Admin_Update_User', ['user' => $user]);
    }

    public function getProducts()
    {
        return view('Admin_Products');
    }

    
    
}
