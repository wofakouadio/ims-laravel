<?php

namespace App\Http\Controllers\User;

use A6digital\Image\DefaultProfileImage;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
Use RealRashid\SweetAlert\Facades\Alert;

class UserController extends Controller
{
    //create profile image
    public function CreateProfileImage($sur_name, $last_name){
        $img = '';
        $img = DefaultProfileImage::create($sur_name.' '.$last_name, 256, "#212121", "#FFF");
        Storage::put("public/users/".strtolower($sur_name.'-'.$last_name.time()).".png", $img->encode());
        return $img;
    }
    public function store(Request $request){
        $this->CreateProfileImage($request['sur_name'], $request['last_name']);
        Alert::success('Success Title', 'Success Message');
        return back();
    }
}
