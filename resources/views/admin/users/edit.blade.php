@extends('admin.layouts.app')
@section('title','profile')
@section('content')

 <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <h4 class="page-title float-left">User Profile</h4>
                    <ol class="breadcrumb float-right">
                        <li class="breadcrumb-item"><a href="#">Admin</a></li>
                        <li class="breadcrumb-item"><a href="#">User profile</a></li>
                    </ol>

                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <!-- end row -->

        <div class="row">
            <div class="col-md-12">
                <div class="modal-content">
                    <form method="POST" action="{{ route('users.update', $userdata->id) }}">
                        @csrf
                        @method('PATCH')
                        <div class="modal-body">
                            <div class="p-10 task-detail">
                                <div class="media m-t-0 m-b-20">
                                    <img class="d-flex mr-3 rounded-circle" src="{{ asset('assets/img/users') }}/{{ $userdata->profile_photo }}" alt="Generic placeholder image" height="48">
                                    <div class="media-body">
                                        <h5 class="media-heading m-b-5 mt-0">{{ $userdata->first_name }} {{ $userdata->last_name }}</h5>
                                        <span class="label label-danger">{{ $userdata->created_at->format('d-M-Y') }}</span>
                                    </div>
                                </div>

                                <h4 class="font-600 m-b-20">({{ $userdata->first_name }} {{ $userdata->last_name }}) Profile Information</h4>

                                <p class="text-muted">
                                    User About :
                                </p>

                                <ul class="list-inline task-dates m-b-0 m-t-20">
                                    <li>
                                        <h5 class="font-600 m-b-5">Name :</h5>
                                        <p> {{ $userdata->name }}</p>
                                    </li>

                                    <li>
                                        <h5 class="font-600 m-b-5">Email Address :</h5>
                                        <p> {{ $userdata->email }}</p>
                                    </li>

                                    <li>
                                        <h5 class="font-600 m-b-5">Phone No :</h5>
                                        <p> {{ $userdata->phone }}</p>
                                    </li>

                                    <li>
                                        <h5 class="font-600 m-b-5">Profile Photo :</h5>
                                        <img height="120" width="120" class="d-flex mr-3" src="{{ asset('assets/img/users') }}/{{ $userdata->profile_photo }}" alt="Generic placeholder image">
                                    </li>

                                    <li>
                                        <h5 class="font-600 m-b-5">Join Date :</h5>
                                        <p> {{ $userdata->created_at->format('d-M-Y') }}</p>
                                    </li>

                                    <li>
                                        <h5 class="font-600 m-b-5">Role Management :</h5>
                                        <select class="form-control" name="role" required>
                                            <option value="{{ $userdata->role }}" class="selected"> @php if ($userdata->role == 2) { echo "user"; }else{echo "admin";} @endphp </option>
                                            <option value="2">Make user</option></option>
                                            <option value="1">Make admin</option></option>
                                        </select>
                                    </li>
                                </ul>
                                <div class="clearfix"></div>
                                <div class="attached-files m-t-30">
                                    <!-- use for margin bottom -->
                                </div>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button onclick="myFunction()" type="submit" name="submit" class="btn btn-success waves-effect waves-light">Save Changes</button>
                            <a href="{{ route('users.index') }}" type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
@endsection

@section('footer_script')
    <script>
        function myFunction() {
            alert('Are You Shure ? You Change this user role !');
        }
    </script>
@endsection





