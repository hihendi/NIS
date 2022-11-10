<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $users = User::all();
        $roles = Role::all();
        return view('dashboard.index', compact('users', 'roles'));
    }
}
