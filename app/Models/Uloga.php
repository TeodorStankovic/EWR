<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Uloga extends Model
{
    protected $table = 'uloga';
    protected $primaryKey = 'id_uloge';
    protected $fillable = ['naziv_uloge'];
    
    use HasFactory;
}
