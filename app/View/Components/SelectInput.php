<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SelectInput extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public ?string $icon = null,
        public ?string $value = null,
        public string $id,
    ) {}

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view("components.select-input");
    }

    public function getStyleOfInput(): string
    {
        // Professional neutral border with a focus transition
        $base = "w-full rounded-2xl border border-zinc-300 bg-white p-4 text-zinc-900 
             appearance-none outline-none transition-all duration-200 
             focus:border-red-800 focus:ring-4 focus:ring-red-800/5 shadow-sm";

        return $this->icon ? $base . " pl-14" : $base;
    }
}
