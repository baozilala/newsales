<?php

    namespace App\Http\Controllers;

    use Illuminate\Http\Request;

    use App\Http\Requests;

    use App\Orders;
    use App\Customers;


    class OrdersController extends Controller
    {
        public function index(){
            $orders = Orders::all();
            return view('index.order', compact('orders'));
        }

        public function add(){
            $customers = Customers::all();
            $customersName = Customers::lists('name');
            return view('add.order',compact('customers','customersName'));
        }

        public function update(Request $request){

            return 'updating information';
        }


    }
