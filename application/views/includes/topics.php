<div class="top" >                  
                    <div class="card card-panel  blue darken-3 white-text">
                      <div class="row" style="margin: 0px">
                         <div class="col l10 s9 m10">
                          <a href="<?php echo base_url()."index.php/members/?mem=".$data['usid']?>"><div class="chip">
                          <img src="<?php echo base_url()."data/uploads/".$data['image']?>"><?php echo $data['fname']." ".$data['lname']?>
                        </div></a>

                         <?php
                        if($this->session->userdata('usid')==$data['usid'])
                          echo "<a href='".base_url()."index.php/delete/?table=topic&time=".$data['date']."' onclick=\"return confirm('Are you sure?')\"><i class='material-icons red-text'>delete</i></a>"
                        ?>

                      </div>
                         <div class="datestamp right-align"><?php echo date("jS F H:i",$data['date'])?></div>
                      </div>
                      <div class="card-title "><?php echo $data['topic']?></div>
                    </div>

                    <?php
                      if(isset($data['details']) && !empty($data['details']))

                          echo "<div class='card-panel rep z-depth-3 black-text' style='margin-left: 0px;'>".$data['details']."</div>";
                    ?>
                      
                      <?php foreach ($data['reply'] as $key) {
                        $this->load->view('includes/reply',array('data' =>$key));
                      }?>
                      <div class="card-panel rep z-depth-3">
                        <div class="chip"><img src="<?php echo base_url()."data/uploads/".$this->session->userdata('image') ?>"><?php echo $this->session->userdata('fname').' '.$this->session->userdata('lname') ?></div>
                        <div class="input-field">

                          <form action="<?php echo base_url();?>index.php/add/reply" onsubmit="return validateForm('<?php echo $data['date'];?>')" method="post">
                            <i class="material-icons prefix">mode_edit</i>
                            <textarea id="<?php echo $data['date'];?>" class="materialize-textarea" name="reply"></textarea>
                            <label for="<?php echo $data['usid'];?>">Comment</label>
                            <input type="hidden" name="topic" value="<?php echo $data['topic']?>">
                            <input type="hidden" name="usid" value="<?php echo $this->session->userdata('usid')?>">
                            <button class="btn waves-effect waves-light deep-purple darken-3" type="submit">Submit
                            <i class="material-icons right">send</i>
                            </button>
                          </form>

                        </div>
                      </div>
                    </div>