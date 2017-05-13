<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.min.css">
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.1/jquery.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.0.5/handlebars.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/js/materialize.min.js"></script>
    <style>
	    * {
	    	margin: 0;
	    	padding: 0;
	    }
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

        nav {
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
	</style>
</head>
		        <script type="text/javascript">
 				   var SITE_BASE_URL = "{{ url('/')}}";
 				</script>
<body>
		<div class="navbar-fixed">
		  <nav>
		    <div class="nav-wrapper">
		      <img src="/images/logo.png" style="width:50px;margin:5px;" onclick="location.href = SITE_BASE_URL + '/admin/home'">
		      <ul id="nav-mobile" class="right">
		        <li><a class="dropdown-button" href="#!">Registrations</a></li>
		        <li onclick="logout()"><a href="#">Logout</a></li>
		      </ul>
		    </div>
		  </nav>
		</div>
		  <script type="text/javascript">
		  	function logout() {
				var route = '/admin/logout';
				var method = 'POST';

				var request = $.ajax({
					url: SITE_BASE_URL + route,
					method: method,
					data: {
					}
				});
				request.done(function(data){
					if(data.status_code == 200) {
						location.href = SITE_BASE_URL + "/admin";
					} else {
						alert('Logout Failed');
					}
				});
			}
		  </script>
</body>
<div class="container">
@yield('main')
</div>
</html>
