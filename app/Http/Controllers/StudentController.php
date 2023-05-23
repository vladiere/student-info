<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();
        return view('students', ['students' => $students]);
    }

    public function search(Request $request)
    {
        $query = $request->input('query');
        $students = Student::where('firstname', 'LIKE', '%' . $query . '%')
            ->orWhere('lastname', 'LIKE', '%' . $query . '%')
            ->orWhere('id_number', 'LIKE', '%' . $query . '%')
            ->get();

        return view('students', ['students' => $students]);
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


    public function editstudent($id)
    {
        $student = Student::findOrFail($id);

        return view('editstudent', ['student' => $student]);
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $student = Student::find($id);

        $student->firstname = $request->input('firstname');
        $student->lastname = $request->input('lastname');
        $student->id_number = $request->input('id_number');
        $student->date_birth = $request->input('date_birth');
        $student->gender = $request->input('gender');
        $student->ethnicity = $request->input('ethnicity');
        $student->email = $request->input('email');
        $student->number = $request->input('number');
        $student->address = $request->input('address');
        $student->nationality = $request->input('nationality');

        $student->save();

        return redirect('/')->with([
            'success' => 'Student updated successfully!',
            'students' => $student
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $student = Student::find($id);

        if (!$student) {
            return response()->json(['error' => 'Student not found.'], 404);
        }

        $student->delete();

        return redirect('/')->with([
            'success' => 'Student delete successfully!',
            'students' => $student
        ]);
    }
}
