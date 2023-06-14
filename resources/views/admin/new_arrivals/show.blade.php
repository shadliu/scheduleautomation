@extends('admin.layouts.app')
@section('title',' Medicine details')
@section('content')

 <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <h4 class="page-title float-left">New Arrivals Medicine Details</h4>
                    <ol class="breadcrumb float-right">
                        <li class="breadcrumb-item"><a href="">Admin</a></li>
                        <li class="breadcrumb-item"><a href="">New Arrivals Medicine Details</a></li>
                    </ol>

                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <!-- end row -->

        <div class="row">
            <div class="col-md-12">
                <div class="card-box">
                    <h4 style="margin-top: 20px" class="m-t-0 header-title pb-3 mt-4"><b>{{ $single_service->title }}</b></h4>
                    <div class="table-responsive">
                        <table class="table m-0 table-actions-bar">
                            <tr>
                                <th>Medicine Name</th>
                                <td>{{ $single_service->medicine_name }}</td>
                            </tr>
                            <tr>
                                <th>User Name</th>
                                <td>{{ $single_service->user->name }}</td>
                            </tr>
                            <tr>
                                <th>Medicine Price</th>
                                <td>{{ $single_service->price }} $</td>
                            </tr>
                            <tr>
                                <th>Return Policy</th>
                                <td>{{ $single_service->return_policy }} Days</td>
                            </tr>
                            <tr>
                                <th>Medicine Description</th>
                                <td>
                                    {{ $single_service->description }}
                                </td>
                            </tr>
                            <tr>
                                <th>Medicine Image</th>
                                <td><img width="100" src="{{ asset('assets/img/') }}/{{ $single_service->image }}" alt=""></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('footer_script')
    <script>
        function OrderDelete(){
            alert('Are you shure ? You want to delete this Order !')
        }
    </script>
@endsection
