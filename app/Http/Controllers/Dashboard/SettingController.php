<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Setting;

class SettingController extends Controller
{
    //
    public function update(Request $request){
        Setting::create($request->all());
        redirect()->route('dashboard.settings');
    }
}
