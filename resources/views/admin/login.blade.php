<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Namibia Visa | Login</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('backend') }}/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="{{ asset('backend') }}/css/vertical-layout-light/style.css">

    <link rel="stylesheet" href="{{ asset('backend') }}/custom.css">

    <link rel="shortcut icon" href="{{ asset('logo.png') }}" />
</head>

<body>
    <div class="loader">
        <img src="{{ asset('file/pre_loder/loading-loading-gif.gif') }}" alt="loading..." />
    </div>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-center auth px-0">
                <div class="row w-100 mx-0">
                    <div class="col-lg-5 mx-auto">
                        <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                            <div class="brand-logo text-center">
                                <img src="{{ url('file/logo/logo.png') }}"
                                    alt="logo.png" style="max-height: 130px;width:auto">
                            </div>
                            @if (Session::has('error_message'))
                                <div class="alert alert-danger alert-dismissible fade show my-3" role="alert">
                                    <strong>Error:</strong> {{ Session('error_message') }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif
                            <div class="alert alert-danger alert-dismissible fade d-none ajax" role="alert">
                                <strong>Error:</strong> <span id="ajax_message"></span>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <h4>Hello! Welcome to Gunma Halal Food admin panel ...</h4>
                            <h6 class="font-weight-light">Sign in to continue.</h6>

                            <form class="pt-3" id="admin_login" action="javascript:">
                                @csrf
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-lg" id="email"
                                        placeholder="Enter your email" name="email">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-lg" id="password"
                                        placeholder="Enter your password" name="password">
                                </div>
                                <div class="mt-3">
                                    <button
                                        class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">SIGN
                                        IN</button>
                                </div>
                                <div class="my-2 d-flex justify-content-between align-items-center">
                                    <div class="form-check">
                                        <label class="form-check-label text-muted">
                                            Keep me signed in
                                            <input type="checkbox" class="form-check-input">
                                            <i class="input-helper"></i></label>
                                        </label>

                                    </div>
                                    <a href="#" class="auth-link text-black">Forgot password?</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('backend') }}/js/jquery-3.6.3.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#admin_login').submit(function() {
                $('.loader').fadeIn();
                var formData = $(this).serialize();
                $.ajax({
                    url: "/admin",
                    type: "post",
                    data: formData,
                    success: function(data) {
                        $('.loader').fadeOut();
                        if (data.status == true) {
                            $('body').html(data.view);
                            window.history.pushState(null, document.title =
                                "Namibia Visa | Dashboard", "admin/dashboard");
                        }else if(data.status == false){
                            $('.ajax').addClass('d-block show')
                            $('#ajax_message').html(data.error_message)
                        } else {
                            alert('Page Error')
                        }
                    },
                    error: function() {
                        alert('Error')
                    }
                })
            });

            $(document).on('click', '.close', function() {
                $('.alert').fadeOut();
                $('.ajax').removeClass('d-block show');
            });

            $('.loader').fadeOut();
        })
    </script>

</body>

</html>
