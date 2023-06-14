@extends('admin.layouts.app')
@section('title', $single_request->user->name)
@section('content')

 <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <h4 class="page-title float-left">Property Information</h4>
                    <ol class="breadcrumb float-right">
                        <li class="breadcrumb-item"><a href="">Admin</a></li>
                        <li class="breadcrumb-item"><a href="">{{ $single_request->user->name }}</a></li>
                    </ol>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <!-- end row -->
        <div class="row">
            <div class="col-md-12">
                <div class="card-box">
                    <h4 class="m-t-0 header-title pb-3"><b>{{ $single_request->user->name }}</b></h4>
                    <div class="table-responsive">
                        <table class="table m-0 table-actions-bar">
                            <tr>
                                <th>Status</th>
                                <td >
                                    <h5 class="p-2 mr-3 badge @php if ($single_request->status == 2) { echo "badge-success"; }else { echo "badge-danger"; }  @endphp">
                                        @php
                                        if ($single_request->status == 2) { echo "Reply Done"; }else { echo "Reply Pending"; }
                                        @endphp
                                    </h5>

                                    <form method="GET" action="{{ route('rentrequest.published', $single_request->id) }}">
                                        @csrf
                                        @method('PATCH')
                                        <input type="hidden" value="2" name="status">
                                        @php
                                            if ($single_request->status == 2) { echo ""; }else { echo '<button class="btn btn-outline-success" type="submit">Reply mark done</button>'; }
                                        @endphp
                                    </form>
                                </td>
                            </tr>
                            <tr>
                                <th>Reply Now</th>
                                <td>
                                    <a class="btn btn-primary" href="mailto:{{ $single_request->user->email }}"> <i class="fa-solid fa-reply"></i> </a>
                                </td>
                            </tr>
                            <tr>
                                <th>Candidate Name</th>
                                <td>{{ $single_request->user->name }}</td>
                            </tr>
                            <tr>
                                <th>Candidate Phone</th>
                                <h5><td>{{ $single_request->user->phone }}</td></h5>
                            </tr>
                            <tr>
                                <th>Candidate Email Address</th>
                                <h5><td>{{ $single_request->user->email }}</td></h5>
                            </tr>
                            <tr>
                                <th>Category</th>
                                <td>{{ $single_request->category->name }}</td>
                            </tr>

                            <tr>
                                <th>Location</th>
                                <td>{{ $single_request->location }}</td>
                            </tr>

                            <tr>
                                <th>Need Badrooms</th>
                                <td>{{ $single_request->bedroom }}</td>
                            </tr>

                            <tr>
                                <th>Minimum Amount</th>
                                <td>{{ $single_request->min_price }}</td>
                            </tr>
                            <tr>
                                <th>Maximum Price</th>
                                <td>{{ $single_request->max_price }}</td>
                            </tr>
                            <tr>
                                <th>Need Master Badroom</th>
                                <td>{{ $single_request->master_bedroom }}</td>
                            </tr>
                            <tr>
                                <th>Need Bathroom</th>
                                <td>{{ $single_request->bathroom }}</td>
                            </tr>

                            <tr>
                                <th>Need Varanda</th>
                                <td>{{ $single_request->varanda }}</td>
                            </tr>

                            <tr>
                                <th>Servent Room</th>
                                <td>{{ $single_request->servent_room }}</td>
                            </tr>
                            <tr>
                                <th>Servent Room</th>
                                <td>{{ $single_request->servent_room }}</td>
                            </tr>
                            <tr>
                                <th>Parking</th>
                                <td>{{ $single_request->parking }}</td>
                            </tr>
                            <tr>
                                <th>Left</th>
                                <td>{{ $single_request->lift }}</td>
                            </tr>
                            <tr>
                                <th>Guard</th>
                                <td>{{ $single_request->guard }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>

        </div>

    </div>
@endsection

