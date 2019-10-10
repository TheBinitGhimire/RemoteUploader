<?php
/*
	Binit's Remote Uploader
	
	This PHP-based tool is designed to download files from a different server to your server. It reduces the time you need to spend for uploading larger files to your web server.
	
	You don't have to follow the DownloadFromWebsite-StoreInYourDevice-UploadToYourWebsite procedure since this tool can perform the task with a single step (i.e. to download the file automatically to your website).
	
	Contact the Developer:
	Name: Binit Ghimire
	E-mail: thebinitghimire@gmail.com
	
	Facebook Profile: https://www.facebook.com/InternetHeroBINIT
	Facebook Page: https://www.facebook.com/thebinitghimire
	Twitter: https://twitter.com/WHOISBinit (@WHOISBinit)
	GitHub: https://github.com/thebinitghimire/
	YouTube Channel: https://www.YouTube.com/user/thebinitghimire
 */

?>
<!DOCTYPE HTML>
<html>
<head>
<title>Binit's Remote Uploader</title>
<style>
	body{text-align:center;}
	
	input{
		width:50%;
		height:3vw;
		margin-bottom:5px;
		}
	
	input::placeholder{font-size:2vw;}
		
	button{
		background-color:#000000;
		color:#ffffff;
		height:5vw;
		font-size:2vw;
		}
</style>

<script>
	console.log("%c%s","color: #ffffff; background: #000000; font-size: 5vw;","Binit's Remote Uploader");
</script>
</head>
<body>
<h1>Binit's Remote Uploader</h1>
	<form method="POST">
		<input name="fileurl" placeholder="Enter the URL of file to upload!" /><br>
		<button name="submit" type="submit">Start Uploading!</button>
	</form>
</body>
</html>
<?php

set_time_limit (24 * 60 * 60);
if (!isset($_POST['submit'])) die();
$URL = $_POST['fileurl'];
$filename = basename($URL);
$file = fopen ($URL, "rb");
if ($file) {
  $newfile = fopen ($filename, "wb");
  if ($newfile)
  while(!feof($file)) {
    fwrite($newfile, fread($file, 1024 * 8 ), 1024 * 8 );
  }
}
if ($file) {
  fclose($file);
}
if ($newfile) {
  fclose($newfile);
}

?>
