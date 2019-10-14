@extends('layouts.app')
@section('title', 'Register')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <label for="name"></label>
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                                       value="{{old('name')}}" required autocomplete="name" placeholder="Name">
                                @error('name')
                                <span class="invalid-msg">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <label for="last_name"></label>
                                <input id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name"
                                       value="{{old('last_name')}}" required autocomplete="last_name" placeholder="Last name">
                                @error('last_name')
                                <span class="invalid-msg">{{$message}}</span>
                                @enderror
                            </div>

                        </div>
                        <div class="form-group row">
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <label for="email"></label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                                       value="{{old('email')}}" required autocomplete="email" placeholder="Email">
                                @error('email')
                                <span class="invalid-msg">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <label for="password"></label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"
                                       value="{{old('password')}}" required autocomplete="password" placeholder="Password">
                                @error('password')
                                <span class="invalid-msg">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <label for="password_confirmation"></label>
                                <input id="password_confirmation" type="password" class="form-control" name="password_confirmation" required placeholder="Password confirm">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <label for="username"></label>
                                <input id="email" type="username" class="form-control @error('username') is-invalid @enderror" name="username"
                                       value="{{old('username')}}" required autocomplete="username" placeholder="Username">
                                @error('username')
                                <span class="invalid-msg">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <label for="sex"></label>
                                <select id="sex" name="sex" class="custom-select">
                                    <option selected>Select sex</option>
                                    <option value="1">Female</option>
                                    <option value="2">Male</option>
                                </select>
                                @error('password')
                                <span class="invalid-msg">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <label for="birthday"></label>
                                <input id="birthday" type="date" class="form-control @error('birthday') is-invalid @enderror" name="birthday"
                                       value="{{old('birthday')}}" required autocomplete="birthday" placeholder="Birthday">
                                @error('birthday')
                                <span class="invalid-msg">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success">
                                Register
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
