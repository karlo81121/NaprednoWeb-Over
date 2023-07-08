<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attractions extends Model
{
    use HasFactory;
    protected $table = 'attractions';
    public $timestamps = false;

    protected $fillable = [
        'name',
        'description',
        'destination_id',
        'picture'
    ];
}
