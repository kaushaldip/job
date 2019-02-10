@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="userccount">
                <h5>Login</h5>
                <div class="socialLogin">
                </div>
                <!-- login form -->
                <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}
                    <div class="formpanel">
                        <div class="formrow {{ $errors->has('login') ? ' has-error' : '' }}">
                        <input id="login" type="text" class="form-control" placeholder="Username or Email" name="login" value="{{ old('login') }}" required autofocus>
                          @if ($errors->has('login'))
                          <span class="help-block">
                            <strong>{{ $errors->first('login') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="formrow{{ $errors->has('password') ? ' has-error' : '' }}">
                     <input id="password" placeholder="Password" type="password" class="form-control" name="password" required>

                     @if ($errors->has('password'))
                     <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                    @endif
                </div>
                <div class="formrow">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                        </div>
                <input type="submit" class="btn" value="Login">
            </div>

        </form>
        <!-- login form  end--> 

        <!-- sign up form -->
        <div class="newuser"><a href="{{ route('password.request') }}">Forgot your password?</a></div>
        <div class="newuser" style="margin-top: 10px;">Don't have an account? <a href="{{ route('register') }}">Click here to register.</a></div>
        <!-- sign up form end--> 

    </div>
</div>
</div>

</div>
</div>
@endsection

