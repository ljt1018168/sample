<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use APP\Http\Requests;

class UsersController extends Controller
{
    public function create()
    {
    	return view('users.create');
    }
}
