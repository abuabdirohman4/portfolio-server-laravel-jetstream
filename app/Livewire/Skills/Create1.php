<?php

namespace App\Http\Livewire;

use App\Models\Skills;
use Livewire\Component;

class SkillsCreate extends Component
{
    // public $contacts;

    // public function mount($contacts)
    // {
    //     $this->contacts = $contacts;
    // }

    public $name;
    public $phone;

    public function render()
    {
        return view('livewire.contact-create');
    }

    public function store()
    {
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
