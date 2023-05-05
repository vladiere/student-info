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
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <h1>Edit Student</h1>
                <hr>
                <form method="POST" action="/students/{{ $student->id }}" class="shadow p-3 mb-5 bg-body-tertiary rounded p-5">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="firstname">Firstname</label>
                        <input type="text" class="form-control" id="firstname" name="firstname" value="{{ $student->firstname }}">
                    </div>
                    <div class="form-group mb-3">
                        <label for="lastname">Lastname</label>
                        <input type="text" class="form-control" id="lastname" name="lastname" value="{{ $student->lastname }}">
                    </div>
                    <div class="form-group mb-3">
                        <label for="id_number">Student ID Number</label>
                        <input type="text" class="form-control" id="id_number" name="id_number" value="{{ $student->id_number }}">
                    </div>
                    <div class="form-group mb-3">
                        <label for="date_birth">Date of Birth</label>
                        <input type="text" class="form-control" id="date_birth" name="date_birth" value="{{ $student->date_birth }}">
                    </div>
                    <div class="form-group mb-3">
                        <label for="gender">Gender</label>
                        <input type="text" class="form-control" id="gender" name="gender" value="{{ $student->gender }}">
                    </div>
                    <div class="form-group mb-3">
                        <label for="ethnicity">Ethnicity</label>
                        <input type="text" class="form-control" id="ethnicity" name="ethnicity" value="{{ $student->ethnicity }}">
                    </div>
                    <div class="form-group mb-3">
                        <label for="email">Email Address</label>
                        <input type="text" class="form-control" id="email" name="email" value="{{ $student->email }}">
                    </div>
                    <div class="form-group mb-3">
                        <label for="number">Phone Number</label>
                        <input type="text" class="form-control" id="number" name="number" value="{{ $student->number }}">
                    </div>
                    <div class="form-group mb-3">
                        <label for="address">Address</label>
                        <input type="text" class="form-control" id="address" name="address" value="{{ $student->address }}">
                    </div>
                    <div class="form-group mb-3">
                        <label for="nationality">Nationality</label>
                        <input type="text" class="form-control" id="nationality" name="nationality" value="{{ $student->nationality }}">
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
