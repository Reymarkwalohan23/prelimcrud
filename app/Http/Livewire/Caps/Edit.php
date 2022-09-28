<?php

namespace App\Http\Livewire\Caps;
use App\Models\Cap;
use Livewire\Component;

class Edit extends Component
{

    public $capId;
    public $cap_name, $cap_brand, $price, $color;
    public function mount() {
        $this->cap_name = $this->cap->cap_name;
        $this->cap_brand = $this->cap->cap_brand;
        $this->price = $this->cap->price;
        $this->color = $this->cap->color;

    }

    public function editCap() {
        $this->validate([
            'cap_name'             =>          ['required', 'string', 'max:255'],
            'cap_brand'            =>          ['required', 'string', 'max:255'],
            'price'                =>          ['required', 'string', 'max:255'],
            'color'                =>          ['required', 'string', 'max:255'],
        ]);

        $this->cap->update([
            'cap_name'             =>      $this->cap_name,
            'cap_brand'            =>      $this->cap_brand,
            'price'                =>      $this->price,
            'color'                =>      $this->color,
        ]);

        return redirect('/cap')->with('message', 'Updated Successfully');
    }

    public function back() {
        return redirect('/cap');
    }
    public function getcapProperty() {
        return Cap::find($this->capId);
    }

    public function render()
    {
        return view('livewire.caps.edit');
    }
}
