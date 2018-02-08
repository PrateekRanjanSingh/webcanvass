

<div class="row">
<?php foreach ($mems as $mem) : ?>
	<a href="<?php echo base_url()."index.php/members/?mem=".$mem['usid']?>" class="black-text">
	<div class="col m4 s6 l3">
		<div class="card hoverable">
			<div class="card-image"><img src="<?php echo base_url()."data/uploads/".$mem['image'] ?>"></div>
        	<div class="card-content">
        		<div class="card-title"><?php echo $mem['fname']."<br>".$mem['lname']  ?></div>
          		<p>@<?php echo $mem['usid'];?></p>
        </div>
        
		</div>
	</div>
</a>
<?php endforeach; ?>
</div>