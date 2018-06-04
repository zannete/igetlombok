{{-- Parameters: trip, owner, titles, nationalites  --}}

@php if(!isset($trip)) $trip = null; @endphp
@php if(!isset($owner)) $owner = "FastBoat"; @endphp
@php if(!isset($titles)) $titles = ["Mr", "Mrs", "Ms"]; @endphp
@php if(!isset($nationalites)) $nationalites = []; @endphp

<div class="sidebar-item" style="margin-top: 20px">
  <h4>Travellers Detail</h4>
  @if($owner == "FastBoat")
    <div class="sidebar-body">
      @for($a=0; $a<$trip->adultCount; $a++)
        @php $padding = ($a+1 < $trip->adultCount)?"padding-bottom: 30px": ""; @endphp
        <div class="row" style="{{ $padding }}">
          <div class="col-md-12">
            <label><strong>Adult {{ $a+1 }}</strong></label>
            <p class="text-warning">Name as on ID card/passport/driving license</p>
          </div>
          <div class="col-md-6">
            <label>Title</label>
            <select class="form-control" name="title[]">
              <option>Mr</option>
              <option>Mrs</option>
              <option>Ms</option>
            </select>
          </div>
          <div class="clearfix"></div> <p class="help-block"></p>
          <div class="col-md-6">
            {{ Form::label("personalID", "ID Card/Passport") }}
            {{ Form::text("personalID[]", "", ["class" => "form-control"]) }}
            <p class="help-block"></p>
          </div>
          <div class="col-md-6">
            {{ Form::label("nationality", "Nationality") }}
            <select class="form-control" name="nationality[]">
              @foreach($nationalities as $nationality)
                <option value={{ $nationality->id }}>{{ $nationality->name }}</option>
              @endforeach
            </select>
          </div>
          <div class="col-md-12">
            {{ Form::label("fullName", "Full Name") }}
            {{ Form::text("fullName[]", "", ["class" => "form-control"]) }}
            <p class="help-block"></p>
          </div>
        </div>
      @endfor
      <hr/>
      @for($a=0; $a<$trip->childCount; $a++)
        @php $padding = ($a+1 < $trip->childCount)?"padding-bottom: 30px": ""; @endphp
        <div class="row" style="{{ $padding }}">
          <div class="col-md-12">
            <label><strong>Child {{ $a+1 }}</strong></label>
          </div>
          <div class="col-md-6">
            {{ Form::label("fullName", "Full Name") }}
            {{ Form::text("fullName[]", "", ["class" => "form-control"]) }}
          </div>
          <div class="col-md-6">
            {{ Form::label("nationality", "Nationality") }}
            <select class="form-control" name="nationality[]">
              @foreach($nationalities as $nationality)
                <option value={{ $nationality->id }}>{{ $nationality->name }}</option>
              @endforeach
            </select>
          </div>
        </div>
      @endfor
      <hr/>
      @for($a=0; $a<$trip->infantCount; $a++)
        @php $padding = ($a+1 < $trip->infantCount)?"padding-bottom: 30px": ""; @endphp
        <div class="row" style="{{ $padding }}">
          <div class="col-md-12">
            <label><strong>Infant {{ $a+1 }}</strong></label>
          </div>
          <div class="col-md-6">
            {{ Form::label("fullName", "Full Name") }}
            {{ Form::text("fullName[]", "", ["class" => "form-control"]) }}
          </div>
          <div class="col-md-6">
            {{ Form::label("nationality", "Nationality") }}
            <select class="form-control" name="nationality[]">
              @foreach($nationalities as $nationality)
                <option value={{ $nationality->id }}>{{ $nationality->name }}</option>
              @endforeach
            </select>
          </div>
        </div>
      @endfor
    </div>
  @else
    <div class="sidebar-body">
      @for($a=0; $a<$trip->numberOfTraveller; $a++)
        <div class="row traveller-container">
          <div class="col-md-12">
            <label><strong>Traveller {{ $a + 1 }}</strong></label>
            <p class="text-warning">Name as on ID card/passport/driving license</p>
          </div>
          <div class="col-md-6">
            <label>Title</label>
            <select class="form-control" name="title[]">
              @foreach($titles as $title)
                <option>{{ $title }}</option>
              @endforeach
            </select>
          </div>
          <div class="clearfix"></div><br/>
          <div class="adultContainer">
            <div class="col-md-6">
              {{ Form::label("personalID", "ID Card/Passport") }}
              {{ Form::text("personalID[]", "", ["class" => "form-control"]) }}
              <p class="help-block"></p>
            </div>
            <div class="col-md-6">
              {{ Form::label("nationality[]", "Nationality") }}
              <select class="form-control" name="nationality[]">
                @foreach($nationalites as $nationality)
                  <option value={{ $nationality->id }}>{{ $nationality->name }}</option>
                @endforeach
              </select>
            </div>
            <div class="col-md-12">
              {{ Form::label("fullName", "Full Name") }}
              {{ Form::text("fullName[]", "", ["class" => "form-control"]) }}
            </div>
          </div>
          <div class="nonAdultContainer">
            <div class="col-md-6">
              {{ Form::label("fullName[]", "Full Name") }}
              {{ Form::text("fullName[]", "", ["class" => "form-control"]) }}
            </div>
            <div class="col-md-6">
              {{ Form::label("nationality[]", "Nationality") }}
              <select class="form-control" name="nationality[]">
                @foreach($nationalites as $nationality)
                  <option value={{ $nationality->id }}>{{ $nationality->name }}</option>
                @endforeach
              </select>
            </div>
          </div>
        </div>
        <hr/>
      @endfor
    </div>
  @endif
</div>