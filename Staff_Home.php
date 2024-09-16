<?php
	session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Alumni Association</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="css/tooplate_style.css" rel="stylesheet" type="text/css" />

<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />
<script src="js/jquery.min.js" type="text/javascript"></script>
<script src="js/jquery.nivo.slider.js" type="text/javascript"></script>

<script type="text/javascript">
$(window).load(function() {
	$('#slider').nivoSlider({
		effect:'random',
		slices:15,
		animSpeed:500,
		pauseTime:3000,
		startSlide:0, //Set starting Slide (0 index)
		directionNav:false,
		directionNavHide:false, //Only show on hover
		controlNav:false, //1,2,3...
		controlNavThumbs:false, //Use thumbnails for Control Nav
		pauseOnHover:true, //Stop animation while hovering
		manualAdvance:false, //Force manual transitions
		captionOpacity:0.8, //Universal caption opacity
		beforeChange: function(){},
		afterChange: function(){},
		slideshowEnd: function(){} //Triggers after all slides have been shown
	});
});
</script>
<?php
error_reporting(error_reporting() & ~E_NOTICE);
	if($_REQUEST['v']!=null)
	{
		 echo"<script>alert('Events Post Successfully')</script>";
	}
	if($_REQUEST['v1']!=null)
	{
		 echo"<script>alert('Group Create Successfully')</script>";
	}
	
?>

</head>
<body>
<div id="tooplate_body_wrapper">
<div id="tooplate_wrapper">
	<div id="tooplate_top_bar"></div>	
    
    <div id="tooplate_header">
      <div id="tooplate_menu">
      <ul>
                <li><a href="Staff_Home.php" class="current">Home</a></li>
                <li><a href="Events Post.php">Post Events</a></li>               
                <li><a href="Events Update.php">Update</a></li>
                <li><a href="Events Delete.php">Delete</a></li>
                <li><a href="Staff.php">Logout</a></li>
            </ul>    	
        </div> <!-- end of tooplate_menu -->
    </div> <!-- end of forever header -->
    
    <div id="tooplate_middle">
    	<div id="slider">
            <a href="#"><img src="images/slideshow/05.jpg" alt="" title="Alumni Association" /></a>
            <a href="#"><img src="images/slideshow/02.jpg" alt="" title="Alumni Association" /></a>
            <a href="#"><img src="images/slideshow/03.jpg" alt="" title="Alumni Association" /></a>
            <a href="#"><img src="images/slideshow/04.jpg" alt="" title="Alumni Association" /></a>
            <a href="#"><img src="images/slideshow/01.jpg" alt="" title="Alumni Association" /></a>
        </div>	
	</div> <!-- end of middle -->
    
    <div id="tooplate_main">
    
    	<div class="col_allw300">
        	<h4><marquee direction="left">Welcome to <?php  error_reporting(error_reporting() & ~E_NOTICE); echo $_SESSION['s2']; ?></marquee></h4>
           
            <div class="cleaner"></div>
        </div>        
        <div class="shome">
        	<table width="600" border="0">
  <tr>
    <td width="424"><div align="right" id="d1">Staff ID:</div></td>
    <td width="166"><?php  error_reporting(error_reporting() & ~E_NOTICE); echo $_SESSION['s4']; ?></td>
  </tr>
  <tr>
    <td><div align="right" id="d1">Name:</div></td>
    <td><?php  error_reporting(error_reporting() & ~E_NOTICE); echo $_SESSION['s2']; ?></td>
  </tr>
  <tr>
    <td><div align="right" id="d1">E-Mail ID:</div></td>
    <td><?php  error_reporting(error_reporting() & ~E_NOTICE); echo $_SESSION['s5']; ?></td>
  </tr>
  <tr>
    <td><div align="right" id="d1">Mobile No:</div></td>
    <td><?php  error_reporting(error_reporting() & ~E_NOTICE); echo $_SESSION['s6']; ?></td>
  </tr>
  <tr>
    <td><div align="right" id="d1">Address:</div></td>
    <td><?php  error_reporting(error_reporting() & ~E_NOTICE); echo $_SESSION['s7']; ?></td>
  </tr>
  <tr>
    <td><div align="right"></div></td>
    <td>&nbsp;</td>
  </tr>
</table>
<p></p>
<p></p>
<table width="600" height="140" border="0">
  <tr>
    <td><div align="center" id="d2"><a href="Events Post.php">Events Post</a></div></td>
    </tr>
  <tr>
    <td><div align="center" id="d2"><a href="New Group.php">Group Create</a></div></td>
    </tr>
  <tr>
    <td><div align="center" id="d2"><a href="Events Update.php">Update Events</a></div></td>
    </tr>
  <tr>
    <td><div align="center" id="d2"><a href="Events Delete.php">Delete Events</a></div></td>
    </tr>
    <tr>
    <td><div align="center" id="d2"><a href="Change Password.php">Change Password</a></div></td>
    </tr>
</table>


  </div>
        <div class="simg"><img src="<?php echo $_SESSION['s3']; ?>" width="150" height="150" /></div>
        <div class="cleaner"></div>
    </div> <!-- end of main -->

	<div class="cleaner"></div>
</div> <!-- end of forever wrapper -->
</div> <!-- end of forever body wrapper -->

<div id="tooplate_footer_wrapper">
	<div id="tooplate_footer">
	  <div class="cleaner"></div>
    </div>
</div>

<div id="tooplate_copyright_wrapper">
	<div id="tooplate_copyright">
	
    </div>
</div>
</body>
</html>