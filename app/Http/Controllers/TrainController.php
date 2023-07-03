<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;

class TrainController extends Controller
{
    public function index ()
    {
        $trains = Train::where('time_start_date', "2023-07-03")->get ();
        return view('index', compact('trains'));
    }
}
