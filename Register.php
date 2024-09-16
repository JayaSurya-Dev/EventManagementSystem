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
		alert("Enter Your Register Number...!");
		rno.focus();
		return false 
		}
	}
	with(thisform)
	{	    
		if(name.value=="")
		{ 
		alert("Enter Your Name...!");
		name.focus();
		return false 
		}
	}
	with(thisform)
	{	    
		if(gender.value=="")
		{ 
		alert("Please Select Gender..!");
		gender.focus();
		return false 
		}
	}
	with(thisform)
	{	    
		if(age.value=="")
		{ 
		alert("Enter Your Age...!")
		age.focus();
		return false 
		}
	}
	with(thisform)
	{	    
		if(dnation.value=="")
		{ 
		alert("Please Select Destination...!")
		dnation.focus();
		return false 
		}
	}
	with(thisform)
	{	    
		if(mstatus.value=="")
		{ 
		alert("Please Select Marital Status ...!")
		mstatus.focus();
		return false 
		}
	}
	with(thisform)
	{	    
		if(course.value=="")
		{ 
		alert("Please Select Your Course ...!")
		course.focus();
		return false 
		}
	}
	with(thisform)
	{	    
		if(year.value=="")
		{ 
		alert("Please Select  Your Year ...!")
		year.focus();
		return false 
		}
	}
	with(thisform)
	{	    
		if(dname.value=="")
		{ 
		alert("Please Select Your Departments Name...!")
		dname.focus();
		return false 
		}
	}
	with(thisform)
	{	    
		if(email.value=="")
		{ 
		alert("Enter Your E-Mail ID ...!")
		email.focus();
		return false 
		}
	}
	with(thisform)
	{	    
		if(pno.value=="")
		{ 
		alert("Enter Your Mobile Number ...!")
		pno.focus();
		return false 
		}
	}
	with(thisform)
	{	    
		if(detail.value=="")
		{ 
		alert("Enter Your Address...!")
		detail.focus();
		return false 
		}
	}
	with(thisform)
	{	    
		if(file.value=="")
		{ 
		alert("Please Select Your Profile Photos ...!")
		file.focus();
		return false 
		}
	}
	with(thisform)
	{	    
		if(rdate.value=="")
		{ 
		alert("Enter Register Date ...!")
		rdate.focus();
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
	$rno=$_POST['rno'];
	$name=$_POST['name'];
	$gender=$_POST['gender'];
	$age=$_POST['age'];
	$dnation=$_POST['dnation'];
	$mstatus=$_POST['mstatus'];
	$course=$_POST['course'];
	$year=$_POST['year'];
	$dname=$_POST['dname'];
	$email=$_POST['email'];
	$pno=$_POST['pno'];
	$address=$_POST['detail'];
	
	//Student Photo 
	$file=$_FILES['file']['tmp_name'];
	$data= addslashes(file_get_contents($_FILES['file']['tmp_name']));
	$data_name= addslashes($_FILES['file']['name']);
	move_uploaded_file($_FILES["file"]["tmp_name"],"Students/" . $_FILES["file"]["name"]);
	$location="Students/" . $_FILES["file"]["name"];
	
	$rdate=$_POST['rdate'];	
	
	//Send Mail Password...
	$password=rand(10000,50000);
	$to = $email;
	$subject = "Login Password";
	$message = "Thank You"."User Name:".$name.",Your Login Password:".$password;
	$from = "immaslmmail@gmail.com";
	$headers = "From:" . $from;
	mail($to,$subject,$message,$headers);
	
	$query="insert into students(rno,password,name,gender,age,destin,mstatus,course,year,depart,email,pno,address,photos,rdate,gname) values('".$rno."','".$password."','".$name."','".$gender."','".$age."','".$dnation."','".$mstatus."','".$course."','".$year."','".$dname."','".$email."','".$pno."','".$address."','".$location."','".$rdate."','Group')";
	$reg=mysql_query($query);
	
	if($reg)
	{
		header("location:Login.php?v='yes'");		
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
                <li><a href="index.html" class="current">Home</a></li>
                <li><a href="Register.php">Register</a></li>
                <li><a href="Login.php">Login</a></li>
                <li><a href="gallery.html">Gallery</a></li>
                <li><a href="contact.html">Contact</a></li>
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
        	<h4>New Students Register...</h4>           
            <div class="cleaner"></div>
        </div>        
      <div class="register">
        <form action="Register.php" method="post" enctype="multipart/form-data" onsubmit="return check(this);">
        	<table width="599" height="800" border="0">
  <tr>
    <td width="289" height="42"><div align="right" id="r">Reg No:</div></td>
    <td width="300">
      <input type="text" name="rno" id="txt" /></td>
  </tr>
  <tr>
    <td height="46"><div align="right" id="r">Name:</div></td>
    <td><input type="text" name="name" id="txt" /></td>
  </tr>
  <tr>
    <td height="44"><div align="right" id="r">Gender:</div></td>
    <td>
      <select name="gender" id="txt">
      <option value="">Please Select Gender</option>
      <option value="Male">Male</option>
      <option value="Female">Female</option>
      </select>
    </td>
  </tr>
  <tr>
    <td height="47"><div align="right" id="r">Age:</div></td>
    <td><input type="text" name="age" id="txt" maxlength="2" /></td>
  </tr>
  <tr>
    <td height="47"><div align="right" id="r">Destination:</div></td>
    <td><input type="text" name="dnation" id="txt" /></td>
  </tr>
  <tr>
    <td height="47"><div align="right" id="r">Marital Status:</div></td>
    <td><select name="mstatus" id="txt">
      <option value="">Please Select Status</option>
      <option value="Married">Married</option>
      <option value="Unmarried">Unmarried</option>     
    </select></td>
  </tr>
   <tr>
    <td height="42"><div align="right" id="r">Course:</div></td>
    <td><select name="course" id="txt">
      <option value="">Please Select Course</option>
      <option value="B.Sc">B.Sc</option>
      <option value="BCA">BCA</option>
      <option value="M.Sc">M.Sc</option>
      <option value="MCA">MCA</option>
    </select></td>
  </tr>
   <tr>
    <td height="42"><div align="right" id="r">Year:</div></td>
    <td><select name="year" id="txt">
      	<option value="">Please Select Year</option>
      	<option value="2011">2011</option>
		<option value="2012">2012</option>
		<option value="2013">2013</option>
		<option value="2014">2014</option>	
		<option value="2015">2015</option>	
		<option value="2016">2016</option>
		<option value="2017">2017</option>
		<option value="2018">2018</option>
		<option value="2019">2019</option>	
		<option value="2020">2020</option>
		<option value="2021">2021</option>
		<option value="2022">2022</option>
    </select></td>
  </tr>
  <tr>
    <td height="45"><div align="right" id="r">Departments:</div></td>
    <td><select name="dname" id="txt">
      <option value="">Please Select Departments</option>
      <option value="Computer Science">Computer Science</option>     
      </select></td>
  </tr>
  <tr>
    <td height="44"><div align="right" id="r">E-Mail ID:</div></td>
    <td><input type="text" name="email" id="txt" /></td>
  </tr>
  <tr>
    <td height="42"><div align="right" id="r">Phone No:</div></td>
    <td><input type="text" name="pno" id="txt" maxlength="10" /></td>
  </tr>
  <tr>
    <td height="133"><div align="right" id="r">Address:</div></td>
    <td><label for="atxt"></label>
      <textarea name="detail" id="atxt" cols="45" rows="5"></textarea></td>
  </tr>
 
  <tr>
    <td height="36"><div align="right" id="r">Photos:</div></td>
    <td>
      <input type="file" name="file" /></td>
  </tr>
  <tr>
    <td><div align="right" id="r">Date:</div></td>
    <td><input type="text" name="rdate" id="txt" readonly="readonly" value="<?php echo date("d/m/Y"); ?>" /></td>
  </tr>
  <tr>
    <td height="46"><div align="center">
      <input type="submit" name="Submit" id="btn" value="Submit" />
    </div></td>
    <td><div align="center">
      <input type="reset" name="Clear" id="btn" value="Clear" />
    </div></td>
  </tr>
</table>

        </form>        	
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