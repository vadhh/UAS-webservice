<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Footer extends Component
{
    public function __construct()
    {
        // Tambahkan properti jika diperlukan
    }

    public function render()
    {
        return view('components.footer');
    }
}
