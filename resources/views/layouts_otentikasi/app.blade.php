<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>@yield('title')</title>
    <!--favicon-->
    <link rel="icon" href="{{asset('assets/template_admin')}}/assets/images/favicon-32x32.png" type="image/png" />
    <!-- loader-->
    <link href="{{asset('assets/template_admin')}}/assets/css/pace.min.css" rel="stylesheet" />
    <script src="assets/js/pace.min.js"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('assets/template_admin')}}/assets/css/bootstrap.min.css" />
    <!-- Icons CSS -->
    <link rel="stylesheet" href="{{asset('assets/template_admin')}}/assets/css/icons.css" />
    <!-- App CSS -->
    <link rel="stylesheet" href="{{asset('assets/template_admin')}}/assets/css/app.css" />
</head>

<body class="bg-login">
    <!-- Main Content -->

    @yield('content')

    <!-- End Of Main Content -->
    <!-- JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{asset('assets/template_admin')}}/assets/js/jquery.min.js"></script>
    <script src="{{ asset('assets/template_admin')}}/assets/js/popper.min.js"></script>
    <script src="{{ asset('assets/template_admin')}}/assets/js/bootstrap.min.js"></script>
    <!--Password show & hide js -->
    <script>
        $(document).ready(function () {
			$("#show_hide_password a").on('click', function (event) {
				event.preventDefault();
				if ($('#show_hide_password input').attr("type") == "text") {
					$('#show_hide_password input').attr('type', 'password');
					$('#show_hide_password i').addClass("bx-hide");
					$('#show_hide_password i').removeClass("bx-show");
				} else if ($('#show_hide_password input').attr("type") == "password") {
					$('#show_hide_password input').attr('type', 'text');
					$('#show_hide_password i').removeClass("bx-hide");
					$('#show_hide_password i').addClass("bx-show");
				}
			});
		});
    </script>
</body>
