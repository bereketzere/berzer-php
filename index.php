<?php 
session_start();
require_once("connection.php");
?>
<html>
<head>
	<title>Welcome to the Facebook</title>
	<!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.0/css/materialize.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <style type="text/css">
  	.brand-logo{
  		margin-left: 10px;
  	}
  	.row .col.s6{
  		margin-left: 40px;
  	}
  </style>
</head>
<body>
	<div class="container">
	<nav>
	    <div class="nav-wrapper light-blue darken-3">
	      <a href="#" class="brand-logo">The Facebook</a>
	      <ul id="nav-mobile" class="right hide-on-med-and-down">
	        <li><a href="#col s12">Login</a></li>
	      </ul>
	    </div>
	  </nav>
	  <img class="responsive-img" src="pic.jpg">
		<?php 
		if(isset($_SESSION['errors']))
		{
			echo "<div class='row'><div class='col s6'><div class='card blue-grey darken-1'>
			<div class='card-content white-text'>";
			foreach ($_SESSION['errors'] as $error)
			{
				echo $error."<br>";
				
			}
			echo "</div></div></div></div>";
			unset($_SESSION['errors']);
		}

	?>
	<!-- Registration Form -->
	<ul class="collapsible" data-collapsible="accordion">
		<li>
	<div class="collapsible-header"><i class="material-icons">person_pin</i>Register</div>
	<div class="collapsible-body">
	<div class="row">
	    <form class="col s6" action="process.php" method="post">
	      	<div class="row">
	      	<div class="input-field col s6">
	      		<input type="hidden" name="register" value="register">
	  		</div>
	  		</div>
	      <div class="row">
	        <div class="input-field col s6">
	          <input id="first_name" type="text" class="validate" name="fname">
	          <label for="first_name">First Name</label>
	        </div>
	        <div class="input-field col s6">
	          <input id="last_name" type="text" class="validate" name="lname">
	          <label for="last_name">Last Name</label>
	        </div>
	      </div>
	      <div class="row">
	        <div class="input-field col s6">
	          <input id="password" type="password" class="validate" name="password">
	          <label for="password">Password</label>
	        </div>
	      </div>
	      <div class="row">
	        <div class="input-field col s6">
	          <input id="password" type="password" class="validate" name="confirm_password">
	          <label for="password">Confirm Password</label>
	        </div>
	      </div>
	      <div class="row">
	        <div class="input-field col s6">
	          <input id="email" type="email" class="validate" name="email">
	          <label for="email">Email</label>
	        </div>
	      </div>
	      	<div class="row">
	       		<button class="btn waves-effect waves-light" type="submit" name="action">
	    		REGISTER
	  			</button>
	  		</div>
	    </form>
		</div>
		</li>
	  
	
	<!-- Login Form -->
		<li>
	<div class="collapsible-header"><i class="material-icons">lock_open</i>Login</div>
	<div class="collapsible-body">
	<div class="row">
	    <form class="col s6" action="process.php" method="post">
	     	<input type="hidden" name="login" value="login">
	     	<div class="row">
	        	<div class="input-field col s12">
	          		<input id="email" type="email" class="validate" name="email">
	          		<label for="email">Email</label>
	        	</div>
	      	</div>
	      <div class="row">
	        <div class="input-field col s12">
	          <input id="password_login" type="password" class="validate" name="password">
	          <label for="password_login">Password</label>
	        </div>
	      </div>
	      
	      	<div class="row">
	       		<button class="btn waves-effect waves-light" type="submit" name="action">
	    		LOGIN
	  			</button>
	  		</div>
	    </form>
		</div>
		</li>
	</ul>

	<?php 
		if(isset($_SESSION['login_errors']))
		{
			echo "<div class='row'><div class='col s6'><div class='card blue-grey darken-1'>
			<div class='card-content white-text'><span class='card-title'> Hmmm... we couldn't connect you. <br></span>";
			foreach ($_SESSION['login_errors'] as $error)
			{
				echo $error."<br>";
				
			}
			echo "</div></div></div></div>";
			unset($_SESSION['login_errors']);
		}?>
	  </div>
	</div>
</div>

<script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.11.3.min.js"></script>
<!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.0/js/materialize.min.js"></script>
</body>
</html>