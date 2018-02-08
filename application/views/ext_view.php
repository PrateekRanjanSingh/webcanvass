<!DOCTYPE html>
  <html>
  
    <head>
      <title><?php echo $load?></title>

      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link type="text/css" rel="stylesheet" href="<?php echo base_url();?>data/files/materialize.css"  media="screen,projection"/>
      <link type="text/css" rel="stylesheet" href="<?php echo base_url();?>data/files/defined.css"  media="screen,projection"/>
      

      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    

    <style type="text/css">
      div.pagebg {
        background-image: url('<?php echo base_url()."data/files/back.jpg"?>');
      }
    </style>
</head>
<body>
<div class='pagebg'></div>


      

      
        
<div class="row">
          
    
    <div class="col l2 hide-on-med-and-down"></div>
    <div class="col l8 m12 s12" >
        
        <div class="card z-depth-5  indigo darken-1 white-text ">
        
    
      
      <div class="card-panel deep-purple darken-4" style="margin: 0px;">
          <h5 class="white-text center-align">~~Webapp~~</h5>
        </div>
    
          
          
          
            
                 <nav>
            <div class="nav-wrapper white-text  deep-purple darken-4">
              <ul class="left hide-on-small-only">
                <li><a href="<?php echo base_url()?>"><i class="material-icons left">home</i><span >Home</span></a></li>
                <li><a href="<?php echo base_url()."index.php/members"?>"><i class="material-icons left">group</i><span>Members</span></a></li>
                <li><a href="<?php echo base_url()."index.php/ext/add"?>"><i class="material-icons left">add_circle</i><span >Add a topic</span></a></li>
                <li><a href="<?php echo base_url();?>index.php/auth/logout"><i class="material-icons left">all_out</i>Logout<span class="hide-on-small-only grey-text">  @<?php echo $this->session->userdata('usid')?></span></a></li>
                <li><a href="<?php echo base_url()."index.php/ext/about"?>"><i class="material-icons left">help</i><span >About</span></a></li>
              </ul>

              <ul class="left hide-on-med-and-up">
                <li><a href="<?php echo base_url()?>"><i class="material-icons">home</i></a></li>
                <li><a href="<?php echo base_url()."index.php/ext/about"?>"><i class="material-icons">group</i></a></li>
                <li><a href="<?php echo base_url()."index.php/ext/add"?>"><i class="material-icons">add_circle</i></a></li>
                <li><a href="<?php echo base_url();?>index.php/auth/logout"><i class="material-icons left">all_out</i><span>Logout</span></a></li>
                <li><a href="<?php echo base_url()."index.php/ext/about"?>"><i class="material-icons">help</i></a></li>
              </ul>
            </div>
          </nav>


          
      </div>
        
             
              <?php $this->load->view("includes/$load");?>       
            
    </div>


</div>
   


















      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <script type="text/javascript" src="<?php echo base_url();?>data/files/materialize.js"></script>
      <script type="text/javascript">
        $(function(){
           $(".button-collapse").sideNav();
        })

        $(document).ready(function(){
          $(".top").click(function(e){
            if($(e.target).is('.card')){
              $(this).children(".rep").toggle("medium");
            }
            if($(e.target).is('.col')){
              $(this).children(".rep").toggle("medium");
            }
            if($(e.target).is('.card-title')){
              $(this).children(".rep").toggle("medium");
            }        
          });     
        });

        function validateForm() {
          
          var y = document.getElementById('textarea1').value;
          if (y == "") {
              alert("Topic must be filled out");
              return false;
          }
        }
      
      </script>
    </body>
  </html>
        


















