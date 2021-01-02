<?php

namespace App\Http\Livewire\Chat;

use Livewire\Component;

class Messages extends Component
{
    public $messages;
    public function mount($messages)
    {
        $this->messages = $messages;
    }

    public function render()
    {
        return view('livewire.chat.messages');
    }
}
