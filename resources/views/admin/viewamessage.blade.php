@extends('admin.layouts.adminmain')
@section('admincontent')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2 justify-content-center">
                    <div class="col-sm-6">

                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ url('/admin')}}">Home</a></li>
                            <li class="breadcrumb-item active">Read Message</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="row justify-content-center">
            <!-- /.col -->
            <div class="col-md-9">
                <div class="card card-primary card-outline">
                    <div class="card-header">
                        <h3 class="card-title">Read Mail</h3>

                        <div class="card-tools">
                            <a href="{{ url('/viewmessages') }}" class="btn btn-primary btn-block mb-3">Back to Inbox</a>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body p-0">
                        <div class="mailbox-read-info">
                            <h4>{{ $message->subject }}</h4><br>
                            <h6>From: {{ $message->email }}
                                <span class="mailbox-read-time float-right">{{ $message->created_at }}</span></h6>
                        </div>
                        <!-- /.mailbox-read-info -->
                        <div class="mailbox-controls with-border text-center">

                        </div>
                        <!-- /.mailbox-controls -->
                        <div class="mailbox-read-message">
                            <p>{{ $message->message }}</p>

                        </div>
                        <!-- /.mailbox-read-message -->
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer bg-white">
                        <ul class="mailbox-attachments d-flex align-items-stretch clearfix">
                            @if(!empty($message->file))
                            <li>
                                <span class="mailbox-attachment-icon"><i class="far fa-file-pdf"></i></span>
                                <div class="mailbox-attachment-info">
                                    <a href="{{ asset('/storage/app/files/'.$message->file) }}" class="mailbox-attachment-name"><i class="fas fa-paperclip"></i> {{ $message->file }}</a>
                                    <span class="mailbox-attachment-size clearfix mt-1">
                          <span></span>
                          <a href="{{ asset('/storage/app/files/'.$message->file) }}" class="btn btn-default btn-sm float-right" download="{{$message->file}}"><i class="fas fa-cloud-download-alt"></i></a>
                        </span>
                                </div>
                            </li>
                            @endif

                        </ul>
                    </div>



                    <!-- /.card-footer -->
                    <div class="card-footer">
                        <div class="float-right">
                            <a href="mailto:{{ $message->email }}" class="btn btn-default"><i class="fas fa-reply"></i> Reply</a>
                        </div>
                        <form method="post" id="delete-form-{{ $message->id }}" action="{{ route('deletemessage',$message->id) }}" style="display: none;">
                            {{ csrf_field() }}
                            {{ method_field('delete') }}
                        </form>
                        <button onclick="if(confirm('Are you sure to delete this message?')){
                            event.preventDefault();
                            document.getElementById('delete-form-{{ $message->id }}').submit();}
                            else{event.preventDefault();}" type="button" class="btn btn-default"><i class="far fa-trash-alt"></i>
                        Delete</button>

                    </div>
                    <!-- /.card-footer -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
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
