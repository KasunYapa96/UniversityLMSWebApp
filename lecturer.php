<DOCTYPE html>
<html>
<head>
  <title> NSBM Learning Management System </title>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="mainstyles.css" type="text/css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    

</head>
  	
<body>
  
<div id="header-wrapper"> 
    
	<div id="header" class="container"> 
		<hr> <h1 align="center"> LEARNING MANAGEMENT SYSTEM </h1> <hr>
		
		<div class="topnav" id="myTopnav">
  <a href="main.html">HOME</a>
  <a href="services.html">SERVICES</a>
  <a href="life.html">STUDENT LIFE</a>
  <a href="main.html">LOGOUT</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
</div>
		
</div> 
	


<?php
    if(isset($_GET['modulename'])){
        $m_name=$_GET['modulename'];
                
?>
 
    <h1 class="Module"><?php   echo $m_name;   ?></h1> <br>
        
   <h2>Uploaded content</h2>
   <ul>
    <table  class="down">
                <tbody>
                    <?php
                    
                        $dir    = ("./uploads and downloads/SOC/$m_name/down/");
                        $files = array_slice(scandir($dir),2);
                        foreach($files as $value){
                            echo "<tr>";
                            
                            echo "<td><a href='./uploads and downloads/SOC/$m_name/down/{$value}'>{$value}</a></td>";
                            echo "</tr>";
                        }
                    ?> 
                </tbody>
            </table>
    
   </ul>
      
          
    <?php
        
    }
        ?>
    <br> <br>
    
    <h2>- Upload Your module content</h2> <br>

    <form action="#" method="post" enctype="multipart/form-data">
    Select file to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload File" name="submit">
</form>

    
    <?php
    if(isset($_POST['submit'])){
$target_path = "./uploads and downloads/SOC/$m_name/down/";
$target_path = $target_path . basename( $_FILES['fileToUpload']['name']); 

if(move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target_path)) {
    echo "The file ".  basename( $_FILES['fileToUpload']['name']). 
    " has been uploaded";
} else{
    echo "There was an error uploading the file, please try again!";
}
    }
    

?>
   
  


       <br><br><br></div>
 <div id="copyright" class="containerneww">
			
    <p class="left"> NSBM Green University Town <br>
					 Mahenwaththa, Pitipana,<br>
					 Homagama <br>
					 Sri Lanka</p>
					 
    <p class="right">Contact Us<br />Telephone : 011 544 5000 <br> Email : info@nsbm.lk</p>
	
    <p class="centered"> Connect With Us <br> <br> 
	<a href="https://www.facebook.com/nsbm.lk" target="_blank" class="fa fa-facebook"></a>
    <a href="https://twitter.com/NSBM_SriLanka" target="_blank" class="fa fa-twitter"></a> 
	<a href="https://www.youtube.com/channel/UCHsodhRyiuri2jD7H7nfsRg/feed" target="_blank" class="fa fa-youtube"></a> 
	</p>

	 </div>
	 
	 <script>
	 function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
	 </script>


</body>
 
  
</html>