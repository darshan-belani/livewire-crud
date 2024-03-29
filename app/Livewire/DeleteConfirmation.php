<?php

namespace App\Livewire;

use Livewire\Component;

class DeleteConfirmation extends Component
{
    public $confirmingDelete = false;

    public function confirmDelete()
    {
        // Perform delete action
        // You can emit an event to notify the main component about the delete action
        $this->emit('deleteConfirmed');
        $this->confirmingDelete = false;
    }

    public function render()
    {
        return view('livewire.delete-confirmation');
    }
}
