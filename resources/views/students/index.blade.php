@extends('layout')

@section('title', 'Student List')

@section('content')
<!-- Main content container -->
<div class="max-w-6xl mx-auto">
    <!-- Header with title and add button -->
    <div class="flex justify-between items-center mb-8">
        <h2 class="text-3xl font-bold text-gray-800 dark:text-white">Student List</h2>
        <!-- Button to create a new student -->
        <a href="{{ route('students.create') }}" class="px-6 py-3 bg-primary hover:bg-primaryHover text-white rounded-lg font-semibold shadow-lg shadow-pink-500/20 transition-all">
            + Add New
        </a>
    </div>

    <!-- Table container displaying all students -->
    <div class="bg-white dark:bg-darkCard rounded-2xl shadow-xl border border-pink-50 dark:border-gray-700 overflow-hidden">
        <table class="w-full text-left">
            <!-- Table header with column names -->
            <thead class="bg-pink-50 dark:bg-gray-800 text-pink-700 dark:text-pink-400 uppercase text-sm">
                <tr>
                    <th class="p-6">Name</th>
                    <th class="p-6">Course</th>
                    <th class="p-6">Year Level</th>
                    <th class="p-6 text-right">Actions</th>
                </tr>
            </thead>
            <!-- Table body - loops through all students -->
            <tbody class="divide-y divide-gray-100 dark:divide-gray-700">
                @foreach($students as $student)
                <!-- Row for each student -->
                <tr class="hover:bg-pink-50/50 dark:hover:bg-gray-700/50 transition">
                    <!-- Student name -->
                    <td class="p-6 font-medium text-gray-900 dark:text-white">{{ $student['name'] }}</td>
                    <!-- Student course -->
                    <td class="p-6 text-gray-600 dark:text-gray-300">{{ $student['course'] }}</td>
                    <!-- Year level with badge styling -->
                    <td class="p-6">
                        <span class="px-3 py-1 text-xs font-bold text-green-700 bg-green-100 rounded-full dark:bg-green-900 dark:text-green-300">{{ $student['year'] }}</span>
                    </td>
                    <!-- Action buttons - view and edit -->
                    <td class="p-6 text-right space-x-2">
                        <x-action-button href="{{ route('students.show', $student['id']) }}" type="view">
                            View
                        </x-action-button>
                        
                        <x-action-button href="{{ route('students.edit', $student['id']) }}" type="edit">
                            Edit
                        </x-action-button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection