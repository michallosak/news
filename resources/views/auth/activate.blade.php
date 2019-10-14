@extends('layouts.app')

@section('title', 'Activate Account')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card">
                    <div class="card-header">{{ __('Login') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('activate-acc') }}">
                            @csrf

                            <div class="form-group row">
                                <div class="col-lg-9 col-md-9 col-sm-8 pr-1">
                                    <label for="key"></label>

                                    <input id="key" type="text"
                                           class="form-control @error('key') is-invalid @enderror" name="key"
                                           value="{{ old('key') }}" placeholder="Key verify" required autocomplete="key"
                                           autofocus minlength="15" maxlength="15">

                                    @error('key')
                                    <span class="invalid-msg">
                                        {{ $message }}
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-4 pl-1">

                                        <button type="submit" style="margin-top: 20px;" class="btn btn-success w-100">Activate</button>

                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
