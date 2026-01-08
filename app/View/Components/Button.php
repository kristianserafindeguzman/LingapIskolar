<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Button extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public ?string $href = null,
        public string $type = "button",
        public string $variant = "primary",
    ) {}

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view("components.button");
    }

    public function getStyles(): string
    {
        $base =
            "inline-flex items-center px-4 py-2 min-w-48 justify-center text-center rounded-full border font-semibold transition ease-in-out duration-150";

        $colors = match ($this->variant) {
            "primary"
                => "bg-red-800 hover:bg-red-700 active:bg-red-950 text-white border-transparent",
            "secondary"
                => "bg-white hover:bg-zinc-100 active:bg-zinc-400 text-red-800 border-red-800 border-2",
            "danger"
                => "bg-rose-600 hover:bg-rose-500 active:bg-rose-700 text-white border-transparent",
            default
                => "bg-red-800 hover:bg-red-700 active:bg-red-950 text-white border-transparent",
        };

        return $base . " " . $colors;
    }
}
