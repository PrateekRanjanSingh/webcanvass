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
 	height: 100%; 
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
  
 }

</style>
</head>
<body>

<div class="row">
		<div class="col hide-on-med-and-down l4"></div>
        <div class="col m12 l4 s12">
        	<div class="card z-depth-5 white-text" style="background-color: transparent;">
        		<div class="col l4 s4 m5"></div><div class="col l4 s4 m2 card-image"><img src="<?php echo base_url()."data/files/logo.png"?>"></div><div class="col l4 s4 m5"></div><div class="col l s12 m12"></div>
            	<center><h1 style="text-shadow: 2px 2px #000000; margin-top:50px; padding:10px" class="">Welcome!</h1></center>
        	</div>
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
				<form action="<?php echo base_url()?>index.php/auth" method="post" onsubmit="return validate2()">
	            	<div class="card-content white-text">
	            		<?php echo form_input('usid', set_value('usid'), 'placeholder="USERNAME" id="usid2"');?>
						<input type="password" name="pass" placeholder="PASSWORD" id="pass2">
	
					</div>
	            	<div class="card-action">
	              		<button class="btn waves-effect waves-light blue darken-3" type="submit" name="action">Submit</button>
	              		<button class="btn waves-effect waves-light blue darken-3" type="reset" name="action">Reset</button>
	            	</div>
	            </form>
	        	</div>

	        	<div id="reg" class="hide">
				<form action="<?php echo base_url()?>index.php/auth/new" method="post" onsubmit="return validate()">
	            	<div class="card-content white-text">
	            		<?php 
	            		echo form_input('fname', set_value('fname'), 'placeholder="FIRST NAME" id="fname"');
	            		echo form_input('lname', set_value('lname'), 'placeholder="LAST NAME" id="lname"'); 
						echo form_input('email', set_value('email'), 'placeholder="EMAIL" id="email"'); 
						echo form_input('usid', set_value('usid'), 'placeholder="USERNAME" id="usid"');
						?>
						<p class="white-text center-align">
					      <input name="gender" value="male" type="radio" id="test1" checked="checked"/><label for="test1" class="white-text">Male</label>
					      <input name="gender" value='female' type="radio" id="test2" /><label for="test2" class="white-text">Femlale</label>
					    </p>
    
						<input type="password" name="pass" placeholder="PASSWORD" id="pass">
						<input type="password" name="passcon" placeholder="CONFIRM PASSWORD" id="passcon">
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
          "<div class='card purple-text white darken-1 hoverable'>
            <div class='card-content purple-text'><center>
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
function validate() {

            var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,6})$/;
            
            
            fname = document.getElementById('fname').value;
            lname = document.getElementById('lname').value;
            email = document.getElementById('email').value;
            usid = document.getElementById('usid').value;
            pass = document.getElementById('pass').value;
            passcon = document.getElementById('passcon').value;
            var a="";

            if(fname.length==0) a=a+"The First Name is required.\n";
            if(lname.length==0) a=a+'The Last Name is required.\n';
            if(email.length==0) a=a+'The Email is required.\n';
            else if (reg.test(email) == false) a=a+ 'Invalid Email Address\n';
            if(usid.length<4) a=a+'The Username must be at least 4 characters in length.\n';
            if(pass.length<4) a=a+'Password must be at least 4 characters in length..\n';
            else if(pass!=passcon) a=a+'Passwords do not match.\n';

            if(a==''){return true;}     
            else {alert(a); return false;}     
                
 }

 function validate2() {

            usid = document.getElementById('usid2').value;
            pass = document.getElementById('pass2').value;
            var a="";

            if(usid.length<4) a=a+'The Username must be at least 4 characters in length.\n';
            if(pass.length<4) a=a+'Password must be at least 4 characters in length.\n';
            
            if(a==''){return true;}     
            else {alert(a); return false;}     
                
 }
	
</script>

</body>
</html>