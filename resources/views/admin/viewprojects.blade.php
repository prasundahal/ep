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
                            <li class="breadcrumb-item"><a href="{{ url('/admin') }}">Home</a></li>
                            <li class="breadcrumb-item active">All Gallery 1</li>
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
                                <h5 class="card-title">All Projects</h5>

                                <p class="card-text">

                                <table class="table table-hover">
                                    <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Image</th>

                                        <th scope="col">Action</th>


                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($projects as $project)
                                    <tr>
                                        <th scope="row">{{ $project->id }}</th>
                                        <td>{{ $project->name }}</td>
                                        <td><img alt="fault"  height="50px" src="/gal1/{{ $project->image }}" /></td>
                                        <td>
                                            <a class="btn btn-raised btn-success btn-sm" href="{{ route('viewprojectid',$project->id) }}"><i class="fa fa-eye" aria-hidden="true"></i></a>||
                                            <a href="{{ route('editproject',$project->id) }}" class="btn btn-raised btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a> ||
                                            <form method="post" id="delete-form-{{ $project->id }}" action="{{ route('deleteproject',$project->id) }}" style="display: none;">
                                                {{ csrf_field() }}
                                                {{ method_field('delete') }}
                                            </form>
                                            <button onclick="if(confirm('Are you sure to delete this data?')){
                                                event.preventDefault();
                                                document.getElementById('delete-form-{{ $project->id }}').submit();}
                                                else{event.preventDefault();}" class="btn btn-raised btn-danger btn-sm"><i class="fa fa-trash" aria-hidden="true"></i>
                                            </button>

                                        </td>

                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                {{$projects->links("pagination::bootstrap-4")}}

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
