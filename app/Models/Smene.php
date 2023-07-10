<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Zaposlen;

class Smene extends Model
{
    protected $table = 'smene';
    protected $primaryKey = 'id_smene';
    protected $fillable = ['tip_smene','traj_od','traj_do'];

    use HasFactory;

    public function zaposleniSmene()
    {
        return $this->belongsToMany(Zaposlen::class,$table = 'zaposleni_smene','id_smen','id_zapo')->withTimestamps();
    }

}
