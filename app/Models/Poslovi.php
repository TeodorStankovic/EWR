<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Zaposlen;

class Poslovi extends Model
{
    protected $table = 'poslovi';
    protected $primaryKey = 'id_posla';
    protected $fillable = ['naziv_posla'];
    
    use HasFactory;

    public function zaposleniPosao()
    {
        return $this->belongsToMany(Zaposlen::class,$table = 'zaposleni_posao','id_posl','id_zapo')->withTimestamps();
    }
}