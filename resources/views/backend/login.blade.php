<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=1,initial-scale=1,user-scalable=1"/>
    <title>Tropical Mauritius Holiday - Connexion sécurisée</title>
    <link rel="shortcut icon" href="{{ asset('/assets/common/images/favicon.png') }}">

    <!-- |-------------------------------------------------------------------------
      -- | Vendors Stylesheets
      -- |-------------------------------------------------------------------------
      -- |
      -->
    <link href="{{ asset('/assets/backend/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/assets/backend/vendor/flat-ui-pro/css/flat-ui-pro.css') }}" rel="stylesheet">
    <!-- |-------------------------------------------------------------------------
      -- | Custom Stylesheets
      -- |-------------------------------------------------------------------------
      -- |
      -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets/backend/css/login.css') }}"/>


    <!--[if lt IE 9]>
    <script src="{{ asset('/assets/backend/vendor/html5shiv.js') }}"></script>
    <script src="{{ asset('/assets/backend/vendor/respond.min.js') }}"></script>
    <![endif]-->
</head>
<body>

<section class="container">
    <section class="login-form">
        <form method="post" action="{{ url('/admin/connexion') }}" role="login">
            {!! csrf_field() !!}
            <h3 class="text-primary"><b class="text-inverse">Tropical Mauritius Holiday</b> accès sécurisé</h3>
            <div class="row">
                <div class="col-xs-12">
                    <input type="email" name="email" placeholder="Email" required
                           class="form-control input-lg"/>
                    <span class="icon fui-mail"></span>
                </div>
                <div class="col-xs-12">
                    <input type="password" name="password" placeholder="Mot de passe" required
                           class="form-control input-lg"/>
                    <span class="icon fui-lock"></span>
                </div>
            </div>
            <button type="submit" name="go" class="btn btn-lg btn-block btn-primary">Connexion</button>
            <section>
                <a href="#" class="text-inverse">Mot de passe oublié ?</a>
            </section>
        </form>
    </section>
</section>
<!-- |-------------------------------------------------------------------------
  -- | Vendors Scripts
  -- |-------------------------------------------------------------------------
  -- |
  -->
<script src="{{ asset('/assets/backend/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('/assets/backend/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
<!-- |-------------------------------------------------------------------------
  -- | Customs Scripts
  -- |-------------------------------------------------------------------------
  -- |
  -->
</body>
</html>