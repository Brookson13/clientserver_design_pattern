<?php 
$con = mysqli_connect("localhost","root","","blog");
		if (mysqli_error($con)){
			die(mysqli_error($con));
		}
		if(isset($_POST['submit'])){
			$titles = $_POST['name'];
			$contents = $_POST['contents'];
			$sql = "INSERT INTO blogs (title,content) VALUE ('$titles','$contents')";
		$res = mysqli_query($con,$sql);
		}
		

?>

 <html>
	 <link type="text/css" href = "bootstrap.min.css" rel = "stylesheet"/>
	 <link type="text/css" href = "main.css" rel = "stylesheet"/>
 <head>
	 
 	<title>Blog Site</title>
	 
 </head>
 <body>
	 <header id="header">
				<a class="logo"><strong>Blog Poster</strong></a>
			</header>
	<div class="text-center"><br>
		
 	<form action="addblog.php" method="POST" role="form">
 		<textarea name="name" placeholder="Title"></textarea><br>
 		<textarea type="text" name="contents" placeholder="Write Content"  id="con"></textarea><br>
 		<input type="submit" name="submit" class="btn btn-primary" value="Add Content" onclick="showmessage()">
		<button type="button" class="btn btn-success" onclick="location.href = 'http://localhost/addblog/login/indexx.php';">Show Blogs  </button>

 	</form>
	 <script>
		 function showmessage() 
		 {
			 var conC = document.getElementById("con");
		 	 var conB = "Blog content added!";
			  
			  if (conC == "")
			  {
			  alert("Empty Content");
			  }
			  else 
			  {
				  alert(conB);
			  }	 	 
		 }
	 </script>
	 
	</div>
 </body>
 </html>