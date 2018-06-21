<section id="recent-blog">
  <div class="row top-offer">
    <div class="container">
      <div class="section-title text-center">
        <h2>RECENT BLOG POSTS</h2>
        <h4>NEWS</h4>
      </div>
      <div class="owl-carousel" id="post-list">
        @foreach($posts as $post)
          <div class="room-grid-view wow slideInUp" data-wow-delay="0.1s">
            <img src="assets/images/offer1.jpg" alt="cruise">
            <div class="room-info">
              <div class="post-title">
                <h5>{{ $post->title }}</h5>
                <p><i class="fa fa-calendar"></i> {{ date_format(date_create($post->updated_at), "M d, Y") }}</p>
              </div>
              <div class="post-desc">
                @php $body = (strlen($post->body) > 73) ? substr($post->body,0,70).'...' : $post->body; @endphp
                <p>{{ $body }}</p>
              </div>
              <div class="room-book">
                <div class="col-md-8 col-sm-6 col-xs-6 clear-padding post-alt">
                  {{-- <h5><i class="fa fa-comments"></i> 2 <i class="fa fa-share-alt"></i> 20 </h5> --}}
                </div>
                <div class="col-md-4 col-sm-6 col-xs-6 clear-padding">
                  <a href="/posts/{{ $post->id }}" class="text-center">MORE</a> 
                </div>
              </div>
              <div class="clearfix"></div>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </div>
</section>