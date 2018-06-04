<div class="sidebar-item">
  <h4>Contact Details</h4>
  <div class="sidebar-body">
    <div class="row">
      <div class="col-md-12">
        {{ Form::label("fullName", "Full name") }}
        {{ Form::text("fullName[]", "", ["class" => "form-control"]) }} 
        <p class="help-block">As on ID Card/passport/driving license (without degree or special characters)</p>
      </div>
      <div class="col-md-6">
        {{ Form::label("phoneNumber", "Phone Number") }}
        {{ Form::text("phoneNumber", "", ["class" => "form-control"]) }}
        <p class="help-block">e.g. +62812345678, for Country Code (+62) and Mobile No. 0812345678</p>
      </div>
      <div class="col-md-6">
        {{ Form::label("email", "Email") }}
        {{ Form::text("email", "", ["class" => "form-control"]) }}
        <p class="help-block">e.g. email@example.com</p>
      </div>
    </div>
  </div>
</div>