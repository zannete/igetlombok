@extends("layouts.app")

@section("content")
  <section style="background: url('{{ asset("/assets/images/bg-1.jpg") }}'); background-attachment: fixed; min-height: 450px;">
    @include("components.topBar")
    <div class="clearfix"></div>
    @include("components.menuBar")
  </section>

  <section class="container" style="padding: 40px 0px;">
    <div class="row">
      <div class="col-md-12">
        <h2 class="text-uppercase">{{ $post->title }}</h2>
      </div>
      <div class="col-md-12">
        <i class="fa fa-user text-primary"></i> {{ $post->admin->name }} <i class="fa fa-tags text-primary" style="padding-left: 10px;"></i> {{ $post->category->name }}
      </div>
      <div class="col-md-12" style="padding-top: 15px;">
        <p>{!! $post->body !!}</p>
      </div>
    </div>
  </section>

  <section style="margin: 40px 0px;">
    <h2 class="text-uppercase text-center" style="padding: 15px 0px; background-color: #0A3152; color: #FFF"><strong>10 Things About {{ $post->category->name }}</strong></h2>
    <div class="container" style="padding: 40px 0px;">
      @foreach($postRecommendation as $post)
        <div class="col-md-4" style="margin-bottom: 15px;">
          <div style="height: 280px; background: url('http://via.placeholder.com/500x500'); background-position: center center; position: relative;">
            <span class="text-center" style="position: absolute; bottom: 0px; padding: 10px 0px; width: 100%; background-color: rgba(10, 49, 82, 0.5)">{{ $post->title }}</span>
          </div>
        </div>
      @endforeach
    </div>
  </section>
@endsection

@section("additionalJS")
  
@endsection