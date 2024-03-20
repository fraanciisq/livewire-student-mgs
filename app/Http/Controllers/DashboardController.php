<?php

namespace App\Http\Controllers;

use App\Models\Student; // Assuming your Student model is located in the app\Models namespace

class DashboardController extends Controller
{
    public function index()
    {
        $students = Student::all(); // Assuming you want to fetch all students, adjust this query according to your needs
        return view('dashboard', compact('students'));
    }
}
