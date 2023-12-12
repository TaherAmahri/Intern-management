<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stagiaire extends Model
{
    protected $table='stagiaires';
    protected $primarykey='id';
    protected $fillable=['nom','prenom','sexe','fillier','email','ville','age','tel','photo','dateN'];
    use HasFactory;

}
