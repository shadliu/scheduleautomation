@extends('admin.layouts.app')
@section('title','Edit Profile')
@section('content')

 <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <h4 class="page-title float-left">Profile</h4>

                    <ol class="breadcrumb float-right">
                        <li class="breadcrumb-item"><a href="#">Admin</a></li>
                        <li class="breadcrumb-item"><a href="#">Edit Profile</a></li>
                    </ol>

                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <!-- end row -->


        <div class="row">
            <div class="col-md-12">
                <div class="card-box">
                    <h4 class="m-t-0 m-b-30 header-title">Edit Profile <a class="btn btn-primary btn-xs float-right" href="{{ route('admin.user.profile') }}" title=""> Back Profile </a></h4>


                     <form role="form" method="post" action="{{ route('admin.user.profile.update') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="">Name</label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="Enter name" value="{{ Auth::user()->name }}">
                            <div class="text-danger">
                                {{ $errors->first('name') }}
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">Email address</label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="Enter email" value="{{ Auth::user()->email }}">
                            <div class="text-danger">
                                {{ $errors->first('email') }}
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="">Mobile</label>
                            <input type="text" class="form-control" name="phone" id="mobile" placeholder="Enter Mobile" value="{{ Auth::user()->phone }}">
                            <div class="text-danger">
                                {{ $errors->first('phone') }}
                            </div>
                        </div>


                        <div class="form-group">
                            <img width="120" src="{{ asset('assets/img/users') }}/{{ Auth::user()->profile_photo }}" alt="" class="image-responsive image-circle">
                            <br>
                            <label for="">Image</label>
                            <input type="file" class="form-control" name="profile_photo" id="image" placeholder="" value="">
                        </div>
                       
                        <button type="submit" class="btn btn-purple waves-effect waves-light">Submit</button>
                    </form>
                     
                </div>
            </div>
            <!-- end col -->

            
        </div>
        <!-- end row -->


    </div>



@endsection