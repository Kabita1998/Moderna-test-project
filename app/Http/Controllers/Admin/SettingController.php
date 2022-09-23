<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SiteSetting;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class SettingController extends Controller
{
    // Tsite Settings
    public function settings(){
        $setting= SiteSetting::first();
        return view ('admin.setting.setting',compact('setting'));
    }

    // update site settings
    public function settingsUpdate(Request $request, $id){
        $data=$request->all();
        $setting= SiteSetting::first();
        $setting->email = $data['email'];
        $setting->phone = $data['phone'];
        $setting->address = $data['address'];  
       $setting->save();
       Session::flash('success_message', 'Site Settings has been Updated Successfully');
        return redirect()->back();


    }
}
