<link href="<?php echo base_url();?>css/dashboard.css" rel="stylesheet">
<div class="col-sm-3 col-md-2 sidebar navbar-default">
          <div class="h5 text-center dashboard"><a href="<?php echo base_url().'administration'?>"><span class="glyphicon glyphicon-link"></span>&nbsp;Dashboard</a></div>
          <ul class="nav nav-sidebar">
            <li class="sub-link dashLink"><a href="<?php echo base_url().'administration/configDetails'?>"><span class="glyphicon glyphicon-cog"></span>&nbsp;&nbsp;Configure Details</a></li>
            <li class="sub-link dashLink"><a href="<?php echo base_url().'rules/new_ads'?>"><span class="glyphicon glyphicon-thumbs-up"></span>&nbsp;&nbsp;Accept Advertisements</a></li>
			<li class="sub-link dashLink"><a href="<?php echo base_url().'administration/acceptExtend/view/all'?>"><span class="glyphicon glyphicon-repeat"></span>&nbsp;&nbsp;Extend Requests</a></li>
			<li class="sub-link dashLink"><a href="<?php echo base_url().'administration/acceptFeatured/view/all'?>"><span class="glyphicon glyphicon-ok"></span>&nbsp;&nbsp;Featured Requests</a></li>
			<li class="dashLink "><a href="<?php echo base_url().'administration/user_management'?>"><span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;User Management</a></li>
			<li class="dashLink"><a href="<?php echo base_url().'report'?>"><span class="glyphicon glyphicon-folder-open"></span>&nbsp;&nbsp;Generate Reports</a></li>
			<li class="dashLink"><a href="<?php echo base_url().'administration/design_configuration'?>"><span class="glyphicon glyphicon-link"></span>&nbsp;&nbsp;Design Configuration</a></li>
          </ul>
</div>
<div class="col-md-10 col-md-offset-2 ">
	   			  <?php
    			if(isset($status_accept) &&$status_accept==TRUE){
			  				echo '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button> 
			  				Featured request accepted.
			  				</div>'; 
			  			}
						else if(isset($status_decline) &&$status_decline==TRUE){
			  				echo '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button> 
			  				Featured request declined.
			  				</div>'; 
			  			}?> 
<div class="">
	<table class="table table-striped ">
 		<table class="table table-hover">
      <thead>
        <tr>
          <th></th>
          <th>Title</th>
          
          <th>Username</th>
          

        </tr>
      </thead>
      <tbody>
      	<?php foreach($Ads as $ad){?>
        <tr>
        <td style="max-width: 210px;">
        	<?php 
          		if($ad['Image']!=NULL){
			    		echo '<img width="100" src="'.base_url().$ad['Image'].'" class="img-rounded pull-right"/>';
					}else{
						echo '<img width="100" src="'.base_url().'images/Advertisement/imagenotfound.png" class="img-rounded pull-right"/>';
				}          	
          	?>
        </td>
          <td style="max-width: 210px;">
          	<?php 
          		echo '<a class="btn-link pull-left" href="'.base_url().'advertisement/viewAd/'.$ad['adId'].'">'.$ad['title'].'</a></p></div>';          	
          	?>
          </td>
          
          
 			<td style="max-width: 240px;">          	<?php 
          		echo '<a class="btn-link pull-left" href="'.base_url().'profile/'.$ad['username'].'">'.$ad['username'].'</a></p></div>';          	
          	?></td>
          
          <td style="max-width: 240px;">
         <?php 
         echo '<a href="'.base_url().'administration/acceptFeatured/accept/'.$ad['id'].'" class="btn btn-success"><span class="glyphicon glyphicon-ok-circle"></span>&nbsp;&nbsp;Accept&nbsp;</a>&nbsp;';
		  echo '<a href="'.base_url().'administration/acceptFeatured/decline/'.$ad['id'].'" class="btn btn-danger"><span class="glyphicon glyphicon-remove-circle"></span>&nbsp;&nbsp;Decline&nbsp;</a>'; ?>
          </td>
        </tr>
        <?php } ?>
      </tbody>
    </table>
	</table>

