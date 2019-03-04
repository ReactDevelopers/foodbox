@extends('front.layouts.home')
@section('content')
<!-- Banner section start -->
<section class="banner-section p-t-20">
  <div class="custom-container">
      <div class="banner-image bg-common-props h-630" style="background-image: url('{{empty($banners[0]['profile_image']) ? asset('images/banner.jpg') : asset($banners[0]['profile_image'])}}');">
          <div class="banner-text">
              <h1>{{empty($banners[0]['title']) ? 'The Roman Story' : $banners[0]['title'] }}</h1>
              <p>{{empty($banners[0]['shortdescription']) ? 'Products, that speak to your soul' : $banners[0]['shortdescription'] }}</p>
          </div>
      </div>
  </div>
</section>
<!-- Banner section end -->
<!-- Adelie penguin section -->
<div class="custom-container p-t-20 clearfix">
  <div class="parent-container clearfix">
      <div class="child-container">
          <div class="gallery-image bg-common-props h-190" style="background-image: url('{{empty($banners[1]['profile_image']) ? asset('images/animal-antartica.jpg') : asset($banners[1]['profile_image'])}}')"></div>
          <div class="gallery-image  bg-common-props m-t-20 h-190" style="background-image: url('{{empty($banners[2]['profile_image']) ? asset('images/antartica-cold.jpg') : asset($banners[2]['profile_image'])}}')"></div>
          <div class="p-r-10 p-b-10">
              <div class="Adelie-penguins m-t-20 border-common h-190">
                  <div class="adelie-subtxt">
                      <h2>{{empty($banners[3]['title']) ? 'Adélie penguins' : $banners[3]['title'] }}</h2>
                      <p>{{empty($banners[3]['shortdescription']) ? 'live on the Antarctic continent and on many small, surrounding coastal islands. They spend the winter offshore in the seas surrounding the Antarctic pack ice.' : $banners[3]['shortdescription'] }}</p>
                  </div>
              </div>
          </div>
      </div>
      <div class="child-container p-l-20">
          <div class="bg-common-props penguin-preview h-590" style="background-image: url('{{empty($banners[4]['profile_image']) ? asset('images/penguin-image.jpg') : asset($banners[4]['profile_image'])}}')"></div>
      </div>
  </div>
</div>
<!-- Adelie penguin section end -->

<!-- whole-screen-banner-section -->
<div class="custom-container p-t-20">
    <div class="bg-common-props h-630" style="background-image: url('{{empty($banners[5]['profile_image']) ? asset('images/cold-daylight.jpg') : asset($banners[5]['profile_image'])}}')"></div>
</div>
<!-- whole-screen-banner-section-end -->

<!-- Gallery-section -->
<div class="custom-container p-t-20">
  <div class="parent-container clearfix">
      <div class="gallery-image-sec1">
          <div class="clearfix">
              <div class="f-left sub-gallery1 bg-common-props h-630" style="background-image: url('{{empty($banners[6]['profile_image']) ? asset('images/animals-antarctica-birds.jpg') : asset($banners[6]['profile_image'])}}')"></div>
              <div class="sub-gallery2 f-right p-t-20">
                  <div class="p-r-10 p-b-10">
                      <div class="border-common breeding-text h-250">
                          <div class="contentWrapper">
                              <p>{{empty($banners[7]['shortdescription']) ? 'During the spring breeding season (in October), they take to the rocky Antarctic coastline where they live in large communities called colonies. These groups can include thousands of birds.' : $banners[7]['shortdescription'] }}</p>
                          </div>
                      </div>
                  </div>
                  <div class="bg-common-props h-465 m-t-20" style="background-image: url('{{empty($banners[8]['profile_image']) ? asset('images/animal-beak-bird.jpg') : asset($banners[8]['profile_image'])}}')"></div>
              </div>
          </div>
          <div class="h-620 bg-common-props m-t-20 m-r-20" style="background-image: url('{{empty($banners[9]['profile_image']) ? asset('images/animal-antarctic.jpg') : asset($banners[9]['profile_image'])}}')"></div>
      </div>
      <div class="gallery-image-sec2">
          <div class="h-340 bg-common-props" style="background-image: url('{{empty($banners[10]['profile_image']) ? asset('images/animals-antarctic-4.jpg') : asset($banners[10]['profile_image'])}}')"></div>
          <div class="h-480 bg-common-props m-t-20"  style="background-image: url('{{empty($banners[11]['profile_image']) ? asset('images/animals-cold-cute.jpg') : asset($banners[11]['profile_image'])}}')"></div>
          <div class="h-180 m-t-20">
              <div class="p-r-10 p-b-10">
                  <div class="border-common spring-section-text">
                      <p>{{empty($banners[12]['shortdescription']) ? 'Spending a lot more energy to find food makes penguins less successful at breeding and raising young, the scientists said.' : $banners[12]['shortdescription'] }}</p>
                  </div>
              </div>
          </div>
          <div class="h-210 bg-common-props m-t-20"  style="background-image: url('{{empty($banners[13]['profile_image']) ? asset('images/animal-beaks.jpg') : asset($banners[13]['profile_image'])}}')"></div>
      </div>
  </div>
</div>
<!-- Gallery-section-end -->

<!-- follow-the-sun-section -->
<div class="custom-container p-t-20">
  <div class="cold-mountain-section">
      <div class="penguin-age-section p-r-10 p-b-10">
          <div class="border-common h-620">
              <div class="penguin-section-desc">
                  <div class="block">
                      <span>{{empty($bannerdetail[0]['value']) ? '11-20 yrs' : $bannerdetail[0]['value'] }}</span> 
                      <label>{{empty($bannerdetail[1]['value']) ? 'AVG. LIFE SPAN' : $bannerdetail[1]['value'] }}</label>
                  </div>
                  <div class="block">
                      <span>{{empty($bannerdetail[2]['value']) ? '27.5 in' : $bannerdetail[2]['value'] }}</span> 
                      <label>{{empty($bannerdetail[3]['value']) ? 'SIZE' : $bannerdetail[3]['value'] }}</label>
                  </div>
                  <div class="block">
                      <span>{{empty($bannerdetail[4]['value']) ? '8.5 - 11 lbs' : $bannerdetail[4]['value'] }}</span> 
                      <label>{{empty($bannerdetail[5]['value']) ? 'WEIGHT' : $bannerdetail[5]['value'] }}</label>
                  </div>
              </div>
              <div class="penguin-section-text">
                  <p>{{empty($bannerdetail[6]['value']) ? '“Follow the sun” means that during the winter the sun does not rise south of the Antarctic Circle, but sea ice grows during the winter months and increases for hundreds of miles from the shoreline, and into more northern latitudes, all around Antarctica, so that as long as the penguins live at the edge of the fast ice, there will be sunlight.' : $bannerdetail[6]['value'] }}</p>
              </div>
          </div>
      </div>
      <div class="penguin-section bg-common-props h-630" style="background-image: url('{{empty($banners[14]['profile_image']) ? asset('images/ian-parker.jpg') : asset($banners[14]['profile_image'])}}')"></div>
  </div>
</div>
<!-- follow-the-sun-section end  -->

<!-- Red-list status section -->
<div class="custom-container p-t-20">
    <div class="h-630 bg-common-props" style="background-image: url('{{empty($banners[15]['profile_image']) ? asset('images/danielle-barnes.jpg') : asset($banners[15]['profile_image'])}}')">
    </div>
</div>

<div class="custom-container p-t-20 relative">
    <div class="red-list-section">
        <h4 class="p-b-10">{{empty($iucnlist[0]['value']) ? 'IUCN RED LIST STATUS1' : $iucnlist[0]['value'] }}</h4>
        <div class="clearfix greyText sourceSerif">
            <span class="f-left font20">{{!empty($iucnlist[1]['value']) ? 'Least concerned' : $iucnlist[1]['value'] }}</span>
            <span class="f-right font20">{{!empty($iucnlist[7]['value']) ? 'Extinct' : $iucnlist[7]['value'] }}</span>
        </div>
        <ul class="m-t-10">
            <li class="{{($iucnlist[1]['iucnStatus']==1) ? 'active' : '' }}">
              <span class="grey-circle">{{empty($iucnlist[1]['key']) ? 'IUCN RED LIST STATUS1' : $iucnlist[1]['key'] }}</span>
              <span class="list-tag">{{empty($iucnlist[1]['value']) ? 'IUCN RED LIST STATUS1' : $iucnlist[1]['value'] }}</span>
            </li>
            <li class="{{($iucnlist[2]['iucnStatus']==1) ? 'active' : '' }}">
              <span class="grey-circle">{{empty($iucnlist[2]['key']) ? 'IUCN RED LIST STATUS1' : $iucnlist[2]['key'] }}</span>
              <span class="list-tag">{{empty($iucnlist[2]['value']) ? 'IUCN RED LIST STATUS1' : $iucnlist[2]['value'] }}</span>
            </li>
            <li class="{{($iucnlist[3]['iucnStatus']==1) ? 'active' : '' }}">
              <span class="grey-circle">{{empty($iucnlist[3]['key']) ? 'IUCN RED LIST STATUS1' : $iucnlist[3]['key'] }}</span>
              <span class="list-tag">{{empty($iucnlist[3]['value']) ? 'IUCN RED LIST STATUS1' : $iucnlist[3]['value'] }}</span>
            </li>
            <li class="{{($iucnlist[4]['iucnStatus']==1) ? 'active' : '' }}">
              <span class="grey-circle">{{empty($iucnlist[4]['key']) ? 'IUCN RED LIST STATUS1' : $iucnlist[4]['key'] }}</span>
              <span class="list-tag">{{empty($iucnlist[4]['value']) ? 'IUCN RED LIST STATUS1' : $iucnlist[4]['value'] }}</span>
            </li>
            <li class="{{($iucnlist[5]['iucnStatus']==1) ? 'active' : '' }}">
              <span class="grey-circle">{{empty($iucnlist[5]['key']) ? 'IUCN RED LIST STATUS1' : $iucnlist[5]['key'] }}</span>
              <span class="list-tag">{{empty($iucnlist[5]['value']) ? 'IUCN RED LIST STATUS1' : $iucnlist[5]['value'] }}</span>
            </li>                    
            <li class="{{($iucnlist[6]['iucnStatus']==1) ? 'active' : '' }}">
              <span class="grey-circle">{{empty($iucnlist[6]['key']) ? 'IUCN RED LIST STATUS1' : $iucnlist[6]['key'] }}</span>
              <span class="list-tag">{{empty($iucnlist[6]['value']) ? 'IUCN RED LIST STATUS1' : $iucnlist[6]['value'] }}</span>
            </li>
            <li class="{{($iucnlist[7]['iucnStatus']==1) ? 'active' : '' }}">
              <span class="grey-circle">{{empty($iucnlist[7]['key']) ? 'IUCN RED LIST STATUS1' : $iucnlist[07]['key'] }}</span>
              <span class="list-tag">{{empty($iucnlist[7]['value']) ? 'IUCN RED LIST STATUS1' : $iucnlist[7]['value'] }}</span>
            </li>
        </ul>
    </div>
    <div class="h-500 bg-common-props" style="background-image: url('{{empty($banners[16]['profile_image']) ? asset('images/ian-parker-2.jpg') : asset($banners[16]['profile_image'])}}')">
    </div>
</div>
<!-- Red-list status section end -->

<!-- Find more stories section -->
<div class="custom-container p-t-20">
    <div class="p-r-10 p-b-10">
        <div class="video-wrapper border-common">
            <div class="video-wrapper-content">
                <h2>{{empty($bannerdetail[7]['value']) ? 'FIND MORE STORIES ON THE VIDEOS PAGE' : $bannerdetail[7]['value'] }}</h2>
            </div>
        </div>
    </div>
    <div class="c-align video-btn">
      @if(!\Auth::check())
        <button class="btn blue-btn" id="remeberactive" href="#" data-toggle="modal" data-target="#login_popup">{{empty($bannerdetail[8]['value']) ? 'Login' : $bannerdetail[8]['value'] }}</button>
      @else
        <a href="{{route('view.video')}}" class="btn blue-btn">{{empty($bannerdetail[9]['value']) ? 'Go to Videos' : $bannerdetail[9]['value'] }}</a>
      @endif
    </div>
</div>

<input type="hidden" name="login_status" value="@if($login_status){{$login_status->login_status}}@endif">
<input type="hidden" name="login_user" value="@if (Auth::check()){{Auth::user()->id}}@endif">
<!-- Modal Box -->
<div class="modal fade" id="welcome_popup" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered welcome-popup" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
            </div>
             <div class="modal-body">
              <div class="welcome-msg">{!! ___popupstatus(); !!}</div>

</div>        </div>
     </div>
            <div class="modal-footer">
            </div>
</div>

<!-- Find more stories section end -->
@endsection

@push('scripts')

  <script type="text/javascript">
  $(document).ready(function(){
    //console.clear();
    var status = $('input[name="login_status"]').val();
    //alert(status);
    if(status != ''){
      if(status == 0){

      
      //change_status();
      setTimeout(function(){ change_status(); }, 4000);
     }
    }
    

  });

  function change_status(){
    $('#welcome_popup').modal('show');
      var params = {
       //'token':$('meta[name="csrf-token"]').attr('content'),
       'id':$('input[name="login_user"]').val()
      }

      $.ajax({
               url:base_url+'/welcom_popup' ,
               method:'GET',
               data:params,
               success:function(msg){
                 console.log('ok');
               }
           });
  }
  </script>
 

  
@endpush