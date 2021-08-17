@extends('layouts.app')

@section('content')
<!-- Bootstrap -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('resources/views/styles.css')}}">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
@if(session('successMsg'))


@endif
<div class="container-fluid">
    <div class="row">
        @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
            <script>
                alert("Login Successful!");
            </script>
        </div>
        @endif
    </div>
</div>
<div class="wrapper">
    <div class="left">
        <img src="{{ asset('resources/views/pictures/avatar.png')}}" alt="" width="200">
        <h4>Name: {{$currentUser->name}}</h4>
        <h4>Age: 25</h4>
        <h4>Sex: Male</h4>
        <div class="socmed">
            <ul>
                <li  style="margin-left: 30%;"><a href="#"><i class="fab fa-facebook-square"></i></a></li>
                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
            </ul>  
        </div>

        <!-- Authentication Links -->
        @guest

        @if (Route::has('register'))

        @endif
        @else
        <button id="editprofile" class="button" href="{{ route('password.change') }}"onclick="event.preventDefault();
        document.getElementById('editprofile-form').submit();">{{ __('Edit') }}</button>
        <form id="editprofile-form" action="{{ route('profile.edit') }}" method="GET" style="display: none;">
            @csrf
        </form>


        <button id="passwordchange" class="button"  href="{{ route('password.change') }}" onclick="event.preventDefault();
        document.getElementById('passwordchange-form').submit();">{{ __('Change Password') }}</button>
        <form id="passwordchange-form" action="{{ route('password.change') }}" method="GET" style="display: none;">
            @csrf
        </form>

        <button class="button" href="{{ route('logout') }}" onclick="event.preventDefault();
        document.getElementById('logout-form').submit();">{{ __('Logout') }}</button>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>

        @endguest

    </div>
    <div class="right">
        <div class="alert alert-success" role='alert'>
            <div style="color: green; font-weight: bold;">{{ session('successMsg')}}</div>
        </div>
        <div class="info">
            <h3>Information</h3>
            <div class="info_data" style="padding:10px">
                <div class="data">
                    <h4>Email:</h4>
                    <p>{{$currentUser->email}}</p>
                </div>
                <div class="data">
                    <h4>Phone:</h4>
                    <p>012-6694575</p>
                </div>
                <div class="data">
                    <h4>Address:</h4>
                    <p>Casa Subang, USJ1, Subang Light Industrial Park, 47500 Subang Jaya, Selangor</p>
                </div>
                <div class="data">
                    <h4>Origin:</h4>
                    <p>Ranau, Sabah</p>
                </div>
                <div class="data">
                    <h4>Birth Date:</h4>
                    <p>6th September 1996</p>
                </div>

            </div>
        </div>

        <div class="projects">
            <h3>Projects</h3>
            <div class="info_project" style="padding:10px">
                <div class="data">
                    <h4>Project 1: SPARTANS</h4>
                    <ul>
                        <li>Providing support by Aggregating data (Incomplete Data) for all report platforms</li><br>
                        <li> Solving process status for the whole platform in order to complete the data process.</li><br>
                        <li>Contributing in pulling data from proxy into the database if necessary and process the whole data</li><br>
                        <li> Solving data issues issued by users and Quality Assurance.</li><br>
                        <li>Creating queries to show data availability by tables using Oracle SQL Developer </li><br>
                        <li>Proving hand over documents for Back-End Tasks and implementing System Security towards SPARTANS System</li>
                    </ul> 
                </div>
                <div class="data">
                    <h4>Project 2: DATOOLS</h4>
                    <ul>
                        <li>Create a dynamic web application tool that can read, visualize any data.</li><br>
                        <li>Provide a visualization that shows relationships maximum of 3 data at a graph from a database using Laravel Framework and ChartJs API.</li> <br>
                        <li>Publish the DATOOLS live using AWS Server</li><br>
                        <li>Implementing System Security towards DATools System</li>
                    </ul> 
                </div>
            </div>
        </div>  
    </div>
</div>
@endsection
