@extends('admin.layouts.app')
@section('title',' Medicine list')
@section('content')

 <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <h4 class="page-title float-left">Services </h4>
                    <ol class="breadcrumb float-right">
                        <li class="breadcrumb-item"><a href="">Admin</a></li>
                        <li class="breadcrumb-item"><a href="">Medicine List</a></li>
                    </ol>

                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <!-- end row -->

        <div class="row">
            <div class="col-md-12">
                <div class="card-box">
                    <h4 class="m-t-0 header-title"><b>Medicine List</b></h4>

                    <div class="table-responsive">
                        <table class="table table-hover m-0 table-actions-bar">

                            <thead>
                            <tr>
                                <th>SI NO.</th>
                                <th>Medicine Name</th>
                                <th>User Name</th>
                                <th>Image</th>
                                <th>Published</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach ($services as $service)
                                    <tr>
                                        <td>
                                            <h5>{{ $loop->index + 1 }}</h5>
                                        </td>

                                        <td>
                                            <a href="{{ route('service.show',$service->id) }}">{{ Str::limit($service->medicine_name, 45, $end='...') }}</a>
                                        </td>

                                        <td>
                                            <h5>{{ $service->user->name }}</h5>
                                        </td>

                                        <td>
                                            <img width="80px" src="{{ asset('assets/img/') }}/{{ $service->image }}" alt="img" title="contact-img"/>
                                        </td>

                                        <td>
                                            {{ $service->created_at->diffForHumans() }}
                                        </td>

                                        <form method="POST" action="{{ route('service.destroy', $service->id) }}">
                                            @csrf
                                            @method('DELETE')
                                            <td>
                                                <a href="{{ route('service.edit', $service->id) }}" class="table-action-btn"> <i class="far fa-edit"></i> </a>
                                                <button onclick="blogDelete()" style="border: none; background:none; cursor:pointer;" type="submit" name="submit" class="table-action-btn"><i class="mdi mdi-close"></i></button>
                                            </td>
                                        </form>
                                    </tr>
                                    @empty($service)
                                        <div class="alert alert-info">
                                            Nothing to show any Blog post !
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
            alert('Are you shure ? You want to delete this Medicine !')
        }
    </script>
@endsection
