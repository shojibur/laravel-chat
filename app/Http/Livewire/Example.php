<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Example extends Component
{
    public $string = 'abx';
    public function render()
    {
        return view('livewire.example');
    }
}
