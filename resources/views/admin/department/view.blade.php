<!--View Department-->
@extends('layouts.plugins')

@section('title', 'View Department Record')

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">
                            <i class="fa-regular fa-file-lines mr-1"></i>
                            View Department Record
                        </h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ url('admin/department') }}">Department</a></li>
                            <!--Edit Breadcrumb Name-->
                            <li class="breadcrumb-item active"><a href="#">View</a></li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">
                                    <i class="fa-regular fa-file-lines mr-1"></i>
                                    View Department
                                </h3>
                            </div>

                            <form class="form-horizontal" method="post" enctype="multipart/form-data">

                                <div class="card-body">

                                    <!--ID-->
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">ID
                                        </label>

                                        <div class="col-sm-10 col-form-label">
                                            {{ $getRecord->id }}
                                        </div>
                                    </div>

                                    <!--Department Name-->
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Department Name
                                        </label>

                                        <div class="col-sm-10 col-form-label">
                                            {{ $getRecord->department_name }}
                                        </div>
                                    </div>

                                    <!--Department Description-->
                                    @if(!empty($getRecord->department_description))
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Department Description
                                            </label>

                                            <div class="col-sm-10 col-form-label">
                                                {{ $getRecord->department_description }}
                                            </div>
                                        </div>
                                    @endif

                                    <!--Manager Name-->
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Manager Name
                                        </label>

                                        <div class="col-sm-10 col-form-label">
                                            @foreach($getEmployee as $data)
                                                @if($data->id == $getRecord->manager_id)
                                                    {{ $data->name }}
                                                @endif
                                            @endforeach
                                        </div>
                                    </div>

                                    <!--Created At-->
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Created At
                                        </label>

                                        <div class="col-sm-10 col-form-label">
                                            {{ date('d-F-Y h:i A', strtotime($getRecord->created_at)) }}
                                        </div>
                                    </div>

                                    <!--ID-->
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Updated At
                                        </label>

                                        <div class="col-sm-10 col-form-label">
                                            {{ date('d-F-Y h:i A', strtotime($getRecord->updated_at)) }}
                                        </div>
                                    </div>

                                </div>

                                <!--Card Footer-->
                                <div class="card-footer">
                                    <a href=" {{ url('admin/department') }} " class="btn btn-default"><i class="fa-solid fa-arrow-left mr-1"></i>Back</a>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

@endsection
