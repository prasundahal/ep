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
                            <li class="breadcrumb-item"><a href="{{ url('/admin') }}">Home</a></li>
                            <li class="breadcrumb-item active">Add Admins</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-md-5">
                        <x-alert/>
                        <div class="card">
                            <div class="card-header">Add Admins</div>
                            <div class="card-body">


                                <p class="card-text">


                                <form action="{{ route('storeadmin') }}" class="form-image-upload" method="POST">
                                    {{csrf_field()}}

                                    <div class="form-group">
                                        <strong>Name</strong>
                                        <input type="text" name="name" class="form-control" placeholder="Name">
                                    </div>

                                    <div class="form-group">
                                        <strong>Email</strong>
                                        <input type="email" name="email" class="form-control" placeholder="Email">
                                    </div>


                                    <div class="form-group">
                                        <strong>Password</strong>
                                        <input type="password" name="password" class="form-control" placeholder="Password">
                                    </div>

                                    <div class="form-group">
                                        <br>
                                        <button type="submit" class="btn btn-success">Add</button>
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
