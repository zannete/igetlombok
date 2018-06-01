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
@endsection

@section("additionalJS")
@endsection