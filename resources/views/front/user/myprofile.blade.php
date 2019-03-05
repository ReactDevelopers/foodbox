@extends('front.layouts.home')
@section('content')
<style type="text/css">
</style>
<section class="row mobile banner-section student-mgt-sec gray-bg" >
    <div class="row mobile container" style="padding: 30px;" >
      <div class="columns wrapper students_profile_image" style="margin: 0 auto;top: 25px;padding: 5px;">
        <div class="box parent block-grid">
          <img class="child center-block img-responsive avatar" src="{{!empty($usVal->product_image) ? asset($usVal->product_image) : asset('/images/avatar.png')}}" />
          <h3 class="text-center">Headline 1</h3>
          <h3 class="text-center"><a class="btn" style="background-color: #fbc80ec7">foodie</a></h3>
          
        </div>
        <div class="columns mobile box opciprofile parent center-block">
          <div class="column mobile mg-0">
            <span class="span-text">Edit Profile</span>
            <a href="#" class="arrowprofile next floater" style="margin-right: 0px;"></a>
          </div>
          <div class="column mobile mg-0">
            <a href="{{url('exp')}}">
            <span class="span-text">Customize Experience</span>
            <a href="#" class="arrowprofile next floater"></a>
            </a>
          </div>
        </div>
        <div class="column mobile box opciprofile center-block">
          <div class="column mobile mg-0">
            <span class="span-text">Download App</span>
            <a href="#" class="arrowprofile next floater"></a>
          </div>
          <div class="column mobile mg-0">
            <span class="span-text">View Forum</span>
            <a href="#" class="arrowprofile next floater"></a>
          </div>
        </div>
      </div>
    </div>
</section>

@endsection

@push('scripts')
    <script type="text/javascript">  

    </script>
@endpush
