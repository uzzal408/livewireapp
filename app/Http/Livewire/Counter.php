<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public $counter = 3;

    public function increase(){
         $this->counter++;
    }
    public function decrease(){
        $this->counter--;
    }
    public function render()
    {
        return view('livewire.counter');
    }
}
