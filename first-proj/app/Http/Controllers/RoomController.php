<?php

namespace App\Http\Controllers;

use App\Models\Location;
use App\Models\Order;
use App\Models\Room;
use App\Models\User;
use App\Models\Region;
use Egulias\EmailValidator\Parser\CommentStrategy\LocalComment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoomController extends Controller
{
    public function routeRoomAdd() {
        return view('room-add');
    }


    public function storeRoom(Request $request) {
        $room = new Room;
        $room->room_type = $request->input('room_type');
        $room->room_description = $request->input('room_description');
        $room->room_price = $request->input('room_price');
        $room->adult_quantity = $request->input('adult_quantity');
        $room->children_quantity = $request->input('children_quantity');
        $room->save();
        return redirect('add-room');
    }
}
