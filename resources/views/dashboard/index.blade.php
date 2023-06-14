@extends('admin.layouts.app')
@section('title', 'Dashboard')
@section('content')
    <section class="dashboard">
        <div class="container">
            <div class="user-dashboard">
                <div class="row">
                    <!-- Dashboard left bar Here ! -->
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="left-side">
                        <div class="profile">
                            <img src="{{ asset('assets/img/users/') }}/{{ Auth::user()->profile_photo }}" alt="">
                            <h3>{{ Auth::user()->name }}</h3>
                            <p>{{ Auth::user()->phone }}</p>
                            <div class="btn">
                                <a class="btn btn-outline-info" href="{{ route('user.profile.edit') }}"><i class="far fa-edit"></i> profile edit </a>
                            </div>
                        </div>
                        <div class="left-menu">
                            <ul>
                                <li class="active">
                                    <a href="{{ route('dashboard.index') }}"><i class="fas fa-id-card"></i>&nbsp; Dashboard </a>
                                </li>
                                <li class="">
                                    <a href="{{ route('user.setting') }}"><i class="fas fa-user-alt"></i>&nbsp; Profile Settings</a>
                                </li>
                                <li>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button><i class="fas fa-sign-out-alt"></i> Logout</button>
                                </form>
                                </li>
                            </ul>
                        </div>
                    </div>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <div class="information">
                        <h6><strong>Saudi Hemam:</strong><span> Lorem ipsum dolor sit amit We are also able to do work </span></h6>
                        <a class="btn btn-outline-info ms-3 mt-1" href="{{ route('index') }}"><i class="fas fa-chevron-circle-left"></i> Back to Website</a>
                        <hr>
                        <div class="basic-information">
                            <h4>Account Information</h4>
                            <hr>
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                <div class="title">
                                    <ul>
                                        <li>
                                            <p>Name </p>
                                        </li>
                                        <li>
                                            <p>Email </p>
                                        </li>
                                        <li>
                                            <p>phone </p>
                                        </li>
                                        <li>
                                            <p>Joining </p>
                                        </li>
                                    </ul>
                                </div>
                                </div>
                                <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
                                <div class="answer">
                                    <ul>
                                        <li>
                                            <p>{{ Auth::user()->name }}</p>
                                        </li>
                                        <li>
                                            <p>{{ Auth::user()->email }}</p>
                                        </li>
                                        <li>
                                            <p>{{ Auth::user()->phone }}</p>
                                        </li>
                                        <li>
                                            <p>{{ Auth::user()->created_at->format('d M Y') }}</p>
                                        </li>
                                    </ul>
                                </div>
                                </div>
                            </div>
                        </div>
                        <div class="personal-information">
                            <h4>Your Statistics</h4>
                            <hr>
                            <div class="statistics p-4">
                                <div class="row">
                                <div class="col-lg-6 col-md-12 text-center mb-5">
                                    <div style="box-shadow: 2px 2px 12px #e2e2e2; padding: 10px;">
                                        <h5 class="m-3 text-uppercase font-bold font-secondary text-overflow">Join Date</h5>
                                        <h3 class="font-600 m-3"> {{ Auth::user()->created_at->format('d M Y') }} </h3>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 text-center mb-5">
                                    <div style="box-shadow: 2px 2px 12px #e2e2e2; padding: 10px;">
                                        <h5 class="m-3 text-uppercase font-bold font-secondary text-overflow">User Activities</h5>
                                        <h3 class="font-600 m-3"> GOOD </h3>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection






