@if(!empty($guardiandata))
    @foreach($guardiandata as $usKey => $usVal)
        <li class="totalContentLength">
            <div class="students_profile_image box-with-dropdown">
               <div class="profile-image">
                    <svg width="231px" height="216px" viewBox="0 0 231 216" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <defs>
                            <path d="M79.1493776,160 C122.862372,160 175,105.834156 175,61.6513761 C175,17.4685962 122.862372,0 79.1493776,0 C35.4363834,0 0,35.81722 0,80 C0,124.18278 35.4363834,160 79.1493776,160 Z" id="path-2"></path>
                        </defs>
                        <mask id="oval-mask2">
                            <use fill="#fff" xlink:href="#path-2"></use>
                        </mask>
                        <use id="Oval-2-Copy-2" stroke="#ffffff" stroke-width="10" xlink:href="#path-2"></use>
                        <image mask="url(#oval-mask2)" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="{{!empty($usVal->product_image) ? asset($usVal->product_image) : asset('images\img.png')}}" width="100%" height="100%"></image>
                    </svg>

                </div>
            </div>
            <div class="profile_details_box box-relative">
                <span  class="edit_student_block">
                    <img src="{{asset('images/circular_dots.png')}}" alt="edit details">
                    <img src="{{asset('images/circular_dots_white.png')}}" alt="edit details">
                </span>
                <h3><a href="">{{$usVal->product_name}}</a></h3>
                <div class="students_details">
                    <label>Class</label>
                    <span>dcfv</span>
                </div>
                <div class="students_details">
                    <label>Guardian</label>
                    <span>dcfv</span>
                </div>
                <div class="students_details">
                    <label>Phone No.</label>
                    <span>dcfvg</span>
                </div>
            </div>
        </li>
    @endforeach
@endif