@extends('layout')

@section('content')

    @if (session('success'))
        <div class="position-absolute top-50 start-50 translate-middle">
            <div class="alert alert-success alert-dismissible">
                <button class="btn-close" type="button" data-bs-dismiss="alert"></button>
                <strong>{{ session('success') }}</strong>
            </div>
        </div>
    @endif
    @if (count($students) == 0)
        <div class="row justify-content-center align-items-center fs-2 mt-5 pt-5 text-secondary">
            No Student/s Available
        </div>
    @else
        <div class="table-responsive-sm">
            <table class="table table-sm text-capitalize table-info">
                <thead class="text-center">
                    <tr>
                        <th>#ID Number</th>
                        <th>Firstname</th>
                        <th>Lastname</th>
                        <th>Birth Date</th>
                        <th>Gender</th>
                        <th>Ethnicity</th>
                        <th>Email Address</th>
                        <th>Number</th>
                        <th>Nationality</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($students as $student)
                        <tr>
                            <td>
                                {{ $student->id_number }}
                            </td>
                            <td>
                                {{ $student->firstname }}
                            </td>
                            <td>
                                {{ $student->lastname }}
                            </td>
                            <td>
                                {{ $student->date_birth }}
                            </td>
                            <td>
                                {{ $student->gender }}
                            </td>
                            <td>
                                {{ $student->ethnicity }}
                            </td>
                            <td>
                                {{ $student->email }}
                            </td>
                            <td>
                                {{ $student->number }}
                            </td>
                            <td>
                                {{ $student->nationality }}
                            </td>
                            <td class="row me-0">
                                <div class="col-2 mx-2 p-0">
                                    <a href="{{ route('editstudent', ['id' => $student->id]) }}"
                                        class="text-success-emphasis fs-5 text-decoration-none text-black">Edit</a>
                                </div>
                                <div class="col-2">
                                    <form method="post" class="p-0 m-0"
                                        action="{{ route('deleteStudent', ['id' => $student->id]) }}">
                                        @csrf
                                        @method('DELETE')
                                        <button style="background-color: transparent; border: none"
                                            class="text-center text-danger-emphasis fs-5" type="submit">Remove</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endif
@endsection
