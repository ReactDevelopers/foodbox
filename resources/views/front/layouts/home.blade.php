<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Food Box</title>
    <!-- Font -->

    

    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script|Source+Serif+Pro" rel="stylesheet">
    <!-- Bootstrap -->
    <!-- <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet"> -->
    <!-- <link rel="stylesheet" type="text/css" href="{{asset('css/owl.carousel.min.css')}}"> -->
    <!-- <link href="{{asset('css/jquery.mCustomScrollbar.min.css')}}" rel="stylesheet"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/0.4.5/sweet-alert.css">
    <!-- <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/sweetalert2/latest/sweetalert2.min.css"> -->
    <!-- <link href="{{ asset ('/bower_components/admin-lte/plugins/jQueryUI/jquery-ui.css') }}" rel="stylesheet" type="text/css" /> -->
    <!-- <link href="{{asset('/css/cropper.min.css')}}" rel="stylesheet" type="text/css" /> -->
    <!-- <link href="{{asset('/css/video.css')}}" rel="stylesheet"> -->
    <!-- <link href="http://vjs.zencdn.net/4.12/video-js.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css" />
    <!-- <link href="//cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/build/css/bootstrap-datetimepicker.css" rel="stylesheet"> -->
    <!-- videoendpint -->
    <!-- <link href="{{asset('css/main.css')}}" rel="stylesheet"> -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- <link href="{{asset('css/jquery.bxslider.min.css')}}" rel="stylesheet"> -->
    <!-- Customm css -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link href="{{asset('css/mycustom.css')}}" rel="stylesheet">
    <!-- welcomepopupmessage -->
    <!-- <link href="{{asset('css/welcomepopup.css')}}" rel="stylesheet"> -->
    <!-- Responsive css -->
    <!-- <link href="{{asset('css/responsive.css')}}" rel="stylesheet"> -->
    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->



  </head>

    <body>
        <?php date_default_timezone_set("Asia/Singapore"); ?>
            @include('front.layouts.header')

        <div class="wrapper">
          @if(Session::has('success'))
            <div class="modal fade forgetModal" id="successMsg" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                 <div class="modal-dialog" role="document">
                     <div class="modal-content">
                         <div class="modal-header">
                             <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                 <span aria-hidden="true">&times;</span>
                             </button>
                         </div>
                         <div class="modal-body">
                             <img src="{{asset('img/success.png')}}">
                         </div>
                         <div class="modal-footer">
                             <p>{{ Session::get('success') }}</p>
                         </div>
                     </div>
                 </div>
             </div>
          @endif
            <div class="main-wrapper">
                <section class="content">        
                    @yield('content')
                </section>
            </div>
            {{--@if(!\Request::is('register') && !\Request::is('login') && \Request::is('password/reset/*')) --}}
            @include('front.layouts.footer')
            {{--@endif--}}
        </div>  

        <!-- wrapper div section ends-->
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.8.3/jquery.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <!-- <script src="{{asset('js/bootstrap.min.js')}}"></script> -->
        <!-- <script src="{{asset('js/video.js')}}"></script> -->
        <!-- <script src="http://vjs.zencdn.net/4.12/video.js"></script> -->

        <script src="{{asset('js/custom.js')}}"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.1/moment-with-locales.js"></script>
        <!-- datepicker -->
        <!-- <script src="js/bootstrap-datetimepicker.min.js"></script> -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>
        <!-- Custom js -->
      
        <!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.21.1/sweetalert2.all.min.js"></script> -->
        <script src="https://cdn.jsdelivr.net/npm/promise-polyfill@7.1.0/dist/promise.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@latest/dist/sweetalert2.all.js"></script>
        <Script src="https://cdnjs.cloudflare.com/ajax/libs/fastclick/1.0.6/fastclick.min.js"></script>
        <!-- <script src="{{asset('js/owl.carousel.min.js')}}"></script> -->
        <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/sweetalert2/latest/sweetalert2.min.js"></script> -->
        <!-- <script src="{{asset ("/js/sg-cropper.js")}}"></script> -->
        <!-- <script src="{{ asset ("/bower_components/admin-lte/plugins/jQueryUI/jquery-ui.js") }}"></script>  -->
        <!-- <script src="{{asset('js/jquery.mCustomScrollbar.concat.min.js')}}"></script> -->
        <!-- <script src="{{asset('js/jquery.bxslider.min.js')}}"></script> -->
        <!-- <script src="{{asset('js/custom.js')}}"></script> -->
        <!-- If you'd like to support IE8 (for Video.js versions prior to v7) -->
        <script type="text/javascript">
           var base_url    = "{{ url('/') }}";
           $.ajaxSetup({
               headers: {
                   'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
               }
           });
       </script>
        @stack('scripts')
    </body>
</html>
