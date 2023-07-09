<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Ekspoziture;

class Zaposlen extends Model
{
    protected $table = 'zaposlen';
    protected $primaryKey = 'id';
    protected $fillable = ['ime','prezime','status','username','password'];

    use HasFactory;
   // povezivanje
    public function ekspozitura()
    {
        return $this->belongsToMany(Ekspoziture::class,$table = 'zaposleni_ekspozitura','id_zapo','id_expo'	);
    }
    // prikaz
    public function hvatEks()
    {
        return $this->ekspozitura->first();
    }
}
