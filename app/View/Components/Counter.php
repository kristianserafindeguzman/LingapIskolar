<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Counter extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $name,
        public string $value,
        public ?string $color = "green-600",
        public ?string $icon = null,
    ) {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view("components.counter");
    }

    public function getStyle(): string
    {
        $base =
            "flex flex-1 flex-row items-center gap-4 rounded-2xl border border-zinc-200 bg-white p-6 shadow-sm transition-all hover:shadow-md border-l-4 bg-white shadow-sm";

        return "{$base} {$this->color}";
    }
}
