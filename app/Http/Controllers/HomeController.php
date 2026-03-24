<?php

namespace App\Http\Controllers;

use App\Models\Train;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {

        $currentDateTime = now();
        $trains = Train::where('departure_time', '>=', $currentDateTime)
            ->orderBy('departure_time', 'asc')
            ->get();

        return view('home', compact('trains'));
    }
}
