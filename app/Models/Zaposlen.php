<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Zaposlen extends Model
{
    protected $table = 'zaposlen';
    protected $primaryKey = 'id';
    protected $fillable = ['ime','prezime','status','username','password'];

    use HasFactory;
}
