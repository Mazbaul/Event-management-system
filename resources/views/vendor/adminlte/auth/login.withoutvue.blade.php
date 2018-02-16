@extends('adminlte::layouts.auth')

@section('htmlheader_title')
    Log in
@endsection

@section('content')
    <body class="hold-transition login-page">
    <div id="app" v-cloak>
        <div class="login-box">
            <div class="login-logo">
                <a href="{{ url('/home') }}"><b>Admin</b>LTE</a>
            </div><!-- /.login-logo -->

            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> {{ trans('adminlte_lang::message.someproblems') }}<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="login-box-body">
                <p class="login-box-msg"> {{ trans('adminlte_lang::message.siginsession') }} </p>
                <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
          {{ csrf_field() }}

          <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

              <div class=" col-md-12 form-group has-feedback">
                  <input id="email" type="email" class="form-control" placeholder="{{ trans('adminlte_lang::message.email') }}" name="email" value="{{ old('email') }}" required autofocus>
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                  @if ($errors->has('email'))
                      <span class="help-block">
              <strong>{{ $errors->first('email') }}</strong>
          </span>
                  @endif

              </div>
          </div>

          <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">

              <div class="col-md-12 form-group has-feedback">
                  <input id="password" type="password" class="form-control" placeholder="{{ trans('adminlte_lang::message.password') }}" name="password" required>
                  <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                  @if ($errors->has('password'))
                      <span class="help-block">
              <strong>{{ $errors->first('password') }}</strong>
          </span>
                  @endif
              </div>
          </div>

          <div class="form-group">
              <div class="col-md-6">
                  <div class="checkbox">
                      <label>
                          <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                      </label>
                  </div>
              </div>
          </div>

          <div class="form-group">
              <div class="col-md-8 col-md-offset-4">
                  <button type="submit" class="btn btn-primary">
                      Login
                  </button>
              </div>
          </div>
      </form>


                <a href="{{ url('/password/reset') }}">{{ trans('adminlte_lang::message.forgotpassword') }}</a><br>
                <a href="{{ url('/register') }}" class="text-center">{{ trans('adminlte_lang::message.registermember') }}</a>

            </div><!-- /.login-box-body -->

        </div><!-- /.login-box -->
    </div>
    @include('adminlte::layouts.partials.scripts_auth')

    <script>
      $(function () {
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });
      });
    </script>
    </body>

@endsection
