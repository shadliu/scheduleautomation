@extends('admin.layouts.app')
@section('title','Profile')
@section('content')

 <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <h4 class="page-title float-left">Profile</h4>

                    <ol class="breadcrumb float-right">
                        <li class="breadcrumb-item"><a href="#">Admin</a></li>
                        <li class="breadcrumb-item"><a href="#">Profile</a></li>
                    </ol>

                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <!-- end row -->


        <div class="row">
            <div class="col-md-12">
                <div class="card-box">
                    <h4 class="m-t-0 m-b-30 header-title">Profile <a class="btn btn-primary btn-xs float-right" href="{{ route('admin.user.profile.edit') }}" title=""> Edit </a></h4>

                    <table class="table table-bordered table-hovered">
                        <tbody>
                            <tr>
                                <th> Name</th>
                                <td>{{ Auth::user()->name }}</td>
                            </tr>

                            <tr>
                                <th> Email</th>
                                <td>{{ Auth::user()->email }}</td>
                            </tr> 

                            <tr>
                                <th> Mobile</th>
                                <td>{{ Auth::user()->phone }}</td>
                            </tr>

                            <tr>
                                <th> Created Date</th>
                                <td>{{ Auth::user()->created_at->format('d M Y') }}</td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
            <!-- end col -->

            
        </div>
        <!-- end row -->

    </div>
@endsection