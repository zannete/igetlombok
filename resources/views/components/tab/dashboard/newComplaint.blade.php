<div class="col-md-12">
  <div class="recent-complaint new-complaint">
    <div class="row">
      <div class="col-md-6">
        <h3>New Complaint</h3>
      </div>
      <div class="col-md-6 text-right">
        <a href="/dashboard">Back to Complaint List</a>
      </div>
    </div>
    {!! Form::open(["action" => "ComplaintController@store", "method" => "POST", "class" => "row"]) !!}
      <div class="col-md-4">
        <div class="card">
          <div class="row">
            <div class="col-md-12 clear-padding">
              {{ Form::label("product", "Product") }}
              <select class="form-control">
                <option value="">Fast Boats</option>
                <option value="">Tours</option>
              </select>
            </div>
          </div>
          <div class="row" style="margin-top: 15px;">
            <div class="col-md-12 clear-padding">
              {{ Form::label("category", "Category") }}
              <select class="form-control" name="complaintType">
                @foreach($complaintTypes as $type)
                  <option value="{{ $type->id }}">{{ $type->name }}</option>
                @endforeach
              </select>
            </div>
          </div>
          <div class="row" style="margin-top: 15px;">
            <div class="col-md-12 clear-padding">
              {{ Form::label("bookingID", "Booking ID") }}
              {{ Form::text("bookingID", $selectedBookingID, ["class" => "form-control", "placeholder" => "e.g. 12345760"]) }}
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-8">
        <div class="card">
          <div class="row">
            <div class="col-md-12 clear-padding">
              {{ Form::label("subject", "Complaint Subject") }}
              {{ Form::text("subject", "", ["class" => "form-control", "placeholder" => "Complaint Subject"]) }}
            </div>
          </div>
          <div class="row" style="margin-top: 15px;">
            <div class="col-md-12 clear-padding">
              {{ Form::label("description", "Problem Description") }}
              {{ Form::textarea("description", "", ["class" => "form-control", "placeholder" => "Your issue", "rows" => 5]) }}
            </div>
          </div>
          <div class="row" style="margin-top: 15px;">
            <div class="col-md-12 clear-padding text-center">
              <button type="submit" class="btn btn-primary">Submit Complaint</button>
            </div>
          </div>
        </div>
      </div>
    {!! Form::close() !!}
  </div>
</div>