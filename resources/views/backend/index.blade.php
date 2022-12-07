@extends('backend.layouts.main')

@section('content')
    <!-- Header Layout Content -->
    <div class="mdk-header-layout__content mdk-header-layout__content--fullbleed mdk-header-layout__content--scrollable page"
        style="padding-top: 60px;">
        <div class="page__heading">
            <div class="container-fluid page__container">
                <h1 class="mb-0">Welcome Dear, {{ Auth::user()->name }}</h1>
            </div>
        </div>
        <div class="container-fluid page__container">

            <div class="row card-group-row">
                <div class="col-lg-6 col-md-6 card-group-row__col">
                    <div class="card card-group-row__card">
                        <div class="card-body-x-lg card-body d-flex flex-row align-items-center">
                            <div class="flex">
                                <div class="card-header__title text-muted mb-2 d-flex">Total Admins</div>
                                <span class="h4 m-0">{{ $Tadmin }}<small class="text-muted"></small> </span>
                            </div>
                            <div><i class="material-icons icon-muted icon-40pt ml-3">contacts</i></div>
                        </div>
                        <div class="progress" style="height: 3px;">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 100%;" aria-valuenow="25"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 card-group-row__col">
                    <div class="card card-group-row__card">
                        <div class="card-body-x-lg card-body d-flex flex-row align-items-center">
                            <div class="flex">
                                <div class="card-header__title text-muted mb-2 d-flex">Total Students</div>
                                <span class="h4 m-0">{{ $Tstudent }}<small class="text-muted"></small> </span>
                            </div>
                            <div><i class="material-icons icon-muted icon-40pt ml-3">contacts</i></div>
                        </div>
                        <div class="progress" style="height: 3px;">
                            <div class="progress-bar bg-primary" role="progressbar" style="width: 100%;" aria-valuenow="25"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 card-group-row__col">
                    <div class="card card-group-row__card">
                        <div class="card-body-x-lg card-body d-flex flex-row align-items-center">
                            <div class="flex">
                                <div class="card-header__title text-muted mb-2 d-flex">Total Teachers</div>
                                <span class="h4 m-0">{{ $Tteachers }}<small class="text-muted"></small> </span>
                            </div>
                            <div><i class="material-icons icon-muted icon-40pt ml-3">contacts</i></div>
                        </div>
                        <div class="progress" style="height: 3px;">
                            <div class="progress-bar bg-warning" role="progressbar" style="width: 100%;" aria-valuenow="25"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 card-group-row__col">
                    <div class="card card-group-row__card">
                        <div class="card-body-x-lg card-body d-flex flex-row align-items-center">
                            <div class="flex">
                                <div class="card-header__title text-muted mb-2 d-flex">Total Announcments</div>
                                <span class="h4 m-0">{{ $TAnnouncments }}<small class="text-muted"></small> </span>
                            </div>
                            <div><i class="material-icons icon-muted icon-40pt ml-3">contacts</i></div>
                        </div>
                        <div class="progress" style="height: 3px;">
                            <div class="progress-bar bg-warning" role="progressbar" style="width: 100%;" aria-valuenow="25"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
    <!-- // END header-layout__content -->
@endsection
