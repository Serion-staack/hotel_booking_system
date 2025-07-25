<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;
    protected $fillable = [
        'room_number',
        'type',
        'capacity',
        'price',
        'description',
        'amenities',
        'floor',
        'image_url',
        'status',
    ];

    public function bookings()
    {
        return $this->hasMany(Bookings::class,'room_id');
    }

    public function getTypeLabelAttribute()
    {
        $types = [
            'single' => 'Single',
            'double' => 'Double',
            'suite'  => 'Suite',
        ];

        $type = strtolower(trim($this->type));

        return $types[$type] ?? 'Unknown';
    }

    public function images()
    {
        return $this->hasMany(RoomImage::class,'room_id');
    }
}
