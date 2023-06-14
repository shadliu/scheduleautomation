@extends('layouts.app')
@section('title', 'User Profile Edit')
@section('content')
    <section class="dashboard">
        <div class="container">
            <div class="user-dashboard">
                <div class="row">
                    <!-- Dashboard left bar Here ! -->
                    @include('dashboard.include.leftbar')
                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                        <style>
                            .card-box{
                                box-shadow: 0px 0px 4px 0px #00000040;
                            }
                        </style>
                        <div class="card-box p-4">
                            <h4 class="m-t-0 m-b-30 header-title">Edit Profile <a class="btn btn-sm btn-info float-right" href="{{ route('user.profile') }}" title=""> < Back Profile </a></h4>

                                <form role="form" method="post" action="{{ route('user.profile.update') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group my-4">
                                    <label for="">Name</label>
                                    <input type="text" class="form-control" name="name" id="name" placeholder="Enter name" value="{{ Auth::user()->name }}">
                                    <div class="text-danger">
                                        {{ $errors->first('name') }}
                                    </div>
                                </div>
                                <div class="form-group my-4">
                                    <label for="">Email address</label>
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Enter email" value="{{ Auth::user()->email }}">
                                    <div class="text-danger">
                                        {{ $errors->first('email') }}
                                    </div>
                                </div>

                                <div class="form-group my-4">
                                    <label for="">Mobile</label>
                                    <input type="text" class="form-control" name="phone" id="mobile" placeholder="Enter Mobile" value="{{ Auth::user()->phone }}">
                                    <div class="text-danger">
                                        {{ $errors->first('phone') }}
                                    </div>
                                </div>
                                <div class="form-group">
                                    <img width="120" src="{{ asset('nsseb_assets/media/images/profile-img') }}/{{ Auth::user()->profile_photo }}" alt="" class="image-responsive image-circle">
                                    <br>
                                    <label for="">Image</label>
                                    <input type="file" class="form-control" name="profile_photo" id="image" placeholder="" value="">
                                </div>
                                
                                <button type="submit" class="btn btn-warning waves-effect waves-light mt-4">Save Now</button>
                            </form>
                                
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

