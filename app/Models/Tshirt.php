<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tshirt extends Model
{
    use HasFactory;

    protected $table = 'tshirts';
    public $timestamps = true;

    // protected $casts = [
    //     'cost' => 'float'
    // ];

    // fillable are the fields in the database that a user can fill.
    protected $fillable = [
        'name',
        'bkg_colour',
        'country_purchased',
        'created_at'
    ];
}
