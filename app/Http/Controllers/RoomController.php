<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Client;
use App\Room;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $rooms= Room::all();
       // $rooms= Room::orderBy('id', 'asc')->get('');
        return view ('rooms.index', compact('rooms'));
        //return $rooms=Room::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('rooms.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            $input = $request->all();
            if($file=$request->file('file')){

                $name = $file->getClientOriginalName();
                $file->move('photos', $name);
                $input['path']=$name;
            }

            Room::create($input);
        //Room::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $room=Room::findOrfail($id);
        return view ('rooms.show', compact('room'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $room=Room::findOrfail($id);
        return view('rooms.edit', compact('room'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $room=Room::findOrfail($id);
        $room->update($request->all());
        return redirect('rooms');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $room=Room::findOrfail($id);
        $room->delete();
        return redirect('rooms');
    }
    public function CheckAvailableRooms($client_id, Request $request)
    {
        $startdate = $request->input('startdate');
        $enddate = $request->input('enddate');
        $client = new Client();
        $room = new Room();

        $data = [];
        $data['dateFrom'] = $startdate;
        $data['dateTo'] = $enddate;
        $data['rooms']= $room->getAvailableRooms($startdate, $enddate);
        $data['client'] = $client->find($client_id);

        return view('rooms/checkAvailableRooms', $data);
    }

   public function roomdescription ($room_id){
       $room=Room::findOrfail($room_id);
       $data=[];
       $data['room_id']=$room_id;
       //dd($room_id);
       return view ('rooms.description', compact('room'), $data);
    }
}




