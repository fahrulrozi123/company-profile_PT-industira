<?php

namespace App\Http\Controllers\Solution\Service;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TemperatureServiceController extends Controller
{
    public function index()
    {
        return view ('layout.our_solution.services.temperature');
    }
}