<?php

namespace App\Http\Livewire\Caps;

use Livewire\Component;
use App\Models\Cap;

class Index extends Component
{

    public function loadCaps() {
        $caps = Cap::orderBy('cap_name')->get();

        return compact('caps');
    }

    public function render()
    {
        return view('livewire.caps.index', $this->loadCaps());
    }
}
