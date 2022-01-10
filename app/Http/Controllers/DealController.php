<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TravelDeal;

class DealController extends Controller
{
    function index(){

        $travels = TravelDeal::all();

        return view('home.index', compact('travels'));
    }
}
