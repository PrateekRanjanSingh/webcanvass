<!DOCTYPE html>
<html>
<head>
	<title>Signin/Signup</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>data/css/materialize.css">
<style type="text/css">
	
</style>
</head>
<body class="deep-purple accent-3">
<div class="row">
		<div class="col s12 m2 l4"></div>
        <div class="col s12 m8 l4">
          <div class="card  deep-purple darken-1 hoverable ">
            <nav>
			    <div class="nav-wrapper blue darken-3">
			      <ul id="nav-mobile" class="left">
			        <li class="active" id="logl"><a onclick="shlog()">Login</a></li>
			        <li class="" id="regl"><a onclick="shreg()">Register</a></li>
			        
			      </ul>
			    </div>
			</nav>
				<div id="login" class="show">
				<form action="login.php" method="post">
	            	<div class="card-content white-text">
						<input type="text" name="usid" placeholder="USERNAME">
						<input type="password" name="pass" placeholder="PASSWORD">
					</div>
	            	<div class="card-action">
	              		<button class="btn waves-effect waves-light blue darken-3" type="submit" name="action">Submit</button>
	              		<button class="btn waves-effect waves-light blue darken-3" type="reset" name="action">Reset</button>
	            	</div>
	            </form>
	        	</div>

	        	<div id="reg" class="hide">
				<form action="signup.php" method="post">
	            	<div class="card-content white-text">
						<input type="text" name="name" placeholder="NAME">
						<input type="text" name="email" placeholder="EMAIL">
						<input type="text" name="usid" placeholder="USERNAME">
						<input type="password" name="pass" placeholder="PASSWORD">
						<input type="password" name="passcon" placeholder="CONFIRM PASSWORD">
					</div>
	            	<div class="card-action">
	              		<button class="btn waves-effect waves-light blue darken-3" type="submit" name="action">Submit</button>
	              		<button class="btn waves-effect waves-light blue darken-3" type="reset" name="action">Reset</button>
	            	</div>
	            </form>
	        	</div>


          </div>
        </div>
      </div>






<script type="text/javascript">
	function shlog() {
	document.getElementById("login").className = " show";
	document.getElementById("reg").className = " hide";
	document.getElementById("logl").className = "active";
	document.getElementById("regl").className = "";
}
function shreg() {
	document.getElementById("login").className = " hide";
	document.getElementById("reg").className = " show";
	document.getElementById("logl").className = "";
	document.getElementById("regl").className = "active";
}
	
</script>

</body>
</html>