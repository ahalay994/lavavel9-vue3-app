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
     * @var object
     */
    private object $user;

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
                'route' => 'home',
                'link' => '/',
            ],
            [
                'name' => 'About',
                'route' => 'about',
                'link' => '/about',
            ],
            [
                'name' => 'Service',
                'route' => 'about',
                'link' => '/about',
            ],
            [
                'name' => 'Pricing',
                'route' => 'about',
                'link' => '/about',
            ],
            [
                'name' => 'Contact',
                'route' => 'about',
                'link' => '/about',
            ],
        ];
        $this->logo = '/images/logo.jpg';
        $this->user = (object)[
            'name' => '',
            'email' => 'example@gmail.com',
            'logo' => '/images/logo.jpg',
        ];
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return View
     */
    public function render(): View
    {
        return view('components.header', [
            'appName' => env('APP_NAME'),
            'logo' => $this->logo,
            'menu' => $this->menu,
            'user' => $this->user,
        ]);
    }
}
