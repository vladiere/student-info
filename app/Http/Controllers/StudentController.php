<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();
        return view('welcome', ['students' => $students]);
    }
    public function search(Request $request)
    {
        $query = $request->input('query');
        $students = Student::where('firstname', 'LIKE', '%' . $query . '%')
            ->orWhere('lastname', 'LIKE', '%' . $query . '%')
            ->orWhere('id_number', 'LIKE', '%' . $query . '%')
            ->get();

        return view('welcome', ['students' => $students]);
    }

    public function store(Request $request)
    {

        $student = Student::create([
            "firstname" => $request->input('firstname'),
            "lastname" => $request->input('lastname'),
            "id_number" => $request->input('id_number'),
            "date_birth" => $request->input('date_birth'),
            "gender" => $request->input('gender'),
            "ethnicity" => $request->input('ethnicity'),
            "email" => $request->input('email'),
            "number" => $request->input('number'),
            "address" => $request->input('address'),
            "nationality" => $request->input('nationality'),
        ]);

        // Redirect to a success page
        return redirect('/')->with([
            'success' => 'Student added successfully!',
            'students' => $student
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        //
    }
}