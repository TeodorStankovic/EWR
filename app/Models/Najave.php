<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Najave extends Model
{
    protected $table = 'najave';
    protected $primaryKey = 'id_najave';
    protected $fillable = ['dat_od', 'dat_do','tip_najave'];

    use HasFactory;
}
