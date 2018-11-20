@extends('layouts.front')

@section('content')

<div class="peers ai-s fxw-nw h-100vh">
    <div class="d-n@sm- peer peer-greed h-100 pos-r bgr-n bgpX-c bgpY-c bgsz-cv" style="background-image:url(assets/static/images/bg.jpg)">
 
    </div>
    <div class="col-12 col-md-4 peer pX-40 pY-80 h-100 bgc-white scrollable pos-r" style="min-width:320px">
    <h4 class="fw-300 c-grey-900 mB-40">Login  / <a href="register"> Register </a></h4>
                     @if (session('warning'))
                        <div class="alert alert-warning">
                            {{ session('warning') }}
                        </div>
                    @endif
      <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
        <div class="form-group"><label class="text-normal text-dark">Username</label>
        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

        @if ($errors->has('email'))
            <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif

        </div>
        <div class="form-group"><label class="text-normal text-dark">Password</label>
        <input id="password" type="password" class="form-control" name="password" required>

        @if ($errors->has('password'))
            <span class="help-block">
                <strong>{{ $errors->first('password') }}</strong>
            </span>
        @endif

        </div>
        <div class="form-group">
          <div class="peers ai-c jc-sb fxw-nw">
            <div class="peer">
              <div class="checkbox checkbox-circle checkbox-info peers ai-c"><input type="checkbox" id="inputCall1"
                  name="inputCheckboxesCall" class="peer"><label for="inputCall1" class="peers peer-greed js-sb ai-c"><span
                    class="peer peer-greed">Remember Me</span></label></div>
            </div>
            <div class="peer"><button type="submit" class="btn btn-primary">Login</button></div>
          </div>
        </div>
      </form>
    </div>
  </div>
@endsection
