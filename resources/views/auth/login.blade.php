@extends('layout')
@section('content')
    <div class="container pt-lg-md">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <form method="POST" action="{{ route('login') }}">
                    <div class="card bg-secondary shadow border-0">

                        <h2 class="text-center my-4">Bienvenido a SIMALILI</h2>

                        <div class="card-body px-lg-5 py-lg-5">
                            <div class="row">
                                <div class="col">
                                    <div class="text-center text-muted mb-4">
                                        <img src="{{asset('img/logo/logo.png')}}" width="260">
                                    </div>
                                </div>
                                <div class="col">

                                    @csrf
                                    <div class="form-group">
                                        <div class="input-group input-group-alternative">
                                            <div class="input-group-prepend">
                                                    <span class="input-group-text"><i
                                                            class="ni ni-circle-08"></i></span>
                                            </div>
                                            <input id="email" type="email"
                                                   class="form-control @error('email') is-invalid @enderror"
                                                   name="email"
                                                   placeholder="{{ __('E-Mail Address') }}"
                                                   value="{{ old('email') }}" required autocomplete="email" autofocus>

                                        </div>
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <div class="input-group input-group-alternative">
                                            <div class="input-group-prepend">
                                                    <span class="input-group-text"><i
                                                            class="ni ni-lock-circle-open"></i></span>
                                            </div>
                                            <input id="password" type="password"
                                                   class="form-control @error('password') is-invalid @enderror"
                                                   name="password"
                                                   placeholder="{{ __('Password') }}"
                                                   required autocomplete="current-password">
                                        </div>
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-md-12 offset-md-12">
                                            <button type="submit" class="btn btn-success btn-lg"
                                                    style="width: -webkit-fill-available;">
                                                {{ __('Login') }}
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row mt-3">
                                @if (Route::has('password.request'))
                                    <div class="col-6">
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    </div>
                                @endif
                                <div class="col-6 text-right">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember"
                                               id="remember" {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                </div>
                            </div>
                            </div>

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
