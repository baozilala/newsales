<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\ship;

class ShipController extends Controller
{
    public function index(){
        return view('index.ship');
    }

    public function add(){
        return view('add.ship');
    }
}
