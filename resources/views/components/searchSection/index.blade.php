<div class="row vertical-search">
  <div class="container clear-padding">
    <div class="search-section">
      <div role="tabpanel">
        <div class="col-md-2 col-sm-2 vertical-tab">
          <!-- BEGIN: CATEGORY TAB -->
          <ul class="nav nav-tabs search-top" role="tablist" id="searchTab">
            <li role="presentation" class="active">
              <a href="#fastboats" aria-controls="fastboats" role="tab" data-toggle="tab">
                <i class="fa fa-ship"></i> 
                <span>FAST BOATS</SPAN>
              </a>
            </li>
            <li role="presentation">
              <a href="#tours" aria-controls="tours" role="tab" data-toggle="tab">
                <i class="fa fa-suitcase"></i> 
                <span>TOURS</span>
              </a>
            </li>
          </ul>
          <!-- END: CATEGORY TAB -->
        </div>
        <div class="col-md-10 col-sm-10 vertical-tab-pannel">
          <!-- BEGIN: TAB PANELS -->
          <div class="tab-content">
            @include("components.searchSection.fastboat")
            @include("components.searchSection.tour")
          </div>
          <!-- END: TAB PANE -->
        </div>
      </div>
      <div class="clearfix"></div>
    </div>
  </div>
</div>