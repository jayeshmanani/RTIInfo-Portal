
<?php
/*header("Content-Type: application/pdf");

$file = $_GET["file"] .".pdf";
header("Content-Disposition: attachment; filename=" . urlencode($file));   
header("Content-Type: application/octet-stream");
header("Content-Type: application/download");
header("Content-Description: File Transfer");            
header("Content-Length: " . filesize($file));
//flush(); // this doesn't really matter.
$fp = fopen($file, "r");
while (!feof($fp))
{
    echo fread($fp, 65536);
    flush(); // this is essential for large downloads
} 
fclose($fp); 
*/
/*$conn = mysqli_connect('localhost','root','','demo');
if(!$conn)
{
	die("error" . mysqli_error($conn));
}	
$res = mysqli_query("select * from file");
while($row = mysqli_fetch_array($res))
{
	echo $row["filename"];
	echo "<input TYPE="submit" name="retrive" value="retrive" onclick="<?php echo $row=["path"]; ?>"/>";
}*/
?>

<!DOCTYPE html>
<html>
<head>
	<title>Untitled Document</title>
</head>
<body>
<?php
	$conn = mysqli_connect('localhost','root','','test');
	$res = mysqli_query($conn,"select * from content");
	echo "<table>";
	while($row = mysqli_fetch_array($res))
	{
		echo "<tr>";
		echo "<td>"; echo $row["filename"]; echo "</td>";
		echo"<td>"; ?> <a href="<?php echo $row["filepath"]; ?>">Download</a> <?php echo "</td>";
	}
?>
</body>
</html>