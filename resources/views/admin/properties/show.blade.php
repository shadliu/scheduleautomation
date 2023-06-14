@extends('admin.layouts.app')
@section('title', $property->property_name)
@section('content')

 <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <h4 class="page-title float-left">Property Information</h4>
                    <ol class="breadcrumb float-right">
                        <li class="breadcrumb-item"><a href="">Admin</a></li>
                        <li class="breadcrumb-item"><a href="">{{ $property->property_name }}</a></li>
                    </ol>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <!-- end row -->
        <div class="row">
            <div class="col-md-12">
                <div class="card-box">
                    <h4 class="m-t-0 header-title pb-3"><b>{{ $property->property_name }}</b></h4>
                    <div class="table-responsive">
                        <table class="table m-0 table-actions-bar">
                            <tr>
                                <th>Status</th>
                                <td >
                                    <h5 class="p-2 mr-3 badge @php if ($property->status == 1) { echo "badge-success"; }else { echo "badge-danger"; }  @endphp">
                                        @php
                                        if ($property->status == 1) { echo "Published"; }else { echo "Pending"; }
                                        @endphp
                                    </h5>

                                    <form method="GET" action="{{ route('properties.published', $property->id) }}">
                                        @csrf
                                        @method('PATCH')
                                        <input type="hidden" value="1" name="status">
                                        @php
                                            if ($property->status == 1) { echo ""; }else { echo '<button class="btn btn-outline-success" type="submit">Published Now</button>'; }
                                        @endphp
                                    </form>
                                </td>
                            </tr>
                            <tr>
                                <th>Name</th>
                                <td>{{ $property->property_name }}</td>
                            </tr>
                            <tr>
                                <th>User Name</th>
                                <td>{{ App\Models\User::where('id', $property->user_id)->first()->name }}</td>
                            </tr>
                            <tr>
                                <th>User Phone</th>
                                <h5><td>{{ $property->user->phone }}</td></h5>
                            </tr>
                            <tr>
                                <th>User Email Address</th>
                                <h5><td>{{ $property->user->phone }}</td></h5>
                            </tr>
                            <tr>
                                <th>Category</th>
                                <td>{{ $property->category->name }}</td>
                            </tr>

                            <tr>
                                <th>Property Divission</th>
                                <td>{{ $property->address_divission }}</td>
                            </tr>

                            <tr>
                                <th>Property City</th>
                                <td>{{ $property->address_city }}</td>
                            </tr>

                            <tr>
                                <th>Address</th>
                                <td>{{ $property->address }}</td>
                            </tr>

                            <tr>
                                <th>Bad Rooms</th>
                                <td>{{ $property->beds }}</td>
                            </tr>

                            <tr>
                                <th>Bathrooms</th>
                                <td>{{ $property->bathroom }}</td>
                            </tr>

                            <tr>
                                <th>Space (Squire Feet)</th>
                                <td>{{ $property->squire_feet }}</td>
                            </tr>

                            <tr>
                                <th>Monthly Amount</th>
                                <td>{{ $property->monthly_amount }}</td>
                            </tr>
                            <tr>
                                <th>Land Area</th>
                                <td>{{ $property->land_area }}</td>
                            </tr>
                            <tr>
                                <th>Kitchen</th>
                                <td>{{ $property->kitchen }}</td>
                            </tr>
                            <tr>
                                <th>Garaz</th>
                                <td>{{ $property->garage }}</td>
                            </tr>
                            <tr>
                                <th>Garaz Size</th>
                                <td>{{ $property->garage_size }}</td>
                            </tr>
                            <tr>
                                <th>Security Deposit</th>
                                <td>{{ $property->security_deposit }}</td>
                            </tr>
                            <tr>
                                <th>Building Age</th>
                                <td>{{ $property->building_age }}</td>
                            </tr>
                            <tr>
                                <th>Property Purpose</th>
                                <td>{{ $property->property_purpose }}</td>
                            </tr>
                            <tr>
                                <th>Interior</th>
                                <td>{{ $property->interior }}</td>
                            </tr>
                            <tr>
                                <th>Service Charge</th>
                                <td>{{ $property->service_charge }}</td>
                            </tr>
                            <tr>
                                <th>Registration Type</th>
                                <td>{{ $property->registration_type }}</td>
                            </tr>
                            <tr>
                                <th>Registration Number</th>
                                <td>{{ $property->registration_number }}</td>
                            </tr>
                            <tr>
                                <th>Take Rant</th>
                                <td>{{ $property->take_rent }}</td>
                            </tr>
                            <tr>
                                <th>Servent Room</th>
                                <td>{{ $property->servent_room }}</td>
                            </tr>
                            <tr>
                                <th>Servent Washroom</th>
                                <td>{{ $property->servent_washroom }}</td>
                            </tr>
                            <tr>
                                <th>Unit Per Floor</th>
                                <td>{{ $property->unit_per_floor }}</td>
                            </tr>
                            <tr>
                                <th>Font side Size</th>
                                <td>{{ $property->front_road_size }}</td>
                            </tr>
                            <tr>
                                <th>Building Facing</th>
                                <td>{{ $property->building_facing }}</td>
                            </tr>
                            <tr>
                                <th>Vacant Sinc</th>
                                <td>{{ $property->vacant_since }}</td>
                            </tr>
                            <tr>
                                <th>Get Closing Time</th>
                                <td>{{ $property->get_closing_time }}</td>
                            </tr>
                            <tr>
                                <th>Any Special Think</th>
                                <td>{{ $property->any_special_think }}</td>
                            </tr>
                            <tr>
                                <th>Thumbnail Image</th>
                                <td><img width="100" src="{{ asset('assets/img/property/'. $property->image) }}" alt=""></td>
                            </tr>
                            <tr>
                                <th>View More Image</th>
                                <td>
                                    @foreach ($property->multiplaimages as $item)
                                        <img width="100" src="{{ asset('assets/img/property/'. $item->multiple_iamges ) }}" alt="">
                                    @endforeach
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>

        </div>

    </div>
@endsection

