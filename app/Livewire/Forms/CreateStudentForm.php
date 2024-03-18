<?php

namespace App\Livewire\Forms;

use App\Models\Section;
use App\Models\Student;
use Livewire\Attributes\Validate;
use Livewire\Form;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class CreateStudentForm extends Form

{

    use WithFileUploads;

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
        $this->validate([
            'photo' => 'image|max:1024' , //1mb max only
        ]);
    
        // Store the uploaded file in the desired directory
        $path = $this->photo->store('photos', 'public');
    
        // Save the path to the database or use it as needed
        Student::create([
            'class_id' => $class_id,
            'section_id' => $this->section_id,
            'first_name' => $this->first_name,
            'middle_name' => $this->middle_name,
            'last_name' => $this->last_name,
            'email' => $this->email,
            'photo' => $path, // Save the file path instead of the file itself
            'address' => $this->address,
            'birth_date' => $this->birth_date,

            
        ]);

        session()->flash('success', 'User Created Successfully');
    }

    public function setSections($class_id)
    {
        $this->sections = Section::where('class_id', $class_id)->get();
    }
}
