<div class="col-md-12">
    <div class="recent-complaint new-complaint">
      <div class="row">
        <div class="col-md-6">
          <h3>Detail Complaint</h3>
        </div>
        <div class="col-md-6 text-right">
          <a href="/dashboard">Back to Complaint List</a>
        </div>
      </div>
      <div class="col-md-12">
        <div class="card">
          <div class="row">
            <div class="col-md-12 clear-padding">
              @php $border = (count($complaint->responses)>0)?"border-bottom: 1px solid #E6E6E6;": ""; @endphp
              <div class="row" style="{{ $border }} padding-bottom: 15px;">
                <div class="col-md-1 text-center">
                  <img src="http://via.placeholder.com/100x100" class="circular-image"/>
                </div>
                <div class="col-md-11">
                  <span><strong>{{ $user->fullName }}</strong></span> <br/>
                  <span>{{ $complaint->description }} </span>
                </div>
              </div>
              @php $counter = 0 @endphp
              @foreach($complaint->responses as $response)
                @php $border = ($counter+1 < count($complaint->responses))? "border-bottom: 1px solid #E6E6E6;": ""; @endphp
                @php $counter++; @endphp
                @if(isset($response->user_id))
                  <div class="row" style="{{ $border }} padding-bottom: 15px; padding-top: 15px;">
                    <div class="col-md-1 text-center">
                      <img src="http://via.placeholder.com/100x100" class="circular-image"/>
                    </div>
                    <div class="col-md-11">
                      <span><strong>{{ $response->user->fullName }}</strong></span> <br/>
                      <span>{{ $response->content }} </span>
                    </div>
                  </div>
                @else
                  <div class="row" style="{{ $border }} padding-bottom: 15px; padding-top: 15px;">
                    <div class="col-md-11 text-right">
                      <span><strong>{{ $response->admin->fullName }}</strong></span> <br/>
                      <span>{{ $response->content }} </span>
                    </div>
                    <div class="col-md-1 text-center">
                      <img src="http://via.placeholder.com/100x100" class="circular-image"/>
                    </div>
                  </div>
                @endif
              @endforeach
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-12" style="margin-top: 15px;">
        {!! Form::open(["action" => "ComplaintDetailController@store", "method" => "POST", "class" => "card"]) !!}
          <div class="row">
            <div class="col-md-12 clear-padding">
              {{ Form::textarea("response", "", ["class" => "form-control", "placeholder" => "Your response"]) }}
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 text-right clear-padding">
              <button type="submit" class="btn btn-primary">Submit Response</button>
            </div>
          </div>
        {!! Form::close() !!}
      </div>
    </div>
  </div>