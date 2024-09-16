<?php
session_start();
?>
<?php
error_reporting(E_ERROR | E_WARNING);
include('connectdb.php');

//$fullPath =$_GET["download_file"];

$fid=$_REQUEST['download_file'];

$cmd="select * from events where eid='".$fid."'";
$cmd1=mysql_query($cmd);
if($rs=mysql_fetch_array($cmd1))
{	
	$fullPath=$rs['file'];

	if ($fd = fopen ($fullPath, "r")) 
	{
   		$fsize = filesize($fullPath);
    	$path_parts = pathinfo($fullPath);
    	$ext = strtolower($path_parts["extension"]);
    	switch ($ext) 
		{
        	case "pdf":
        	header("Content-type: application/pdf");		
        	header("Content-type: audio/mp3");
			header("Content-Disposition: attachment; filename=\"".$path_parts["basename"]."\"");
        	break;
        	default;
        	header("Content-type: application/octet-stream");
        	header("Content-Disposition: filename=\"".$path_parts["basename"]."\"");
   		}	
    	header("Content-length: $fsize");
    	header("Cache-control: private"); //use this to open files directly
    	while(!feof($fd)) 
		{
        $buffer = fread($fd, 2048);
        echo $buffer;
    	}
	}
	fclose ($fd);
	exit;
	
	
}

?>