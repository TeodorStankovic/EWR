<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Zaposlen;

class Uloga extends Model
{
    protected $table = 'uloga';
    protected $primaryKey = 'id_uloge';
    protected $fillable = ['naziv_uloge'];
    
    use HasFactory;

    public function zaposleniUloge()
    {
        return $this->belongsToMany(Zaposlen::class,$table = 'zaposleni_uloge','id_ulog','id_zapo')->withTimestamps();
    }

}
