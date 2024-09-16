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
		if(etype.value=="")
		{ 
		alert("Please Select Events Type...!");
		etype.focus();
		return false 
		}
	}
	with(thisform)
	{	    
		if(title.value=="")
		{ 
		alert("Enter Enter Events Title...!");
		title.focus();
		return false 
		}
	}
	with(thisform)
	{	    
		if(msg.value=="")
		{ 
		alert("Enter Events Message...!");
		msg.focus();
		return false 
		}
	}
	with(thisform)
	{	    
		if(image.value=="")
		{ 
		alert("Select Events Image File...!");
		image.focus();
		return false 
		}
	}
	with(thisform)
	{	    
		if(file.value=="")
		{ 
		alert("Select Events File...!");
		file.focus();
		return false 
		}
	}
	
}
</script>
<?php
error_reporting(error_reporting() & ~E_NOTICE);
include('connectdb.php');

if(isset($_POST['EPost']))
{		
	$sid=$_SESSION['s1'];
	$sname=$_SESSION['s2'];
	
	$etype=$_POST['etype'];
	$title=$_POST['title'];
	$msg=$_POST['msg'];
	
	//Events Image
	$file=$_FILES['image']['tmp_name'];
	$data= addslashes(file_get_contents($_FILES['image']['tmp_name']));
	$data_name= addslashes($_FILES['image']['name']);
	move_uploaded_file($_FILES["image"]["tmp_name"],"Eimage/" . $_FILES["image"]["name"]);
	$eimage="Eimage/" . $_FILES["image"]["name"];		
		
	//Events File
	$file1=$_FILES['file']['tmp_name'];
	$data1= addslashes(file_get_contents($_FILES['file']['tmp_name']));
	$data_name1= addslashes($_FILES['file']['name']);
	move_uploaded_file($_FILES["file"]["tmp_name"],"Efile/" . $_FILES["file"]["name"]);
	$efile="Efile/" . $_FILES["file"]["name"];
	
	$pdate=$_POST['pdate'];
	
	$query="update events set etype='".$etype."',title='".$title."',msg='".$msg."',image='".$eimage."',file='".$efile."',pdate='".$pdate."' where eid='".$_REQUEST['e1']."' and sid='".$sid."'";
	$reg=mysql_query($query);
	
	if($reg)
	{
		header("location:Group Events Update.php?v2='yes'");		
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
        <form action="" method="post" enctype="multipart/form-data" onsubmit="return check(this);">
        	<table width="598" height="430" border="0">
  <tr>
    <td width="362"><div align="right">Events Type:</div></td>
    <td width="226">
      <select name="etype" id="etxt">
      <option value="">--Please Select Events Type--</option>
      <option value="Meeting">Meeting</option>
      <option value="Job">Job</option>
      <option value="Notes">Notes</option>
      </select>
      </td>
  </tr>
  <tr>
    <td><div align="right">Title:</div></td>
    <td>
      <input type="text" name="title" id="etxt" value="<?php echo $_REQUEST['e3']; ?>" /></td>
  </tr>
  <tr>
    <td><div align="right">Message:</div></td>
    <td><textarea name="msg" id="emsg"><?php echo $_REQUEST['e4']; ?></textarea></td>
  </tr>
  <tr>
    <td><div align="right">Events Image:</div></td>
    <td>
      <input type="file" name="image" /></td>
  </tr>
  <tr>
    <td><div align="right">Events File:</div></td>
    <td>
      <input type="file" name="file" /></td>
  </tr>
  <tr>
    <td><div align="right">Post Date:</div></td>
    <td>
      <input type="text" name="pdate" id="etxt" readonly="readonly"  value="<?php echo date("d/m/Y"); ?>"/></td>
  </tr>
  <tr>
    <td><div align="right">
      <input type="submit" name="EPost" id="ebtn" value="Post" />
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