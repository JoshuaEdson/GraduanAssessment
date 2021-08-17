<?php

namespace App\Http\Controllers;
use App\User;
// use App\Image;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function viewProfile(){
        $currentUser = Auth::user();
        // return $currentUser;
        return view('edit', compact('currentUser'));
    }

    public function updateProfile(Request $request){

        $currentUser = Auth::user();
        $user = $currentUser;
        // Reassigning the name into the database again
        $username = $request->Name;
        $user->name = $username;
        $user->email = $currentUser->email;
        $user->password = $currentUser->password;
        $user->save();

        if($request->hasFile('img_src')){
            $image=$request->file('img_src');
            $reImage=$image->getClientOriginalName();
            $destination='resources/views/pictures';
            $image->move($destination, $reImage);
            // // Save the Data
            // $image=new Image;
            // $image->img_alt=$request->img_alt;
            // $image->img_src=$reImage;
            // $image->save();
        } 
        return redirect(route('home'))->with('successMsg', 'Profile Updated Successfully');
    }


}
