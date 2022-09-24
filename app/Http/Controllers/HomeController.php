<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class HomeController extends Controller
{
    public function redirect(){
        $userType = Auth::user()->userType;

        if( $userType == 1){
            return redirect('menus');
        }
        else{
            return redirect('menus-show');
        }
    }
}
