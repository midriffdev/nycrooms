<?php
/* Template Name: Change Password */
global $wpdb;
$user = wp_get_current_user();
$errors = array();
if(isset($_POST['reset_pass_Sbumit'])){

	 if(empty($_POST['password'])) 
		{   
            $errors['password'] = "Please enter a password";  
        } elseif(0 === preg_match("/.{12,}/", $_POST['password']))
        {  
          $errors['password'] = "Password must be at least six characters";  
        }  
        if(empty($_POST['cpassword'])) 
		{   
            $errors['password_confirmation'] = "Please enter a confirm password";  
        }  elseif(0 !== strcmp($_POST['password'], $_POST['cpassword'])) {  
              $errors['password_confirmation'] = "Passwords do not match";
        }
		
		if(empty($errors)) { 
			 $new_password = $_POST['password'];
			 $ID           = get_current_user_id();
	         wp_set_password( $new_password, $ID );
			 $message = "Password Updated Sucessfully.";
	    }


}

get_header();
?>
 <div id="primary" class="content-area">
<div id="wrapper">

<!-- Titlebar
================================================== -->


<!-- Content
================================================== -->
<div class="container">
	<div class="row">
		<!-- Widget -->
						 <?php
                       if($user->roles[0] == "administrator"){
					   ?>
						<?php include(locate_template('sidebar/admin-sidebar.php')); ?>
						<?php
						}
						?>
						<?php
                       if($user->roles[0] == "property_owner"){
					   ?>
						<?php include(locate_template('sidebar/property-owner.php')); ?>
						<?php
						}
						?>
						<?php
                       if($user->roles[0] == "tenant"){
					   ?>
						<?php include(locate_template('sidebar/tenant-sidebar.php')); ?>
						<?php
						}
						?>
						
		

		<div class="col-md-8">
			<div class="row">
				<div class="col-md-6  my-profile">
					<h4 class="margin-top-0 margin-bottom-30">Change Password</h4>
					<?php
						 if(!empty($errors)){
						   foreach($errors as $err){
							?>
							<label class="form_errors"><?php echo $err; ?></label>
							<?php
						   }
						 }
						 
                   ?>
				    <label class="reset_password_change"><?php echo $message; ?></label>
					<form role="form" action="<?php echo "http://".$_SERVER["SERVER_NAME"].$_SERVER['REQUEST_URI']; ?>" method="post" >
					<label>New Password</label>
					<input type="password" name="password" class="form-control" placeholder="Enter New Password" required />

					<label>Confirm New Password</label>
					<input type="password" name="cpassword" class="form-control" placeholder="Enter Confirm Password" required />
                       <input type="hidden" name="reset_pass_Sbumit" value="kv_yes" >
			           <input type="submit" class="margin-top-20 button" value="Save Changes" > 
					</form>
				</div>

				<div class="col-md-6">
					<div class="notification notice">
						<p>Your password should be at least 12 random characters long to be safe</p>
					</div>
				</div>

			</div>
		</div>

	</div>
</div>

<div class="margin-top-55"></div>

<!-- Back To Top Button -->
<div id="backtotop"><a href="#"></a></div>

</div>
	</div><!-- #primary -->
<style>
label.reset_password_change {
    color: green;
}
label.form_errors {
    color: red;
}
</style>
<?php
get_footer();