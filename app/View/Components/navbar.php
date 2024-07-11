<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class navbar extends Component
{
    /**
     * Create a new component instance.
     */
    public array $navigation_item=[];
    public function __construct()
    {
        $this->navigation_item=[
            ['name'=>'Home','url'=>'/'],
            ['name'=>'About','url'=>'/about'],
            ['name'=>'Services','url'=>'/services'],
            ['name'=>'Contact','url'=>'/contact'],
        ];
    }


    public function render(): View|Closure|string
    {
        return view('Layout.navbar');
    }
}
