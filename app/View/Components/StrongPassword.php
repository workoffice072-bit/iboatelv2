<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class StrongPassword extends Component
{
    public $prefix;
    /**
     * Create a new component instance.
     */
    public function __construct($prefix = 'user')
    {
        $this->prefix = $prefix;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.strong-password');
    }
}
