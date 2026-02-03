@extends('layout')

@section('title', 'Add Student')

@section('content')
<!-- Form card for creating a new student -->
<div class="max-w-2xl mx-auto bg-white dark:bg-darkCard rounded-2xl shadow-xl border border-pink-100 dark:border-gray-700 p-8">
    <!-- Form header section -->
    <div class="mb-8 text-center">
        <h2 class="text-3xl font-bold text-gray-800 dark:text-white">Register Student</h2>
        <p class="text-gray-500 dark:text-gray-400">Add a new record to the system.</p>
    </div>

    <!-- Form to register a new student -->
    <form>
        <div class="space-y-6">
            <!-- Full name input field -->
            <div>
                <label class="block text-sm font-bold text-gray-700 dark:text-gray-300 mb-2">Full Name</label>
                <input type="text" class="w-full px-4 py-3 rounded-lg bg-gray-50 dark:bg-gray-700 border border-gray-200 dark:border-gray-600 focus:border-pink-500 outline-none text-gray-700 dark:text-white">
            </div>
            <!-- Email input field -->
            <div>
                <label class="block text-sm font-bold text-gray-700 dark:text-gray-300 mb-2">Email</label>
                <input type="email" class="w-full px-4 py-3 rounded-lg bg-gray-50 dark:bg-gray-700 border border-gray-200 dark:border-gray-600 focus:border-pink-500 outline-none text-gray-700 dark:text-white">
            </div>
            <!-- Submit button -->
            <button type="button" class="w-full py-4 mt-4 bg-primary hover:bg-primaryHover text-white font-bold rounded-lg shadow-lg">Save Record</button>
            <!-- Cancel link - goes back to student list -->
            <a href="{{ route('students.index') }}" class="block text-center mt-4 text-gray-500 hover:text-primary">Cancel</a>
        </div>
    </form>
</div>
@endsection