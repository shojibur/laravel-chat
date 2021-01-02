<?php

namespace App\Http\Livewire\Chat;
use App\Models\Message;
use Livewire\Component;
use App\Models\Room;

class Messages extends Component
{
    public $messages;
    public $roomId;

    public function mount(Room $room, $messages)
    {
        $this->roomId = $room->id;
        $this->messages = $messages;
    }

    public function getListeners()
    {
        return [
            'message.added' => 'prependMessage',
            "echo-private:chat.{$this->roomId},Chat\\MessageAdded" => 'prependMessageFromBroadcast'
        ];
    }

    public function prependMessage($id)
    {
        $this->messages->prepend(Message::find($id));
    }

    public function prependMessageFromBroadcast($payload)
    {
        $this->prependMessage($payload['message']['id']);
    }

    public function render()
    {
        return view('livewire.chat.messages');
    }
}
