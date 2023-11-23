<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function getUsers()
    {
        return view('Admin_Users');
    }

    public function getProducts()
    {
        return view('Admin_Products');
    }
}
