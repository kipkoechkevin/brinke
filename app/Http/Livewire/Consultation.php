<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Consultation extends Component
{
    public function render()
    {
        return view('livewire.consultation')->layout('layouts.base');
    }
}
