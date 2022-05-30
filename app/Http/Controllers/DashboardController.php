<?php

namespace App\Http\Controllers;


use App\Models\Country;
use App\Models\State;
use App\Models\City;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class DashboardController extends Controller
{
    public function index(){
        $user = Auth::user();
        $country = Country::find($user->country_id);
        $state = State::find($user->state_id);
        $city = City::find($user->city_id);

        return view('dashboard',compact('user','country','state','city'));
    }
}
