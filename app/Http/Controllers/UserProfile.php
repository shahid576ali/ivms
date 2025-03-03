<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;    

class UserProfile extends Controller
{
    //
    function users(){
        $users = DB::table("users")->first();;
        return view("profiles",["users"=>$users]);
    }
}
