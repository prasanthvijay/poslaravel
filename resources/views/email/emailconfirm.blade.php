@extends('layouts.email')
@section('content')

<div class="pos-a t-0 l-0 bgc-white w-100 h-100 d-f fxd-r fxw-w ai-c jc-c pos-r p-30">
        <div class="mR-60"><img alt="#" src="{{ asset('assets/static/images/email.png')}}"></div>
        <div class="d-f jc-c fxd-c">
            <h3 class="mB-30 fw-900 lh-1 c-red-500" style="font-size:30px">Verified</h3>
            <p class="mB-30 fsz-def c-grey-700">Your Email is successfully verified. Click here to <a href='{{url("/login")}}'>login</a></p>
        </div>
    </div>

@endsection