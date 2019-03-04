<!-- Header section start -->
<header class="header-section fixed-top">
  <div class="custom-container">
      <nav class="navbar navbar-default custom-navbar">
          <div class="navbar-header">
               <!-- <button type="button" class="navbar-toggle pull-left">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
              </button> -->
              <a class="navbar-brand" href="{{url('/')}}"><?php
              $values=___configuration(['site_name']);
              foreach ($values as $value) {
              echo strip_tags($value);
              }
              ?></a>
          </div>
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

              <button class="btn cross-link">
                  <img src="{{asset('images/img.png')}}">
              </button>
                  <ul class="nav navbar-nav">
                    <li>
                      <a href=""><img style="height: 20px;width: 20px;margin-top: -5px;" src="{{asset('images/bell.png')}}"></a>
                    </li>
                    <li>
                      <a href="{{url('myprofile')}}"><img style="height: 30px;width: 30px;margin: 0 auto;top: 25px;border-color: #f4f4f4;box-shadow: none;margin-top: -5px;" src="{{asset('images/avatar.png')}}"></a>
                    </li>
                      <!-- <li class="login-right-border"><a id="remeberactive" href="javascript:void(0)" data-toggle="modal" data-target="#login_popup">Login</a></li>
                      <li class="register-right-border"><a id="registeractive" href="javascript:void(0)" data-toggle="modal" data-target="#register_popup">Register</a></li> -->
                  </ul>
          </div>
      </nav>
  </div>
</header>   

<!-- header section ends-->


