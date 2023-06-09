<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<style>
    .nav-pills li a:hover {
        background-color: #141414;
        color: #e4e4e4 !important;
        transition: 300ms ease-in-out
    }
</style>

<div class="container-fluid">
    <div class="row flex-nowrap">
        <div class="bg-light col-auto col-sm-3 min-vh-100 border-end">
            <div class="bg-light p-2">
                <a class="d-flex text-decoration-none mt-1 align-items-center text-black">
                    <span class="fs-4 d-none d-sm-inline fw-bold">Student Listings</span>
                </a>
                <hr />
                <ul class="nav nav-pills flex-column mt-4 gap-2">
                    <li class="nav-item py-2 py-sm-0">
                        <a href="{{ url('/') }}" class="nav-link text-black" aria-current="page">
                            <i class="fs-5 fas fa-regular fa-house me-2"></i><span
                                class="fs-4 d-none d-sm-inline ">Home</span>
                        </a>
                    </li>
                    <li class="nav-item py-2 py-sm-0">
                        <a href="{{ route('addStudent') }}" class="nav-link text-black" aria-current="page">
                            <i class="fs-5 fa fas-regular fa-user-plus me-2"></i><span
                                class="fs-4 d-none d-sm-inline ">Add
                                Student</span>
                        </a>
                    </li>
                    <li class="nav-item py-2 py-sm-0">
                        <div class="nav-link text-black d-flex">
                            <i class="fs-5 me-2 fas fa-regular fa-sort"></i>
                            <select id="sortSelect" class="form-select"
                                style="width: 54%; border: none; background: transparent"
                                aria-label="Default select example" name="sort_by">
                                <option selected disabled>Sort Table by</option>
                                <option value="id_number">ID Number</option>
                                <option value="firstname">Firstname</option>
                                <option value="lastname">Lastname</option>
                                <option value="date_birth">Birth Date</option>
                                <option value="gender">Gender</option>
                                <option value="ethnicity">Ethnicity</option>
                                <option value="email">Email</option>
                                <option value="number">Number</option>
                                <option value="nationality">Nationality</option>
                            </select>
                        </div>
                    </li>
                    <li class="nav-item py-2 py-sm-0">
                        <form action="/search" method="GET" class="form-inline mt-md-0 d-flex flex-row">
                            <i class="fs-5 mx-3 fas fa-solid fa-magnifying-glass"></i>
                            <input type="text" style="border: none; background: transparent" placeholder="Search"
                                aria-label="Search" name="query">
                        </form>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-auto col-sm-9 p-0">
            @yield('content')
        </div>
    </div>
</div>


<script>
    $(document).ready(function() {
        $('#sortSelect').on('change', function() {
            var selectedValue = $(this).val();
            if (selectedValue) {
                var url = "{{ route('sortStudents') }}";
                var form = $('<form action="' + url + '" method="POST">' +
                    '@csrf' +
                    '<input type="hidden" name="sort_by" value="' + selectedValue + '">' +
                    '</form>');
                $('body').append(form);
                form.submit();
            }
        });
    });
</script>
