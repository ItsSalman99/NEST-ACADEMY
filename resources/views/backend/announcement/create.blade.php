@extends('backend.layouts.main')

@section('content')
    <!-- Header Layout Content -->
    <div class="mdk-header-layout__content mdk-header-layout__content--fullbleed mdk-header-layout__content--scrollable page"
        style="padding-top: 60px;">


        <div class="page__heading border-bottom">
            <div class="container-fluid page__container d-flex align-items-center">
                <h1 class="mb-0">Add New Announcement</h1>
            </div>
        </div>

        <div class="container-fluid page__container">
            <div class="card card-form">
                <div class="row no-gutters">
                    <div class="col-lg-4 card-body">
                        <p><strong class="headings-color">Add new announcement</strong></p>
                        <p class="text-muted mb-0">Add a new announcement for students and faculties.</p>
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
                        <form action="{{ route('announcements.store') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="lname">Announcement Title:</label>
                                <input name="title" type="text" class="form-control" placeholder="Announcement">
                            </div>
                            <div class="form-group">
                                <label for="lname">Announcement Description:</label>
                                <textarea name="description" class="form-control" placeholder="Description" style="height: 80px;"></textarea>
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
