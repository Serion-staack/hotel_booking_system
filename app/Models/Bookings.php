<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bookings extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'room_id', 'start_date', 'end_date','status','customer_name','customer_mail'];

    public function room()
    {
        return $this->belongsTo(Room::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function review()
    {
        return $this->hasOne(Review::class,'booking_id');
    }
}
