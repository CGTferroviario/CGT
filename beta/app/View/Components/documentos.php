<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class documentos extends Component
{
    /**
     * Create a new component instance.
     */
    public $documentos;
    public function __construct($documentos)
    {
        $this->documentos=$documentos;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.documentos');
    }
}
