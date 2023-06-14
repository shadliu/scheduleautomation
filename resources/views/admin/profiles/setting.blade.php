@extends('admin.layouts.app')
@section('title','Setting')
@section('content')

 <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <h4 class="page-title float-left">Profile</h4>

                    <ol class="breadcrumb float-right">
                        <li class="breadcrumb-item"><a href="#">Admin</a></li>
                        <li class="breadcrumb-item"><a href="#">Setting</a></li>
                    </ol>

                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <!-- end row -->


        <div class="row">
            <div class="col-md-12">
                <div class="card-box">
                    <h4 class="m-t-0 m-b-30 header-title">Setting <a class="btn btn-primary btn-xs float-right" href="{{ route('admin.user.profile') }}" title=""> Back Profile </a></h4>
                    
                      <form action="{{ route('admin.user.setting.update') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        
                        <div class="form-group">
                            <label for="url">Old Password</label>
                            <input type="password" name="current_password" value="{{ old('current_password') }}" class="form-control" placeholder="Enter New Password" />
                            <div class="text-danger">{{ $errors->first('current_password') }}</div>
                        </div>
                           
                        <div class="form-group">
                            <label for="details">New Password</label>
                            <input type="password" name="new_password" value="{{ old('new_password') }}" class="form-control" placeholder="Enter New Password" />
                            <div class="text-danger">{{ $errors->first('new_password') }}</div>
                        </div>
                           
                        <div class="form-group">
                            <label for="name">Confirm Password</label>
                            <input type="password" name="password_confirmation" value="{{ old('password_confirmation') }}" class="form-control" placeholder="Enter Confirm Password" />
                            <div class="text-danger">{{ $errors->first('password_confirmation') }}</div>
                        </div>
                           
 
                        <button type="submit" class="btn btn-sm btn-primary m-r-5">Update Password</button>
                        <a class="btn btn-sm btn-info" href="{{ route('admin.user.profile') }}">Back Profile</a>
                    </form>
                     
                </div>
            </div>
            <!-- end col -->

            
        </div>
        <!-- end row -->


    </div>



@endsection