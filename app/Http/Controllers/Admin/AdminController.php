<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;  
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Redirect;


class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function dashboard()
    {
        $title = "Dashboard";
        return view('admin.dashboard', compact('title'));
    }
}
