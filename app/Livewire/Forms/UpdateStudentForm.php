<?php

namespace App\Livewire\Forms;

use App\Models\Section;
use App\Models\Student;
use Livewire\Attributes\Validate;
use Livewire\Form;

class UpdateStudentForm extends Form

{
  
    public ?Student $student;

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

    #[Validate('required')]
    public $section_id;

    public $sections = [];

    public function setStudent(Student $student)

    {

        $this->student = $student;

        $this->fill($student->only([
            'first_name', 
            'middle_name',
            'last_name',
            'address',
            'birth_date',
            'photo',
            'section_id',
        ]));


    $this->sections = Section::where('class_id', $student->class_id)->get();

    }

    public function updateStudent($class_id, $email)
    {
        $this->validate([
            'photo' => 'image|max:1024' , //1mb max only
        ]);
    
        // Store the uploaded file in the desired directory
        $path = $this->photo->store('photos', 'public');
    
        $this->validate();

        $this->student->update([
            'class_id' => $class_id,
            'section_id' => $this->section_id,
            'first_name' => $this->first_name,
            'middle_name' => $this->middle_name,
            'last_name' => $this->last_name,
            'email' => $email,
            'photo' => $path,
            'address' => $this->address,
            'birth_date' => $this->birth_date,

        ]);

        session()->flash('success', 'Updated Successfully');

    }

    public function setSections($class_id)
    {
        $this->sections = Section::where('class_id', $class_id)->get();
    }
}



