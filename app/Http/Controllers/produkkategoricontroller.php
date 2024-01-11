<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class produkkategoricontroller extends Controller
{
    public function dashboardadmin()
    {
        return view('dashboardadmin');
    }

    public function dashboardstaff()
    {
        return view('dashboardstaff');
    }
}
