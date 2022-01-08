<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tshirt extends Model
{
    use HasFactory;
    use SoftDeletes;

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
        'image',
        'created_at'
    ];
}
