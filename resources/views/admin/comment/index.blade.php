@extends('admin.layouts.app')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Comments</h1>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>


        <section class="content ">
            <div class="contianer-fluid">

                <div class="row">
                    <section class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Comment List </h3>
                            </div>
                            <div class="card-body p-0">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>User</th>
                                            <th>Comment</th>
                                            <th>Job </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($comments as $comment)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ !empty($comment->user->name) ? $comment->user->name  : '' }}</td>
                                                <td>{{ $comment->comment ?? '' }}</td>
                                                <td style="max-width:500px">{{ !empty($comment->job->title) ? $comment->job->title : '' }}</td>
                                                <td>
                                                    @if(auth()->user()->role == 1)
                                                    <a href="{{ url('comment/delete',$comment->id) }}" class="btn btn-danger"
                                                        onclick="return confirm('Are you sure you want to delete?')">Delete</a>
                                                    @endif
                                                </td>
                                            </tr>

                                           @empty
                                           <tr>
                                            <td colspan="100%">No Record Found....</td>
                                           </tr>
                                        @endforelse
                                    </tbody>

                                </table>

                            </div>
                        </div>


                    </section>
                </div>

            </div>
        </section>
    </div>
    <!-- /.content-header -->
@endsection
