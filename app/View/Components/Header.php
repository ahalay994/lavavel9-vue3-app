<?php

namespace App\View\Components;

use Illuminate\View\Component;
use \Illuminate\Contracts\View\View;

class Header extends Component
{
    /**
     * @var array
     */
    private array $menu;
    /**
     * @var string
     */
    private string $logo;


    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->menu = [
            [
                'name' => 'Home',
                'route' => 'home'
            ],
            [
                'name' => 'About',
                'route' => 'about'
            ],
            [
                'name' => 'Service',
                'route' => 'about'
            ],
            [
                'name' => 'Pricing',
                'route' => 'about'
            ],
            [
                'name' => 'Contact',
                'route' => 'about'
            ],
        ];
        $this->logo = 'logo';
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return View
     */
    public function render(): View
    {
        return view('components.header', [
            'logo' => $this->logo,
            'menu' => $this->menu,
        ]);
    }
}
