<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Roadtax extends Model
{
    use HasFactory;
    use HasFactory;
    protected $connection = 'pgsql';
    protected $table = 'road_tax';
    public $timestamps = false;




}
