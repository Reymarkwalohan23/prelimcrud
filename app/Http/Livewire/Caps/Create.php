<?php

namespace App\Http\Livewire\Caps;

use Livewire\Component;
use App\Models\Cap;
use App\Events\UserLog;
class Create extends Component
{
    public $cap_name, $cap_brand, $price, $color;

    public function addCap() {
        $this->validate([
            'cap_name'             =>          ['required', 'string', 'max:255'],
            'cap_brand'            =>          ['required', 'string', 'max:255'],
            'price'                =>          ['required', 'string', 'max:255'],
            'color'                =>          ['required', 'string', 'max:255'],
        ]);

        $cap = Cap::create([
            'cap_name'             =>      $this->cap_name,
            'cap_brand'            =>      $this->cap_brand,
            'price'                =>      $this->price,
            'color'                =>      $this->color,
        ]);

        $log_entry = 'Added a cap "' . $cap->cap_name . '" with the ID# of ' . $cap->id;
        event(new UserLog($log_entry));
        
        return redirect('/cap')->with('cap', 'Added Successfully');
    }

   


    public function render()
    {
        return view('livewire.caps.create');
    }
}
