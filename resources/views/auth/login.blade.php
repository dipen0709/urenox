@extends('layouts.without_login_app')

@section('content')
<div class="wrapper wrapper-full-page ">
    <div class="full-page login-page ">
        <!--   you can change the color of the filter page using: data-color="blue | purple | green | orange | red | rose " -->
        <div class="content">
            <div class="container">
                <div class="col-lg-4 col-md-6 ml-auto mr-auto">
                    <form class="form" method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="card card-login card-white">
                            <div class="card-header">
                                <img src="{{ asset('/public/img/card-primary.png')}}" alt="">
                                <h1 class="card-title">Log in</h1>
                            </div>
                            <div class="card-body">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="tim-icons icon-email-85"></i>
                                        </div>
                                    </div>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="{{ __('E-Mail Address') }}">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="tim-icons icon-lock-circle"></i>
                                        </div>
                                    </div>
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary btn-lg btn-block mb-3">{{ __('Login') }} </button>
                                @if (Route::has('password.request'))
                                <div class="pull-right">
                                    <h6>
                                      <a href="{ route('password.request') }}" class="link footer-link">{{ __('Forgot Your Password?') }}</a>
                                    </h6>
                                  </div>                                
                                @endif                                
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <footer class="footer">
            <div class="container-fluid">

                <div class="copyright">
                    Copyright &copy; {{date('Y')}}  made with <i class="tim-icons icon-heart-2"></i> by
                    <a href="javascript:void(0)" target="_blank">{{ trans("common.SITE_NAME") }}</a> {{ trans("common.label_common_reserved") }}
                </div>
            </div>
        </footer>
    </div>
</div>
@endsection
