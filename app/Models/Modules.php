<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modules extends Model
{
    use HasFactory;

    protected $fillable = ['menu_title', 'pack_title', 'icon', 'link'];

    public function packs()
    {
        return $this->belongsTo('App\Models\Packages');
    }
    public function submodules()
    {
        return $this->hasMany('App\Models\SubModules');
    }
}
