@extends('layouts.app')

@section('content')
<style>
body  
{  
    margin: 0;  
    padding: 0;  
    background-image: url("resources/views/pictures/img1.jpg");
    background-size: auto;
    font-family: 'Arial';  
}  
.userlogin{  
    width: 382px;  
    overflow: hidden;  
    margin: auto;  
    margin: 20 0 0 450px;  
    padding: 60px;  
    background: #045F5F;  
    border-radius: 15px ;  

}  
h1{  
    margin-top: 10% auto;
    text-align: center;  
    margin-left: 10% auto;
    margin-right: 10% auto;
    color: #1589FF;  
    padding-bottom: 10px;  
    font-size: 40px;
}  
label{  
    color: #08ffd1;  
    font-size: 17px;  
}  
#email{  
    width: 300px;  
    height: 30px;  
    border: none;  
    border-radius: 3px;  
    padding-left: 8px;  
}  
#password{  
    width: 300px;  
    height: 30px;  
    border: none;  
    border-radius: 3px;  
    padding-left: 8px;  

}  
#log{  
    width: 300px;  
    height: 30px;  
    border: none;  
    border-radius: 17px;  
    padding-left: 7px;  
    color: blue;  
}  
a{  
    float: left;  
    font-size: 13px;  
} 
.form-group{
    padding: 10px;
}

.button{
    align-items: center;
    padding: 10px;
}

.button .btnregister .btnlogin{
    display:inline-block;
}

</style>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h1>Login</h1></div>

                <div class="card-body">
                    <form class="userlogin" method="POST" action="{{ route('login') }}">
                        @csrf
                        @if(session('successMsg'))
                        <div class="alert alert-success" role='alert'>
                            <div style="color: green; font-weight: bold;">{{ session('successMsg')}}</div>
                        </div>

                        @endif
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-mail') }}</label>
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label><br>
                                    <div>
                                        @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('register') }}">
                                            {{ __('Not Yet A Member? Register Here.') }}
                                        </a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">

                            </div>
                        </div>

                        <div class="form-group col ">
                            <div class="col-md-6 offset-md-4">
                                <button id="btnlogin" name="btnlogin" type="submit" class="button">
                                    {{ __('LOGIN') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
