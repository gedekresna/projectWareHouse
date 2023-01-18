<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoadCell extends Model
{
    use HasFactory;

    protected $table = 'loadcell';


    protected $fillable = [
        'date',
        'time',
        's1',
        's2',
        's3',
        's4'
    ];
}
