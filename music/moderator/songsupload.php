



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="../css/bootstrap.css" rel="stylesheet" type="text/css" />

<script src="../js/bootstrap.min.js" type="application/javascript">

</script>


<style>
.back{

width:100%;	
}
body{

font-family:"Palatino Linotype", "Book Antiqua", Palatino, serif;	
}
.nav-link{
color:#FFF;	
}
.table{
color:black;	

}
.back{
background-color:#000;	
}
</style>

<script>

function songs()
{
	
	var songname=document.myform.songname.value;  
var image=document.myform.image.value; 
var song=document.myform.song.value;  
  
if (songname==null || songname==""){  
  alert("Song title can't be blank");  
  return false;  
}else if(image==null || image==""){  
  alert("Image must upload");  
  return false;  
  }
  else if(song==null || song==""){  
  alert("Song must upload");  
  return false;  
  }  
  	
}

</script>

</head>


<body>

<div class="container-fluid">
<div class="row back">

<div class="col-lg-2 col-sm-2">
<img src="../image/logo.svg" /> <br />

</div>

<div class="col-lg-7 col-sm-7">
<nav class="nav nav-fill navbar-dark float-right">
  
  <a class="nav-link active" href="../index.php">Home</a>
  <a class="nav-link active" href="display.php">All Songs</a>
  <a class="nav-link active" href="songsupload.php">Upload Songs</a>
  
  <a class="nav-link" href="../logout.php">Sign Out</a>
  <a class="nav-link" href=''><?php session_start(); echo "Profile: ".$_SESSION['email'];?> </a>

</nav>

</div>
</div>
<div class="row clearfix">
<div class="col-12 clearfix">
<h1 class="text-center"><u> Moderator Profile</u></h1>
</div>

<br />
<div class="container"> 

<div class="row container">



<div class="form-control col-4">

<h1 class="text-center">Upload Song</h1>
<form action="songs.php" method="post"  enctype="multipart/form-data" name="myform" onsubmit="return songs();">
<!-- Albumn <input type="text" class="form-control" name="albumn" /> -->
Song Name <input type="text" class="form-control" name="songname" />
Image <input type="file" class="form-control" name="image" />
Song <input type="file" class="form-control" name="song" />
Type <input type="radio" name="type" value="mp3">Mp3
<!-- <input type="radio" value="mp4" name="type"> Video -->
<br>
<input type="submit" class="btn btn-danger my-2" name="Upload" value="Upload" />
</form>
 </div>
</div>

<br> <br>

<br> 
</div>
<div class="card-footer back">

<div class="row">
<div class="col-12">
<center>
<img src="../image/logo.svg" />

<h6>All rights reserved.</h6>
</center>
</div>
</div>
</div>

</body>
</html>
