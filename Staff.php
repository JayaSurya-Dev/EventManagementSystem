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
		if(rno.value=="")
		{ 
		alert("Enter Staff Login ID...!");
		rno.focus();
		return false 
		}
	}
	with(thisform)
	{	    
		if(password.value=="")
		{ 
		alert("Enter Staff Login Password...!");
		password.focus();
		return false 
		}
	}
}
</script>
<?php
error_reporting(error_reporting() & ~E_NOTICE);
if($_REQUEST['v']!=null)
{
	 echo"<script>alert('Staff Register Successfully')</script>";
}
?>
<?php
error_reporting(error_reporting() & ~E_NOTICE);
include('connectdb.php');
if(isset($_POST['Login']))
{
	$cmd="select * from staff where lid='".$_POST['rno']."'";
	$cmd1=mysql_query($cmd);
	while($rs=mysql_fetch_array($cmd1))
	{
		if(($rs['lid']==$_POST['rno']) && ($rs['password']==$_POST['password']))
		{
			$_SESSION['s1']=$rs['sid'];
			$_SESSION['s2']=$rs['name'];
			$_SESSION['s3']=$rs['photos'];
			
			//Details
			$_SESSION['s4']=$rs['lid'];
			$_SESSION['s5']=$rs['email'];
			$_SESSION['s6']=$rs['pno'];
			$_SESSION['s7']=$rs['address'];
				
			header("location:Staff_Home.php");
		}
		else 
		{
			header("location:Staff.php");
		}			
	}
	mysql_close();			
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
                <li><a href="index.html" class="current">Home</a></li>
                <li><a href="Staff_Register.php">Register</a></li>
                <li><a href="Staff.php">Login</a></li>
                <li><a href="index.html">Back</a></li>  
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
        	<h4>Staff Login...</h4>
           
            <div class="cleaner"></div>
        </div>
        
        <div class="login">
        <form action="" method="post" onsubmit="return check(this);">
        	<table width="298" height="181" border="0">
  <tr>
    <td width="113"><div align="right" id="r1">Staff ID:</div></td>
    <td width="175">
      <input type="text" name="rno" id="txt1" /></td>
  </tr>
  <tr>
    <td><div align="right" id="r1">Password:</div></td>
    <td>
      <input type="password" name="password" id="txt1" /></td>
  </tr>
  <tr>
    <td height="45"><div align="center">
      <input type="submit" name="Login" id="btn1" value="Login" />
    </div></td>
    <td><div align="center">
      <input type="reset" name="Cancel" id="btn1" value="Cancel" />
    </div></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><div align="center" id="r1"><a href="Staff_Register.php">New Staff Click Here...</a></div></td>
  </tr>
</table>

        </form>        	
      </div>
        <div class="simage">        	
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