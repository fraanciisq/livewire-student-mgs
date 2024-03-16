<?php

namespace App\Livewire;

use App\Livewire\Forms\UpdateStudentForm;
use App\Models\Classes;
use App\Models\Student;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class EditStudent extends Component
{
    public Student $student;

    public UpdateStudentForm $form;

    use WithFileUploads;


    #[Validate('required')]
    public $class_id;


    public function mount()
    {
        $this->form->setStudent($this->student);

        $this->fill($this->student->only([
            'class_id',
    ]));
 }


    public function update()
   
    {

        $this->form->updateStudent($this->class_id);

        
        // return redirect()->route('students.index');
        return $this->redirect(route('students.index'), navigate: true);
    }
    

    public function updatedClassId($value)
    {
        $this->form->setSections($value);
    }

    public function render()
    {
        return view('livewire.edit-student',[
            'classes' => Classes::all(),
        ]);
    }
}
