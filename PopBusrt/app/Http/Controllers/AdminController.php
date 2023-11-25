<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function getUsers()
    {
        return view('Admin_Users');
    }

    public function createUser()
    {
        return view('Admin_New_User');
    }

    public function updateUser(User $user)
    {
        return view('Admin_Update_User', ['user' => $user]);
    }

    public function getProducts()
    {
        return view('Admin_Products');
    }

    public function createProduct()
    {
        return view('Admin_New_Product');
    }

    public function getSuppliers()
    {
        return view('Admin_Supplier');
    }

    public function createSupplier()
    {
        return view('Admin_New_Supplier');
    }
}
