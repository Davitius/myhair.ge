<?php

namespace App\Http\Controllers;

use App\Models\Citylist;
use App\Models\Salon;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $city = '';
        $Search = $request->input('Search');
        $search = Salon::where('name', 'LIKE', "%{$Search}%")->orderBy('id', 'DESC')->paginate(16);
        $citys = Citylist::orderBy('city')->get();


        return view('/Search', compact('search', 'city', 'Search', 'citys'));

    }
}
