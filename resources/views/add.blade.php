@extends('layout')

@section('content')
    <div class="containter-sm pt-5">
        <div class="d-flex justify-content-center align-items-center flex-column">
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <form id="students-info" method="POST" action="/students" class="shadow bg-body-tertiary p-3">
                @csrf
                <div class="row">
                    <div class="col-md">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com"
                                id="firstname" name="firstname">
                            <label for="floatingInput">Firstname</label>
                            @error('firstname')
                                <span class="text-danger-emphasis">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com"
                                id="lastname" name="lastname">
                            <label for="floatingInput">Lastname</label>
                            @error('lastname')
                                <span class="text-danger-emphasis">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="form-floating mb-3">
                            <input type="number" min="3" class="form-control" id="floatingInput"
                                placeholder="name@example.com" id="id_number" name="id_number">
                            <label for="floatingInput">Student ID Number</label>
                            @error('id_number')
                                <span class="text-danger-emphasis">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com"
                                id="date_birth" name="date_birth">
                            <label for="floatingInput">Date of Birth</label>
                            @error('date_birth')
                                <span class="text-danger-emphasis">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com"
                                id="gender" name="gender">
                            <label for="floatingInput">Gender</label>
                            @error('gender')
                                <span class="text-danger-emphasis">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com"
                                id="ethinicity" name="ethnicity">
                            <label for="floatingInput">Ethnicity</label>
                            @error('ethnicity')
                                <span class="text-danger-emphasis">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com"
                                id="email" name="email">
                            <label for="floatingInput">Email Address</label>
                            @error('email')
                                <span class="text-danger-emphasis">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com"
                                id="number" name="number">
                            <label for="floatingInput">Phone Number</label>
                            @error('number')
                                <span class="text-danger-emphasis">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com"
                        id="address" name="address">
                    <label for="floatingInput">Address</label>
                    @error('address')
                        <span class="text-danger-emphasis">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com"
                        id="nationality" name="nationality">
                    <label for="floatingInput">Nationality</label>
                    @error('nationality')
                        <span class="text-danger-emphasis">{{ $message }}</span>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary px-5" id="btn_submit">Submit</button>
            </form>

        </div>
    </div>
@endsection
