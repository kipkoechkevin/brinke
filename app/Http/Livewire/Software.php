<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Software extends Component
{
    public function render()
    {
        return view('livewire.software')->layout('layouts.base');
    }
}
