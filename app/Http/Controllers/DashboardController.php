<?php

namespace App\Http\Controllers;

use App\Models\Student;

class DashboardController extends Controller
{
    public function index()
    {
        $students = Student::paginate(3);
        return view('dashboard', compact('students'));
    }
}
