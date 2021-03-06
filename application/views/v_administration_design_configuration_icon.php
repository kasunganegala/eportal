<link href="<?php echo base_url();?>css/dashboard.css" rel="stylesheet">
<div class="col-sm-3 col-md-2 sidebar navbar-default">
           <div class="h5 text-center dashboard"><a href="<?php echo base_url().'administration/user_management'?>"><span class="glyphicon glyphicon-link"></span>&nbsp;Dashboard</a></div>
          <ul class="nav nav-sidebar">
            <li class="sub-link dashLink"><a href="<?php echo base_url().'administration/configDetails'?>"><span class="glyphicon glyphicon-cog"></span>&nbsp;&nbsp;Configure Details</a></li>
            <li class="sub-link dashLink"><a href="<?php echo base_url().'rules/new_ads'?>"><span class="glyphicon glyphicon-thumbs-up"></span>&nbsp;&nbsp;Accept Advertisements</a></li>
			<li class="sub-link dashLink"><a href="<?php echo base_url().'administration/acceptExtend/view/all'?>"><span class="glyphicon glyphicon-repeat"></span>&nbsp;&nbsp;Extend Requests</a></li>
			<li class="sub-link dashLink"><a href="<?php echo base_url().'administration/acceptFeatured/view/all'?>"><span class="glyphicon glyphicon-ok"></span>&nbsp;&nbsp;Featured Requests</a></li>
			<li class="dashLink "><a href="<?php echo base_url().'administration/user_management'?>"><span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;User Management</a></li>
			<li class="dashLink"><a href="<?php echo base_url().'report'?>"><span class="glyphicon glyphicon-folder-open"></span>&nbsp;&nbsp;Generate Reports</a></li>
			<li class="dashLink"><a href="<?php echo base_url().'administration/design_configuration'?>"><span class="glyphicon glyphicon-link"></span>&nbsp;&nbsp;Design Configuration</a></li>
  			<li class="sub-link dashLink"><a href="<?php echo base_url().'permissions'?>"><span class="glyphicon glyphicon-cog"></span>&nbsp;&nbsp;Manage Permissions</a></li>  
          </ul>

          <ul class="nav nav-sidebar ">
          </ul>
</div>

<div class="col-md-7 col-md-offset-3 breadcrumb img-thumbnail">
	<div class="h2 text-center">
		Site icon configuration
	</div>
	
	<!--Start icon configuration----------------------------------------------->
	<div class="col-md-12 breadcrumb-white img-thumbnail">
		<div class="h3">
			Select an icon image
		</div>
		<div>
			<?php
				$formattributes = array('class' => 'form-horizontal', 'role' => 'form', 'enctype'=>'multipart/form-data' );
				echo form_open('administration/icon_configuration_update/',$formattributes);
			?>
			
			<?php
				$profilepictureattributes = array('class' => 'form-control','name'=>'userfile','size'=>'60');
				 echo form_upload($profilepictureattributes);
			?>
			<br />
			<br />
			<?php
				$submit = array('class' => 'btn btn-primary pull-right','name'=>'logo_submit ','value'=>'Update icon');
				echo '<div class="col-md-12">'.form_submit($submit).'</div>';
  				
  				echo form_close();
  			?>
  		<br />
		<?php
			
			if(isset($status) && $status=='success'){
				echo '<hr />';
				echo '<div class="col-md-12 alert alert-success">';
				echo '<div class="h3 text-center">Successfully changed the site icon</div>';
				echo '<hr />';
				echo '<b>Server status : </b>'.$status.'<br>';
				echo '<b>Server reply : </b>'.$message;
				echo '</div>';
			}else if(isset($status) && $status=='fail'){
				echo '<hr />';
				echo '<div class="col-md-12 alert alert-danger">';
				echo '<div class="h3 text-center">Error occured</div>';
				echo '<hr />';
				echo '<b>Server status : </b>'.$status.'<br>';
				if(isset($uploadErr)){
					echo '<b>Server reply : </b>'.$message.$uploadErr;
				}else{
					echo '<b>Server reply : </b>'.$message;
				}
				echo '</div>';
			}else{
				if(isset($message)){
					echo '<hr />';
					echo '<div class="col-md-12 alert alert-info">';
					echo "$message";
					echo '</div>';
				}
			}
		?>
		</div>
		<br />
		<div class="col-md-12 breadcrumb img-thumbnail">
			<div class="h4 text-center">
				Current site-icon details
			</div>
			<hr />
			<div>
				<b>Updated by :</b> <?php if(isset($name)){ echo $name;}?>
				<br />
				<b>Updated on :</b> <?php if(isset($dateandtime)){ echo $dateandtime;} ?>
				<br />
				<b>Original image name :</b> <?php if(isset($original_name)){ echo $original_name; } ?> 
				<br />
				<b>Image size :</b> <?php if(isset($size)){ echo $size.' Kilobytes'; } ?> 
			</div>
			<br />
			<a class="btn btn-default pull-right" href="<?php echo base_url().'administration/history/icon/all'?>"> View entire logo history</a>
		</div>
	</div>
	<!--End icon configuration----------------------------------------------->
</div>