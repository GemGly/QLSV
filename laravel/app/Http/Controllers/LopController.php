<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Room;

class LopController extends Controller
{
    public function getLop(){
        $rooms = Room::all();
        return view('room.index',compact('rooms'));
    }

    public function listLop(){
        return view('room.add');
    }

    public function addLop(Request $request){
        $room= new Room();
        $room->name=$request->name;
        $room->save();
        return redirect()->action('LopController@getLop');
    }

    public function editLop($id){
        $room= Room::find($id);
        return view('room.edit',compact('room'));
    }

    public function updateLop(Request $request , $id){
        $room= Room::find($id);
        $room->name=$request->name;
        $room->save();
        return redirect()->action('LopController@getLop');
    }

    public function destroy($id){
        Room::find($id)->delete();
        return redirect()->action('LopController@getLop');

    }

}
