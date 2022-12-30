<?php

namespace App\Http\Controllers;

use App\Models\Location;
use App\Models\Order;
use App\Models\User;
use App\Models\Region;
use Egulias\EmailValidator\Parser\CommentStrategy\LocalComment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function orderDetail($id) {
//        dd(Order::find($id));
        $orderFound = Order::find($id);
        return view('order-detail', compact('orderFound'));
    }
}
