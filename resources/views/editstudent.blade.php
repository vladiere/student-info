@extends('layout')


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <h1>Edit Student</h1>
                <hr>
                <form method="POST" action="/students/{{ $student->id }}"
                    class="shadow p-3 mb-5 bg-body-tertiary rounded p-5 text-capitalize">
                    @csrf
                    @method('PUT')
                    <div class="form-group mb-3">
                        <label for="id_number">Student ID Number</label>
                        <input type="number" class="form-control text-capitalize" id="id_number" name="id_number"
                            value="{{ $student->id_number }}" readonly>
                    </div>
                    <div class="form-group mb-3">
                        <label for="date_birth">Date of Birth</label>
                        <input type="text" class="form-control text-capitalize" id="date_birth" name="date_birth"
                            value="{{ $student->date_birth }}" readonly>
                    </div>
                    <div class="form-group mb-3">
                        <label for="gender">Gender</label>
                        <input type="text" class="form-control text-capitalize" id="gender" name="gender"
                            value="{{ $student->gender }}" readonly>
                    </div>
                    <div class="form-group mb-3">
                        <label for="nationality">Nationality</label>
                        <input type="text" class="form-control text-capitalize" id="nationality" name="nationality"
                            value="{{ $student->nationality }}" readonly>
                    </div>
                    <div class="form-group mb-3">
                        <label for="ethnicity">Ethnicity</label>
                        <input type="text" class="form-control text-capitalize" id="ethnicity" name="ethnicity"
                            value="{{ $student->ethnicity }}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="firstname">Firstname</label>
                        <input type="text" class="form-control text-capitalize" id="firstname" name="firstname"
                            value="{{ $student->firstname }}">
                    </div>
                    <div class="form-group mb-3">
                        <label for="lastname">Lastname</label>
                        <input type="text" class="form-control text-capitalize" id="lastname" name="lastname"
                            value="{{ $student->lastname }}">
                    </div>
                    <div class="form-group mb-3">
                        <label for="email">Email Address</label>
                        <input type="text" class="form-control text-capitalize" id="email" name="email"
                            value="{{ $student->email }}">
                    </div>
                    <div class="form-group mb-3">
                        <label for="number">Phone Number</label>
                        <input type="number" class="form-control text-capitalize" id="number" name="number"
                            value="{{ $student->number }}">
                    </div>
                    <div class="form-group mb-3">
                        <label for="address">Address</label>
                        <input type="text" class="form-control text-capitalize" id="address" name="address"
                            value="{{ $student->address }}">
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
@endsection
