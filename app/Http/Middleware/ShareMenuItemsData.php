<?php

namespace App\Http\Middleware;

use Closure;
use App\Http\Controllers\MenuItemsController;

class ShareMenuItemsData
{
    public function handle($request, Closure $next)
    {
        $menuController = new MenuItemsController();
        $menuItems = $menuController->getMenuItems();
        
        view()->share('menuItems', $menuItems);
        
        return $next($request);
    }
}
