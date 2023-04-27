<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Flat extends Model
{
    use  HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id',
        'flat_name',
        'flat_no',
        'division',
        'road_no',
        'area',
        'owner_id',
        'rent',
        'available_date',
        'image',
        'created_at',
        'updated_at',
    ];
    protected $table = "flats";

}
