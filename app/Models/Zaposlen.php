<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Ekspoziture;
use App\Models\Poslovi;
use App\Models\Smene;
use App\Models\Uloga;


class Zaposlen extends Model
{
    protected $table = 'zaposlen';
    protected $primaryKey = 'id';
    protected $fillable = ['ime','prezime','status','username','password'];

    use HasFactory;
   // povezivanje
    public function ekspozitura()
    {
        return $this->belongsToMany(Ekspoziture::class,$table = 'zaposleni_ekspozitura','id_zapo','id_expo'	)->withTimestamps();
    }
    // prikaz
    public function hvatEks()
    {
        return $this->ekspozitura->first();
    }

//----------------------------------------------------------------------------------------------------------------

    // povezivanje
     public function posao()
     {
         return $this->belongsToMany(Poslovi::class,$table = 'zaposleni_posao','id_zapo','id_posl'	)->withTimestamps();
     }
     // prikaz
     public function hvatPosao()
     {
         return $this->posao->first();
     }

//-----------------------------------------------------------------------------------------------------------------

     public function smene()
     {
         return $this->belongsToMany(Smene::class,$table = 'zaposleni_smene','id_zapo','id_smen'	)->withTimestamps();
     }
     // prikaz
     public function hvatSmene()
     {
         return $this->smene->first();
     }
//-----------------------------------------------------------------------------------------------------------------

     public function uloge()
     {
         return $this->belongsToMany(Uloga::class,$table = 'zaposleni_uloge','id_zapo','id_ulog'	)->withTimestamps();
     }
     // prikaz
     public function hvatUloge()
     {
         return $this->uloge->first();
     }


 
}
