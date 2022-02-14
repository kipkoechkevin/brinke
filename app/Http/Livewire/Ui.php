<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Ui extends Component
{
    public function render()
    {
        return view('livewire.ui')->layout('layouts.base');
    }
}
