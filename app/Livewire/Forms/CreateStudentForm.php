<?php

namespace App\Livewire\Forms;

use App\Models\Section;
use App\Models\Student;
use Livewire\Attributes\Validate;
use Livewire\Features\SupportFileUploads\WithFileUploads;
use Livewire\Form;

class CreateStudentForm extends Form

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
    public $section_id;

    public $sections = [];

    public function storeStudent($class_id)
    {
        $this->validate();

        Student::create([
            'class_id' => $class_id,
            'section_id' => $this->section_id,
            'first_name' => $this->first_name,
            'middle_name' => $this->middle_name,
            'last_name' => $this->last_name,
            'email' => $this->email,
            'photo' => $this->photo,
            'address' => $this->address,
            'birth_date' => $this->birth_date,

        ]);
    }

    public function setSections($class_id)
    {
        $this->sections = Section::where('class_id', $class_id)->get();
    }
}
