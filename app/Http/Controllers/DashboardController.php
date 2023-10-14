<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        $adminUserCounts = User::where('level', 'admin')->count();
        $userUserCounts = User::where('level', 'user')->count();
        return view('dashboard.index', compact( 'adminUserCounts', 'userUserCounts'));
    }
}
