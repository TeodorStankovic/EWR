<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Smene extends Model
{
    protected $table = 'smene';
    protected $primaryKey = 'id_smene';
    protected $fillable = ['tip_smene','traj_od','traj_do'];

    use HasFactory;
}
