@extends('layouts.app')
@section('title', 'Login')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Login') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="form-group row">
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <label for="email"></label>

                                    <input id="email" type="email"
                                           class="form-control @error('email') is-invalid @enderror" name="email"
                                           value="{{ old('email') }}" placeholder="E-mail" required autocomplete="email"
                                           autofocus>

                                    @error('email')
                                    <span class="invalid-msg">
                                        {{ $message }}
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <label for="password"></label>

                                    <input id="password" type="password" placeholder="Password"
                                           class="form-control @error('password') is-invalid @enderror" name="password"
                                           required autocomplete="current-password">

                                    @error('password')
                                    <span class="invalid-msg">
                                        {{ $message }}
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-success">Login</button>
                            </div>


                            {{--                        <div class="form-group row">--}}
                            {{--                            <div class="col-md-6 offset-md-4">--}}
                            {{--                                <div class="form-check">--}}
                            {{--                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>--}}

                            {{--                                    <label class="form-check-label" for="remember">--}}
                            {{--                                        {{ __('Remember Me') }}--}}
                            {{--                                    </label>--}}
                            {{--                                </div>--}}
                            {{--                            </div>--}}
                            {{--                        </div>--}}

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
