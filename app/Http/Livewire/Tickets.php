<?php

namespace App\Http\Livewire;

use App\Models\SupportTicket;
use Livewire\Component;
class Tickets extends Component
{
    public $active=1;
    protected $listeners = ['selectedTicket'=>'activeTicket'];
    public function activeTicket($id){
        $this->active = $id;
    }
    public function render()
    {
        $tickets = SupportTicket::all();
        return view('livewire.tickets',compact('tickets'));
    }
}
