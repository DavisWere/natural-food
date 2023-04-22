<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Admin</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body onload="displayRoutes()">
    <!--nav-->
    <nav class="flex gap-2 bg-white opacity-90 justify-between p-4 w-full h-16 sticky top-0 z-30 shadow-xl">
        <!--        Logo-->
        <h3 class="w-2/12 h-full flex items-center text-3xl text-green-800 font-mono py-2">
            Natural
        </h3>
        <!--        actual navigation-->
        <div class="flex gap-2 justify-between pt-1 px-8 bg-[#396F01] text-white text-center font-semibold w-9/12" id="navButtons">
            <!--     nav links are displayed here  -->
        </div>
    </nav>
    <!--nav-->

    <!--  main-->
   <?php
  // Create database connection
  $db = mysqli_connect("localhost", "root", "", "natural-food");

  // Initialize message variable
  $msg = "";

  // If upload button is clicked ...
  if (isset($_POST['upload'])) {
  	// Get image name
  	$image = $_FILES['image']['name'];
  	// Get text
  	$content= mysqli_real_escape_string($db, $_POST['content']);
	$title= mysqli_real_escape_string($db, $_POST['title']);
	$date= mysqli_real_escape_string($db, $_POST['date']);

  	// image file directory
  	$target = "images/".basename($image);

  	$sql = "INSERT INTO images (image, title, content, date) VALUES ('$image', '$title', '$content', '$date')";
  	// execute query
  	mysqli_query($db, $sql);

  	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		$msg = "Image uploaded successfully";
         // Redirect to blogs.php
           // Redirect to blogs.php
        header("Location: blogs.php");
        exit();
    
  	}else{
  		$msg = "Failed to upload image";
  	}
  }
  $result = mysqli_query($db, "SELECT * FROM images");
   
?>
<!DOCTYPE html>
<html>
<head>
<title>Image Upload</title>
<style type="text/css">
   #content{
   	width: 50%;
   	margin: 20px auto;
   	border: 1px solid #cbcbcb;
   }
   form{
   	width: 50%;
   	margin: 20px auto;
   }
   form div{
   	margin-top: 5px;
   }
   #img_div{
   	width: 80%;
   	padding: 5px;
   	margin: 15px auto;
   	border: 1px solid #cbcbcb;
   }
   #img_div:after{
   	content: "";
   	display: block;
   	clear: both;
   }
   img{
   	float: left;
   	margin: 5px;
   	width: 300px;
   	height: 140px;
   }
</style>
</head>
<body>
<div id="content">
  <?php
  //  while ($row = mysqli_fetch_array($result)) {
     // echo "<div id='img_div'>";
      //	echo "<img src='images/".$row['image']."' >";
      //	echo "<p>".$row['content']."</p>";
     // echo "</div>";
    //}
  ?>
  <form method="POST"  enctype="multipart/form-data">
  	<input type="hidden" name="size" value="1000000">
	  <div>
      <textarea 
      	id="text" 
      	cols="15" 
      	rows="4" 
      	name="title" 
      	placeholder="title"></textarea>
  	</div>
  	<div>
	  <label for="date"> Date </label>
     <input type="date" name="date" id="date" required class="border rounded w-11/12 md:w-8/12 py-1 px-2">
	 <div>
      <textarea 
      	id="text" 
      	cols="40" 
      	rows="4" 
      	name="content" 
      	placeholder="Say something about this image..."></textarea>
  	</div>
  	  <input type="file" name="image">
  	</div>
	  
  	
  	<div>
  		<button type="submit" name="upload">POST</button>
  	</div>
  </form>
</div>
<script src="../assets/javascript/navigation.js"></script>
</body>
</html>