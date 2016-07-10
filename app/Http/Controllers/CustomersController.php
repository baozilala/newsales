<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Customers;

class CustomersController extends Controller
{
    public function index(){
        return view('index.customer');
    }

    public function add(){
        return view('add.customer');
    }
}
