<?php

namespace App\Livewire;

use App\Models\Classes;
use App\Models\Section;
use App\Models\Student;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class CreateStudent extends Component
{
    use WithFileUploads;
    
    protected $debug = true;

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

    Student::create([
        'class_id' => $this->form['class_id'],
        'section_id' => $this->form['section_id'],
        'first_name' => $this->form['first_name'],
        'middle_name' => $this->form['middle_name'],
        'last_name' => $this->form['last_name'],
        'email' => $this->form['email'],
        'photo' => $this->form['photo'],
        'address' => $this->form['address'],
        'birth_date' => $this->form['birth_date'],
    ]);

    return $this->redirect(route('students.index'), navigate: true);
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
