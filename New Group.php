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
		if(gname.value=="")
		{ 
		alert("Please Enter Your Group Name...!");
		gname.focus();
		return false 
		}
	}	
}
</script>
<?php
error_reporting(error_reporting() & ~E_NOTICE);
include('connectdb.php');

if(isset($_POST['Submit']))
{		
	$sid=$_SESSION['s1'];
	$sname=$_SESSION['s2'];	
	$gname=$_POST['gname'];
		
	$query="update students set gname='".$gname."' WHERE sid='".$sid."'";
	$reg=mysql_query($query);
	
	if($reg)
	{
		header("location:Student Home.php?v1='yes'");		
	}	
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
                <li><a href="Post Events.php">Post Events</a></li>               
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
        	<h4><marquee direction="left">Welcome to <?php  error_reporting(error_reporting() & ~E_NOTICE); echo $_SESSION['s2']; ?></marquee></h4>
           
            <div class="cleaner"></div>
        </div>        
        <div class="shome">
        <form action="" method="post" onsubmit="return check(this);">
        	<table width="598" height="112" border="0">
  <tr>
    <td width="413"><div align="right">Group Name:</div></td>
    <td width="175">
      <input type="text" name="gname" id="etxt" /></td>
  </tr>
  <tr>
    <td><div align="right">
      <input type="submit" name="Submit" id="ebtn" value="Create Group" />
      </div></td>
    <td><div align="center">
      <input type="reset" name="Clear" id="ebtn" value="Clear" />
      </div></td>
  </tr>
</table>

        </form>                
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