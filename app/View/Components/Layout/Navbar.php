<?php

namespace App\View\Components\Layout;

use Illuminate\View\Component;

class Navbar extends Component
{

    public array $navigationItems = [];

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->navigationItems = [
            ['label' => 'Home', 'href' => '#home'],
            ['label' => 'About', 'href' => '#about'],
            ['label' => 'Serivces', 'href' => '#services'],
            ['label' => 'Portfolio', 'href' => '#portfolio'],
            ['label' => 'Testimonial', 'href' => '#testimonial'],
            ['label' => 'Blog', 'href' => '#blog'],
            ['label' => 'Contact', 'href' => '#contact'],
        ];
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('layout.navbar');
    }
}
