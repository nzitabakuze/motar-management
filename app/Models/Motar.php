<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Motar extends Model
{
    use HasFactory;
    protected $fillable = [
            
        'FirstName',
            'LastName',
            'IDno',
            'motor_id',
            'status',
            'Gender',
            'village',
            'sector',
           'District',
            'categories',
            'cooperative_Name',



    ];
}
