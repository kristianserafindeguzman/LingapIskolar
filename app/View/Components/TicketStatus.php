<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class TicketStatus extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public string $status) {}

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view("components.ticket-status");
    }
    public function getStyle(): string
    {
        $base =
            "inline-flex items-center justify-center rounded-full px-4 py-1.5 text-xs font-black uppercase tracking-widest border min-w-[140px]";

        $colors = match (strtolower($this->status)) {
            "open",
            "assigned"
                => "bg-emerald-50 text-emerald-700 border-emerald-200",
            "in progress",
            "pending user response"
                => "bg-amber-50 text-amber-700 border-amber-200",
            "escalated" => "bg-rose-50 text-rose-700 border-rose-200",
            "resolved" => "bg-blue-50 text-blue-700 border-blue-200",
            "closed" => "bg-zinc-100 text-zinc-600 border-zinc-300",
            default => "bg-zinc-50 text-zinc-500 border-zinc-200",
        };

        return "{$base} {$colors}";
    }
}
