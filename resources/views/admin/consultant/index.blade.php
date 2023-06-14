@extends('admin.layouts.app')
@section('title',' Rent Request')
@section('content')

 <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <h4 class="page-title float-left">Rent Request List </h4>
                    <ol class="breadcrumb float-right">
                        <li class="breadcrumb-item"><a href="">Admin</a></li>
                        <li class="breadcrumb-item"><a href="">Rent Request List</a></li>
                    </ol>

                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <!-- end row -->

        <div class="row">
            <div class="col-md-12">
                <div class="card-box">
                    <h4 class="m-t-0 header-title mb-4"><b>Rent Request List</b></h4>
                    <div class="table-responsive">
                        <table class="table table-hover m-0 table-actions-bar">

                            <thead>
                            <tr>
                                <th>SI NO.</th>
                                <th>Candidate Name</th>
                                <th>Candidate Email</th>
                                <th>Candidate Phone</th>
                                <th>Location</th>
                                <th>Bed Room</th>
                                <th>Read Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach ($consultancy as $consultan)
                                    <tr>
                                        <td>
                                            <h5>{{ $loop->index + 1 }}</h5>
                                        </td>

                                        <td>
                                            <h5><a href="{{ route('request.show',$consultan->id) }}">View This Request</a></h5>
                                        </td>

                                        <td>
                                            <h5>{{ $consultan->user->email }}</h5>
                                        </td>

                                        <td>
                                            <h5>{{ $consultan->user->phone }}</h5>
                                        </td>

                                        <td>
                                            <h5>{{ $consultan->location }}</h5>
                                        </td>

                                        <td>
                                            <h5>{{ $consultan->bedroom }}</h5>
                                        </td>

                                        <td>
                                            <h5 class="p-2 badge @php if ($consultan->status == 2) { echo "badge-success"; }else { echo "badge-danger"; }  @endphp">
                                                @php
                                                if ($consultan->status == 2) { echo "Reply Done"; }else { echo "Reply Pending"; }
                                                @endphp
                                            </h5>
                                        </td>

                                        <form method="POST" action="{{ route('request.destroy', $consultan->id) }}">
                                            @csrf
                                            @method('DELETE')
                                            <td>
                                                <a href="{{ route('request.show', $consultan->id) }}" class="table-action-btn text-primary"> <i class="fa-solid fa-reply"></i> </a>
                                                <button onclick="blogDelete()" style="border: none; background:none; cursor:pointer; color: red;" type="submit" name="submit" class="table-action-btn"><i class="mdi mdi-close"></i></button>
                                            </td>
                                        </form>
                                    </tr>
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
            alert('Are you shure ? You want to delete this Request !')
        }
    </script>
@endsection
