<?php

namespace App\Http\Controllers;
use App\Client as Client;
use App\Reservation as Reservation;
use App\room as Room;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $reservations = Reservation::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('reservations.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Reservation::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $reservation = Reservation::findOrfail($id);
        return view('reservations.show', compact('reservation'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $reservation = Reservation::findOrfail($id);
        return view('reservations.edit', compact('reservation'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $reservation = Reservation::findOrfail($id);
        $reservation->update($request->all());
        return redirect('reservations');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $reservation = Reservation::findOrfail($id);
        $reservation->delete();
        return redirect('reservations');
    }

    public function bookRoom($client_id, $room_id, $startdate, $enddate)
    {
        $reservation = new Reservation();
        $client_instance = new Client();
        $room_instance = new Room();

        $client = $client_instance->find($client_id);
        $room = $room_instance->find($room_id);
        $reservation->startdate = $startdate;
        $reservation->enddate = $enddate;

        $reservation->room()->associate($room);
        $reservation->client()->associate($client);
        if( $room_instance->isRoomBooked( $room_id, $startdate, $enddate ))
        return ('Trying to book an already booked room, please try another one');
        $reservation->save();
        //return view ('reservation/show');

   // return redirect('clients');
       return view('reservations/bookRoom');
    }
}