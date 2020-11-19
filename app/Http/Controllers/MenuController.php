<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index()
    {

        // $menus = Menu::with('submenus')->get();

        // return $menus;
        return Menu::with('submenus')->get()->map(function ($menu) {
            return collect(
                [
                    'title' => $menu->title,
                     'submenus' => $menu->submenus->map(function($sub) {
                         return collect(
                             [
                                 'name' => $sub->name,
                                 'icon' => $sub->icon,
                                 'link' => $sub->link,
                             ]);
                     })
                ]);
        });

        // return $subset;
    }
}
