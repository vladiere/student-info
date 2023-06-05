@extends('layout')

@section('content')
    @if (count($students) == 0)
        <div class="row justify-content-center align-items-center fs-2 mt-5 pt-5 text-secondary">
            No Student/s Available
        </div>
    @else
        <div class="row justify-content-center align-items-center">
            <table class="table text-center text-capitalize">
                <thead>
                    <tr>
                        <th scope="col">#ID Number</th>
                        <th scope="col">Firstname</th>
                        <th scope="col">Lastname</th>
                        <th scope="col">Birth Date</th>
                        <th scope="col">Gender</th>
                        <th scope="col">Ethnicity</th>
                        <th scope="col">Email Address</th>
                        <th scope="col">Number</th>
                        <th scope="col">Nationality</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($students as $student)
                        <tr>
                            <th scope="row">
                                {{ $student->id_number }}
                            </th>
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
                                        class="text-success-emphasis fs-5 fw-bold text-decoration-none text-black">Edit</a>
                                </div>
                                <div class="col-2">
                                    <form method="post" class="p-0 m-0"
                                        action="{{ route('deleteStudent', ['id' => $student->id]) }}">
                                        @csrf
                                        @method('DELETE')
                                        <button style="background-color: transparent; border: none"
                                            class="text-center text-danger-emphasis fs-5 fw-bold"
                                            type="submit">Remove</button>
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
