<!DOCTYPE html>
  <html>
    <head>
      <title><?php echo $info['fname'].' '.$info['lname']?></title>
      
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link type="text/css" rel="stylesheet" href="<?php echo base_url();?>data/files/materialize.css"  media="screen,projection"/>
      <link type="text/css" rel="stylesheet" href="<?php echo base_url();?>data/files/defined.css"  media="screen,projection"/>

      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      
      <style type="text/css">
      div.pagebg {
        background-image: url('<?php echo base_url()."data/files/back.jpg"?>');
      }
      #slide{
        text-align: center;display: inline-block;
        border-right: 1px solid #1a237e;
      }
      </style>
      
</head>
<body>
<div class='pagebg'></div>

      

    
<div class="row">
          
    <div id="slide-out" class="side-nav fixed card col l3 blue-grey lighten-5" style="padding: 0px;">
      <div class="card indigo darken-1">
        <div class="card-content">
          <div class="card card-image hoverable z-depth-4">
          <img src="<?php echo base_url()."data/uploads/".$info['image'] ?>" id="pc" align="center">
        </div>
        </div>
      </div>
      
      <div class="card indigo white-text darken-1">
        <div class="card-content">
          <h4><?php echo $info['fname'].' '.$info['lname']?></h4>
          <p>@<?php echo $info['usid']?></p>
          <p><?php echo $info['email']?></p>
          <p>Date Of Join: <?php echo date("l jS \of F Y",(int)$info['doj'])?></p>
        </div>
      </div>
      <div class="card  indigo darken-3">
            <div class="card-content white-text indigo darken-1">
              <div class="card-title">Members</div>
            
            <div class="collection">
              
              <?php foreach ($mem_list as $key) {
              echo "<a href='".base_url()."index.php/members/?mem=".$key['usid']."' class='collection-item deep-purple-text'>".$key['lname']." ".$key['fname']."</a>";}
              ?>

            </div>
          </div>
        </div>
    </div>
    <div class="col l3 hide-on-med-and-down" id="sd"></div>
    <div class="col l9 m12 s12" id="ma">
        <div class="card z-depth-5  indigo darken-1 white-text ">
        
    
      
      <div class="card-panel deep-purple darken-4" style="margin: 0px;">
          <div class="col l1 hide-on-med-and-down" style="display: inline-block;"><a href="#" class="white-text " id="hd"><i class="material-icons">view_list</i></a></div>
<h5 class="white-text center-align">~~Webapp~~</h5>
        </div>
    
          
          <div class="card-content" style="padding: 0px; ">
            <div class="row hide-on-large-only" style="margin: 0px; padding: 0px;" >
                <div class="col m2 s3 deep-purple darken-4" id="slide"><a href="#" data-activates="slide-out" class="button-collapse show-on-large white-text"> <i class="material-icons">view_list</i><br>More</a></div>

                <div class="center-align col m8 s6 flow-text " style="margin: 0px; height: 50px;"><?php echo $info['fname'].' '.$info['lname']?></div>
                <div class="col m2 s3 deep-purple darken-4" style="margin: 0px; height: 51px;"></div>
            </div>
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
                <li><a href="<?php echo base_url()."index.php/members"?>"><i class="material-icons">group</i></a></li>
                <li><a href="<?php echo base_url()."index.php/ext/add"?>"><i class="material-icons">add_circle</i></a></li>
                <li><a href="<?php echo base_url();?>index.php/auth/logout"><i class="material-icons left">all_out</i><span>Logout</span></a></li>
                <li><a href="<?php echo base_url()."index.php/ext/about"?>"><i class="material-icons">help</i></a></li>
              </ul>
            </div>
          </nav>


          
      </div>
        <?php 
          foreach ($data as $a) {
            $this->load->view('includes/topics',array('data' => $a ));
            
          }

        ?>
        
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

        function validateForm(id) {
          
          var y = document.getElementById(id).value;
          if (y == "") {
              alert("Comment must be filled out");
              return false;
          }
        }

        $(document).ready(function(){
          $("#hd").click(function(){
            $("#slide-out").toggle("medium");
            $("#sd").toggleClass("l2");
            $("#sd").toggleClass("l3");
            $("#ma").toggleClass("l8");
            $("#ma").toggleClass("l9"); 
          });
        });

      </script>
    </body>
  </html>
        