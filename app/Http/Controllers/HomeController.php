<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Packages;
use App\Models\Modules;
use App\Models\SubModules;

class HomeController extends Controller
{

    public function data()
    {

        $packs =  Packages::where('_active', '0')->get();

        foreach ($packs as $pack) {
            $pack['menus'] = Modules::where('_active', '0')->where('packages_id', $pack->id)->get();
            foreach ($pack['menus'] as $menu) {
                $menu['subs'] = SubModules::where('_active', '0')->where('modules_id', $menu->id)->get();
            }
        }
        return view('layouts/menu', compact('packs'));
    }
}
