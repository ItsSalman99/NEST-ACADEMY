@extends('backend.layouts.main')

@section('content')
    <!-- Header Layout Content -->
    <div class="mdk-header-layout__content mdk-header-layout__content--fullbleed mdk-header-layout__content--scrollable page"
        style="padding-top: 60px;">


        <div class="page__heading border-bottom">
            <div class="container-fluid page__container d-flex align-items-center">
                <h1 class="mb-0">Edit - {{ $announcement->title }}</h1>
            </div>
        </div>

        <div class="container-fluid page__container">
            <div class="card card-form">
                <div class="row no-gutters">
                    <div class="col-lg-4 card-body">
                        <p><strong class="headings-color">Edit - {{ $announcement->title }}</strong></p>
                        <p class="text-muted mb-0">Update announcement details.</p>
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
                        <form action="{{ route('announcements.update', ['id' => $announcement->id]) }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="fname">Title</label>
                                <input name="title" type="text" class="form-control" placeholder="Title"
                                    value="{{ $announcement->title }}">
                            </div>
                            <div class="form-group">
                                <label for="lname">Description</label>
                                <textarea name="description" class="form-control" id="" cols="30" rows="10">{{ $announcement->description }}</textarea>
                            </div>
                            <div class="text-right mb-5">
                                <button class="btn btn-success">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


    </div>
    <!-- // END header-layout__content -->
@endsection
