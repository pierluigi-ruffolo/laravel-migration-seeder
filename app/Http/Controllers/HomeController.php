<?php

namespace App\Http\Controllers;

use App\Models\Train;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {

        $currentDateTime = now();
        $trains = Train::where('departure_time', '>=', $currentDateTime)->get();


        return view('home', compact('trains'));
    }
}
