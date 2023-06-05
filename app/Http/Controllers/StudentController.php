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

        $request->validate([
            "firstname" => 'required|min:3',
            "lastname" => 'required|min:3',
            "id_number" => 'required|min:3',
            "date_birth" => 'required|min:3',
            "gender" => 'required|min:3',
            "ethnicity" => 'required|min:3',
            "email" => 'required|min:3',
            "number" => 'required|min:3|numeric',
            "address" => 'required|min:3',
            "nationality" => 'required|min:3',
        ]);

        $student = Student::create($request->all());

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

        // dd($request->all());

        $request->validate([
            "firstname" => 'required|min:3',
            "lastname" => 'required|min:3',
            "id_number" => 'required|min:3',
            "date_birth" => 'required|min:3',
            "gender" => 'required|min:3',
            "ethnicity" => 'required|min:3',
            "email" => 'required|min:3',
            "number" => 'required|min:3',
            "address" => 'required|min:3',
            "nationality" => 'required|min:3',
        ]);

        $student->firstname = $request->firstname;
        $student->lastname = $request->lastname;
        $student->id_number = $request->id_number;
        $student->date_birth = $request->date_birth;
        $student->gender = $request->gender;
        $student->ethnicity = $request->ethnicity;
        $student->email = $request->email;
        $student->number = $request->number;
        $student->address = $request->address;
        $student->nationality = $request->nationality;

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
