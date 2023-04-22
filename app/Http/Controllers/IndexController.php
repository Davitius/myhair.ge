<?php

namespace App\Http\Controllers;

use App\Models\Citylist;
use App\Models\Salon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    public function index()
    {

        if (Auth::user() && Auth::user()->email_verified_at == '')
        {
            return view('auth.verify');
        }


        $BestUsers = DB::table('users')->where('status', 'Active')->where('rating', '>=', 1)->get();
        $citys = Citylist::orderBy('city')->get();

        return view('index', compact('BestUsers', 'citys'));
    }

}
