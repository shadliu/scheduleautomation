@extends('admin.layouts.app')
@section('title',' Property List')
@section('content')

 <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <h4 class="page-title float-left">Properties List </h4>
                    <ol class="breadcrumb float-right">
                        <li class="breadcrumb-item"><a href="">Admin</a></li>
                        <li class="breadcrumb-item"><a href="">Property List</a></li>
                    </ol>

                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <!-- end row -->

        <div class="row">
            <div class="col-md-12">
                <div class="card-box">
                    <h4 class="m-t-0 header-title"><b>Property List</b></h4>

                    <div class="table-responsive">
                        <table class="table table-hover m-0 table-actions-bar">

                            <thead>
                            <tr>
                                <th>SI NO.</th>
                                <th>Property Name</th>
                                <th>User Name</th>
                                <th>Image</th>
                                <th>Property Space</th>
                                <th>Monthly Cost</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach ($properties as $property)
                                    <tr>
                                        <td>
                                            <h5>{{ $loop->index + 1 }}</h5>
                                        </td>

                                        <td>
                                            <a href="{{ route('properties.show',$property->id) }}">{{ Str::limit($property->property_name, 45, $end='...') }}</a>
                                        </td>

                                        <td>
                                            <h5>{{ $property->user->name }}</h5>
                                        </td>

                                        <td>
                                            <img width="80px" src="{{ asset('assets/img/property/') }}/{{ $property->image }}" alt="img" title="contact-img"/>
                                        </td>

                                        <td>
                                            <h5>{{ $property->monthly_amount }}</h5>
                                        </td>

                                        <td>
                                            <h5>{{ $property->squire_feet }}</h5>
                                        </td>

                                        <td>
                                            <h5 class="p-2 badge @php if ($property->status == 1) { echo "badge-success"; }else { echo "badge-danger"; }  @endphp">
                                                @php
                                                if ($property->status == 1) { echo "Published"; }else { echo "Pending"; }
                                                @endphp
                                            </h5>
                                        </td>

                                        <form method="POST" action="{{ route('properties.destroy', $property->id) }}">
                                            @csrf
                                            @method('DELETE')
                                            <td>
                                                <a href="mailto:{{ $property->user->email }}" class="table-action-btn text-primary"> <i class="fa-solid fa-reply"></i> </a>
                                                <button onclick="blogDelete()" style="border: none; background:none; cursor:pointer; color: red;" type="submit" name="submit" class="table-action-btn"><i class="mdi mdi-close"></i></button>
                                            </td>
                                        </form>
                                    </tr>
                                    @empty($property)
                                        <div class="alert alert-info">
                                            Nothing to show any Properties !
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
        function blogDelete(){
            alert('Are you shure ? You want to delete this Properties !')
        }
    </script>
@endsection
