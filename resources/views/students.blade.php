@extends('layout')

@section('content')
    <div class="d-flex justify-content-center align-items-center flex-wrap gap-5 w-100 mt-5">
        @foreach ($students as $student)
            <div class="card mt-5">
                <h5 class="card-header">#{{ $student->id_number }}</h5>
                <div class="card-body text-capitalize">
                    <h5 class="card-title">{{ $student->firstname }} {{ $student->lastname }}</h5>
                    <p class="card-text column">
                    <div class="col">
                        <span>Birthdate: {{ $student->date_birth }}</span>
                    </div>
                    <div class="col">
                        <span>Gender: {{ $student->gender }}</span>
                    </div>
                    <div class="col">
                        <span>Ethnicity: {{ $student->ethnicity }}</span>
                    </div>
                    <div class="col">
                        <span>Email: {{ $student->email }}</span>
                    </div>
                    <div class="col">
                        <span>Number: {{ $student->number }}</span>
                    </div>
                    <div class="col">
                        <span>Address: {{ $student->address }}</span>
                    </div>
                    <div class="col">
                        <span>Nationality: {{ $student->nationality }}</span>
                    </div>
                    </p>
                    <div class="col row">
                        <div class="col">
                            <a href="{{ route('editstudent', ['id' => $student->id]) }}" class="btn btn-success">Edit</a>
                        </div>
                        <div class="col">
                            <form method="post" action="{{ route('deleteStudent', ['id' => $student->id]) }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Remove</button>
                            </form>
                        </div>
                        {{-- <a href="{{ route('deleteStudent', ['id' => $student->id]) }}" class="btn btn-danger">
                            Remove Student</a> --}}
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
