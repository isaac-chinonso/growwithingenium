<!DOCTYPE html>
<html lang="en" class="h-100" id="login-page1">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Register | Ingenium Concept</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../app/images/favicon.png">
    <!-- Custom Stylesheet -->
    <link href="../app/css/style.css" rel="stylesheet">
    <script src="../app/js/modernizr-3.6.0.min.js"></script>
</head>

<body class="h-100">
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    <div class="login-bg h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100">
                <div class="col-xl-6">
                    <div class="form-input-content">
                        <div class="card">
                            <div class="card-body">
                                @include('include.success')
                                @include('include.warning')
                                @include('include.error')
                                <div class="logo text-center">
                                    <a href="index.html">
                                        <img src="../asset/images/logo/logo.png" alt="">
                                    </a>
                                </div>
                                <h4 class="text-center m-t-15">Login</h4>
                                <form class="m-t-30 m-b-30" method="post" action="{{ url('sigin') }}">
                                    @csrf
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="email" class="form-control" name="email" placeholder="Email">
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" class="form-control" name="password" placeholder="Password">
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                        </div>
                                        <div class="form-group col-md-6 text-right"><a href="#">Forgot Password?</a>
                                        </div>
                                    </div>
                                    <div class="text-center m-b-15 m-t-15">
                                        <button type="submit" class="btn btn-primary btn-block">Login</button>
                                    </div>
                                </form>
                                <div class="text-center">
                                    <p class="m-t-30">Dont have an account? <a href="{{ url('register') }}">Create one</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- #/ container -->
    <!-- Common JS -->
    <script src="../app/plugins/common/common.min.js"></script>
    <!-- Custom script -->
    <script src="../app/js/custom.min.js"></script>
</body>

</html>