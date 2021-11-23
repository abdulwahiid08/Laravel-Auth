<?php

namespace App\View\Components;

use Illuminate\View\Component;

class footer extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $navbar = [
            // Ttitle => Url
            'Home' => '/',
            'Contact' => '/contact',
            'About' => '/about',
            'Blog' => '/blog',
            'Task' => '/task',
            'User' => '/user'
        ];
        return view('components.footer', ['navbars' => $navbar]);
    }
}
