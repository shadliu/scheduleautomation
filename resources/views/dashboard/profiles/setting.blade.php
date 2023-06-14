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
                        <div class="card-box p-5">
                            <h4 class="m-t-0 m-b-30 header-title mb-4">Change Password <a class="btn btn-sm btn-info float-right" href="{{ route('user.profile') }}" title=""> < Back Profile </a></h4>
                            
                                <form action="{{ route('user.setting.update') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                
                                <div class="form-group my-4">
                                    <label for="url">Old Password</label>
                                    <input type="password" name="current_password" value="{{ old('current_password') }}" class="form-control" placeholder="Enter Old Password" />
                                    <div class="text-danger">{{ $errors->first('current_password') }}</div>
                                </div>
                                    
                                <div class="form-group my-4">
                                    <label for="details">New Password</label>
                                    <input type="password" name="new_password" value="{{ old('new_password') }}" class="form-control" placeholder="Enter New Password" />
                                    <div class="text-danger">{{ $errors->first('new_password') }}</div>
                                </div>
                                    
                                <div class="form-group my-4">
                                    <label for="name">Confirm Password</label>
                                    <input type="password" name="password_confirmation" value="{{ old('password_confirmation') }}" class="form-control" placeholder="Enter Confirm Password" />
                                    <div class="text-danger">{{ $errors->first('password_confirmation') }}</div>
                                </div>
                                    

                                <button type="submit" class="btn btn-warning m-r-5">Update Password</button>
                            </form> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

