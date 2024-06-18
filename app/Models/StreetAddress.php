<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StreetAddress extends Model
{
    use HasFactory;

    // Specify the table name
    protected $table = 'street_address';

    // Specify the mass-assignable fields
    protected $fillable = [
        'street',
        'city',
        'state',
        'zip_code',
    ];
}
