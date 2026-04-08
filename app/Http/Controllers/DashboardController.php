<?php

namespace App\Http\Controllers;
use App\Models\Carpost;
use App\Models\Order;
use App\Models\User;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $myCars = Carpost::where('seller_id', auth()->id())->count();
        $mySales = Order::where('seller_id', auth()->id())->count();
        $revenue = Order::where('seller_id', auth()->id())->sum('total_price');
        $credit = User::where('id', auth()->id())->value('credit');
        

        return view('dashboard', compact('myCars', 'mySales', 'revenue', 'credit',));
    }
}
