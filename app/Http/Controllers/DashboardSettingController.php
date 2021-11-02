<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardSettingController extends Controller
{
    public function store_settings ()
    {
        return view('pages.dashboard-store-settings');
    }
     public function my_account ()
    {
        return view('pages.dashboard-my-account');
    }
}
