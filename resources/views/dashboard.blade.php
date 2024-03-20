<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Student Management System') }}
        </h2>
    </x-slot>

    <div class="py-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Search Bar -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-4">
                <div class="p-4">
                    <input type="text" placeholder="Search students..." class="border-gray-200 border-2 px-4 py-2 w-full rounded-md">
                </div>
            </div>

            <!-- Main Content -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <!-- Student Information Section -->
                    <h3 class="text-lg font-semibold mb-4">Student Information</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                        @foreach($students as $student)
                            <div class="border border-gray-200 p-4 rounded-md relative">
                                <img src="{{ asset('storage/' . $student->photo) }}" alt="Student Photo" class="w-24 h-24 rounded-full mx-auto mb-4">
                                <p><strong>Name:</strong> {{ $student->first_name }} {{ $student->middle_name }} {{ $student->last_name }}</p>
                                <p><strong>Student ID:</strong> {{ $student->id }}</p>
                                <p><strong>Email:</strong> {{ $student->email }}</p>
                                <p><strong>Address:</strong> {{ $student->address }}</p>
                                <p><strong>Section:</strong> {{ $student->section->name }}</p>
                                <p><strong>Class:</strong> {{ $student->class->name }}</p>
                                <p><strong>Birth Date:</strong> {{ $student->birth_date }}</p>
                                
                                <!-- View Reports Button -->
                                <a href="{{ route('students.edit', $student->id) }}" class="absolute bottom-4 right-4 bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">View Details</a>
                            </div>
                        @endforeach
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
