@extends('layout')

@section('title', 'View Profile')

@section('content')
<!-- Student profile card container -->
<div class="max-w-3xl mx-auto bg-white dark:bg-darkCard rounded-3xl shadow-2xl overflow-hidden border border-pink-100 dark:border-gray-700">
    <!-- Gradient header banner -->
    <div class="h-32 bg-gradient-to-r from-pink-400 to-rose-400"></div>
    
    <!-- Profile content -->
    <div class="px-8 pb-8 relative">
        <!-- Student avatar/profile picture -->
        <div class="-mt-16 mb-6">
            <div class="w-32 h-32 rounded-full bg-white dark:bg-gray-800 p-2 shadow-lg mx-auto md:mx-0">
                <!-- Generate avatar based on student name -->
                <img src="https://api.dicebear.com/7.x/initials/svg?seed={{ $student['name'] }}" class="w-full h-full rounded-full">
            </div>
        </div>

        <!-- Student name and email -->
        <h1 class="text-3xl font-bold text-gray-900 dark:text-white">{{ $student['name'] }}</h1>
        <p class="text-pink-500 font-semibold mb-6">{{ $student['email'] }}</p>

        <!-- Course and year information in two columns -->
        <div class="grid grid-cols-2 gap-6 border-t pt-6 dark:border-gray-700">
            <!-- Course info -->
            <div>
                <span class="text-xs uppercase font-bold text-gray-400">Course</span>
                <p class="text-lg font-medium text-gray-800 dark:text-gray-200">{{ $student['course'] }}</p>
            </div>
            <!-- Year level info -->
            <div>
                <span class="text-xs uppercase font-bold text-gray-400">Year Level</span>
                <p class="text-lg font-medium text-gray-800 dark:text-gray-200">{{ $student['year'] }}</p>
            </div>
        </div>

        <!-- Back button - returns to student list -->
        <div class="mt-8">
            <a href="{{ route('students.index') }}" class="px-6 py-2 border border-gray-300 dark:border-gray-600 text-gray-700 dark:text-gray-300 rounded-full font-semibold hover:bg-gray-50 dark:hover:bg-gray-700 transition">Back to List</a>
        </div>
    </div>
</div>
@endsection