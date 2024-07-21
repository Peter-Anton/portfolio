<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Arr;
use Illuminate\View\Component;

class portfolio extends Component
{
    /**
     * Create a new component instance.
     */
    public array $taps=[];
    public array $items=[];
    public function __construct()
    {
        $this->items=[
            [
                'category'=>'webPage',
                'title'=>'Car Rental',
                'image'=>'img/portfolio/01.jpg',
                'url'=>'https://github.com/Tahker-w-tadmeer/car-rental.git'
            ],
            [
                'category'=>'Matlab',
                'title'=>'audio equalizer',
                'image'=>'img/portfolio/02.jpg',
                'url'=>'#'
            ],
            [
                'category'=>'Apps',
                'title'=>'circus of plates',
                'image'=>'img/portfolio/02.jpg',
                'url'=>'https://github.com/Tahker-w-tadmeer/circus-of-plates.git'
            ],
            [
                'category'=>'AI',
                'title'=>'Card Design',
                'image'=>'img/portfolio/03.jpg',
                'url'=>'#'
            ],
            [
                'category'=>'other',
                'title'=>'Smart Home',
                'image'=>'img/portfolio/04.jpg',
                'url'=>'#'
            ],
            [
                'category'=>'other',
                'title'=>'mini Shell',
                'image'=>'img/portfolio/04.jpg',
                'url'=>'#'
            ],
            [
                'category'=>'other',
                'title'=>'network TCP simulator',
                'image'=>'img/portfolio/04.jpg',
                'url'=>'https://github.com/Tahker-w-tadmeer/networks_final.git'
            ],



        ];
        $this->taps=Arr::flatten(Arr::pluck($this->items,'category'));
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.home.portfolio');
    }
}
