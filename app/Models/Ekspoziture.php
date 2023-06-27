<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ekspoziture extends Model
{
    protected $table = 'ekspoziture';
    protected $primaryKey = 'id_ex';
    protected $fillable = ['naziv', 'mesto', 'sef','kapacitet'];

    use HasFactory;
}
