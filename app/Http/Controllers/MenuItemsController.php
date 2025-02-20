<?php

namespace App\Http\Controllers;

use TCG\Voyager\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MenuItemsController extends Controller
{
    public function getMenuItems()
    {
        // Get the main menu with its items
        // $menu = Menu::all();

        $menu = DB::table('menus')
            ->join('menu_items', 'menus.id', '=', 'menu_items.menu_id')
            ->select('menu_items.*')
            ->get();
        dd($menu);

        if ($menu) {
            // return $menu->items()->whereNull('parent_id')->with('children')->get();
            return $menu->items()->get();
        }
        
        return [];
    }
}
