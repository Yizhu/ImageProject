<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<script src="cufon-yui.js" type="text/javascript"></script>
<script src="Eraser_500.font.js" type="text/javascript"></script>
<script type="text/javascript">
	Cufon.replace('h1');
</script>
<script type="text/javascript" src="jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="jquery.slidertron-1.3.js"></script>
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800" rel="stylesheet" />

<style type="text/css">
  img {
  width: auto;
  height : auto;
  max-height: 100%;
  max-width: 100%;
  
   }
 .picture {
		float:left;
		width: 200px;
		padding-right:2pt;
		padding-bottom:5pt;
	}
 .score{
    font-size: 11pt;
	font-weight: 500;
	color: #EA0C0C;

 }

	</style>
</head>
<body>
<div class="text">
<?php
//DB CONNECT
$dbc=mysql_connect('127.0.0.1','kyz','family89')
	or die('Error connecting to MySQL server');
	mysql_select_db('upload',$dbc) or die ('Can\'t use upload : ' . mysql_error());
	$result = mysql_query("select count(*) as number from images");
	while($row = mysql_fetch_array($result))
	{
	$num = $row['number'];
	}
if ($_FILES["file"]["error"] > 0){
echo "Error: " . $_FILES["file"]["error"];
}else{
/*echo "檔案名稱: " . $_FILES["file"]["name"]."<br/>";
echo "檔案類型: " . $_FILES["file"]["type"]."<br/>";
echo "檔案大小: " . ($_FILES["file"]["size"] / 1024)." Kb<br />";
echo "暫存名稱: " . $_FILES["file"]["tmp_name"];*/

list($file,$kzm)=explode(".",$_FILES["file"]["name"]);
$uploadfile = "upload/".$num.".".$kzm;
move_uploaded_file($_FILES["file"]["tmp_name"],$uploadfile);
exec("ImageAesthetic2013.exe $uploadfile > text1.txt",$return_var);
echo "<div class='picture'><img src=\"{$uploadfile}\" /></div>";
$delimiter = "\n";
$i = 1;
$fp = fopen( 'text1.txt', 'r' );
echo "<br /><div class='score'><h1>score: ";
	$buffer = stream_get_line( $fp, 1024, $delimiter );
	if($buffer == "-1.$")
	$buffer="10.0";
	echo $buffer;
echo "</h1></div>";	
$q = mysql_query("INSERT INTO images (id,score,date,url) VALUES ('".$num."','".(float)$buffer."',now(),'".$uploadfile."')");
	if(!$q) { echo mysql_error() . ' - ' . mysql_errno(); }
}
?>
<br/>
</div>

</body>
</html>