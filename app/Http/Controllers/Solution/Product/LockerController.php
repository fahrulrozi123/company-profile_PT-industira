<?php

namespace App\Http\Controllers\Solution\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LockerController extends Controller
{
    public function index()
    {
        return view ('layout.our_solution.product.locker');
    }
}