<!DOCTYPE html>
<html class="load-full-screen">
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Zannete">

    <title>I Get Lombok - Your Trusted Lombok Agency</title>

    <!-- STYLES -->
    <link href="{{ asset("/assets/css/animate.min.css") }}" rel="stylesheet">
    <link href="{{ asset("/assets/css/bootstrap-select.min.css") }}" rel="stylesheet">
    <link href="{{ asset("/assets/css/owl.carousel.css") }}" rel="stylesheet">
    <link href="{{ asset("/assets/css/owl-carousel-theme.css") }}" rel="stylesheet">
    <link href="{{ asset("/assets/css/bootstrap.min.css") }}" rel="stylesheet" media="screen">
    <link href="{{ asset("/assets/css/flexslider.css") }}" rel="stylesheet" media="screen">
    <link href="{{ asset("/assets/css/style.css") }}" rel="stylesheet" media="screen">
    <link href="{{ asset("/assets/css/color/blue.css") }}" rel="stylesheet" media="screen">

    <!-- FONTS -->
    <link href="{{ asset("/assets/font-awesome/css/font-awesome.min.css") }}" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,800,700,600' rel='stylesheet' type='text/css'>
    
  </head>
  <body class="load-full-screen">
    
    <!-- BEGIN: PRELOADER -->
    <div id="loader" class="load-full-screen">
      <div class="loading-animation">
        <span><i class="fa fa-plane"></i></span>
        <span><i class="fa fa-bed"></i></span>
        <span><i class="fa fa-ship"></i></span>
        <span><i class="fa fa-suitcase"></i></span>
      </div>
    </div>
    <!-- END: PRELOADER -->

    <div class="site-wrapper">
      @include("components.topBar")

      <div class="clearfix"></div>
      @include("components.menuBar")
      
      <!-- BEGIN: SEARCH SECTION -->
      <div class="row vertical-search">
        <div class="container clear-padding">
          <div class="search-section">
            <div role="tabpanel">
              <div class="col-md-2 col-sm-2 vertical-tab">
                <!-- BEGIN: CATEGORY TAB -->
                <ul class="nav nav-tabs search-top" role="tablist" id="searchTab">
                  <li role="presentation" class="active">
                    <a href="#flight" aria-controls="flight" role="tab" data-toggle="tab">
                      <i class="fa fa-plane"></i> 
                      <span>FLIGHTS</SPAN>
                    </a>
                  </li>
                  <li role="presentation">
                    <a href="#hotel" aria-controls="hotel" role="tab" data-toggle="tab">
                      <i class="fa fa-bed"></i> 
                      <span>HOTELS</span>
                    </a>
                  </li>
                  <li role="presentation">
                    <a href="#holiday" aria-controls="holiday" role="tab" data-toggle="tab">
                      <i class="fa fa-suitcase"></i>
                      <span>HOLIDAYS</span>
                    </a>
                  </li>
                  <li role="presentation">
                    <a href="#taxi" aria-controls="taxi" role="tab" data-toggle="tab">
                      <i class="fa fa-cab"></i>
                      <span>CAR</span>
                    </a>
                  </li>
                  <li role="presentation">
                    <a href="#cruise" aria-controls="cruise" role="tab" data-toggle="tab">
                      <i class="fa fa-ship"></i>
                      <span>CRUISE</span>
                    </a>
                  </li>
                </ul>
                <!-- END: CATEGORY TAB -->
              </div>
              <div class="col-md-10 col-sm-10 vertical-tab-pannel">
                <!-- BEGIN: TAB PANELS -->
                <div class="tab-content">
                    <!-- BEGIN: FLIGHT SEARCH -->
                    <div role="tabpanel" class="tab-pane active" id="flight">
                      <div class="col-md-8 clear-padding">
                        <form >
                          <div class="col-md-12 product-search-title">Book Flight Tickets</div>
                          <div class="col-md-12 search-col-padding">
                            <label class="radio-inline">
                              <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="One Way"> One Way
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="Round Trip"> Round Trip
                            </label>
                          </div>
                          <div class="clearfix"></div>
                          <div class="col-md-6 col-sm-6 search-col-padding">
                            <label>Leaving From</label>
                            <div class="input-group">
                              <input type="text" name="departure_city" class="form-control" required placeholder="E.g. London">
                              <span class="input-group-addon"><i class="fa fa-map-marker fa-fw"></i></span>
                            </div>
                          </div>
                          <div class="col-md-6 col-sm-6 search-col-padding">
                            <label>Leaving To</label>
                            <div class="input-group">
                              <input type="text" name="destination_city" class="form-control" required placeholder="E.g. New York">
                              <span class="input-group-addon"><i class="fa fa-map-marker fa-fw"></i></span>
                            </div>
                          </div>
                          <div class="clearfix"></div>
                          <div class="col-md-6 col-sm-6 search-col-padding">
                            <label>Departure</label>
                            <div class="input-group">
                              <input type="text" id="departure_date" name="departure_date" class="form-control" placeholder="DD/MM/YYYY">
                              <span class="input-group-addon"><i class="fa fa-calendar fa-fw"></i></span>
                            </div>
                          </div>
                          <div class="col-md-6 col-sm-6 search-col-padding">
                            <label>Return</label>
                            <div class="input-group">
                              <input type="text" id="return_date" class="form-control" name="return_date" placeholder="DD/MM/YYYY">
                              <span class="input-group-addon"><i class="fa fa-calendar fa-fw"></i></span>
                            </div>
                          </div>
                          <div class="clearfix"></div>
                          <div class="col-md-4 col-sm-4 search-col-padding">
                            <label>Adult</label><br>
                            <input id="adult_count" name="adult_count" value="1" class="form-control quantity-padding">
                          </div>
                          <div class="col-md-4 col-sm-4 search-col-padding">
                            <label>Child</label><br>
                            <input type="text" id="child_count" name="child_count" value="1" class="form-control quantity-padding">
                          </div>
                          <div class="col-md-4 col-sm-4 search-col-padding">
                            <label>Class</label><br>
                            <select class="selectpicker">
                              <option>Business</option>
                              <option>Economy</option>
                            </select>
                          </div>
                          <div class="clearfix"></div>
                          <div class="col-md-12 search-col-padding">
                            <button type="submit" class="search-button btn transition-effect">Search Flights</button>
                          </div>
                          <div class="clearfix"></div>
                        </form>
                      </div>
                      <div class="offer-box col-md-4">
                        <div class="owl-carousel" id="flightoffer">
                          <div class="item">
                            <img src="assets/images/tour1.jpg" alt="cruise">
                            <h4>Flights To Hong Kong</h4>
                            <h5>Starting From $599</h5>
                            <a href="#">KNOW MORE</a>
                          </div>
                          <div class="item">
                            <img src="assets/images/tour1.jpg" alt="cruise">
                            <h4>Flights To Paris</h4>
                            <h5>Starting From $999</h5>
                            <a href="#">KNOW MORE</a>
                          </div>
                          <div class="item">
                            <img src="assets/images/tour1.jpg" alt="cruise">
                            <h4>Flights To Dubai</h4>
                            <h5>Starting From $399</h5>
                            <a href="#">KNOW MORE</a>
                          </div>
                        </div>
                      </div>
                      <div class="clearfix"></div>
                    </div>
                    <!-- END: FLIGHT SEARCH -->
                    
                    <!-- START: HOTEL SEARCH -->
                    <div role="tabpanel" class="tab-pane" id="hotel">
                      <div class="col-md-8">
                        <form >
                          <div class="col-md-12 product-search-title">Book Hotel Rooms</div>
                          <div class="col-md-12 col-sm-12 search-col-padding">
                            <label>I Want To Go</label>
                            <div class="input-group">
                              <input type="text" name="destination-city" class="form-control" required placeholder="E.g. New York">
                              <span class="input-group-addon"><i class="fa fa-map-marker fa-fw"></i></span>
                            </div>
                          </div>
                          <div class="clearfix"></div>
                          <div class="col-md-6 col-sm-6 search-col-padding">
                            <label>Check - In</label>
                            <div class="input-group">
                              <input type="text" name="check-in" id="check_in" class="form-control" placeholder="DD/MM/YYYY">
                              <span class="input-group-addon"><i class="fa fa-calendar fa-fw"></i></span>
                            </div>
                          </div>
                          <div class="col-md-6 col-sm-6 search-col-padding">
                            <label>Check - Out</label>
                            <div class="input-group">
                              <input type="text" name="check-out" id="check_out" class="form-control" placeholder="DD/MM/YYYY">
                              <span class="input-group-addon"><i class="fa fa-calendar fa-fw"></i></span>
                            </div>
                          </div>
                          <div class="clearfix"></div>
                          <div class="col-md-3 col-sm-3 search-col-padding">
                            <label>Adult</label><br>
                            <input id="hotel_adult_count" name="adult_count" value="1" class="form-control quantity-padding">
                          </div>
                          <div class="col-md-3 col-sm-3 search-col-padding">
                            <label>Child</label><br>
                            <input type="text" id="hotel_child_count" name="child_count" value="1" class="form-control quantity-padding">
                          </div>
                          <div class="col-md-3 col-sm-3 search-col-padding">
                            <label>Rooms</label><br>
                            <select class="selectpicker" name="rooms">
                              <option>1</option>
                              <option>2</option>
                              <option>3</option>
                              <option>4</option>
                              <option>5</option>
                              <option>6</option>
                            </select>
                          </div>
                          <div class="col-md-3 col-sm-3 search-col-padding">
                            <label>Nights</label><br>
                            <select class="selectpicker" name="nights">
                              <option>1</option>
                              <option>2</option>
                              <option>3</option>
                              <option>4</option>
                              <option>5</option>
                              <option>6</option>
                            </select>
                          </div>
                          <div class="clearfix"></div>
                          <div class="col-md-12 search-col-padding">
                            <button type="submit" class="search-button btn transition-effect">Search Hotels</button>
                          </div>
                          <div class="clearfix"></div>
                        </form>
                      </div>
                      <div class="offer-box col-md-4">
                        <div class="item">
                          <img src="assets/images/tour1.jpg" alt="cruise">
                          <h4>Hotels In Paris</h4>
                          <h5>Starting From $399/Night</h5>
                          <a href="#">KNOW MORE</a>
                        </div>
                      </div>
                      <div class="clearfix"></div>
                    </div>
                    <!-- END: HOTEL SEARCH -->
                      
                    <!-- START: BEGIN HOLIDAY -->
                    <div role="tabpanel" class="tab-pane" id="holiday">
                      <div class="col-md-8">
                        <form >
                          <div class="col-md-12 product-search-title">Book Holiday Packages</div>
                          <div class="col-md-6 col-sm-6 search-col-padding">
                            <label>From</label>
                            <div class="input-group">
                              <input type="text" name="pack-departure-city" class="form-control" required placeholder="E.g. New York">
                              <span class="input-group-addon"><i class="fa fa-map-marker fa-fw"></i></span>
                            </div>
                          </div>
                          <div class="col-md-6 col-sm-6 search-col-padding">
                            <label>I Want To Go</label>
                            <div class="input-group">
                              <input type="text" name="pack-destination-city" class="form-control" required placeholder="E.g. New York">
                              <span class="input-group-addon"><i class="fa fa-map-marker fa-fw"></i></span>
                            </div>
                          </div>
                          <div class="clearfix"></div>
                          <div class="col-md-6 col-sm-6 search-col-padding">
                            <label>Starting From</label>
                            <div class="input-group">
                              <input type="text" id="package_start" class="form-control" placeholder="DD/MM/YYYY">
                              <span class="input-group-addon"><i class="fa fa-calendar fa-fw"></i></span>
                            </div>
                          </div>
                          <div class="col-md-6 col-sm-6 search-col-padding">
                            <label>Duration(Optional)</label><br>
                            <select class="selectpicker" name="holiday_duration">
                              <option>3 Days</option>
                              <option>5 Days</option>
                              <option>1 Week</option>
                              <option>2 Weeks</option>
                              <option>1 Month</option>
                              <option>1+ Month</option>
                            </select>
                          </div>
                          <div class="clearfix"></div>
                          <div class="col-md-6 col-sm-6 search-col-padding">
                            <label>Package Type(Optional)</label><br>
                            <select class="selectpicker" name="package_type">
                              <option>Group</option>
                              <option>Family</option>
                              <option>Individual</option>
                              <option>Honeymoon</option>
                            </select>
                          </div>
                          <div class="col-md-6 col-sm-6 search-col-padding">
                            <label>Budget(Optional)</label><br>
                            <select class="selectpicker" name="package_budget">
                              <option>500</option>
                              <option>1000</option>
                              <option>1000+</option>
                            </select>
                          </div>
                          <div class="clearfix"></div>
                          <div class="col-md-12 search-col-padding">
                            <button type="submit" class="search-button btn transition-effect">Search Packages</button>
                          </div>
                          <div class="clearfix"></div>
                        </form>
                      </div>
                      <div class="offer-box col-md-4">
                        <div class="item">
                          <img src="assets/images/tour1.jpg" alt="cruise">
                          <h4>Sky High Dubai</h4>
                          <h5>Starting From $399/Person</h5>
                          <a href="#">KNOW MORE</a>
                        </div>
                      </div>
                      <div class="clearfix"></div>
                    </div>
                    <!-- END: HOLIDAYS -->
                    
                    <!-- START: CAR SEARCH -->
                    <div role="tabpanel" class="tab-pane" id="taxi">
                      <div class="col-md-8">
                        <form >
                          <div class="col-md-12 product-search-title">Search Perfect Car</div>
                          <div class="col-md-6 col-sm-6 search-col-padding">
                            <label>Pick Up Location</label>
                            <div class="input-group">
                              <input type="text" name="departure-city" class="form-control" required placeholder="E.g. New York">
                              <span class="input-group-addon"><i class="fa fa-map-marker fa-fw"></i></span>
                            </div>
                          </div>
                          <div class="col-md-6 col-sm-6 search-col-padding">
                            <label>Drop Off Location</label>
                            <div class="input-group">
                              <input type="text" name="destination-city" class="form-control" required placeholder="E.g. New York">
                              <span class="input-group-addon"><i class="fa fa-map-marker fa-fw"></i></span>
                            </div>
                          </div>
                          <div class="clearfix"></div>
                          <div class="col-md-6 col-sm-6 search-col-padding">
                            <label>Pick Up Date</label>
                            <div class="input-group">
                              <input type="text" id="car_start" class="form-control" placeholder="MM/DD/YYYY">
                              <span class="input-group-addon"><i class="fa fa-calendar fa-fw"></i></span>
                            </div>
                          </div>
                          <div class="col-md-6 col-sm-6 search-col-padding">
                            <label>Drop Off Date</label>
                            <div class="input-group">
                              <input type="text" id="car_end" class="form-control" placeholder="MM/DD/YYYY">
                              <span class="input-group-addon"><i class="fa fa-calendar fa-fw"></i></span>
                            </div>
                          </div>
                          <div class="clearfix"></div>
                          <div class="col-md-6 col-sm-6 search-col-padding">
                            <label>Car Brnad(Optional)</label><br>
                            <select class="selectpicker" name="brand">
                              <option>BMW</option>
                              <option>Audi</option>
                              <option>Mercedes</option>
                              <option>Suzuki</option>
                              <option>Honda</option>
                              <option>Hyundai</option>
                              <option>Toyota</option>
                            </select>
                          </div>
                          <div class="col-md-6 col-sm-6 search-col-padding">
                            <label>Car Type(Optional)</label><br>
                            <select class="selectpicker" name="car_type">
                              <option>Limo</option>
                              <option>Sedan</option>
                            </select>
                          </div>
                          <div class="clearfix"></div>
                          <div class="col-md-12 search-col-padding">
                            <button type="submit" class="search-button btn transition-effect">Search Cars</button>
                          </div>
                          <div class="clearfix"></div>
                        </form>
                      </div>
                      <div class="offer-box col-md-4">
                        <div class="item">
                          <img src="assets/images/car11.jpg" alt="cruise">
                          <h4>BMW</h4>
                          <h5>Starting From $399/Day</h5>
                          <a href="#">KNOW MORE</a>
                        </div>
                      </div>
                      <div class="clearfix"></div>
                    </div>
                    <!-- END: CAR SEARCH -->
                    
                    <!-- START: CRUISE SEARCH -->
                    <div role="tabpanel" class="tab-pane" id="cruise">
                      <div class="col-md-8">
                        <form >
                          <div class="col-md-12 product-search-title">Cruise Holidays</div>
                          <div class="col-md-6 col-sm-6 search-col-padding">
                            <label>From</label>
                            <div class="input-group">
                              <input type="text" name="pack-departure-city" class="form-control" required placeholder="E.g. New York">
                              <span class="input-group-addon"><i class="fa fa-map-marker fa-fw"></i></span>
                            </div>
                          </div>
                          <div class="col-md-6 col-sm-6 search-col-padding">
                            <label>I Want To Go</label>
                            <div class="input-group">
                              <input type="text" name="pack-destination-city" class="form-control" required placeholder="E.g. New York">
                              <span class="input-group-addon"><i class="fa fa-map-marker fa-fw"></i></span>
                            </div>
                          </div>
                          <div class="clearfix"></div>
                          <div class="col-md-6 col-sm-6 search-col-padding">
                            <label>Starting From</label>
                            <div class="input-group">
                              <input type="text" id="cruise_start" class="form-control" placeholder="DD/MM/YYYY">
                              <span class="input-group-addon"><i class="fa fa-calendar fa-fw"></i></span>
                            </div>
                          </div>
                          <div class="col-md-6 col-sm-6 search-col-padding">
                            <label>Duration(Optional)</label><br>
                            <select class="selectpicker" name="holiday_duration">
                              <option>3 Days</option>
                              <option>5 Days</option>
                              <option>1 Week</option>
                              <option>2 Weeks</option>
                              <option>1 Month</option>
                              <option>1+ Month</option>
                            </select>
                          </div>
                          <div class="clearfix"></div>
                          <div class="col-md-6 col-sm-6 search-col-padding">
                            <label>Package Type(Optional)</label><br>
                            <select class="selectpicker" name="package_type">
                              <option>Group</option>
                              <option>Family</option>
                              <option>Individual</option>
                              <option>Honeymoon</option>
                            </select>
                          </div>
                          <div class="col-md-6 col-sm-6 search-col-padding">
                            <label>Budget(Optional)</label><br>
                            <select class="selectpicker" name="package_budget">
                              <option>500</option>
                              <option>1000</option>
                              <option>1000+</option>
                            </select>
                          </div>
                          <div class="clearfix"></div>
                          <div class="col-md-12 search-col-padding">
                            <button type="submit" class="search-button btn transition-effect">Search Cruises</button>
                          </div>
                          <div class="clearfix"></div>
                        </form>
                      </div>
                      <div class="offer-box col-md-4">
                        <div class="item">
                          <img src="assets/images/tour1.jpg" alt="cruise">
                          <h4>Sky High Dubai</h4>
                          <h5>Starting From $399/Person</h5>
                          <a href="#">KNOW MORE</a>
                        </div>
                      </div>
                      <div class="clearfix"></div>
                    </div>
                    <!-- END: CRUISE SEARCH -->		
                </div>
                <!-- END: TAB PANE -->
              </div>
            </div>
            <div class="clearfix"></div>
          </div>
        </div>
      </div>
      <!-- END: SEARCH SECTION -->
      
      <!-- BEGIN: HOW IT WORK -->
      <section id="how-it-work">
          <div class="row work-row">
            <div class="container">
              <div class="section-title text-center">
                <h2>HOW IT WORKS?</h2>
                <h4>SEARCH - SELECT - BOOK</h4>
                <div class="space"></div>
                <p>
                  Lorem Ipsum is simply dummy text. Lorem Ipsum is simply dummy text of the printing and typesetting industry.<br>
                  Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                </p>
              </div>
              <div class="work-step">
                <div class="col-md-4 col-sm-4 first-step text-center">
                  <i class="fa fa-search"></i>
                  <h5>SEARCH</h5>
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                </div>
                <div class="col-md-4 col-sm-4 second-step text-center">
                  <i class="fa fa-heart-o"></i>
                  <h5>SELECT</h5>
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                </div>
                <div class="col-md-4 col-sm-4 third-step text-center">
                  <i class="fa fa-shopping-cart"></i>
                  <h5>BOOK</h5>
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                </div>
              </div>
            </div>
          </div>
      </section>
      <!--END: HOW IT WORK -->
      
      <!-- START: PRODUCT SECTION-->
      <section class="hotel-product home-product">
        <!-- START: PRODUCT ROW 1 -->
        <div class="row light-row">
            <div class="col-md-6 clear-padding wow slideInLeft">
              <div class="product-wrapper">
                <div class="col-md-6 col-sm-6 home-product-padding tooltip-right">
                  <h4>Romantic Paris</h4>
                  <h5><i class="fa fa-map-marker"></i> France</h5>
                  <p>Lorem Ipsum is simply dummy text. Lorem Ipsum is simply dummy text of the printing.</p>
                  <div class="rating-box">
                    <div class="pull-left">
                      <img src="assets/images/tripadvisor.png" alt="cruise"><span>4.0/5</span>
                    </div>
                    <div class="pull-right">
                      <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i><span>4.5/5</span>
                    </div>
                  </div>
                  <div class="clearfix"></div>
                  <div class="pricing-info">
                    <div class="pull-left">
                      <span>$999/Person</span> 
                    </div>
                    <div class="pull-right">
                      <a href="#" class="wow fadeIn">BOOK NOW</a>
                    </div>
                  </div>
                  <div class="clearfix"></div>
                </div>
                <div class="col-md-6 col-sm-6 clear-padding image-sm text-center">
                  <img src="assets/images/home2.jpg" alt="cruise">
                  <div class="detail-link-wrapper">
                    <div class="detail-link">
                      <a href="#"><i class="fa fa-search"></i></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="clearfix"></div>
              <div class="product-wrapper">
                <div class="col-md-6 col-sm-6 clear-padding image-sm text-center">
                  <img src="assets/images/tour1.jpg" alt="cruise">
                  <div class="detail-link-wrapper">
                    <div class="detail-link">
                      <a href="#"><i class="fa fa-search"></i></a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-sm-6 home-product-padding tooltip-left">
                  <h4>Blue Beach</h4>
                  <h5><i class="fa fa-map-marker"></i> Dubai</h5>
                  <p>Lorem Ipsum is simply dummy text. Lorem Ipsum is simply dummy text of the printing.</p>
                  <div class="rating-box">
                    <div class="pull-left">
                      <img src="assets/images/tripadvisor.png" alt="cruise"><span>4.0/5</span>
                    </div>
                    <div class="pull-right">
                      <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i><span>4.5/5</span>
                    </div>
                  </div>
                  <div class="clearfix"></div>
                  <div class="pricing-info">
                    <div class="pull-left">
                      <span>$899/Person</span> 
                    </div>
                    <div class="pull-right">
                      <a href="#" class="wow fadeIn">BOOK NOW</a>
                    </div>
                  </div>
                  <div class="clearfix"></div>
                </div>
              </div>
            </div>
            <div class="clearfix visible-sm-block"></div>
            <div class="col-md-6 clear-padding image-lg wow slideInRight">
              <img src="assets/images/home.jpg" alt="cruise">
              <div class="overlay">
                <div class="product-detail text-center">
                  <h3>Africa Safari</h3>
                  <h5><i class="fa fa-map-marker"></i> KENYA</h5>
                  <p>Lorem Ipsum is simply dummy text. Lorem Ipsum is simply dummy text of the printing.</p>
                  <div class="rating-box">
                    <div class="pull-left">
                      <img src="assets/images/tripadvisor.png" alt="cruise"><span>4.0/5</span>
                    </div>
                    <div class="pull-right">
                      <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i><span>4.5/5</span>
                    </div>
                  </div>
                  <div class="clearfix"></div>
                  <div class="pricing-info">
                    <div class="pull-left">
                      <span>$499/Person</span> 
                    </div>
                    <div class="pull-right">
                      <a href="#" class="wow fadeIn">BOOK NOW</a>
                    </div>
                  </div>
                  <div class="clearfix"></div>
                </div>
              </div>
            </div>
        </div>
        <!-- END: PRODUCT ROW 1 -->
      </section>
      <!-- END: PRODUCT SECTION -->
      
      <!-- BEGIN: TOP DESTINATION SECTION -->
      <section id="home-top-destination">
        <div class="row image-background">
          <div class="td-overlay">
            <div class="container">
              <div class="light-section-title text-center">
                <h2>TOP DESTINATION</h2>
                <h4>EXPLORE</h4>
                <div class="space"></div>
                <p>
                  Lorem Ipsum is simply dummy text. Lorem Ipsum is simply dummy text of the printing and typesetting industry.<br>
                  Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                </p>
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
      <section id="recent-blog">
        <div class="row top-offer">
          <div class="container">
            <div class="section-title text-center">
              <h2>RECENT BLOG POSTS</h2>
              <h4>NEWS</h4>
            </div>
            <div class="owl-carousel" id="post-list">
              <div class="room-grid-view wow slideInUp" data-wow-delay="0.1s">
                <img src="assets/images/offer1.jpg" alt="cruise">
                <div class="room-info">
                  <div class="post-title">
                    <h5>POST TITLE GOES HERE</h5>
                    <p><i class="fa fa-calendar"></i> Jul 15, 2015</p>
                  </div>
                  <div class="post-desc">
                    <p>Lorem Ipsum is simply dummy text. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                  </div>
                  <div class="room-book">
                    <div class="col-md-8 col-sm-6 col-xs-6 clear-padding post-alt">
                      <h5><i class="fa fa-comments"></i> 2 <i class="fa fa-share-alt"></i> 20 </h5>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-6 clear-padding">
                      <a href="#" class="text-center">MORE</a> 
                    </div>
                  </div>
                  <div class="clearfix"></div>
                </div>
              </div>
              <div class="room-grid-view wow slideInUp" data-wow-delay="0.2s">
                <img src="assets/images/offer2.jpg" alt="cruise">
                <div class="room-info">
                  <div class="post-title">
                    <h5>POST TITLE GOES HERE</h5>
                    <p><i class="fa fa-calendar"></i> Jul 15, 2015</p>
                  </div>
                  <div class="post-desc">
                    <p>Lorem Ipsum is simply dummy text. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                  </div>
                  <div class="room-book">
                    <div class="col-md-8 col-sm-6 col-xs-6 clear-padding post-alt">
                      <h5><i class="fa fa-comments"></i> 2 <i class="fa fa-share-alt"></i> 20 </h5>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-6 clear-padding">
                      <a href="#" class="text-center">MORE</a> 
                    </div>
                  </div>
                  <div class="clearfix"></div>
                </div>
              </div>
              <div class="room-grid-view wow slideInUp" data-wow-delay="0.3s">
                <img src="assets/images/offer3.jpg" alt="cruise">
                <div class="room-info">
                  <div class="post-title">
                    <h5>POST TITLE GOES HERE</h5>
                    <p><i class="fa fa-calendar"></i> Jul 15, 2015</p>
                  </div>
                  <div class="post-desc">
                    <p>Lorem Ipsum is simply dummy text. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                  </div>
                  <div class="room-book">
                    <div class="col-md-8 col-sm-6 col-xs-6 clear-padding post-alt">
                      <h5><i class="fa fa-comments"></i> 2 <i class="fa fa-share-alt"></i> 20 </h5>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-6 clear-padding">
                      <a href="#" class="text-center">MORE</a> 
                    </div>
                  </div>
                  <div class="clearfix"></div>
                </div>
              </div>
              <div class="room-grid-view wow slideInUp" data-wow-delay="0.4s">
                <img src="assets/images/offer4.jpg" alt="cruise">
                <div class="room-info">
                  <div class="post-title">
                    <h5>POST TITLE GOES HERE</h5>
                    <p><i class="fa fa-calendar"></i> Jul 15, 2015</p>
                  </div>
                  <div class="post-desc">
                    <p>Lorem Ipsum is simply dummy text. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                  </div>
                  <div class="room-book">
                    <div class="col-md-8 col-sm-6 col-xs-6 clear-padding post-alt">
                      <h5><i class="fa fa-comments"></i> 2 <i class="fa fa-share-alt"></i> 20 </h5>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-6 clear-padding">
                      <a href="#" class="text-center">MORE</a> 
                    </div>
                  </div>
                  <div class="clearfix"></div>
                </div>
              </div>
              <div class="room-grid-view wow slideInUp" data-wow-delay="0.5s">
                <img src="assets/images/offer3.jpg" alt="cruise">
                <div class="room-info">
                  <div class="post-title">
                    <h5>POST TITLE GOES HERE</h5>
                    <p><i class="fa fa-calendar"></i> Jul 15, 2015</p>
                  </div>
                  <div class="post-desc">
                    <p>Lorem Ipsum is simply dummy text. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                  </div>
                  <div class="room-book">
                    <div class="col-md-8 col-sm-6 col-xs-6 clear-padding post-alt">
                      <h5><i class="fa fa-comments"></i> 2 <i class="fa fa-share-alt"></i> 20 </h5>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-6 clear-padding">
                      <a href="#" class="text-center">MORE</a> 
                    </div>
                  </div>
                  <div class="clearfix"></div>
                </div>
              </div>
              <div class="room-grid-view wow slideInUp" data-wow-delay="0.6s">
                <img src="assets/images/offer2.jpg" alt="cruise">
                <div class="room-info">
                  <div class="post-title">
                    <h5>POST TITLE GOES HERE</h5>
                    <p><i class="fa fa-calendar"></i> Jul 15, 2015</p>
                  </div>
                  <div class="post-desc">
                    <p>Lorem Ipsum is simply dummy text. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                  </div>
                  <div class="room-book">
                    <div class="col-md-8 col-sm-6 col-xs-6 clear-padding post-alt">
                      <h5><i class="fa fa-comments"></i> 2 <i class="fa fa-share-alt"></i> 20 </h5>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-6 clear-padding">
                      <a href="#" class="text-center">MORE</a> 
                    </div>
                  </div>
                  <div class="clearfix"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- END: RECENT BLOG POST -->
      
      <!-- START: WHY CHOOSE US SECTION -->
      <section id="why-choose-us">
        <div class="row choose-us-row">
          <div class="container clear-padding">
            <div class="light-section-title text-center">
              <h2>WHY CHOOSE US?</h2>
              <h4>REASONS TO TRUST US</h4>
              <div class="space"></div>
              <p>
                Lorem Ipsum is simply dummy text. Lorem Ipsum is simply dummy text of the printing and typesetting industry.<br>
                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
              </p>
            </div>
            <div class="col-md-4 col-sm-4 wow slideInLeft">
              <div class="choose-us-item text-center">
                <div class="choose-icon"><i class="fa fa-suitcase"></i></div>
                <h4>Handpicked Tour</h4>
                <p>Lorem Ipsum is simply dummy text. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                <a href="#">KNOW MORE</a>
              </div>
            </div>
            <div class="col-md-4 col-sm-4 wow slideInUp">
              <div class="choose-us-item text-center">
                <div class="choose-icon"><i class="fa fa-phone"></i></div>
                <h4>Dedicated Support</h4>
                <p>Lorem Ipsum is simply dummy text. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                <a href="#">KNOW MORE</a>
              </div>
            </div>
            <div class="col-md-4 col-sm-4 wow slideInRight">
              <div class="choose-us-item text-center">
                <div class="choose-icon"><i class="fa fa-smile-o"></i></div>
                <h4>Lowest Price</h4>
                <p>Lorem Ipsum is simply dummy text. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                <a href="#">KNOW MORE</a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- END: WHY CHOOSE US SECTION -->
      
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
              <ul class="nav nav-tabs" role="tablist" id="hotDeal">
                <li role="presentation" class="active text-center">
                  <a href="#tab1" aria-controls="tab1" role="tab" data-toggle="tab">
                    <i class="fa fa-bed"></i> 
                    <span>HOTELS</SPAN>
                  </a>
                </li>
                <li role="presentation" class="text-center">
                  <a href="#tab2" aria-controls="tab2" role="tab" data-toggle="tab">
                    <i class="fa fa-suitcase"></i> 
                    <span>HOLIDAYS</SPAN>
                  </a>
                </li>
                <li role="presentation" class="text-center">
                  <a href="#tab3" aria-controls="tab3" role="tab" data-toggle="tab">
                    <i class="fa fa-plane"></i> 
                    <span>FLIGHTS</SPAN>
                  </a>
                </li>
                <li role="presentation" class="text-center">
                  <a href="#tab4" aria-controls="tab4" role="tab" data-toggle="tab">
                    <i class="fa fa-taxi"></i> 
                    <span>CARS</SPAN>
                  </a>
                </li>
                <li role="presentation" class="text-center">
                  <a href="#tab5" aria-controls="tab5" role="tab" data-toggle="tab">
                    <i class="fa fa-bed"></i> 
                    <span>HOTEL+FLIGHTS</SPAN>
                  </a>
                </li>
              </ul>
              <!-- END: CATEGORY TAB -->
              <div class="clearfix"></div>
              <!-- BEGIN: TAB PANELS -->
              <div class="tab-content">
                <!-- BEGIN: FLIGHT SEARCH -->
                <div role="tabpanel" class="tab-pane active fade in" id="tab1">
                  <div class="col-md-6 hot-deal-list wow slideInLeft">
                    <div class="item">
                      <div class="col-xs-3">
                        <img src="assets/images/offer1.jpg" alt="Cruise">
                      </div>
                      <div class="col-md-7 col-xs-6">
                        <h5>Hotel Grand Lilly</h5>
                        <p class="location"><i class="fa fa-map-marker"></i> New York, USA</p>
                        <p class="text-sm">Lorem Ipsum is simply dummy text. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                      </div>
                      <div class="col-md-2 col-xs-3">
                        <h4>$499</h4>
                        <h6>Per Night</h6>
                        <a href="#">BOOK</a>
                      </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="item">
                      <div class="col-xs-3">
                        <img src="assets/images/offer2.jpg" alt="Cruise">
                      </div>
                      <div class="col-md-7 col-xs-6">
                        <h5>Royal Resort</h5>
                        <p class="location"><i class="fa fa-map-marker"></i> New York, USA</p>
                        <p class="text-sm">Lorem Ipsum is simply dummy text. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                      </div>
                      <div class="col-md-2 col-xs-3">
                        <h4>$399</h4>
                        <h6>Per Night</h6>
                        <a href="#">BOOK</a>
                      </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="item">
                      <div class="col-xs-3">
                        <img src="assets/images/offer3.jpg" alt="Cruise">
                      </div>
                      <div class="col-md-7 col-xs-6">
                        <h5>Hotel Grand Lilly</h5>
                        <p class="location"><i class="fa fa-map-marker"></i> New York, USA</p>
                        <p class="text-sm">Lorem Ipsum is simply dummy text. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                      </div>
                      <div class="col-md-2 col-xs-3">
                        <h4>$499</h4>
                        <h6>Per Night</h6>
                        <a href="#">BOOK</a>
                      </div>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                  <div class="col-md-6 hot-deal-grid wow slideInRight">
                    <div class="col-sm-6 item">
                      <div class="wrapper">
                        <img src="assets/images/tour1.jpg" alt="Cruise">
                        <h5>Paris Starting From $49/Night</h5>
                        <a href="#">DETAILS</a>
                      </div>
                    </div>
                    <div class="col-sm-6 item">
                      <div class="wrapper">
                        <img src="assets/images/tour1.jpg" alt="Cruise">
                        <h5>Bangkok Starting From $69/Night</h5>
                        <a href="#">DETAILS</a>
                      </div>
                    </div>
                    <div class="col-sm-6 item">
                      <div class="wrapper">
                        <img src="assets/images/tour1.jpg" alt="Cruise">
                        <h5>Dubai Starting From $99/Night</h5>
                        <a href="#">DETAILS</a>
                      </div>
                    </div>
                    <div class="col-sm-6 item">
                      <div class="wrapper">
                        <img src="assets/images/tour1.jpg" alt="Cruise">
                        <h5>Italy Starting From $59/Night</h5>
                        <a href="#">DETAILS</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="tab2">
                  <div class="col-md-6 hot-deal-list">
                    <div class="item">
                      <div class="col-xs-3">
                        <img src="assets/images/offer3.jpg" alt="Cruise">
                      </div>
                      <div class="col-md-7 col-xs-6">
                        <h5>Hotel Grand Lilly</h5>
                        <p class="location"><i class="fa fa-map-marker"></i> New York, USA</p>
                        <p class="text-sm">Lorem Ipsum is simply dummy text. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                      </div>
                      <div class="col-md-2 col-xs-3">
                        <h4>$499</h4>
                        <h6>Per Night</h6>
                        <a href="#">BOOK</a>
                      </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="item">
                      <div class="col-xs-3">
                        <img src="assets/images/offer2.jpg" alt="Cruise">
                      </div>
                      <div class="col-md-7 col-xs-6">
                        <h5>Royal Resort</h5>
                        <p class="location"><i class="fa fa-map-marker"></i> New York, USA</p>
                        <p class="text-sm">Lorem Ipsum is simply dummy text. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                      </div>
                      <div class="col-md-2 col-xs-3">
                        <h4>$399</h4>
                        <h6>Per Night</h6>
                        <a href="#">BOOK</a>
                      </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="item">
                      <div class="col-xs-3">
                        <img src="assets/images/offer1.jpg" alt="Cruise">
                      </div>
                      <div class="col-md-7 col-xs-6">
                        <h5>Hotel Grand Lilly</h5>
                        <p class="location"><i class="fa fa-map-marker"></i> New York, USA</p>
                        <p class="text-sm">Lorem Ipsum is simply dummy text. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                      </div>
                      <div class="col-md-2 col-xs-3">
                        <h4>$499</h4>
                        <h6>Per Night</h6>
                        <a href="#">BOOK</a>
                      </div>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                  <div class="col-md-6 hot-deal-grid">
                    <div class="col-sm-6 item">
                      <div class="wrapper">
                        <img src="assets/images/tour1.jpg" alt="Cruise">
                        <h5>Paris Starting From $49/Night</h5>
                        <a href="#">DETAILS</a>
                      </div>
                    </div>
                    <div class="col-sm-6 item">
                      <div class="wrapper">
                        <img src="assets/images/tour1.jpg" alt="Cruise">
                        <h5>Bangkok Starting From $69/Night</h5>
                        <a href="#">DETAILS</a>
                      </div>
                    </div>
                    <div class="col-sm-6 item">
                      <div class="wrapper">
                        <img src="assets/images/tour1.jpg" alt="Cruise">
                        <h5>Dubai Starting From $99/Night</h5>
                        <a href="#">DETAILS</a>
                      </div>
                    </div>
                    <div class="col-sm-6 item">
                      <div class="wrapper">
                        <img src="assets/images/tour1.jpg" alt="Cruise">
                        <h5>Italy Starting From $59/Night</h5>
                        <a href="#">DETAILS</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div role="tabpanel" class="tab-pane" id="tab3">
                  Lorem Lpsum 3
                </div>
                <div role="tabpanel" class="tab-pane" id="tab4">
                  Lorem Lpsum 4
                </div>
                <div role="tabpanel" class="tab-pane" id="tab5">
                  Lorem Lpsum 5
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- END: HOT DEALS -->
      
      <!-- START: FOOTER -->
      <section id="footer">
        <footer>
          <div class="row main-footer-sub">
            <div class="container clear-padding">
              <div class="col-md-7 col-sm-7">
                <form >
                  <label>SUBSCRIBE TO OUR NEWSLETTER</label>
                  <div class="clearfix"></div>
                  <div class="col-md-9 col-sm-8 col-xs-6 clear-padding">
                    <input class="form-control" type="email" required placeholder="Enter Your Email" name="email">
                  </div>
                  <div class="col-md-3 col-sm-4 col-xs-6 clear-padding">
                    <button type="submit"><i class="fa fa-paper-plane"></i>SUBSCRIBE</button>
                  </div>
                </form>
              </div>
              <div class="col-md-5 col-sm-5">
                <div class="social-media pull-right">
                  <ul>
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="main-footer row">
            <div class="container clear-padding">
              <div class="col-md-3 col-sm-6 about-box">
                <h3>CRUISE</h3>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                <a href="#">READ MORE</a>
              </div>
              <div class="col-md-3 col-sm-6 links">
                <h4>Popular Tours</h4>
                <ul>
                  <li><a href="#">Romantic France</a></li>
                  <li><a href="#">Wonderful Lodnon</a></li>
                  <li><a href="#">Awesome Amsterdam</a></li>
                  <li><a href="#">Wild Africa</a></li>
                  <li><a href="#">Beach Goa</a></li>
                  <li><a href="#">Casino Los Vages</a></li>
                  <li><a href="#">Romantic France</a></li>
                </ul>
              </div>
              <div class="clearfix visible-sm-block"></div>
              <div class="col-md-3 col-sm-6 links">
                <h4>Our Services</h4>
                <ul>
                  <li><a href="#">Domestic Flights</a></li>
                  <li><a href="#">International Flights</a></li>
                  <li><a href="#">Tours & Holidays</a></li>
                  <li><a href="#">Domestic Hotels</a></li>
                  <li><a href="#">International Hotels</a></li>
                  <li><a href="#">Cruise Holidays</a></li>
                  <li><a href="#">Car Rental</a></li>
                </ul>
              </div>
              <div class="col-md-3 col-sm-6 contact-box">
                <h4>Contact Us</h4>
                <p><i class="fa fa-home"></i> Street #156 Burbank, Studio City Hollywood, California USA</p>
                <p><i class="fa fa-phone"></i> +91 1234567890</p>
                <p><i class="fa fa-envelope-o"></i> support@domain.com</p>
              </div>
              <div class="clearfix"></div>
              <div class="col-md-12 text-center we-accept">
                <h4>We Accept</h4>
                <ul>
                  <li><img src="assets/images/card/card.jpg" alt="cruise"></li>
                  <li><img src="assets/images/card/card.jpg" alt="cruise"></li>
                  <li><img src="assets/images/card/card.jpg" alt="cruise"></li>
                  <li><img src="assets/images/card/card.jpg" alt="cruise"></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="main-footer-nav row">
            <div class="container clear-padding">
              <div class="col-md-6 col-sm-6">
                <p>Copyright &copy; 2015 LimpidThemes. All Rights Reserved.</p>
              </div>
              <div class="col-md-6 col-sm-6">
                <ul>
                  <li><a href="#">FLIGHTS</a></li>
                  <li><a href="#">TOURS</a></li>
                  <li><a href="#">CARS</a></li>
                  <li><a href="#">HOTELS</a></li>
                  <li><a href="#">BLOG</a></li>
                </ul>
              </div>
              <div class="go-up">
                <a href="#"><i class="fa fa-arrow-up"></i></a>
              </div>
            </div>
          </div>
        </footer>
      </section>
      <!-- END: FOOTER -->
    </div>
    <!-- END: SITE-WRAPPER -->

    <!-- Load Scripts -->
    <script src="{{ asset("/assets/js/respond.js") }}"></script>
    <script src="{{ asset("/assets/js/jquery.js") }}"></script>
    <script src="{{ asset("/assets/plugins/owl.carousel.min.js") }}"></script>
    <script src="{{ asset("/assets/js/bootstrap.min.js") }}"></script>
    <script src="{{ asset("/assets/js/jquery-ui.min.js") }}"></script>
    <script src="{{ asset("/assets/js/bootstrap-select.min.js") }}"></script>
    <script src="{{ asset("/assets/plugins/wow.min.js") }}"></script>
    <script src="{{ asset("/assets/plugins/supersized.3.1.3.min.js") }}"></script>
    <script src="{{ asset("/assets/js/js.js") }}"></script>
    <script type="text/javascript">  
          
          jQuery(function($){
            "use strict";
            $.supersized({
            
              //Functionality
              slideshow               :   1,		//Slideshow on/off
              autoplay				:	1,		//Slideshow starts playing automatically
              start_slide             :   1,		//Start slide (0 is random)
              random					: 	0,		//Randomize slide order (Ignores start slide)
              slide_interval          :   10000,	//Length between transitions
              transition              :   1, 		//0-None, 1-Fade, 2-Slide Top, 3-Slide Right, 4-Slide Bottom, 5-Slide Left, 6-Carousel Right, 7-Carousel Left
              transition_speed		:	500,	//Speed of transition
              new_window				:	1,		//Image links open in new window/tab
              pause_hover             :   0,		//Pause slideshow on hover
              keyboard_nav            :   0,		//Keyboard navigation on/off
              performance				:	1,		//0-Normal, 1-Hybrid speed/quality, 2-Optimizes image quality, 3-Optimizes transition speed // (Only works for Firefox/IE, not Webkit)
              image_protect			:	1,		//Disables image dragging and right click with Javascript

              //Size & Position
              min_width		        :   0,		//Min width allowed (in pixels)
              min_height		        :   0,		//Min height allowed (in pixels)
              vertical_center         :   1,		//Vertically center background
              horizontal_center       :   1,		//Horizontally center background
              fit_portrait         	:   1,		//Portrait images will not exceed browser height
              fit_landscape			:   0,		//Landscape images will not exceed browser width
              
              //Components
              navigation              :   1,		//Slideshow controls on/off
              thumbnail_navigation    :   1,		//Thumbnail navigation
              slide_counter           :   1,		//Display slide numbers
              slide_captions          :   1,		//Slide caption (Pull from "title" in slides array)
              slides 					:  	[		//Slideshow Images
                                {image : '{{ asset('assets/images/slide.jpg') }}', title : 'Slide 1'},  
                                {image : '{{ asset('assets/images/slide2.jpg') }}', title : 'Slide 2'},  
                                {image : '{{ asset('assets/images/slide.jpg') }}', title : 'Slide 3'},  
                            ]
                            
            }); 
            });
            
    </script>
  </body>
</html>