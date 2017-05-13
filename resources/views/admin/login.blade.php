<html>

<head>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.min.css">
  <style>
    body {
      display: flex;
      min-height: 100vh;
      flex-direction: column;
    }

    main {
      flex: 1 0 auto;
    }

    body {
      background: #fff;
    }

    footer {
        background-color: #FF9E3E;
    }
    .footer-copyright {
        background-color: #FB8007;
    }

    .input-field input[type=date]:focus + label,
    .input-field input[type=text]:focus + label,
    .input-field input[type=email]:focus + label,
    .input-field input[type=password]:focus + label {
      color: #e91e63;
    }

    .input-field input[type=date]:focus,
    .input-field input[type=text]:focus,
    .input-field input[type=email]:focus,
    .input-field input[type=password]:focus {
      border-bottom: 2px solid #e91e63;
      box-shadow: none;
    }

    @-webkit-keyframes rotating {
      from {
        -webkit-transform: rotate(0deg);
           -moz-transform: rotate(0deg);
            -ms-transform: rotate(0deg);
             -o-transform: rotate(0deg);
                transform: rotate(0deg);
      }
      to {
        -webkit-transform: rotate(360deg);
           -moz-transform: rotate(360deg);
            -ms-transform: rotate(360deg);
             -o-transform: rotate(360deg);
                transform: rotate(360deg);
      }
    }

    @keyframes rotating {
      from {
        -webkit-transform: rotate(0deg);
           -moz-transform: rotate(0deg);
            -ms-transform: rotate(0deg);
             -o-transform: rotate(0deg);
                transform: rotate(0deg);
      }
      to {
        -webkit-transform: rotate(360deg);
           -moz-transform: rotate(360deg);
            -ms-transform: rotate(360deg);
             -o-transform: rotate(360deg);
                transform: rotate(360deg);
      }
    }
    .reel {
        width: 50px;
        height: 50px;
        opacity: 0.2;
        -webkit-animation: rotating 5s linear infinite;
           -moz-animation: rotating 5s linear infinite;
            -ms-animation: rotating 5s linear infinite;
             -o-animation: rotating 5s linear infinite;
    }
  </style>
</head>
        <script type="text/javascript">
           var SITE_BASE_URL = "{{ url(env('SITE_BASE_URL'))}}";
        </script>
<body>
  <div class="section"></div>
  <main>
    <center>
      <div class="section"></div>
      <h5 class="indigo-text">Admin Login</h5>
      <div class="section"></div>

      <div class="container">
        <div class="z-depth-1 grey lighten-4 row" style="display: inline-block; padding: 32px 48px 0px 48px; border: 1px solid #EEE;">
          <img src="images/reel.png" class="reel">

          <form class="col s12" method="post">
            <div class='row'>
              <div class='col s12'>
              </div>
            </div>

            <div class='row'>
              <div class='input-field col s12'>
                <input class='validate' type='email' name='email' id='username' />
                <label for='email'>Username</label>
              </div>
            </div>

            <div class='row'>
              <div class='input-field col s12'>
                <input class='validate' type='password' name='password' id='password' />
                <label for='password'>Password</label>
              </div>
              <label style='float: right;'>
                                <a class='pink-text' href='#!'><b>Forgot Password?</b></a>
                            </label>
            </div>
            <br />
            <center>
              <div class='row'>
                <button type='submit' name='btn_login' class='col s12 btn btn-large waves-effect indigo' id="login_button" onclick="login();return false;">Login</button>
              </div>
                <div class="progress" id="loading" style="display:none">
                    <div class="indeterminate"></div>
                </div>
            </center>
          </form>
        </div>
      </div>
    </center>

    <div class="section"></div>
    <div class="section"></div>
  </main>

  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.1/jquery.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>
</body>
      <footer class="page-footer">
          <div class="footer-copyright">
            <div class="container center">
            <a class="grey-text text-lighten-4 center" href="http://deltaforce.club">Made with ❤ by Delta Force</a>
            </div>
          </div>
        </footer> 
<script src="js/admin_login.js"></script>
</html>
