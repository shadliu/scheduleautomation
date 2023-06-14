@extends('admin.layouts.app')
@section('title','User list')
@section('content')

 <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <h4 class="page-title float-left">Users</h4>
                    <ol class="breadcrumb float-right">
                        <li class="breadcrumb-item"><a href="#">Admin</a></li>
                        <li class="breadcrumb-item"><a href="#">User List</a></li>
                    </ol>

                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <!-- end row -->

        <div class="row">
            <div class="col-md-12">
                <div class="card-box">
                    <h4 class="m-t-0 header-title"><b>All User List</b></h4>
                    <p class="text-muted font-14 m-b-20">
                        You can create a new admin if you want.
                    </p>

                    <div class="table-responsive">
                        <table class="table table-hover m-0 table-actions-bar">

                            <thead>
                            <tr>
                                <th>SI NO.</th>
                                <th>Photo</th>
                                <th>Name </th>
                                <th>Email </th>
                                <th>Phone </th>
                                <th>Join Date </th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach ($usersdata as $data)
                                    <tr>
                                        <td>
                                            <h5>{{ $loop->index + 1 }}</h5>
                                        </td>

                                        <td>
                                            <img src="{{ asset('assets/img/users') }}/{{ $data->profile_photo }}" alt="contact-img" title="contact-img" class="rounded-circle thumb-sm" />
                                        </td>

                                        <td>
                                            <h5 class="m-b-0 m-t-0 font-600">{{ $data->first_name }} {{ $data->last_name }}</h5>
                                        </td>
                                        
                                        <td>
                                            <h5>
                                                {{ $data->email }}
                                            </h5>
                                        </td>

                                        <td>
                                            <h5>
                                                {{ $data->phone }}
                                            </h5>
                                        </td>
                                        
                                        <td>
                                            <h5>
                                                {{ $data->created_at->format('d-M-Y') }}
                                            </h5>
                                        </td>
                                        
                                            <form method="POST" action="{{ route('users.destroy', $data->id) }}">
                                                @csrf
                                                @method('DELETE')
                                                <td>
                                                    <a href="mailto:{{ $data->email }}" class="table-action-btn mr-2 text-primary"> <i class="far fa-paper-plane"></i> </a>
                                                    <a href="{{ route('users.edit', $data->id) }}" class="table-action-btn text-info"> <i class="far fa-edit"></i> </a>
                                                    <button onclick="deleteConfirm()" style="border: none; background:none; cursor:pointer; color: red;" type="submit" name="submit" class="table-action-btn"><i class="mdi mdi-close"></i></button>
                                                </td>
                                            </form>
                                        </tr>
                                        @empty($data)
                                            <div class="alert alert-info">
                                                Nothing to show any users !
                                            </div>
                                        @endempty
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection

@section('footer_script')
    <script>
        function deleteConfirm(){
            alert('Are your Shure ? You want ot delete this user !');
        }
    </script>
@endsection


