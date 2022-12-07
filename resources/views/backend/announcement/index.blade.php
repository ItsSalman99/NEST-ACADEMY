@extends('backend.layouts.main')

@section('content')
    <!-- Header Layout Content -->
    <div class="mdk-header-layout__content mdk-header-layout__content--fullbleed mdk-header-layout__content--scrollable page"
        style="padding-top: 60px;">


        <div class="page__heading border-bottom">
            <div class="container-fluid page__container d-flex align-items-center">
                <h1 class="mb-0">All Announcements</h1>
            </div>
        </div>

        <div class="container-fluid page__container">


            <div class="card">
                <div class="card-header card-header-large bg-white">
                    <div class="d-flex justify-content-between">
                        <div>
                            <h4 class="card-header__title">All Announcements</h4>
                        </div>
                        <div>
                            <a href="{{ route('announcements.create') }}" class="btn btn-success">
                                Add New Announcement
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-header">
                    <label class="mr-sm-2" for="inlineFormFilterBy">Total: {{ count($announcements) }}</label>

                </div>


                <div class="table-responsive border-bottom" data-toggle="lists"
                    data-lists-values='["js-lists-values-employee-name"]'>

                    <table class="table mb-0 thead-border-top-0">
                        <thead>
                            <tr>

                                <th style="width: 18px;">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input js-toggle-check-all"
                                            data-target="#staff" id="customCheckAll">
                                        <label class="custom-control-label" for="customCheckAll"><span
                                                class="text-hide">Toggle all</span></label>
                                    </div>
                                </th>

                                <th style="width: 30px">#</th>
                                <th style="width: 100px;">Title</th>
                                <th style="width: 48px;">Description</th>
                                <th style="width: 51px;">Created At</th>
                                <th style="width: 24px;"></th>
                            </tr>
                        </thead>
                        <tbody class="list" id="staff">

                            @foreach ($announcements as $announcement)
                                <tr>

                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input js-check-selected-row"
                                                id="customCheck2_1">
                                            <label class="custom-control-label" for="customCheck2_1"><span
                                                    class="text-hide">Check</span></label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="media align-items-center">
                                            <a href="#">{{ $announcement->id }}</a>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="media align-items-center">
                                            <a href="#">{{ $announcement->title }}</a>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="media align-items-center">
                                            <a href="#">{{ $announcement->description }}</a>
                                        </div>
                                    </td>
                                    <td><small
                                            class="text-muted">{{ date('F , j Y', strtotime($announcement->created_at)) }}</small>
                                    </td>
                                    <td>
                                        <div class="d-flex">
                                            <div>
                                                <a href="{{ route('announcements.edit', ['id'=> $announcement->id]) }}">
                                                    <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">edit</i>
                                                </a>
                                            </div>
                                            <div>
                                                <a href="{{ route('students.destroy', ['id'=>$announcement->id]) }}">
                                                    <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">delete</i>
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>

                <div class="card-body text-right">
                    {{ $announcements->links('pagination::bootstrap-4') }}
                </div>


            </div>
        </div>




    </div>
    <!-- // END header-layout__content -->
@endsection
