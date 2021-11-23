<?php

namespace App\View\Components;

use Illuminate\View\Component;

class appLayout extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    //Membuat Title web

    public $title;
    // supaya style tidak error
    public $style = null;
    public $script = null;
    public function __construct($title = null)
    {
                            // Buat Default Title
        $this->title = $title ? $title : "AwdCorp";

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('template.layout');
    }
}
