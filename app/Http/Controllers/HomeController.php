<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateEquip;
use App\Models\Equip;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        return view('home');
    }


}