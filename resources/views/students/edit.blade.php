@extends('layout')

@section('title', 'Edit Student')

@section('content')
<!-- Edit form card -->
<div class="max-w-2xl mx-auto bg-white dark:bg-darkCard rounded-2xl shadow-xl border border-pink-100 dark:border-gray-700 p-8 relative overflow-hidden">
    <!-- Yellow accent bar on the left side -->
    <div class="absolute top-0 left-0 w-2 h-full bg-yellow-400"></div>
    
    <!-- Form title -->
    <h2 class="text-3xl font-bold text-gray-800 dark:text-white mb-6">Edit Student</h2>

    <!-- Form to update student information -->
    <form>
        <div class="space-y-6">
            <!-- Full name input field -->
            <div>
                <label class="block text-sm font-bold text-gray-700 dark:text-gray-300 mb-2">Full Name</label>
                <input type="text" value="{{ $student['name'] }}" class="w-full px-4 py-3 rounded-lg bg-gray-50 dark:bg-gray-700 border border-gray-200 dark:border-gray-600 focus:border-yellow-400 outline-none text-gray-700 dark:text-white">
            </div>
            <!-- Email input field -->
            <div>
                <label class="block text-sm font-bold text-gray-700 dark:text-gray-300 mb-2">Email</label>
                <input type="email" value="{{ $student['email'] }}" class="w-full px-4 py-3 rounded-lg bg-gray-50 dark:bg-gray-700 border border-gray-200 dark:border-gray-600 focus:border-yellow-400 outline-none text-gray-700 dark:text-white">
            </div>
            
            <!-- Submit and cancel buttons -->
            <div class="flex gap-4 mt-6">
                <button type="button" class="flex-1 py-3 bg-yellow-500 hover:bg-yellow-600 text-white font-bold rounded-lg shadow-lg">Update Changes</button>
                <a href="{{ route('students.index') }}" class="flex-1 py-3 text-center bg-gray-100 dark:bg-gray-700 text-gray-600 dark:text-gray-300 font-bold rounded-lg">Cancel</a>
            </div>
        </div>
    </form>
</div>
@endsection