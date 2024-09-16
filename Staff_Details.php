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
</head>
<body>
<div id="tooplate_body_wrapper">
<div id="tooplate_wrapper">
	<div id="tooplate_top_bar"></div>	
    
    <div id="tooplate_header">
      <div id="tooplate_menu">
      <ul>
                <li><a href="Admin_Home.php" class="current">Home</a></li>
                <li><a href="Students_Details.php">Students Details</a></li>               
                <li><a href="Group_Details.php">Group Details</a></li>               
                <li><a href="Admin.php">Logout</a></li>
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
        	<h4><marquee direction="left">Welcome to Admin</marquee></h4>
           
            <div class="cleaner"></div>
        </div>        
        <div class="shome">        
  		  <p>&nbsp;</p>
  		  <p align="center">Staff Details</p>
  		  <p>&nbsp;</p>
           <div class="sdetails">
  		  	 <table width="755" height="60" border="2">
  <tr align="center" bgcolor="#FF8000">
    <td>S.No</td>    
    <td>Staff ID</td>
    <td>Name</td>
    <td>Gender</td>      
    <td>Age</td>
    <td>Course</td>
    <td>Year</td> 
    <td>Departments</td>
    <td>E-Mail ID</td>
    <td>Phone No</td>
    <td>Address</td>     
  </tr>
  <?php
  	include('connectdb.php');
	$result=mysql_query("select * from  staff");
		while($rec = mysql_fetch_assoc($result))
		{
			 print"<tr align='center'><font color='#FFFFFF'>";
			 print"<td>";
   			 echo $rec['sid'];
			 print"</td><td>"; 		
	 		 echo $rec['lid'];		
	 		 print"</td><td>";	
	 		 echo $rec['name'];
	 		 print"</td><td>";	 		 
			 echo $rec['gender'];	
			 print"</td><td>";	 
			 echo $rec['age'];
			 print"</td><td>";	 
			 echo $rec['course'];		 	 		
	 		 print"</td><td>";	 
			 echo $rec['year'];
			 print"</td><td>";	 
			 echo $rec['depart'];
			 print"</td><td>";	 
			 echo $rec['email'];	
			 print"</td><td>";	 
			 echo $rec['pno'];
			 print"</td><td>";	 
			 echo $rec['address'];				 		
	 		 print"</td>";
			 print"</font></tr>";   
		}
  ?>   
 
</table> 
</div>           
  		  <p>&nbsp;</p>
  		  <p>&nbsp;</p>
  		  <p>&nbsp;</p>
        </div>
        <div class="simg"><img src="images/admin.png" width="150" height="150" /></div>
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