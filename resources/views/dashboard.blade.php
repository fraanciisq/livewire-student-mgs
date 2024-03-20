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
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <p><strong>Name:</strong> John Doe</p>
                            <p><strong>Student ID:</strong> ABC123</p>
                            <p><strong>Email:</strong> john@example.com</p>
                        </div>
                        <div>
                            <p><strong>Course:</strong> Computer Science</p>
                            <p><strong>Batch:</strong> 2022</p>
                            <p><strong>Status:</strong> Active</p>
                        </div>
                    </div>

                    <!-- Academic Records Section -->
                    <h3 class="text-lg font-semibold my-4">Academic Records</h3>
                    <table class="w-full border-collapse border border-gray-200">
                        <thead>
                            <tr>
                                <th class="border border-gray-200 px-4 py-2">Subject</th>
                                <th class="border border-gray-200 px-4 py-2">Marks</th>
                                <th class="border border-gray-200 px-4 py-2">Grade</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="border border-gray-200 px-4 py-2">Mathematics</td>
                                <td class="border border-gray-200 px-4 py-2">85</td>
                                <td class="border border-gray-200 px-4 py-2">A</td>
                            </tr>
                            <tr>
                                <td class="border border-gray-200 px-4 py-2">Physics</td>
                                <td class="border border-gray-200 px-4 py-2">78</td>
                                <td class="border border-gray-200 px-4 py-2">B+</td>
                            </tr>
                            <!-- Add more rows as needed -->
                        </tbody>
                    </table>
                    
                    <!-- Actions Section (e.g., Buttons to Add Student, View Reports, etc.) -->
                    <div class="mt-8">
                        <a href="#" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Add Student</a>
                        <a href="#" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded ml-4">View Reports</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
