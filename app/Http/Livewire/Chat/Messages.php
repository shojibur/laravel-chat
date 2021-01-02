<?php

namespace App\Http\Livewire\Chat;
use App\Models\Message;
use Livewire\Component;

class Messages extends Component
{
    public $messages;

    public function mount($messages)
    {
        $this->messages = $messages;
    }

    public function getListeners()
    {
        return [
            'message.added' => 'prependMessage'
        ];
    }

    public function prependMessage($id)
    {
        $this->messages->prepend(Message::find($id));
    }

    public function render()
    {
        return view('livewire.chat.messages');
    }
}
