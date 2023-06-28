<?php

namespace App\Http\Controllers\Admin\Market;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        return view('admin.market.order.index');
    }

    public function new()
    {
        return view('admin.market.order.index');
    }
    
    public function sending()
    {
        return view('admin.market.order.index');
    }

    public function unpaid()
    {
        return view('admin.market.order.index');
    }

    public function canceled()
    {
        return view('admin.market.order.index');
    }

    public function returned()
    {
        return view('admin.market.order.index');
    }
}
