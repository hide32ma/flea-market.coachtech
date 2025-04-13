<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;

use App\Http\Requests\ProfileRequest;

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Storage;

use App\Models\Profile;




class ProfileController extends Controller
{
    public function store(Request $request)
{
    $request->validate([
        'user_name' => 'required|string|max:255',
        'zip_code' => 'required|string|max:10',
        'address' => 'required|string|max:255',
        'building_name' => 'required|string|max:255',
        'icon' => 'nullable|image|max:2048',
    ]);

        $user = Auth::user();

    $profile = new Profile();
    $profile->user_id = $user->id;
    $profile->user_name = $request->user_name;
    $profile->zip_code = $request->zip_code;
    $profile->address = $request->address;
    $profile->building_name = $request->building_name;

    if ($request->hasFile('icon')) {
        $path = $request->file('icon')->store('icons', 'public');
        $profile->icon_path = $path;
    }

    $user->is_first_login = false;

    $user->save();

    $profile->save();

    return redirect('/'); // 商品一覧ページへ
}

}
