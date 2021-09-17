<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <!-- Favicon icon -->
  <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('admin/assets/images/favicon.png') }}">
  <title>Userarea | Register</title>
  <!-- Bootstrap Core CSS -->
  <link href="{{ asset('admin/assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <!-- page css -->
  <link href="{{ asset('admin/css/pages/login-register-lock.css') }}" rel="stylesheet">
  <!-- Custom CSS -->
  <link href="{{ asset('admin/css/style.css') }}" rel="stylesheet">
  <link href="{{ asset('admin/css/colors/default-dark.css') }}" id="theme" rel="stylesheet">

  <link rel="stylesheet" href="{{ asset('userarea/build/css/intlTelInput.css') }}">
  <link rel="stylesheet" href="{{ asset('userarea/build/css/demo.css') }}">
</head>

<body>
  <!-- ============================================================== -->
  <!-- Preloader - style you can find in spinners.css -->
  <!-- ============================================================== -->
  <div class="preloader">
    <div class="loader">
      <div class="loader__figure"></div>
      <p class="loader__label">Userarea Loading...</p>
    </div>
  </div>
  <!-- ============================================================== -->
  <!-- Main wrapper - style you can find in pages.scss -->
  <!-- ============================================================== -->
  <section id="wrapper" class="login-register login-sidebar" style="background-image:url({{ asset('admin/assets/images/background/login-register.jpg') }});">
    <div class="login-box card">
      <div class="card-body">
        <form class="form-horizontal form-material" id="loginform" action="{{ route('userarea.register') }}" method="post">
          <a href="#" class="text-center db"><img src="{{ asset('admin/assets/images/logo-icon.png') }}" alt="Home" /><br/><img src="../assets/images/logo-text.png" alt="Home" /></a>
          <h3 class="box-title m-t-40 m-b-0">Register Now</h3><small>Create your account by filling above given form</small>
          <div class="form-group m-t-20">
            <div class="col-xs-12">
              <input class="form-control" type="text" required="" name="first_name" placeholder="First Name">
            </div>
          </div>
          <div class="form-group m-t-20">
            <div class="col-xs-12">
              <input class="form-control" type="text" required="" name="last_name" placeholder="Last Name">
            </div>
          </div>
          <div class="form-group ">
            <div class="col-xs-12">
              <input class="form-control" type="text" required="" placeholder="Email">
            </div>
          </div>
          <input class="form-control" id="phone" name="phone" type="tel">
          <div class="form-group mt-20">
            <div class="col-xs-12">
              <input class="form-control" type="password" required="" placeholder="Password">
            </div>
          </div>
          <div class="form-group">
            <div class="col-xs-12">
              <input class="form-control" name="password_confirmation" type="password" required="" placeholder="Confirm Password">
            </div>
          </div>
          <div class="form-group row">
            <div class="col-md-12">
              <div class="checkbox checkbox-primary p-t-0">
                <input id="checkbox-signup" type="checkbox">
                <label for="checkbox-signup"> I agree to all <a href="#">Terms</a></label>
              </div>
            </div>
          </div>
          <div class="form-group text-center m-t-20">
            <div class="col-xs-12">
              <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Sign Up</button>
            </div>
          </div>
          <div class="form-group m-b-0">
            <div class="col-sm-12 text-center">
              <p>Already have an account? <a href="{{ route('userarea.login') }}" class="text-info m-l-5"><b>Sign In</b></a></p>
            </div>
          </div>
        </form>
        <form class="form-horizontal" id="recoverform" action="index.html">
          <div class="form-group ">
            <div class="col-xs-12">
              <h3>Recover Password</h3>
              <p class="text-muted">Enter your Email and instructions will be sent to you! </p>
            </div>
          </div>
          <div class="form-group ">
            <div class="col-xs-12">
              <input class="form-control" type="text" required="" placeholder="Email">
            </div>
          </div>
          <div class="form-group text-center m-t-20">
            <div class="col-xs-12">
              <button class="btn btn-primary btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Reset</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </section>
  <!-- ============================================================== -->
  <!-- End Wrapper -->
  <!-- ============================================================== -->
  <!-- ============================================================== -->
  <!-- All Jquery -->
  <!-- ============================================================== -->
  <script src="{{ asset('admin/assets/plugins/jquery/jquery.min.js') }}"></script>
  <!-- Bootstrap tether Core JavaScript -->
  <script src="{{ asset('admin/assets/plugins/bootstrap/js/popper.min.js') }}"></script>
  <script src="{{ asset('admin/assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>

  <script src="{{ asset('userarea/build/js/intlTelInput.js') }}"></script>
  <script>
    var input = document.querySelector("#phone");
    window.intlTelInput(input, {
      // allowDropdown: false,
      // autoHideDialCode: false,
      // autoPlaceholder: "off",
      // dropdownContainer: document.body,
      // excludeCountries: ["us"],
      // formatOnDisplay: false,
      // geoIpLookup: function(callback) {
      //   $.get("http://ipinfo.io", function() {}, "jsonp").always(function(resp) {
      //     var countryCode = (resp && resp.country) ? resp.country : "";
      //     callback(countryCode);
      //   });
      // },
      // hiddenInput: "full_number",
      // initialCountry: "auto",
      // localizedCountries: { 'de': 'Deutschland' },
      // nationalMode: false,
      // onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
      // placeholderNumberType: "MOBILE",
      // preferredCountries: ['cn', 'jp'],
      // separateDialCode: true,
      utilsScript: "build/js/utils.js",
    });
  </script>

  <!--Custom JavaScript -->
  <script type="text/javascript">
    $(function() {
      $(".preloader").fadeOut();
    });
    $(function() {
      $('[data-toggle="tooltip"]').tooltip()
    });
        // ============================================================== 
        // Login and Recover Password 
        // ============================================================== 
        $('#to-recover').on("click", function() {
          $("#loginform").slideUp();
          $("#recoverform").fadeIn();
        });
      </script>

    </body>

    </html>