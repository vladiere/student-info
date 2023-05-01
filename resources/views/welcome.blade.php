<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"
        integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js"
        integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"
        integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
</head>

<body>
    <div class="containter-sm m-5 p-5">
        <div class="d-flex justify-content-center align-items-center flex-column">
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <form id="students-info" method="POST" action="/students"
                class="shadow p-3 mb-5 bg-body-tertiary rounded p-5">
                @csrf
                <div class="row">
                    <div class="col-md">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com"
                                id="firstname" name="firstname">
                            <label for="floatingInput">Firstname</label>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com"
                                id="lastname" name="lastname">
                            <label for="floatingInput">Lastname</label>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com"
                                id="id_number" name="id_number">
                            <label for="floatingInput">Student ID Number</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com"
                                id="date_birth" name="date_birth">
                            <label for="floatingInput">Date of Birth</label>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com"
                                id="gender" name="gender">
                            <label for="floatingInput">Gender</label>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com"
                                id="ethinicity" name="ethnicity">
                            <label for="floatingInput">Ethnicity</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com"
                                id="email" name="email">
                            <label for="floatingInput">Email Address</label>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com"
                                id="number" name="number">
                            <label for="floatingInput">Phone Number</label>
                        </div>
                    </div>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com"
                        id="address" name="address">
                    <label for="floatingInput">Address</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com"
                        id="nationality" name="nationality">
                    <label for="floatingInput">Nationality</label>
                </div>
                <button type="submit" class="btn btn-primary px-5" id="btn_submit">Submit</button>
            </form>
            <div class="w-75 mb-5">
                <form action="/search" method="GET" class="form-inline mt-2 mt-md-0 d-flex flex-row gap-4">
                    <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search"
                        name="query">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
            <div class="d-flex justify-content-center align-items-center flex-wrap gap-5 w-100">
                <table class="table table-sm">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Firstname</th>
                            <th scope="col">Lastname</th>
                            <th scope="col">Student ID Number</th>
                            <th scope="col">Date of Birth</th>
                            <th scope="col">Gender</th>
                            <th scope="col">Ethnicity</th>
                            <th scope="col">Email Address</th>
                            <th scope="col">Number</th>
                            <th scope="col">Address</th>
                            <th scope="col">Nationality</th>
                        </tr>
                    </thead>
                    <tbody class="table-group-divider">
                        @foreach ($students as $student)
                            <?php $i = $loop->iteration; ?>
                            <tr>
                                <th scope="row">{{ $i }}</th>
                                <td>{{ $student->firstname }}</td>
                                <td>{{ $student->lastname }}</td>
                                <td>{{ $student->id_number }}</td>
                                <td>{{ $student->date_birth }}</td>
                                <td>{{ $student->gender }}</td>
                                <td>{{ $student->ethnicity }}</td>
                                <td>{{ $student->email }}</td>
                                <td>{{ $student->number }}</td>
                                <td>{{ $student->address }}</td>
                                <td>{{ $student->nationality }}</td>
                            </tr>
                        @endforeach
                    </tbody>

                </table>
            </div>
        </div>
    </div>

    {{-- <script>
        $(document).ready(() => {
            $('#btn_submit').click((e) => {
                e.preventDefault();

                const formdata = $('#students-info').serialize();

                if (formdata.length == 100) {
                    $.ajax({
                        url: '/students',
                        type: 'post',
                        data: formdata,
                        success: function(data) {
                            $('#students-info').reset
                            console.log(data)
                        },
                        error: function(jqXHR, textStatus, errorThrown) {
                            console.log(errorThrown)
                        }
                    })
                }

            })
        })
    </script> --}}
</body>

</html>
