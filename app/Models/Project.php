<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    /**
     * @var array
     */
    protected $taches = [];


    protected $fillable = ['nom', 'description', 'type', 'duree', 'taches', 'equipe', 'owner', 'manager', 'managed', 'budget'];

    protected $casts = [
        'taches' => 'array',
        'equipe' => 'array',
    ];


    public function taches()
    {
        return $this->hasMany(Tache::class);
    }
}
