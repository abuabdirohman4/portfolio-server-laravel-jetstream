<?php

namespace App\Livewire;

use Livewire\Component;

class Skills extends Component
{
    public function render()
    {
        $columns = ['NO', 'CATEGORY', 'NAME', 'IMAGE', 'ACTION'];
        return view('livewire.skills.index', [
            'columns' => $columns
        ]);
    }
}
