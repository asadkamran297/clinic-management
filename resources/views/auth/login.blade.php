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
    <title>Clinic Management | login</title>
    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('admin/assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- page css -->
    <link href="{{ asset('admin/css/pages/login-register-lock.css') }}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ asset('admin/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/css/colors/default-dark.css') }}" id="theme" rel="stylesheet">
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label">Clinic Management Loading...</p>
        </div>
    </div>
    <section id="wrapper" class="login-register login-sidebar" style="background-image:url({{ asset('admin/assets/images/background/login-register.webp') }});">
        <div class="login-box card">
            <div class="card-body">
                <form class="form-horizontal form-material" id="loginform" method="post" action="{{ route('userarea.authenticate') }}">
                    @csrf
                    <a href="javascript:void(0)" class="text-center db"><img src="{{ asset('admin/assets/images/logo-icon.png') }}" alt="Home"><br>
                        <img src="{{ asset('admin/assets/images/logo-text.png') }}" alt="Home">
                    </a>
                    @include('includes.message')
                    <div class="form-group m-t-40">
                        <div class="col-xs-12">
                            <input class="form-control" type="text" required="" name="email" placeholder="Username">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12">
                            <input class="form-control" type="password" name="password" required="" placeholder="Password">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-12">
                            <div class="checkbox checkbox-primary pull-left p-t-0">
                                <input id="checkbox-signup" name="remember" type="checkbox" class="filled-in chk-col-light-blue">
                                <label for="checkbox-signup"> Remember me </label>
                            </div>
                            {{-- <a href="javascript:void(0)" id="to-recover" class="text-dark pull-right"><i class="fa fa-lock m-r-5"></i> Forgot pwd?</a>  --}}
                        </div>
                    </div>
                    <div class="form-group text-center m-t-20">
                        <div class="col-xs-12">
                            <button class="btn btn-info btn-lg btn-block text-uppercase btn-rounded" type="submit">Log In</button>
                        </div>
                    </div>
                    <div class="form-group m-b-0">
                            {{-- <div class="col-sm-12 text-center">
                                Don't have an account? <a href="{{ route('userarea.register') }}" class="text-primary m-l-5"><b>Sign Up</b></a>
                            </div> --}}
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
        <!--Custom JavaScript -->
        <script type="text/javascript">
            $(function() {
                $(".preloader").fadeOut();
            });
            $(function() {
                $('[data-toggle="tooltip"]').tooltip()
            });
            $('#to-recover').on("click", function() {
                $("#loginform").slideUp();
                $("#recoverform").fadeIn();
            });
        </script>
        
    </body>

    </html>