<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function getUsers()
    {
        return view('Admin_Users');
    }
}
