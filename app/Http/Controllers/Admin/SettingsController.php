<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Setting;

class SettingsController extends Controller
{

    public function index()
    {
        return view( 'setting' );
    }

    public function update(Request $req)
    {
        foreach ($req->all() as $key => $value) {
            $setting = Setting::where('key', $key)->first();
            if( $setting ) {
                $setting->value = $value;
                $setting->save();
            }
        }
        return redirect( config( 'admin.prefix' ).'/setting' )->with( 'success', 'Lưu thành công!' );
    }

}
