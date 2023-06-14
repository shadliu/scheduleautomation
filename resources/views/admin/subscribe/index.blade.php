@extends('admin.layouts.app')
@section('title','Subscribers')
@section('content')

 <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <h4 class="page-title float-left">Subscribers</h4>
                    <ol class="breadcrumb float-right">
                        <li class="breadcrumb-item"><a href="">Admin</a></li>
                        <li class="breadcrumb-item"><a href="#">Subscriber List</a></li>
                    </ol>

                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <!-- end row -->

        <div class="row">
            <div class="col-md-12">
                <div class="card-box">
                    <h4 class="m-t-0 header-title"><b>Subscriber List</b></h4>
                    <div class="table-responsive">
                        <table class="table table-hover m-0 table-actions-bar">
                            <thead>
                                <tr>
                                    <th>SI NO.</th>
                                    <th>User ID</th>
                                    <th>Email Address</th>
                                    <th>Join Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($subscribers as $subscriber)
                                    <tr>
                                        <td>
                                            <h5>{{ $loop->index + 1 }}</h5>
                                        </td>

                                        <td>
                                            <h5 class="badge badge-warning p-1">{{ $subscriber->user_id ?? "Guest" }}</h5>
                                        </td>

                                        <td>
                                            <h5>{{ $subscriber->email }}</h5>
                                        </td>

                                        <td>
                                            <h5 class="m-b-0 m-t-0 font-600">{{ $subscriber->created_at->format('d M Y') }}</h5>
                                        </td>
                                            <form method="POST" action="{{ route('subscriber.destroy', $subscriber->id) }}">
                                                @csrf
                                                @method('DELETE')
                                                <td>
                                                    <button onclick="deleteSubscriber()" style="border: none; background:none; cursor:pointer;" type="submit" name="submit" class="table-action-btn"><i class="mdi mdi-close"></i></button>
                                                </td>
                                            </form>
                                        </tr>
                                        @empty($subscriber)
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
        function deleteSubscriber(){
            alert('Are your Shure ? You want ot delete this Subscriber !');
        }
    </script>
@endsection


