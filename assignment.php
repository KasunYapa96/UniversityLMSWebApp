<DOCTYPE html>
<html>
<head>
  <title> NSBM Learning Management System </title>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="assignmentstyles.css" type="text/css" rel="stylesheet">
  
  
</head>
<body>
    <div class="topnav" id="myTopnav">
	
    <div>
	 <hr> <h1 align="center"> LEARNING MANAGEMENT SYSTEM </h1> <hr> </div>
  	
    </div>
     <br> <br> <br> <br> 
    
  
  
  
  <div id="login">

  <form id="new1" name="new" method="post" action="con_login.php">
   
    <img src="avatar.png" alt="Avatar" class="avatar" height="50" width="50" align="middle" style="padding-left:14px;"><br><br>
  
  <b> <label> USERNAME: </label> </b>
  <input type="text" placeholder="Enter Username" name="nme"><br> <br>
  <b><label> PASSWORD: </label> </b>
  <input type="password" placeholder="Enter Password" name="psw"> <br><br>
  <input type="submit" class="log" value="Login"> <br> <br>
  
  </form>
  
  <b><label> Doesn't have an account? </label></b>
 <button onclick="document.getElementById('newid').style.display='block'" class="create">Create New Account</button>

  
  </div>
  
  <div id="newid" class="modal">
  <span onclick="document.getElementById('newid').style.display='none'" class="close" title="Close">&times;</span>
  <form class="modal-content animate" action="">
    <div class="container">
	  <h3> Please enter your details </h3> <br>
      <label><b>Name:</b></label>
      <input type="text" placeholder="Enter Name" name="nme" required>
	  
	  <label><b>Index Number:</b></label>
      <input type="text" placeholder="Enter Index Number" name="index" required>
	  
	  <label><b>E-mail:</b></label>
      <input type="text" placeholder="Enter Email" name="email" required>

      <label><b>Password:</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>

      <label><b>Repeat Password:</b></label>
      <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
      
      

      <div class="clearfix">
        <button type="submit" class="signupbtn">Sign Up</button>
        <button type="button" onclick="document.getElementById('newid').style.display='none'" class="cancelbtn">Cancel</button>
        
      </div>
    </div>
  </form>
</div>




<script> 
// Get the modal
var modal = document.getElementById('newid');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
	
	
	
  </script>	
  
  <br> <br> <br>
  
  <footer>
  <p align="center"> NSBM Green University Town,
					 Mahenwaththa, Pitipana,
					 Homagama 
					 Sri Lanka <br> 
                     Telephone : 011 544 5000  Email : info@nsbm.lk</p>					 </p>
</footer>

  
</body>
</html>