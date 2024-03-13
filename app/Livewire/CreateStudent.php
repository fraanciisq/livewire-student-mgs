<?php

namespace App\Livewire;

use App\Models\Classes;
use App\Models\Section;
use Livewire\Attributes\Validate;
use Livewire\Component;

class CreateStudent extends Component
{
    #[Validate('required')]
    public $first_name;

    #[Validate('required')]
    public $middle_name;

    #[Validate('required')]
    public $last_name;

    #[Validate('required')]
    public $birth_date;

    #[Validate('required')]
    public $address;

    #[Validate('required')]
    public $photo; // Add the photo property

    #[Validate('required|email|unique:students,email')]
    public $email;

    #[Validate('required')]
    public $class_id;

    #[Validate('required')]
    public $section_id;

    public $sections = [];

    public function addStudent()
   
    {
        $this->validate();

        dd('something');
    }

    public function updatedClassId($value)
    {
       $this->sections = Section::where('class_id', $value)->get();
    }

    public function render()
    {
        return view('livewire.create-student',[
            'classes' => Classes::all(),
        ]);
    }
}
