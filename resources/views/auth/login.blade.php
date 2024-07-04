<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Sign in with illustration - Tabler - Premium and Open Source dashboard template with responsive and high
        quality UI.</title>
    <!-- CSS files -->
    <link href="assets/dist/css/tabler.min.css?1692870487" rel="stylesheet" />
    <link href="assets/dist/css/tabler-flags.min.css?1692870487" rel="stylesheet" />
    <link href="assets/dist/css/tabler-payments.min.css?1692870487" rel="stylesheet" />
    <link href="assets/dist/css/tabler-vendors.min.css?1692870487" rel="stylesheet" />
    <link href="assets/dist/css/demo.min.css?1692870487" rel="stylesheet" />
    <style>
        @import url('https://rsms.me/inter/inter.css');

        :root {
            --tblr-font-sans-serif: 'Inter Var', -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;
        }

        body {
            font-feature-settings: "cv03", "cv04", "cv11";
        }
    </style>
</head>

<body class=" d-flex flex-column">
    <script src="assets/dist/js/demo-theme.min.js?1692870487"></script>
    <div class="page page-center">
        <div class="container container-normal py-4">
            <div class="row align-items-center g-4">
                <div class="col-lg">
                    <div class="container-tight">
                        <div class="text-center mb-4">
                            <a href="." class="navbar-brand navbar-brand-autodark"><img src="./static/logo.svg"
                                    height="36" alt=""></a>
                        </div>
                        <div class="card card-md">
                            <div class="card-body">
                                <h2 class="h2 text-center mb-4">Login to your account</h2>
                                <form action="{{ route('post.login') }}" name="handleAjax" id="handleAjax"
                                    method="post" autocomplete="off" novalidate>
                                    @csrf
                                    <div class="mb-3">
                                        <label class="form-label">Username</label>
                                        <input type="text" name="username" id="username" class="form-control"
                                            placeholder="Masukkan username" autofocus value="{{ old('username') }}" />
                                        @error('username')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="mb-2">
                                        <label class="form-label">Password</label>
                                        <input type="password" name="password" id="password" class="form-control"
                                            placeholder="Masukkan password">
                                        @error('password')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="mb-2">
                                        <label class="form-check">
                                            <input type="checkbox" class="form-check-input" />
                                            <span class="form-check-label">Remember me on this device</span>
                                        </label>
                                    </div>
                                    <div class="form-footer">
                                        <button type="submit" id="submitLogin" class="btn btn-primary w-100">Sign
                                            in</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg d-none d-lg-block">
                    <img src="assets/static/illustrations/undraw_secure_login_pdn4.svg" height="300"
                        class="d-block mx-auto" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Libs JS -->
    <!-- Tabler Core -->
    <script src="assets/dist/js/tabler.min.js?1692870487" defer></script>
    <script src="assets/dist/js/demo.min.js?1692870487" defer></script>
    <script src="{{ asset('assets/extentions/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('assets/extentions/jquery.validate.min.js') }}"></script>
    <script type="text/javascript">
        $(function() {
            $("#handleAjax").validate({
                rules: {
                    username: {
                        required: true,
                        username: true
                    },
                    password: {
                        required: true,
                    },
                },
                messages: {
                    username: {
                        required: "Username tidak boleh kosong",
                        username: "Format username tidak valid"
                    },
                    password: {
                        required: "Password tidak boleh kosong",
                    },
                },

                submitHandler: function(form) {
                    $('#submitLogin').html(
                        '<i class="fa-solid fa-fw fa-spinner fa-spin"></i> Redirect to Dashboard, Please Wait...'
                    );
                    $("#submitLogin").attr("disabled", true);

                    $.ajax({
                        url: $(form).attr('action'),
                        data: $(form).serialize(),
                        type: "POST",

                        success: function(response) {
                            if (response.includes('dashboard')) {
                                window.location.href = response;
                            } else {
                                $('#errors-list').html('<div class="alert alert-danger">' +
                                    response + '</div>');
                            }
                        },
                        error: function(xhr, status, error) {
                            $('#errors-list').html(
                                '<div class="alert alert-danger">Terjadi kesalahan saat melakukan login. Silakan coba lagi nanti.</div>'
                            );
                        },
                        complete: function() {
                            // Reset tombol login setelah AJAX selesai
                            $('#submitLogin').html('Login');
                            $("#submitLogin").attr("disabled", false);
                        }
                    });
                }
            });

        });
    </script>
</body>

</html>
