<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
     /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [
        'id',
    ];

    /**
     * The relationships that should always be loaded.
     *
     * @var array
     */
    protected $with = [
        'employee',
        'client',
        'room',
    ];
    
    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }
    public function client()
    {
        return $this->belongsTo(Client::class);
    }
    public function room()
    {
        return $this->belongsTo(Room::class);
    }
}
