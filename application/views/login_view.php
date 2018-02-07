<!DOCTYPE html>
<html>
<head>
	<title>Welcome</title>
	<script type = "text/javascript" src = "https://code.jquery.com/jquery-2.1.1.min.js"></script>           
    <script src = "https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/js/materialize.min.js"></script> 
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>data/files/materialize.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	
<style type="text/css">

html { 
  background: url(<?php echo base_url()."data/files/back.jpg"?>) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}

</style>
</head>
<body>

<div class="row">
		<div class="col hide-on-med-and-down l4"></div>
        <div class="col m12 l4">
            <center><h1 style="text-shadow: 2px 2px #000000; margin-top:50px; padding:10px" class="z-depth-5 white-text">Welcome!</h1></center>
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
				<form action="<?php echo base_url()?>index.php/auth" method="post">
	            	<div class="card-content white-text">
	            		<?php echo form_input('usid', set_value('usid'), 'placeholder="USERNAME"');?>
						<input type="password" name="pass" placeholder="PASSWORD">
	
					</div>
	            	<div class="card-action">
	              		<button class="btn waves-effect waves-light blue darken-3" type="submit" name="action">Submit</button>
	              		<button class="btn waves-effect waves-light blue darken-3" type="reset" name="action">Reset</button>
	            	</div>
	            </form>
	        	</div>

	        	<div id="reg" class="hide">
				<form action="<?php echo base_url()?>index.php/auth/new" method="post" enctype="multipart/form-data">
	            	<div class="card-content white-text">
	            		<?php 
	            		echo form_input('fname', set_value('fname'), 'placeholder="FIRST NAME"');
	            		echo form_input('lname', set_value('lname'), 'placeholder="LAST NAME"'); 
						echo form_input('email', set_value('email'), 'placeholder="EMAIL"'); 
						echo form_input('usid', set_value('usid'), 'placeholder="USERNAME"');
						?>
						<input type="password" name="pass" placeholder="PASSWORD">
						<input type="password" name="passcon" placeholder="CONFIRM PASSWORD">
						<div class="file-field input-field">
						  <div class="btn waves-effect waves-light blue darken-3"><span>Photo</span><input type="file" name="image"></div>
						  <div class="file-path-wrapper"><input class="file-path validate" type="text"></div>
						</div>
					</div>
	            	<div class="card-action">
	              		<button class="btn waves-effect waves-light blue darken-3" type="submit" name="action">Submit</button>
	              		<button class="btn waves-effect waves-light blue darken-3" type="reset" name="action">Reset</button>
	            	</div>

	            </form>
	        	</div>

				
	            </form>
          </div>
          <?php if(isset($msg)&&!empty($msg)) echo
          "<div class='card purple-text deep-purple darken-1 hoverable'>
            <div class='card-content white-text'><center>
				<p class='content'> $msg </p>
				</div>
        </div>";?>
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