@extends('layouts.email')
@section('content')
 <div class="pos-a t-0 l-0 bgc-white w-100 h-100 d-f fxd-r fxw-w ai-c jc-c pos-r p-30">
        <div class="mR-60"><img alt="#" src="assets/static/images/email.png"></div>
        <div class="d-f jc-c fxd-c">
            <h1 class="mB-30 fw-900 lh-1 c-red-500" style="font-size:30px">Email</h1>
            <h3 class="mB-10 fsz-lg c-grey-900 tt-c">You have successfully registered</h3>
            <p class="mB-30 fsz-def c-grey-700">The page you are looking for doesnot exist or has been moved.</p>
            <div><a href="{{ url('/')}}" type="primary" class="btn btn-primary">Go to Home</a></div>
        </div>
    </div>
@endsection