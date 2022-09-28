<?php

namespace App\Http\Livewire\Caps;

use Livewire\Component;
use App\Models\Cap;
class Delete extends Component
{

    public $capId;
    public function getCapProperty() {
        return Cap::select('id', 'cap_name', 'cap_brand', 'price', 'color')
            ->find($this->capId);
    }

    public function delete() {
        $this->cap->delete();

        return redirect('/cap')->with('message', 'Deleted Successfully');
    }

    public function back() {
        return redirect('/cap');
    }
    public function render()
    {
        return view('livewire.caps.delete');
    }
}
