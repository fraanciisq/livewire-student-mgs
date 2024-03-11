<?php

namespace App\Livewire;

use App\Models\Student;
use Livewire\Attributes\Layout;
use Livewire\Component;


class ListStudents extends Component
{
    #[Layout('layouts.app')]
    public function render()
    {
        return view('livewire.list-students', [
            'students' => Student::all(),
        ]);

    }
}
