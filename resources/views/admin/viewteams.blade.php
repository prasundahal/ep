@extends('admin.layouts.adminmain')
@section('admincontent')

<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark"> {{ config('app.name', 'Laravel') }}</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/admin">Home</a></li>
                            <li class="breadcrumb-item active">Galery2</li>
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
                                <h5 class="card-title">All Gallery 2</h5>

                                <p class="card-text">

                                <table class="table table-hover">
                                    <thead>
                                    <tr>
                                        <td>No</td>
                                        <td>Name</td>

                                        <td>Photo</td>
                                        <td>Action</td>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($teams as $team)
                                    <tr>
                                        <td scope="row">{{ $team->id }}</td>
                                        <td>{{ $team->name }}</td>

                                        <td><img alt="fault"  height="50px" src="/gal2/{{ $team->image }}" /></td>
                                        <td><a class="btn btn-raised btn-primary btn-sm" href="{{ route('editteam',$team->id )}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                            ||
                                            <form method="post" id="delete-form-{{ $team->id }}" action="{{ route('deleteteam',$team->id) }}" style="display: none;">
                                                {{ csrf_field() }}
                                                {{ method_field('delete') }}
                                            </form>
                                            <button onclick="if(confirm('Are you sure to delete this data?')){
                                                event.preventDefault();
                                                document.getElementById('delete-form-{{ $team->id }}').submit();}
                                                else{event.preventDefault();}" class="btn btn-raised btn-danger btn-sm">
                                                <i class="fa fa-trash" aria-hidden="true"></i></button></td>
                                        </td>

                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                {{ $teams->links("pagination::bootstrap-4") }}

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
