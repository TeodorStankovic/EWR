<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Poslovi extends Model
{
    protected $table = 'poslovi';
    protected $primaryKey = 'id_posla';
    protected $fillable = ['naziv_posla'];
    
    use HasFactory;
}
