<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class room extends Model
{
    protected $fillable = [
        'name',
        'floor',
        'description',
        'path'
    ];
    public function getAvailablerooms($startdate, $enddate)
    {
        $available_rooms = DB::table('rooms as r')
            ->select('r.id', 'r.name')
            ->whereRaw("
                                    r.id NOT IN(
                                        SELECT b.room_id FROM reservations b
                                        WHERE NOT(
                                            b.enddate < '{$startdate}' OR
                                            b.startdate > '{$enddate}'
                                        )
                                    )
                                    ")
            ->orderBy('r.id')
            ->get()
        ;
        return $available_rooms;
    }
    public function isRoomBooked( $room_id, $startdate, $enddate )
    {

        $available_rooms = DB::table('reservations')
            ->whereRaw("
                            NOT(
                                enddate< '{$startdate}' OR
                                startdate > '{$enddate}'
                                )
                        ")
            ->where('room_id', $room_id)
            ->count()
        ;
        return $available_rooms;

    }

}
