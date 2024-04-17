<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class comunicado extends Component
{
    public $comunicado;
    /**
     * Create a new component instance.
     */
    public function __construct($comunicado)
    {
        $this->comunicado = $comunicado;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.comunicado');
    }
}