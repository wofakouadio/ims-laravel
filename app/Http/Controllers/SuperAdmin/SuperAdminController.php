<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
Use RealRashid\SweetAlert\Facades\Alert;


class SuperAdminController extends Controller
{
    //show new user page
    public function show_new_user_page(){
        return view('super-admin.new-user');
    }

    //show all users
    public function show_all_users_page(){
        return view('super-admin.all-users');
    }
}
