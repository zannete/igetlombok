<div class="col-md-6">
  <div class="user-personal-info">
    <h4>Personal Information</h4>
    <div class="user-info-body">
      {!! Form::open(["action" => "DashboardProfileController@update", "method" => "PUT"]) !!}
        <div class="col-md-12 col-sm-12">
          {{ Form::label("fullName", "Full Name") }}
          {{ Form::text("fullName", $user->fullName, ["class" => "form-control", "placeholder" => "Full Name", "required" => true]) }}
        </div>
        <div class="clearfix"></div>
        <div class="col-md-12">
          {{ Form::label("email", "Email") }}
          {{ Form::email("email", $user->email, ["class" => "form-control", "placeholder" => "yourname@example.com", "required" => true]) }}
        </div>
        <div class="col-md-12">
          {{ Form::label("phoneNumber", "Phone Number") }}
          {{ Form::text("phoneNumber", $user->phoneNumber, ["class" => "form-control", "placeholder" => "+62812340000000", "required" => true]) }}
        </div>
        <div class="clearfix"></div>
        <div class="col-md-6 col-sm-6 col-xs-6 text-center">
          <button type="submit" style="background: #00ADEF;">SAVE CHANGES</button>
        </div>
        <div class="col-md-6 col-sm-6 col-xs-6 text-center">
          <a href="/dashboard">CANCEL</a>
        </div>
      {!! Form::close() !!}
    </div>
  </div>
</div>
<div class="col-md-6">
  <div class="user-change-password">
    <h4>Change Password</h4>
    <div class="change-password-body">
      {!! Form::open(["action" => "DashboardProfileController@changePassword", "method" => "PUT"]) !!}
        <div class="col-md-12">
          {{ Form::label("oldPassword", "Old Password") }}
          {{ Form::password("oldPassword", ["class" => "form-control", "placeholder" => "Old Password"]) }}
        </div>
        <div class="col-md-12">
          {{ Form::label("newPassword", "New Password") }}
          {{ Form::password("newPassword", ["class" => "form-control", "placeholder" => "New Password"]) }}
        </div>
        <div class="col-md-12">
          {{ Form::label("newPassword_confirmation", "Confirm Password") }}
          {{ Form::password("newPassword_confirmation", ["class" => "form-control", "placeholder" => "Confirm Password"]) }}
        </div>
        <div class="col-md-12 text-center">
          <button type="submit" style="background: #00ADEF;">SAVE CHANGES</button>
        </div>
      {!! Form::close() !!}
    </div>
  </div>
</div>