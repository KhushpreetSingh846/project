<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubModules extends Model
{
    use HasFactory;

    protected $fillable = ['sub_menu_title', 'menu_title', 'pack_title', 'link'];

    public function packs()
    {
        return $this->belongsTo('App\Models\Packages');
    }
    public function modules()
    {
        return $this->belongsTo('App\Models\Modules');
    }
}
