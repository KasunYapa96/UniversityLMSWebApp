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
<br> <br>
  
      <h2 align="center">SCHOOL OF BUSINESS</h2> <br> <br> <br>
      
      
      
       <div id="soc">
      <button class="accordion"><b>PGD</b></button>
        <div class="panel">
            
           <li>PGD IN BUSINESS MANAGEMENT</li> 
<li>PGD IN HUMAN RESOURCE MANAGEMENT</li>

         
        </div>

 <button class="accordion"><b>UCD</b></button>
        <div class="panel">
            
 
            <li><a href="buss.php?modulename=Stage 2">Stage 2</a></li>
            <li><a href="buss.php?modulename=Stage 3">Stage 3</a></li>
                      

            
        </div>
<button class="accordion"><b>UGC</b></button>
        <div class="panel">
            
<li>YEAR 2</li>
<li>FINAL TWO YEARS</li>
<li>Examination Time Table</li>

        </div>
 <button class="accordion"><b>MBA</b></button>
        <div class="panel">
    

<li>MBA Programe 2017</li>


        </div>
 <button class="accordion"><b>FOUNDATION</b></button>
        <div class="panel">
            


<li>STAGE 1</li>
<li>STAGE 2</li>
<li>STAGE 3</li>
            
        </div>
      
           
 <button class="accordion"><b>INTERIOR DESIGN</b></button>
        <div class="panel">
            
<li>YEAR 1</li> 
<li>YEAR 2</li>
<li>YEAR 3</li>

    
           </div>
 <button class="accordion"><b>CERTIFICATE PROGRAMME</b></button>
        <div class="panel">

            <li>Computer Applications</li>
            <li>Personal and Managerial Effectiveness</li>
            <li>Fundamentals of PM</li>
            <li>Organizational Behaviour</li>

            
        </div>
      
      
      
      <button class="accordion"><b>Common First Year First Semester
</b></button>
        <div class="panel">
            
            <li>Business / Organizational Communication</li>
            <li>CREST/ Personal Development</li>
            <li>Economics</li>
            <li>Financial Accounting/ Principles of Accounting</li>
            <li>Management Process/ World of Buisness</li>


        </div>
		</div>
		</div>
      
	  <div id="copyright" class="containerneww">
			
    <p class="left"> NSBM Green University Town <br>
					 Mahenwaththa, Pitipana,<br>
					 Homagama <br>
					 Sri Lanka</p>
					 
    <p class="right">Contact Us<br />Tel : 011 544 5000 <br> Email :</p>
	
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

	  
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
    acc[i].onclick = function(){
        this.classList.toggle("active");
        var panel = this.nextElementSibling;
        if (panel.style.display === "block") {
            panel.style.display = "none";
        } else {
            panel.style.display = "block";
        }
    }
}
</script>
      
</body>
 
</html>