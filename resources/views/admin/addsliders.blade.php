@extends('admin.layouts.adminmain')
@section('admincontent')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">

                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/admin">Home</a></li>
                            <li class="breadcrumb-item active">Add Sliders</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <x-alert/>
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Add Sliders</h5>

                                <p class="card-text">

                                <form action="{{ route('storeslider') }}" class="form-image-upload" method="POST" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <strong>Image</strong>
                                        <input type="file" name="sliderImage" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <strong>Title</strong>
                                        <input type="text" name="title" class="form-control" placeholder="Title">
                                    </div>
                                    <div class="form-group">
                                        <strong>Sub Title 1</strong>
                                        <input type="text" name="subtitle1" class="form-control" placeholder="Sub Title 1">
                                    </div>
                                    <div class="form-group">
                                        <strong>Sub Title 2</strong>
                                        <input type="text" name="subtitle2" class="form-control" placeholder="Sub Title 2">
                                    </div>

                                    <div class="form-group">
                                        <strong>Content</strong>
                                        <input type="text" name="content" class="form-control" placeholder="Content">
                                    </div>

                                    <div class="form-group">
                                        <br>
                                        <button type="submit" class="btn btn-success">Add Slider</button>
                                    </div>

                                </form>

                                </p>

                            </div>
                        </div>


                    </div>
                    <!-- /.col-md-6 -->


                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
        <div class="p-3">
            <h5>Title</h5>
            <p>Sidebar content</p>
        </div>
    </aside>
    <!-- /.control-sidebar -->
@endsection
