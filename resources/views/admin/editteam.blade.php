@extends('admin.layouts.adminmain')
@section('admincontent')

<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Admin Page</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/admin">Home</a></li>
                            <li class="breadcrumb-item active">Edit Team Members</li>
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
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Edit Team Members</h5>

                                <p class="card-text">

                                <form action="{{ route('updateteam',$member->id) }}" class="form-image-upload" method="POST" enctype="multipart/form-data">
                                    <div class="form-group">
                                        {{ csrf_field() }}
                                        <strong>Name</strong>
                                        <input type="text" value="{{ $member->memberName }}" name="memberName" class="form-control" placeholder="Name">
                                    </div>


                                    <div class="form-group">
                                        <strong>Image</strong><br>

                                            <img alt="" class="rounded" height="50px" src="{{ asset('/storage/app/membersImages/'.$member->memberImage) }}">

                                        <input type="file" name="memberImage" class="form-control">
                                    </div>


                                    <div class="form-group">
                                        <strong>Post</strong>
                                        <input type="text" name="memberPost" value="{{ $member->memberPost }}" class="form-control" placeholder="Position in Company">
                                    </div>

                                    <div class="form-group">
                                        <br>
                                        <button type="submit" class="btn btn-success">Update</button>
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
