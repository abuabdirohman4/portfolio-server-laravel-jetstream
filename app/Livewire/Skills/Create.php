<?php

namespace App\Livewire\Skills;

use App\Models\Skills;
use Livewire\Component;

class Create extends Component
{
    // public function render()
    // {
    //     return view('livewire.skills.create');
    // }
    public $name;
    public $phone;

    public function render()
    {
        var_dump('render');
        die;
        return view('livewire.contact-create');
    }

    public function store()
    {
        var_dump('store');
        die;
        $this->validate([
            'name' =>'required|min:3',
            'phone' => 'required|max:15'
        ]);

        // Skills::create([
        //     'name' => $this->name,
        //     'phone' => $this->phone
        // ]);
        $contact = Skills::create([
            'name' => $this->name,
            'phone' => $this->phone
        ]);
        
        $this->resetInput();
        
        // $this->emit('contactStored');
        // Kirim parameter
        $this->emit('contactStored', $contact);

    }

    public function resetInput()
    {
        $this->name = NULL;
        $this->phone = NULL;
    }
}
