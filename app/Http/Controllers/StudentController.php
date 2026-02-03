<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// This controller handles student operations like viewing, creating, and editing students.
class StudentController extends Controller
{
    // This array stores fake student data (would normally come from a database)
    private $students = [
        [
            'id' => 1,
            'name' => 'Zeus Thunder',
            'email' => 'zeus.god@olympus.edu',
            'course' => 'BS Astronomy',
            'year' => '4th Year',
            'status' => 'Active'
        ],
        [
            'id' => 2,
            'name' => 'Athena Wisdom',
            'email' => 'athena.owl@olympus.edu',
            'course' => 'BS Philosophy',
            'year' => '2nd Year',
            'status' => 'Regular'
        ],
        [
            'id' => 3,
            'name' => 'Poseidon Sea',
            'email' => 'poseidon.trident@olympus.edu',
            'course' => 'BS Marine Biology',
            'year' => '3rd Year',
            'status' => 'Irregular'
        ]
    ];

    // Shows all students by passing the $students array to the view
    public function index() {
        return view('students.index', ['students' => $this->students]);
    }

    // Finds and shows one student by their ID
    public function show($id) {
        $student = collect($this->students)->firstWhere('id', $id);
        return view('students.show', ['student' => $student]);
    }

    // Shows the empty form for creating a new student
    public function create() {
        return view('students.create');
    }

    // Finds a student and shows the form to edit their information
    public function edit($id) {
        $student = collect($this->students)->firstWhere('id', $id);
        return view('students.edit', ['student' => $student]);
    }
}