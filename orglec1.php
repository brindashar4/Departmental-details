<?php 
ob_start();
  session_start();
  if(!isset($_SESSION['loggedInUser'])){
    //send the iser to login page
    header("location:index.php");
}
  include_once('head.php'); 
 include_once('header.php'); 
  
  if($_SESSION['username'] == ('hodextc@somaiya.edu') || $_SESSION['username'] == ('member@somaiya.edu') || $_SESSION['username'] == ('hodcomp@somaiya.edu') )
  {
	    include_once('sidebar_hod.php');

  }
  else
	  include_once('sidebar.php');
  
  /*$_SESSION["Username"] = 'test';
  $user = $_SESSION["Username"];
  echo $user;*/
  
 

?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

<!-- Main content -->
        <section class="content">
          <div class="row">
            <!-- left column -->
            <div class="col-md-6">
              <!-- general form elements -->
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Redirection to Guest Lecture Organised Form</h3>

                </div><!-- /.box-header -->
                <!-- form start -->
				<?php //echo $_SESSION['username'];?>
                <form role="form" action="" method="POST">
                  <div class="box-body">
                    <div class="form-group">
                    <label for="activity">Number of guest lectures to be entered</label>
                    <input type="number" id="count" name="count"/>
                    </div>
                  </div><!-- /.box-body -->

                  <div class="box-footer">
                    <button type="submit" name="submit_count" id="submit" value="" class="btn btn-primary">Log Activity!</button>
                    <button type="submit" name="cancel" id="cancel" value="" class="btn btn-primary">Cancel</button>
				<a href="menu.php?menu=4 "> <u>Back to Invited for/Organised Guest Lecture Menu</u></a>


                  </div>
				  <?php
				  $username = $_SESSION['username'];
					if ($_SERVER["REQUEST_METHOD"] == "POST") {
					 if(isset($_POST['submit_count']))
					  {
						$count = $_REQUEST["count"];
					  }
					  else{
					  $count = 0;
					  }
					$_SESSION['count'] = $count;
					if($count <=0 )
					{
						$result="Don't enter zero or negative value<br>";
						echo '<div class="error">'.$result.'</div>';

					}
					else{
					if($_SESSION['username'] == 'hodextc@somaiya.edu' || $_SESSION['username'] == 'member@somaiya.edu' || $_SESSION['username'] == 'hodcomp@somaiya.edu')
					{
						header("location:organised_guest_hod.php?alert=success");

					}
					else
						header("location:organised_guest.php?alert=success");
					}
					}
						 
					if(isset($_POST['cancel']))
					  {
					if($_SESSION['username'] == 'hodextc@somaiya.edu' || $_SESSION['username'] == 'member@somaiya.edu' || $_SESSION['username'] == 'hodcomp@somaiya.edu')
						{
							header("location:view_organised_hod_lec.php");

						}
						else
							header("location:view_organised_lec.php");
						
					  }
						
					?>
                </form>
                
                </div>
              </div>
           </div>      
        </section>               
  </div><!-- /.content-wrapper -->        






    
    
<?php include_once('footer.php'); ?>
   
   
