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
                            <li class="breadcrumb-item active">View Messages</li>
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
                                <h5 class="card-title">All Messages</h5>

                                <p class="card-text">

                                <table class="table table-hover">
                                    <thead>
                                    <tr>
                                        <td>ID</td>
                                        <td>Name</td>
                                        <td>Email</td>
                                        <td>Subject</td>
                                        <td>Message</td>
                                        <td>File</td>
                                        <td>Action</td>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if(!empty($messages))
                                    @foreach($messages as $message)
                                    <tr>
                                        <td>{{ $message->id }}</td>
                                        <td>{{ $message->name }}</td>
                                        <td>{{ $message->email }}</td>
                                        <td>{{ $message->subject }}</td>
                                        <td>{{ substr($message->message, 0,  20) }}...</td>
                                        <td>@if(!empty($message->file))
                                            <a target="_blank" class="btn btn-raised btn-secondary btn-sm" href="{{ asset('/storage/app/files/') }}/{{ $message->file }}"><i class="fa fa-paperclip" aria-hidden="true"></i></a></td>
                                        @endif
                                        <td>
                                            <a class="btn btn-raised btn-success btn-sm" href="{{ route('viewamessage',$message->id) }}"><i class="fa fa-eye" aria-hidden="true"></i></a>||
                                            <a href="mailto:{{ $message->email }}" class="btn btn-raised btn-primary btn-sm"><i class="fa fa-envelope" aria-hidden="true"></i></a> ||
                                            <form method="post" id="delete-form-{{ $message->id }}" action="{{ route('deletemessage',$message->id) }}" style="display: none;">
                                                {{ csrf_field() }}
                                                {{ method_field('delete') }}
                                            </form>
                                            <button onclick="if(confirm('Are you sure to delete this data?')){
                                                event.preventDefault();
                                                document.getElementById('delete-form-{{ $message->id }}').submit();}
                                                else{event.preventDefault();}" class="btn btn-raised btn-danger btn-sm"><i class="fa fa-trash" aria-hidden="true"></i>
                                        </td>
                                    </tr>
                                    @endforeach
                                    @endif
                                    </tbody>
                                </table>
                                @if(!empty($messages))
                                    {{ $messages->links("pagination::bootstrap-4") }}
                                @endif
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
