@extends('front.layouts.home')
@section('content')
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome-animation/0.2.1/font-awesome-animation.css">
<section class="banner-section student-mgt-sec gray-bg" >
    <div class="container" style="padding: 30px;" >
      <div class="wrapper students_profile_image" style="margin: 0 auto;top: 25px;padding: 5px;">
        <h2 class="text-center" style="padding-right: 100px;">Currently Active Sections</h2>
        <div class="box opci parent center-block">
          <div class="mg-0">
            <span class="span-text">Top offers in your City</span>
            <a href="#" class="cssCircle plusSign floater"><i class="fa fa-minus" aria-hidden="true"></i></a>
          </div>
        </div>
        <div class="box opci parent center-block">
          <div class="mg-0">
            <span class="span-text">Top offers for existing users</span>
            <a href="#" class="cssCircle plusSign floater"><i class="fa fa-minus" aria-hidden="true"></i></a>
          </div>
        </div>
        <h2 class="text-center" style="padding-right: 182px; padding-top: 87px;">Add More Sections</h2>
        <div class="box opci parent center-block">
          <div class="mg-0">
            <span class="span-text">Top offers for new users</span>
            <a href="#" class="cssCircle plusSign floater"><i class="fa fa-plus" aria-hidden="true"></i></a>
          </div>
        </div>
        <div class="box opci parent center-block">
          <div class="mg-0">
            <span class="span-text">Cashback offers</span>
            <a href="#" class="cssCircle plusSign floater"><i class="fa fa-plus" aria-hidden="true"></i></a>
          </div>
        </div>
      </div>
    </div>
    <!-- <div class="full-width"></div>  -->
</section> 
@endsection

@push('scripts')
    <script type="text/javascript">  

    </script>
@endpush
