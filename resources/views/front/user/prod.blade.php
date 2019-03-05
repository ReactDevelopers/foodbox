@extends('front.layouts.home')
@section('content')
<section class="banner-section student-mgt-sec gray-bg">
  <div class="row mobile">
      <div class="container row" >
        <h2>Order from Top Food Apps</h2>
      </div>
  </div>
    <div class="row mobile">
      <div class="column mobile wrapper students_profile_image">
        @foreach($data as $k => $v)
          <div class="columns box opciprod parentprod block-grid mobile">
            <img class="child center-block img-responsive" src="{{!empty($v->product_image) ? asset('images/'.$v->product_image) : asset('/images/img.png')}}" />
            <div class="box column centered block-grid">
            <h2 class="text-center">{{$v->product_name}}</h2>
          </div>
          </div>
        @endforeach
      </div
    </div>
</section>

@endsection

@push('scripts')
    <script type="text/javascript">  

    </script>
@endpush
