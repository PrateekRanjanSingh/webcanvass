<div class="card-panel rep z-depth-3">
                        <div class="row" style="margin: 0px">
                         <div class="col l10 s9 m10"><a href="<?php echo base_url()."index.php/members/?mem=".$data['usid']?>"><div class="chip"><img src="<?php echo base_url()."data/uploads/".$data['image']?>"><?php echo $data['fname']." ".$data['lname']?></div></a>
                         <?php
                        if($this->session->userdata('usid')==$data['usid'])
                          echo "<a href='".base_url()."index.php/delete/?table=reply&time=".$data['date']."' onclick=\"return confirm('Are you sure?')\"><i class='material-icons red-text'>delete</i></a>"
                        ?>

                     </div>
                         <div class="datestamp right-align"><?php echo date("jS F H:i",$data['date'])?></div>
                      </div>
                        <p class="black-text"><?php echo $data['reply']?></p>
                      </div>