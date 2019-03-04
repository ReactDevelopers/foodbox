@extends('front.layouts.home')
@section('content')

<section class="banner-section student-mgt-sec gray-bg">
    <div class="container">
       <div class="student-mgt-head">
           <div class="dashboard_head">
               <h3>Student Management</h3>
               <p>Manage users on the go! You can also add and edit students, create staff profiles, invite parents to use the application and a lot more!</p>
           </div>
           <div class="student-details-sec">
               <div class="export-info">
                    
               </div>
               <div class="sorting_box_wrapper">
                   <div class="sorting_box">
                        <span>sort</span>
                        <div class="custom_select_box">
                            <!-- <div id="data-order" class="selected_text">selected text</div>
                            <ul class="sorting_menu">
                                <li>A to Z</li>
                                <li>Z to A</li>
                                <li>New to Old</li>
                                <li>Old to New</li>
                            </ul> -->
                            <select  id="data-order" class="selected_text">
                                <option value="1">A to Z</option>
                                <option value="2">Z to A</option>
                                <option value="3">New to Old</option>
                                <option value="4">Old to New</option>
                            </select>
                        </div>
                   </div>
                   <div class="serch_box_wrapper">
                       <input id="textSearch" type="text" name="textsearch" class="search_box" placeholder="Search text here">
                       <input type="button" class="search_icon">
                   </div>
               </div>
           </div>
       </div>
       <div class="filter_detail_sec">
            <div class="row">
                <div class="col-md-9 col-sm-8 col-xs-12">
                    <div class="students_profile_sec">
                        <ul class="students_profile_boxes" id="userDataContent">
                            
                        </ul>
                    </div>
                </div>
            </div>
       </div>
    </div>
</section>

<button type="button" class="load-more-content" data-loader=".loading-more-data" data-loadedcount="0" data-totaldata="{{@$userdatacount}}" data-offset="0" data-limit="4" data-request="load-moredata" data-id="" data-url="{{route('products.management')}}" data-form="#filterCommonForm" data-target="#userDataContent">Load More..</button>

@endsection

@push('scripts')
    <script type="text/javascript">
        
        function resetAndTriggerSearch() {
            $('.load-more-content').data('loadedcount',"0");
            $('.load-more-content').data('offset',"0");
            $('#userDataContent').html(null);
            setTimeout(function() {
                $('.load-more-content').trigger('click');
            },500)
        }

        $(document).ready(function(){
            
            $('.load-more-content').trigger('click');

            $(document).on('scroll mousewheel',function(e){
                if($('#this-is-footer').isOnScreen())
                {
                    $('.load-more-content').trigger('click');
                }
            });

            $(document).on('keydown keypress','#textSearch',function(e){
                if(e.keyCode == 13)
                {
                    resetAndTriggerSearch();
                }
            });
            $(document).on('change','#data-order',function(e){
                if($.trim($('#data-order').val()))
                {
                    resetAndTriggerSearch();
                }
            });

        });   

    </script>
@endpush
