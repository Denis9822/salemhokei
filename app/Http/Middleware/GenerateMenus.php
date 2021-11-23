<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\DB;
use Harimayco\Menu\Models\Menus;
use Illuminate\Support\Facades\Route;


class GenerateMenus
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        \AppMenu::make('MyNavBar', function ($menu) use($request) {

            $links = DB::table('admin_menu_items')->where('sort', '!=',  0)->orderByDesc('sort')->get();

            $mainMenu = Menus::where('id', 1)->with('items')->first();
            $menu->options([
                'active_class' => 'active',
            ], null);

            if ($mainMenu) {

                $menuItems = $mainMenu->items;
                $menuItems = $menuItems->sortBy('sort');
                // dd($menuItems, $mainMenu);

                $menuItems->each(function ($item) use (&$menu, $request){

                    if (app()->getLocale() == 'kk') {

                        if($item->link_ru == \Request::fullUrl()){

                            $menu->add($item->label_kk, ['url' => $item->link_kk])
                                ->append('</span>')
                                ->prepend('<span data-title="'. $item->label_kk .'">')
                                ->active();
                        }else{
                            $menu->add($item->label_kk, ['url' => $item->link_kk])
                                ->append('</span>')
                                ->prepend('<span data-title="'. $item->label_kk .'">');

                        }
                    }

                    if (app()->getLocale() == 'ru') {
                        if($item->link_ru == \Request::fullUrl()){
                            $menu->add($item->label_ru, ['url' => $item->link_ru])
                                ->append('</span>')
                                ->prepend('<span data-title="'. $item->label_ru .'">')
                                ->active();
                        }else{
                            $menu->add($item->label_ru, ['url' => $item->link_ru])
                                ->append('</span>')
                                ->prepend('<span data-title="'. $item->label_ru .'">');
                        }

                    }

                });
            }

        });
        \AppMenu::make('ParentsNavBar', function ($menu) use($request) {

            $mainMenu = Menus::where('id', 2)->with('items')->first();
//           $mainMenu = false;
            $links = DB::table('admin_menu_items')->where('menu', $mainMenu->id)->orderByDesc('sort')->get();

//             dd($links);
//            dd($mainMenu);
            $menu->options([
                'active_class' => 'active',
            ], null);

            if ($mainMenu) {

                $menuItems = $mainMenu->items;
                $menuItems = $menuItems->sortBy('sort');
                // dd($menuItems, $mainMenu);

                $menuItems->each(function ($item) use (&$menu, $request){

//                    dd($item);
                    if (app()->getLocale() == 'kk') {

                        if($item->link_ru == \Request::fullUrl()){

                            $menu->add($item->label_kk, ['url' => $item->link_kk, 'class' => $item->class])
                                ->append('</span>')
                                ->prepend('<span data-title="'. $item->label_kk .'">')
                                ->active();
                        }else{
                            $menu->add($item->label_kk, ['url' => $item->link_kk, 'class' => $item->class])
                                ->append('</span>')
                                ->prepend('<span data-title="'. $item->label_kk .'">');

                        }
                    }
                    if (app()->getLocale() == 'ru') {
                        if($item->link_ru == \Request::fullUrl()){
                            $menu->add($item->label_ru, ['url' => $item->link_ru, 'class' => $item->class])
                                ->append('</span>')
                                ->prepend('<span data-title="'. $item->label_ru .'">')
                                ->active();
                        }else{
                            $menu->add($item->label_ru, ['url' => $item->link_ru, 'class' => $item->class])
                                ->append('</span>')
                                ->prepend('<span data-title="'. $item->label_ru .'">');
                        }

                    }

                });
            }

        });


//        dd(Menus::get('name', 'Главный меню')->all());

        return $next($request);
    }
}
