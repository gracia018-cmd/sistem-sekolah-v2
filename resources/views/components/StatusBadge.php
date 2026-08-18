<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class StatusBadge extends Component
{
    public string $status;
    public string $classes;

    public function __construct(string $status)
    {
        $this->status = $status;

        $this->classes = match ($status) {
            'Aktif' => 'bg-green-100 text-green-700',
            'Tidak Aktif' => 'bg-red-100 text-red-700',
            default => 'bg-gray-100 text-gray-700',
        };
    }

    public function render(): View
    {
        return view('components.status-badge');
    }
}