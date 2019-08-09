<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?php echo base_url();?>img/icon.png">

    <title>H4x10R</title>

    <!-- Bootstrap core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <style type="text/css">
  	
  	body {

  		color: white;
  	}

  	.form-signin {
    max-width: 350px;
    padding: 15px;
    margin: 0 auto;
	}
	.form-signin h2 {

		padding-bottom: 20px;
	}
* {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
.vertical-center {
  min-height: 100%;  /* Fallback for browsers do NOT support vh unit */
  min-height: 100vh; /* These two lines are counted as one :-)       */

  display: flex;
  align-items: center;
}

.jumbotron {

	background: url('<?php echo base_url()?>img/login_bg.png') center no-repeat;
	background-size: cover;
	margin-bottom: 0;
}

a {

	color: white;
	text-decoration: none;
	
}

a:hover {

	color: #90C3D4;
	text-decoration: none;

}
.btn {

	margin-top: 10px;
}
.xs-col-12 {

	margin-top: 10px;
}

.container p {

    text-align: center;
  animation: shake 0.82s cubic-bezier(.36,.07,.19,.97) both;
  transform: translate3d(0, 0, 0);
  backface-visibility: hidden;
  color: #ff00ff;
  perspective: 1000px;
}

@keyframes shake {
  10%, 90% {
    transform: translate3d(-1px, 0, 0);
  }
  
  20%, 80% {
    transform: translate3d(2px, 0, 0);
  }

  30%, 50%, 70% {
    transform: translate3d(-4px, 0, 0);
  }

  40%, 60% {
    transform: translate3d(4px, 0, 0);
  }
}
  </style>
  <body>
  <div class="jumbotron vertical-center">
      <div class="container">

        <?php echo validation_errors(); ?>
        <?php echo form_open('verifylogin', 'class="form-signin"');?>
            <h2 class="form-signin-heading text-center">[ login into boss panel ]</h2>
            <label for="inputEmail" class="sr-only">Email address</label>
            <?php echo form_input('nick', '', 'class="form-control" placeholder="Nazwa użytkownika"'); ?>
            <label for="inputPassword" class="sr-only">Password</label>
            <?php echo form_password('password', '', 'class="form-control" placeholder="Hasło" type="password"'); ?>
            <?php echo form_submit('login', 'Zaloguj', 'class="btn btn-lg btn-primary btn-block"'); ?>

            <div class="xs-col-12 text-center"><a href="<?php echo base_url();?>">[ wróc na główną ]</a></div>
        <?php echo form_close(); ?>
        </div>
    </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="http://getbootstrap.com/assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
