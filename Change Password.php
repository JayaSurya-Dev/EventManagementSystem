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

<script language="javascript">
function check(thisform)
{
	with(thisform)
	{	    
		if(opass.value=="")
		{ 
		alert("Enter Your Current Password...!");
		opass.focus();
		return false 
		}
	}
	with(thisform)
	{	    
		if(npass.value=="")
		{ 
		alert("Enter Your New Password...!");
		npass.focus();
		return false 
		}
	}
}
</script>
<?php
error_reporting(error_reporting() & ~E_NOTICE);
include('connectdb.php');
if(isset($_POST['Change']))
{
	$sid=$_SESSION['s1'];
	
	$opass=$_POST['opass']; 
	$npass=$_POST['npass'];
	
	$query="UPDATE students SET password='".$npass."' WHERE sid='".$sid."' AND password='".$opass."'";		
 	mysql_query($query);
	
	echo"<script>alert('Password Change Successfully...!');</script>";
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
                <li><a href="Student Home.php" class="current">Home</a></li>
                <li><a href="Events Post.php">Post Events</a></li>               
                <li><a href="Events Update.php">Update</a></li>
                <li><a href="Events Delete.php">Delete</a></li>
                <li><a href="Login.php">Logout</a></li>
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
        	<h4>Students Change Password...</h4>
           
            <div class="cleaner"></div>
        </div>
        
        <div class="login">
        <form action="" method="post" onsubmit="return check(this);">
        	<table width="298" height="181" border="0">
  <tr>
    <td width="113"><div align="right" id="r1">Current Password:</div></td>
    <td width="175">
      <input type="password" name="opass" id="txt1" /></td>
  </tr>
  <tr>
    <td><div align="right" id="r1">New Password:</div></td>
    <td>
      <input type="password" name="npass" id="txt1" /></td>
  </tr>
  <tr>
    <td height="45"><div align="center">
      <input type="submit" name="Change" id="btn1" value="Change" />
    </div></td>
    <td><div align="center">
      <input type="reset" name="Cancel" id="btn1" value="Cancel" />
    </div></td>
  </tr>
 
</table>

        </form>        	
      </div>
        <div class="uimage">        	
        </div>
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