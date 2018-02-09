<!DOCTYPE html>
  <html>
  <title>Add a Topic</title>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="<?php echo base_url();?>data/files/materialize.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <style type="text/css">
    div.rep{
        margin-left: 50px;
        margin-top:-12px;
        display: none;
        padding: 2px;
        }

    div.card-panel{
      padding: 10px;     
        }

    div.stk{
      margin: 0px;

      padding: 10px;
      position: fixed;
      z-index: 100;
      display: block;
      width: 100%;
      text-align: center;
    }

    #pc{
      border: 10px double white;

    }
    
body {
  font-family: "Arial";
  
}

.page-bg {
  background: url('<?php echo base_url()."data/files/back.jpg"?>') no-repeat center center fixed;
  -webkit-filter(5px);
  -moz-filter: blur(5px);
  -o-filter: blur(5px);
  -ms-filter: blur(5px);
  filter: blur(5px);
  position: fixed;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  z-index: -1;
}

</style>
</head>
<body>
<div class='page-bg'></div>


      

      
        
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
                <li><a href="<?php echo base_url()."index.php/members"?>"><i class="material-icons">group</i></a></li>
                <li><a href="<?php echo base_url()."index.php/ext/add"?>"><i class="material-icons">add_circle</i></a></li>
                <li><a href="<?php echo base_url();?>index.php/auth/logout"><i class="material-icons left">all_out</i><span>Logout</span></a></li>
                <li><a href="<?php echo base_url()."index.php/ext/about"?>"><i class="material-icons">help</i></a></li>
              </ul>
            </div>
          </nav>

          
      </div>
        
             <div class="row card">
      <form class="col s12 card-content" action="<?php echo base_url();?>index.php/add/topic" onsubmit="return validateForm()" method="post">
        <div class="row">
          <div class="card-title">Add A Topic</div>
          <div class="input-field col l12">
            <input id="textarea1" type="text" data-length="100" name="topic">
            <label for="input_text">Topic</label>
          </div>
        
          <div class="input-field col s12">
            <i class="material-icons prefix">mode_edit</i>
            <textarea id="textarea2" class="materialize-textarea" data-length="500" name="details"></textarea>
            <label for="textarea2">Details(Optional)</label>
            <input type="hidden" name="usid" value="<?php echo $this->session->userdata('usid')?>">
            <button class="btn waves-effect waves-light deep-purple darken-3" type="submit">Submit
                          <i class="material-icons right">send</i>

          </div>
        </div>
      </form>
    </div>
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
        


















