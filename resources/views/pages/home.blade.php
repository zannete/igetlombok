@extends("layouts.app")

@section("content")
  @include("components.topBar")
  <div class="clearfix"></div>
  @include("components.menuBar")

  @include("components.searchSection.index")
  
  <!-- START: HOT  DEALS -->
  <section>
    <div class="row hot-deals">
      <div class="container clear-padding">
        <div class="section-title text-center">
          <h2>HOT DEALS</h2>
          <h4>SAVE MORE</h4>
        </div>
        <div role="tabpanel" class="text-center">
          <!-- BEGIN: CATEGORY TAB -->
          <ul class="nav nav-tabs" role="tablist" id="hotDeal" style="max-width: 240px;">
            <li role="presentation" class="active text-center">
              <a href="#tab1" aria-controls="tab1" role="tab" data-toggle="tab">
                <i class="fa fa-bed"></i> 
                <span>FAST BOATS</SPAN>
              </a>
            </li>
            <li role="presentation" class="text-center">
              <a href="#tab2" aria-controls="tab2" role="tab" data-toggle="tab">
                <i class="fa fa-suitcase"></i> 
                <span>TOURS</SPAN>
              </a>
            </li>
          </ul>
          <!-- END: CATEGORY TAB -->
          <div class="clearfix"></div>
          <!-- BEGIN: TAB PANELS -->
          <div class="tab-content">
            <!-- BEGIN: FLIGHT SEARCH -->
            <div role="tabpanel" class="tab-pane active fade in" id="tab1">
              <div class="col-md-12 hot-deal-grid wow slideInRight">
                <div class="col-sm-3 item">
                  <div class="wrapper">
                    <img src="assets/images/tour1.jpg" alt="Cruise">
                    <h5>Paris Starting From $49/Night</h5>
                    <a href="#">DETAILS</a>
                  </div>
                </div>
                <div class="col-sm-3 item">
                  <div class="wrapper">
                    <img src="assets/images/tour1.jpg" alt="Cruise">
                    <h5>Bangkok Starting From $69/Night</h5>
                    <a href="#">DETAILS</a>
                  </div>
                </div>
                <div class="col-sm-3 item">
                  <div class="wrapper">
                    <img src="assets/images/tour1.jpg" alt="Cruise">
                    <h5>Dubai Starting From $99/Night</h5>
                    <a href="#">DETAILS</a>
                  </div>
                </div>
                <div class="col-sm-3 item">
                  <div class="wrapper">
                    <img src="assets/images/tour1.jpg" alt="Cruise">
                    <h5>Italy Starting From $59/Night</h5>
                    <a href="#">DETAILS</a>
                  </div>
                </div>
                <div class="col-sm-3 item">
                  <div class="wrapper">
                    <img src="assets/images/tour1.jpg" alt="Cruise">
                    <h5>Paris Starting From $49/Night</h5>
                    <a href="#">DETAILS</a>
                  </div>
                </div>
                <div class="col-sm-3 item">
                  <div class="wrapper">
                    <img src="assets/images/tour1.jpg" alt="Cruise">
                    <h5>Bangkok Starting From $69/Night</h5>
                    <a href="#">DETAILS</a>
                  </div>
                </div>
                <div class="col-sm-3 item">
                  <div class="wrapper">
                    <img src="assets/images/tour1.jpg" alt="Cruise">
                    <h5>Dubai Starting From $99/Night</h5>
                    <a href="#">DETAILS</a>
                  </div>
                </div>
                <div class="col-sm-3 item">
                  <div class="wrapper">
                    <img src="assets/images/tour1.jpg" alt="Cruise">
                    <h5>Italy Starting From $59/Night</h5>
                    <a href="#">DETAILS</a>
                  </div>
                </div>
              </div>
            </div>
            <div role="tabpanel" class="tab-pane fade" id="tab1">
              <div class="col-md-12 hot-deal-grid wow slideInRight">
                <div class="col-sm-3 item">
                  <div class="wrapper">
                    <img src="assets/images/tour1.jpg" alt="Cruise">
                    <h5>Paris Starting From $49/Night</h5>
                    <a href="#">DETAILS</a>
                  </div>
                </div>
                <div class="col-sm-3 item">
                  <div class="wrapper">
                    <img src="assets/images/tour1.jpg" alt="Cruise">
                    <h5>Bangkok Starting From $69/Night</h5>
                    <a href="#">DETAILS</a>
                  </div>
                </div>
                <div class="col-sm-3 item">
                  <div class="wrapper">
                    <img src="assets/images/tour1.jpg" alt="Cruise">
                    <h5>Dubai Starting From $99/Night</h5>
                    <a href="#">DETAILS</a>
                  </div>
                </div>
                <div class="col-sm-3 item">
                  <div class="wrapper">
                    <img src="assets/images/tour1.jpg" alt="Cruise">
                    <h5>Italy Starting From $59/Night</h5>
                    <a href="#">DETAILS</a>
                  </div>
                </div>
                <div class="col-sm-3 item">
                  <div class="wrapper">
                    <img src="assets/images/tour1.jpg" alt="Cruise">
                    <h5>Paris Starting From $49/Night</h5>
                    <a href="#">DETAILS</a>
                  </div>
                </div>
                <div class="col-sm-3 item">
                  <div class="wrapper">
                    <img src="assets/images/tour1.jpg" alt="Cruise">
                    <h5>Bangkok Starting From $69/Night</h5>
                    <a href="#">DETAILS</a>
                  </div>
                </div>
                <div class="col-sm-3 item">
                  <div class="wrapper">
                    <img src="assets/images/tour1.jpg" alt="Cruise">
                    <h5>Dubai Starting From $99/Night</h5>
                    <a href="#">DETAILS</a>
                  </div>
                </div>
                <div class="col-sm-3 item">
                  <div class="wrapper">
                    <img src="assets/images/tour1.jpg" alt="Cruise">
                    <h5>Italy Starting From $59/Night</h5>
                    <a href="#">DETAILS</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- END: HOT DEALS -->

  <!-- BEGIN: TOP DESTINATION SECTION -->
  <section id="home-top-destination">
    <div class="row image-background">
      <div class="td-overlay">
        <div class="container">
          <div class="light-section-title text-center">
            <h2>OUR POPULAR SERVICE</h2>
            <h4>EXPLORE</h4>
          </div>
          <div class="col-md-10 col-md-offset-1 on-top clear-padding">
            <div class="col-md-6 col-sm-6 td-product text-center clear-padding wow slideInUp" data-wow-delay="0.1s">
              <img src="assets/images/tour1.jpg" alt="cruise">
              <div class="overlay">
                <div class="wrapper">
                  <h5>FRANCE</h5>
                  <h3><span>ROMANTIC PARIS</span></h3>
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
                  <a href="#">KNOW MORE</a>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-sm-6 td-product text-center clear-padding wow slideInUp" data-wow-delay="0.2s">
              <img src="assets/images/tour1.jpg" alt="cruise">
              <div class="overlay">
                <div class="wrapper">
                  <h5>BANGKOK</h5>
                  <h3><span>DISENYLAND BANGKOK</span></h3>
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
                  <a href="#">KNOW MORE</a>
                </div>
              </div>
            </div>
            <div class="clearfix visible-md-block"></div>
            <div class="col-md-6 col-sm-6 td-product text-center clear-padding wow slideInUp" data-wow-delay="0.1s">
              <img src="assets/images/tour1.jpg" alt="cruise">
              <div class="overlay">
                <div class="wrapper">
                  <h5>DUBAI</h5>
                  <h3><span>SKY HIGH DUBAI</span></h3>
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
                  <a href="#">KNOW MORE</a>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-sm-6 td-product text-center clear-padding wow slideInUp" data-wow-delay="0.2s">
              <img src="assets/images/tour1.jpg" alt="cruise">
              <div class="overlay">
                <div class="wrapper">
                  <h5>AUSTRIA</h5>
                  <h3><span>HILLY VIEW</span></h3>
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
                  <a href="#">KNOW MORE</a>
                </div>
              </div>
            </div>
            <div class="clearfix visible-md-block"></div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- END: TOP DESTINATION SECTION -->
  
  <!-- BEGIN: RECENT BLOG POST -->
  @include("components.sections.recentBlog", ["posts" => $posts])
  <!-- END: RECENT BLOG POST -->
@endsection

@section("additionalJS")
  <script type="text/javascript">
    $(document).ready(function() {
      $('.js-example-basic-single').select2();
      if($(".js-example-basic-single").hasClass("select2-hidden-accessible")){
        $(".select2 .select2-selection__arrow").css("height", "100%");
        $(".selection:first-child > span:nth-child(1)").css("background-color", "transparent");
        $(".selection:first-child > span:nth-child(1)").css("border", "1px solid #BEC4C8");
        $(".selection:first-child > span:nth-child(1)").css("border-radius", "0");
        $(".selection:first-child > span:nth-child(1)").css("box-shadow", "0 1px 1px rgba(0, 0, 0, 0.075) inset;");
        $(".selection:first-child > span:nth-child(1)").css("color", "1px solid #BEC4C8");
        $(".selection:first-child > span:nth-child(1)").css("display", "block");
        $(".selection:first-child > span:nth-child(1)").css("font-size", "15px");
        $(".selection:first-child > span:nth-child(1)").css("height", "40px");
        $(".selection:first-child > span:nth-child(1)").css("line-height", "1.42857");
        $(".selection:first-child > span:nth-child(1)").css("padding", "6px 12px");
        $(".selection:first-child > span:nth-child(1)").css("transition", "border-color 0.15s ease-in-out 0s, box-shadow 0.15s ease-in-out 0s");
        $(".selection:first-child > span:nth-child(1)").css("width", "100%");
      }

      $("input[name=isRoundTrip]").on("change", function(e){
        $("#returnForm").show();
        if(e.target.value === "false"){
          $("#returnForm").hide();
        }
      })
    })


    jQuery(function($){
      "use strict";
      $.supersized({
        //Functionality
        slideshow            : 1,		//Slideshow on/off
        autoplay				     : 1,		//Slideshow starts playing automatically
        start_slide          : 1,		//Start slide (0 is random)
        random				       : 0,		//Randomize slide order (Ignores start slide)
        slide_interval       : 10000,	//Length between transitions
        transition           : 1, 		//0-None, 1-Fade, 2-Slide Top, 3-Slide Right, 4-Slide Bottom, 5-Slide Left, 6-Carousel Right, 7-Carousel Left
        transition_speed     : 500,	//Speed of transition
        new_window			     : 1,		//Image links open in new window/tab
        pause_hover          : 0,		//Pause slideshow on hover
        keyboard_nav         : 0,		//Keyboard navigation on/off
        performance			     : 1,		//0-Normal, 1-Hybrid speed/quality, 2-Optimizes image quality, 3-Optimizes transition speed // (Only works for Firefox/IE, not Webkit)
        image_protect		     : 1,		//Disables image dragging and right click with Javascript

        //Size & Position
        min_width		         : 0,		//Min width allowed (in pixels)
        min_height		       : 0,		//Min height allowed (in pixels)
        vertical_center      : 1,		//Vertically center background
        horizontal_center    : 1,		//Horizontally center background
        fit_portrait         : 1,		//Portrait images will not exceed browser height
        fit_landscape			   : 0,		//Landscape images will not exceed browser width
            
        //Components
        navigation           : 1,		//Slideshow controls on/off
        thumbnail_navigation : 1,		//Thumbnail navigation
        slide_counter        : 1,		//Display slide numbers
        slide_captions       : 1,		//Slide caption (Pull from "title" in slides array)
        slides 				       : [		//Slideshow Images
          {image : '{{ asset('assets/images/slide.jpg') }}', title : 'Slide 1'},  
          {image : '{{ asset('assets/images/slide.jpg') }}', title : 'Slide 2'},  
          {image : '{{ asset('assets/images/slide.jpg') }}', title : 'Slide 3'},  
        ]
      }); 
    });
  </script>
@endsection