<?php

namespace App\Livewire;

use App\Livewire\Forms\CreateStudentForm;
use App\Models\Classes;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class CreateStudent extends Component

{
 
    use WithFileUploads;
    
   public CreateStudentForm $form;

    #[Validate('required')]
    public $class_id;


    public function addStudent()
   
    {
        $this->validate();
       
        $this->form->storeStudent($this->class_id);

    
        // return redirect()->route('students.index');
        return redirect()->route('students.index');
    }
    

    public function updatedClassId($value)
    {

        $this->form->setSections($value);
 
    }

    public function render()
    {
        return view('livewire.create-student',[
            'classes' => Classes::all(),
        ]);
    }
}
