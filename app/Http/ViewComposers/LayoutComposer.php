<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;
// use App\Repositories\UserRepository;

class LayoutComposer
{
    protected $menu = [
        [
            "label" => "About",
            "uri" => "about"
        ],
        [
            "label" => "Contact",
            "uri" => "contact"
        ],
    ];

    protected function objectifiedMenu() {
        return array_map(function($item) {
            return (object) $item;
        }, $this->menu);
    }
    
    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('menu', $this->objectifiedMenu());
    }
}