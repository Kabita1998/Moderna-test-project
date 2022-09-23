<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Theme;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;
class ThemeController extends Controller
{
    // Theme Settings
    public function theme(){
        $theme= Theme::first();
        return view ('admin.theme.theme',compact('theme'));
    }
    // update Theme settings
    public function themeUpdate(Request $request, $id){
        $data=$request->all();
        $rules =[
            'website_name'=>'required|max :40',
            'website_tagline'=> 'required'
            
          ];
       $customMessages=[
        'website_name.required'=>' Website Name is  required',
           'website_tagline.required'=>'Website tagline is required',
            'website_name.max'=>'You are not allowed to enter more then 40 character',
       ];
       $this->validate($request,$rules,$customMessages);
       $theme = Theme::findOrfail($id);
       $theme->website_name = $data['website_name'];
       $theme->website_tagline = $data['website_tagline'];
       $theme->address = $data['address'];
       $theme->phone = $data['phone'];
       $theme->email = $data['email'];



       $random = Str::random(10);
       if($request->hasFile('logo')){
           $image_tmp = $request->file('logo');
           if($image_tmp->isValid()){
               $extension = $image_tmp->getClientOriginalExtension();
               $filename = $random .'.'. $extension;
               $image_path = 'public/uploads/' . $filename;
               Image::make($image_tmp)->save($image_path);
               $theme->logo = $filename;
           }
       }

       $random = Str::random(10);
       if($request->hasFile('favicon')){
           $image_tmp = $request->file('favicon');
           if($image_tmp->isValid()){
               $extension = $image_tmp->getClientOriginalExtension();
               $filename = $random .'.'. $extension;
               $image_path = 'public/uploads/' . $filename;
               Image::make($image_tmp)->save($image_path);
               $theme->favicon = $filename;
           }
       }

       $theme->save();
       Session::flash('success_message', 'Theme Settings has been Updated Successfully');
        return redirect()->back();


    }
}
