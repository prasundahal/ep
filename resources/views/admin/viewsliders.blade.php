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
                            <li class="breadcrumb-item active">All Sliders</li>
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
                                <x-alert/>
                                <h5 class="card-title">All Sliders</h5>

                                <a class="btn btn-primary float-right" href="{{ url('/addsliders') }}">Add Sliders</a>
                                <p class="card-text">

                                <table class="table table-hover">
                                    <thead>
                                    <tr>
                                        <td>ID</td>
                                        <td>Title</td>
                                        <td>Sub Title 1</td>
                                        <td>Sub Title 2</td>
                                        <td>Silder Image</td>
                                        <td>Content</td>
                                        <td>Action</td>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($sliders as $slider)
                                        <tr>
                                            <td scope="row">{{ $slider->id }}</td>
                                            <td>{{ $slider->title }}</td>
                                            <td>{{ $slider->subtitle1 }}</td>
                                            <td>{{ $slider->subtitle2 }}</td>
                                            <td><img alt="fault"  height="50px" src="/sliderImages/{{ $slider->image }}" /></td>
                                            <td>{{ $slider->content}}</td>
                                            <td>
                                                <a class="btn btn-raised btn-primary btn-sm" href="{{ route('editslider',$slider->id )}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                                ||
                                                <form method="post" id="delete-form-{{ $slider->id }}" action="{{ route('deleteslider',$slider->id) }}" style="display: none;">
                                                    {{ csrf_field() }}
                                                    {{ method_field('delete') }}
                                                </form>
                                                <button onclick="if(confirm('Are you sure to delete this data?')){
                                                    event.preventDefault();
                                                    document.getElementById('delete-form-{{ $slider->id }}').submit();}
                                                    else{event.preventDefault();}" class="btn btn-raised btn-danger btn-sm">
                                                    <i class="fa fa-trash" aria-hidden="true"></i></button>
                                            </td>

                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>


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
