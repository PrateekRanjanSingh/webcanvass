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
                          <i class="material-icons right">send</i></button>

          </div>
        </div>
      </form>
      </div>