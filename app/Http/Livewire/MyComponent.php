<?php

namespace App\Http\Livewire;

use Livewire\Component;

class MyComponent extends Component
{
    public $buttontext;
    public function render()
    {
        $this->buttontext = 'Apply';
        return view('livewire.my-component');
    }
}
