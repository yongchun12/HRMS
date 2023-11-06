<!--Leave Request-->
@extends('layouts.plugins')

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Edit Posts</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6" style="text-align: right">

                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!--Content / Create Forum Posts-->
        <section class="content">
            <div class="container-fluid">

                <div class="row">
                    <section class="col-md-12">

                        <div class="card card-info">

                            <!--Card Header-->
                            <div class="card-header">
                                <h3 class="card-title">Edit Posts</h3>
                            </div>

                            <form class="form-horizontal" method="post" accept="{{ url('admin/forum/edit/'.$getForum->id) }}}" enctype="multipart/form-data">

                                {{ csrf_field() }}

                                <!--Card Info-->
                                <div class="card-body">

                                    <!--Title-->
                                    <div class="form-group row">

                                        <label class="col-sm-2 col-form-label">Title
                                            <!--Required-->
                                            <span style="color: red">*</span>
                                        </label>

                                        <div class="col-sm-10">
                                            <!--value: old is validation for check the type of the input-->
                                            <input type="text" value="{{ $getForum->title }}" name="title" class="form-control" placeholder="Enter Title" required>
                                        </div>

                                    </div>

                                    <!--Description-->
                                    <div class="form-group row">

                                        <label class="col-sm-2 col-form-label">Description
                                            <!--Required-->
                                            <span style="color: red">*</span>
                                        </label>

                                        <div class="col-sm-10">
                                            <textarea class="form-control" name="description" placeholder="Enter Description" rows="4" cols="50" required>{{ $getForum->description }}</textarea>
                                        </div>

                                    </div>

                                    <!--Card Footer-->
                                    <div class="card-footer">
                                        <a href=" {{ url('admin/forum') }} " class="btn btn-default">Back</a>
                                        <button type="submit" class="btn btn-primary float-right">Update Edit</button>
                                    </div>

                                </div>

                            </form>

                        </div>

                    </section>
                </div>

            </div>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

@endsection
