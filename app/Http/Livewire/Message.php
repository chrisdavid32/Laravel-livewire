<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Message extends Component
{
    public $message = ['first message', 'second message', 'third message'];
    public $activeMessage;
    public $count = 0;
    public function render()
    {
        $c = $this->count % 3;
        $this->activeMessage = $this->message[$c];
        return view('livewire.message');
    }
}
