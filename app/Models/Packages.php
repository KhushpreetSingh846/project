<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Packages extends Model
{
    use HasFactory;

    protected $fillable = ['pack_title'];

    public function modules()
    {
        return $this->hasMany('App\Models\Modules');
    }
    public function submodules()
    {
        return $this->hasMany('App\Models\SubModules');
    }
}
