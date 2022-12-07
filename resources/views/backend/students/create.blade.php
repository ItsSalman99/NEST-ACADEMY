@extends('backend.layouts.main')

@section('content')
    <!-- Header Layout Content -->
    <div class="mdk-header-layout__content mdk-header-layout__content--fullbleed mdk-header-layout__content--scrollable page"
        style="padding-top: 60px;">


        <div class="page__heading border-bottom">
            <div class="container-fluid page__container d-flex align-items-center">
                <h1 class="mb-0">Add New Student</h1>
            </div>
        </div>

        <div class="container-fluid page__container">
            <div class="card card-form">
                <div class="row no-gutters">
                    <div class="col-lg-4 card-body">
                        <p><strong class="headings-color">Add new student</strong></p>
                        <p class="text-muted mb-0">Add a new student by filling up all fields.</p>
                    </div>
                    <div class="col-lg-8 card-form__body card-body">
                        @if ($errors->any())
                            <div class="bg-danger p-4" style="border-radius: 20px; margin-bottom: 30px;">
                                <div class="text-white">
                                    {{ __('Whoops! Something went wrong.') }}
                                </div>

                                <ul class="text-white navbar-nav">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form action="{{ route('students.store') }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="fname">First name</label>
                                        <input name="fname" type="text" class="form-control" placeholder="First name">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="lname">Last name</label>
                                        <input name="lname" type="text" class="form-control" placeholder="Last name">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="lname">Student ID:</label>
                                <input name="student_id" type="number" class="form-control" placeholder="Student Id">
                            </div>
                            <div class="form-group">
                                <label for="lname">Email</label>
                                <input name="email" type="email" class="form-control" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <label for="lname">DOB</label>
                                <input name="dob" type="date" class="form-control" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <label for="gender">Gender</label><br />
                                <select name="gender" class="custom-select w-full">
                                    <option value="male">Male</option>
                                    <option value="female">FeMale</option>
                                </select>
                            </div>
                            <div class="text-right mb-5">
                                <button class="btn btn-success">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


    </div>
    <!-- // END header-layout__content -->
@endsection
