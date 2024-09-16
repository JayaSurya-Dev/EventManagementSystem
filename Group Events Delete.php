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
	
}
</script>
</head>
<body>
<div id="tooplate_body_wrapper">
<div id="tooplate_wrapper">
	<div id="tooplate_top_bar"></div>	
    
    <div id="tooplate_header">
      <div id="tooplate_menu">
      <ul>
                <li><a href="Group Events.php" class="current">Home</a></li>
                <li><a href="Group Events Post.php">Post Events</a></li>               
                <li><a href="Group Events Update.php">Update</a></li>
                <li><a href="Group Events Delete.php">Delete</a></li>
                <li><a href="Group.php">Logout</a></li>
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
        <div align="center" id="tname"><marquee direction="right">****** Group Events List *****</marquee></div>        
        	<div id="eupdate">
            	<table width="755" height="60" border="2">
  <tr align="center" bgcolor="#FF8000">
    <td>Events ID</td>    
    <td>Students Name</td>
    <td>Events Name</td>
    <td>Events Title</td>      
    <td>Events Message</td>
    <td>Events Image</td>
    <td>Evnets Post Date</td>    
    <td>Events Delete</td>      
  </tr>
  <?php
  	error_reporting(error_reporting() & ~E_NOTICE);
	include('connectdb.php');

	$sid=$_SESSION['s1'];
	$gname=$_SESSION['s8'];
	
	$result=mysql_query("select * from  events where sid='".$sid."' AND gname='".$gname."'");
		while($rec = mysql_fetch_assoc($result))
		{
			 print"<tr align='center'><font color='#FFFFFF'>";
			 print"<td>";
   			 echo $rec['eid'];
			 print"</td><td>"; 		
	 		 echo $rec['sname'];		
	 		 print"</td><td>";	
	 		 echo $rec['etype'];
	 		 print"</td><td>";	 		 
			 echo $rec['title'];	
			 print"</td><td>";	 
			 echo $rec['msg'];
			 print"</td><td>";	 
			 echo "<img width='200' height='150' src='".$rec['image']."'/>";	 		
	 		 print"</td><td>";	 
			 echo $rec['pdate'];
			 print"</td><td>";	 
			 echo "<a href='Group Events Delete.php?e1=".$rec['eid']."'>Delete</a>";			 		 		 		
	 		 print"</td>";
			 print"</font></tr>";   
		}
  ?>   
 
</table>	
<?php
error_reporting(error_reporting() & ~E_NOTICE);
$eid=$_REQUEST['e1'];
$sid=$_SESSION['s1'];
$query="delete from events where eid='".$eid."' and sid='".$sid."'";
$reg=mysql_query($query);

?>
            </div>
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