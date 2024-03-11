<?php

namespace App\Livewire;

use Livewire\Component;

class CreateStudent extends Component
{
    public $first_name,$middle_name,$last_name,$birth_date,
    $email,$class_id,$section_id;

    public function render()
    {
        return view('livewire.create-student');
    }
}
