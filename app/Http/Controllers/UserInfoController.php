<?php

namespace App\Http\Controllers;

use App\Models\UserInfo;
use Illuminate\Http\Request;

class UserInfoController extends Controller
{
    public function user(Request $request)
    {
        // Validate form data
        $request->validate([
            'full_name' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'phone' => 'required|string|max:15',
            'profile_picture' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Handle image upload
        $imagePath = null;
        if ($request->hasFile('profile_picture')) {
            $image = $request->file('profile_picture');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $imagePath = $image->storeAs('uploads/profile_pictures', $imageName, 'public');
        }

        // Insert data into database
        UserInfo::insert([
            'full_name' => $request->full_name,
            'location' => $request->location,
            'phone' => $request->phone,
            'profile_pic' => $imagePath
        ]);

        return response()->json(['success' => true]);
    }

    public function userview(){
        $user= UserInfo::all();
        // $user=UserInfo::where("id",3)->first();
        // $user = UserInfo::select(["full_name","location","phone"])->first();
        // $user = UserInfo::where('full_name', 'aa')->where('location','aa')->get();

        return view("viewuse",compact("user"));


    }
public function edituser($id){
    // dd($id);
$editusevariable = UserInfo::find($id);
return view("editvie",compact("editusevariable"));
}

public function updateuser(Request $request){
    // return response()->json($request->all());

    $userupdate=UserInfo::find($request->id);
    $userupdate->full_name= $request->full_name;
    $userupdate->location= $request->location;
    $userupdate->phone= $request->phone;
    $userupdate->save();
    return redirect('/userview');
}

public function deleteuser($id){
    $for_delete=UserInfo::find($id);
    $for_delete->delete();
    return back();
}
}
