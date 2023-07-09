<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Zaposlen;

class Ekspoziture extends Model
{
    protected $table = 'ekspoziture';
    protected $primaryKey = 'id_ex';
    protected $fillable = ['naziv', 'mesto', 'sef','kapacitet'];

    use HasFactory;

    public function zaposleni()
    {
        return $this->belongsToMany(Zaposlen::class,$table = 'zaposleni_ekspozitura','id_expo','id_zapo'	);
    }

}
