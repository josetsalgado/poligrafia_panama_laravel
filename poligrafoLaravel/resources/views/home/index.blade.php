<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>IPTC</title>
        <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">

        <!-- Bootstrap -->
        <link href="{{ url('css/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
        <!-- Font Awesome -->
        <link href="{{ url('css/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
        <!-- NProgress -->
        <link href="{{ url('css/nprogress/nprogress.css') }}" rel="stylesheet">
        <!-- Animate.css -->
        <link href="{{ url('css/animate.css/animate.min.css') }}" rel="stylesheet">

        <!-- Custom Theme Style -->
        <link href="{{ url('build/css/custom.min.css') }}" rel="stylesheet">
    </head>

    <body class="login">
        <div>
            <a class="hiddenanchor" id="signup"></a>
            <a class="hiddenanchor" id="signin"></a>

            <div class="login_wrapper">
                <div class="animate form login_form">
                    <section class="login_content">
                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <div>{{ $error }}</div>
                                @endforeach
                            </div>
                        @endif
                        <form class="form-horizontal" role="form" method="POST" action="{{ url('/auth/login') }}">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <h1><i class="fa fa-globe"></i> IPTC</h1>
                            <div>
                                <input type="text" class="form-control" name="email" value="{{ old('email') }}">
                            </div>
                            <div>
                                <input type="password" class="form-control" name="password">
                            </div>
                            <div>
                                <button type="submit" class="btn btn-primary">Entrar</button>
                                <a class="reset_pass" href="#">Olvidaste tú contraseña?</a>
                            </div>

                            <div class="clearfix"></div>

                            <div class="separator">
                                <div class="clearfix"></div>
                                <br />

                                <div>
                                    <p>Desarrollado por B&G Consulting and Technologies</p>
                                </div>
                            </div>
                        </form>
                    </section>
                </div>
            </div>
        </div>
    </body>
</html>
