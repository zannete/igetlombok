@extends("layouts.app")

@section("content")
  <section style="background: url('{{ asset("/assets/images/bg-1.jpg") }}'); background-attachment: fixed">
    @include("components.topBar")
    <div class="clearfix"></div>
    @include("components.menuBar")
    
    <div class="row">
      <div class="container clear-padding">
        <div class="col-md-12 single-search">
          <h2 class="text-center">
            BOOK YOUR HOLIDAY NOW <br/>
            <small style="color: #fff">Don't waste your time searching, do it</small>
          </h2>
        </div>
      </div>
    </div>
  </section>

  <section class="container" style="padding-top: 20px;">
    <div class="row">
      <div class="col-md-3 clear-padding">
        @include("components.searchFilter", ["checkOptions" => $packages, "checkOptionsHeader" => "Tours", "checkOptionsHeaderIcon" => "fa fa-suitcase"])
      </div>
      <div class="col-md-9 tour-packages">
        @foreach($packages as $package)
          {!! Form::open(["action" => "TourSearchController@store", "method" => "POST", "style" => "padding-left: 0px; padding-right: 0px; padding-bottom: 0px;", "class" => "card tour"]) !!}
            {{ Form::hidden("packageID", $package->id )}}
            <div class="row" style="padding-left: 15px; padding-right: 15px;">
              <div class="col-md-2">
                <img class="img-thumbnail" src="http://via.placeholder.com/110x110" style="border: 1px solid #BBB;"/>
              </div>
              <div class="col-md-10">
                <h3 style="margin-top: 0px;">{{ $package->name }}</h3>
                <p>{{ $package->description }}</p>
              </div>
            </div>
            <div class="row footer">
              <div class="col-md-12 text-right clear-padding">
                <strong style="padding: 15px; font-size: 18px;">IDR {{ number_format( $package->price , 0 , '.' , ',' ) }}/person</strong>
                <button class="btn btn-primary" style="margin-top: 0px; height: 45px;">Book</button>
              </div>
            </div>
          {!! Form::close() !!}
        @endforeach
      </div>
    </div>
  </section>
@endsection

@section("additionalJS")
@endsection