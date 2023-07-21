<?php

namespace App\View\Components\Information_Section;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Information_section extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.information_section.information_section');
    }
}