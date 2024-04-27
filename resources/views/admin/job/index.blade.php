@extends('admin.layouts.app')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Jobs</h1>
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
                                <h3 class="card-title">Job List </h3>
                            </div>
                            <div class="card-body p-0">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>title</th>
                                            <th>Sub title</th>
                                            <th>Description</th>
                                            <th>User</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($jobs as $job)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $job->title ?? '' }}</td>
                                                <td>{{ $job->sub_title ?? '' }}</td>
                                                <td style="max-width:500px">{{ $job->description ?? '' }}</td>
                                                <td>{{ !empty($job->user->name) ? $job->user->name : '' }}</td>
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
