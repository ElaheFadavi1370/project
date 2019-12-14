<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    public function reservation()
    {
        return $this->hasMany('App\Reservation');
    }

    protected $fillable = [
        'id',
        'first_name',
        'last_name',
        'address',
        'zip_code',
        'city',
        'state',
        'email',
        'created_at',
        'updated_at'
        ];
}