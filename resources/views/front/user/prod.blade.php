@extends('front.layouts.home')
@section('content')
<section class="banner-section student-mgt-sec gray-bg">
    <div class="container" >
      <h2>Order from Top Food Apps</h2>
      <div class="wrapper students_profile_image">
        @foreach($data as $k => $v)
          <div class="box opciprod parentprod">
            <img class="child center-block img-responsive" src="{{!empty($v->product_image) ? asset('images/'.$v->product_image) : asset('/images/img.png')}}" />
            <h2 class="text-center">{{$v->product_name}}</h2>
          </div>
        @endforeach
      </div>
    </div>
</section>

@endsection

@push('scripts')
    <script type="text/javascript">  

    </script>
@endpush
