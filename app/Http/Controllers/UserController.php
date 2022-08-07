<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function profile() {
        return view('User.myprofile', [
            'user' => auth()->user()
        ]);
    }
    public function editprofilepage() {
        // $countries = Http::get('https://api.first.org/data/v1/countries');
        return view('User.profile', [
            'user' => auth()->user(),
            // 'countries' => $countries
        ]);
    }
    public function editprofile(Request $request) {
        $requestData = $request->except('_token');
        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
           $ext = $file->getClientOriginalExtension();
           $filename = 'photos'.'_'.time().'.'.$ext;
           $storagePath = Storage::disk('public_uploads')->put('/photos', $file);
           $storageName = basename($storagePath);
           $requestData['photo'] = $storageName;
       }
       if ($request->hasFile('cv')) {
        $file = $request->file('cv');
       $ext = $file->getClientOriginalExtension();
       $filename = 'cv'.'_'.time().'.'.$ext;
       $storagePath = Storage::disk('public_uploads')->put('/cv', $file);
       $storageName = basename($storagePath);
       $requestData['cv'] = $storageName;
   }

        if($requestData['password'] == NULL) unset($requestData['password']);
         $user = User::findOrFail(auth()->user()->id);
        $user->update($requestData);
        return redirect()->route('profile')->with('success', "Profile Saved Successfully");
    }
    public function mycv($id) {
        $user = User::findOrFail($id);
        $path = public_path('cv' . '/' . $user->cv);
      // header
      
     return response()->file($path);
    }
}
