<?php

namespace App\Livewire;

use App\Models\Skills as ModelsSkills;
use Livewire\Component;

class Skills extends Component
{
    public $category;
    public $name;

    public function render()
    {
        // var_dump('render');
        // die;
        $columns = ['NO', 'CATEGORY', 'NAME', 'IMAGE', 'ACTION'];
        return view('livewire.skills.index', [
            'columns' => $columns
        ]);
    }

    // public function store()
    // {
    //     var_dump('store');
    //     die;
    //     $this->validate([
    //         'category' => 'required|max:15',
    //         'name' =>'required|min:3',
    //     ]);

    //     $contact = ModelsSkills::create([
    //         'category' => $this->category,
    //         'name' => $this->name,
    //     ]);
        
    //     $this->resetInput();
    // }

    // public function resetInput()
    // {
    //     $this->name = NULL;
    //     $this->category = NULL;
    // }
}
