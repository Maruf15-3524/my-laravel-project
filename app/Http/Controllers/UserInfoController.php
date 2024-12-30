<?php

namespace App\Http\Controllers;

use App\Models\UserInfo;
use Illuminate\Http\Request;

class UserInfoController extends Controller
{
    public function user(Request $request){
        // dd($request->all());
        UserInfo::insert(  [
            "full_name"=> $request->full_name,
            "phone"=> $request->phone,
            "location"=> $request->location,
        ]);

        return redirect ()->back();

    }
}
