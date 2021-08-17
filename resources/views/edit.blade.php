@extends('layouts.app')

@section('content')
<!-- JS Code to activate bootstrap features -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<!-- CSS script to activate bootstrap features -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<link rel="stylesheet" href="{{ asset('resources/views/styles.css')}}">


@if(session('errorMsg'))
<div class="alert alert-danger" role='alert'>
    {{ session('errorMsg')}}
</div>

@endif

<div class="container">
    <div class="row justify-content-center">
        <form class="col-md-8" method="POST" action="{{route('profile.update')}}"" enctype="multipart/form-data">
            @csrf
            <div class="card ">
                <!-- Upload Picture -->
                <div class="form-group row ">
                    <div class="col-md-6 offset-md-5">
                        <img id="output" width="40%;" style="padding-top: 10px;" />
                    </div>
                    <div class="col-md-6 offset-md-4" style="padding-top: 10px;">
                        <input id="picture" type="file" name="img_src" name="img_alt" accept="image/*">
                    </div>
                </div>   
                <!-- Change Name -->
                <div class="form-group row">
                    <label for="Name" class="col-md-4 col-form-label text-md-right">{{__('Name') }}</label>

                    <div class="col-md-6">
                        <input id="Name" type="text" class="form-control @error('Name') is-invalid @enderror" name="Name" required autocomplete="current-Name" required value="{{ $currentUser->name }}">

                        @error('Name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row ">
                    <div class="col-md-6 offset-md-4">
                        <button id="updateProfile" class="button" type="submit">{{ __('Update') }}</button>
                        
                        <button id="cancel" class="button" type="submit" method="GET" href="{{ route('home') }}">{{ __('Back') }}</button>

                    </div>
                </div>
            </div>
        </Form>
    </div>
</div>
@endsection
