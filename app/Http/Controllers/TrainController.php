<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;
use Carbon\Carbon;          //mi serve per gestire la data di oggi

class TrainController extends Controller
{
    public function index()
    {
        $today = Carbon::today();
        $trains = Train::where('orario_di_partenza', '>=', $today->startOfDay())
                       ->where('orario_di_partenza', '<=', $today->endOfDay())
                       ->get();
        return view('home', compact('trains'));
    }
}

