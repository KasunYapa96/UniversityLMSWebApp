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


  
         <h2 align="center">SCHOOL OF COMPUTING</h2> <br> <br> <br>
      
      
      <div id="soc">
      <button class="accordion"> Year 0 </button>
        <div class="panel">
            
            <li>Fundamentals of Mathematics (Maths)</li>
            <li>Introduction to Statistics (Stat)</li>
            <li>Introduction to Computer Applications (ICA)</li>
            <li>Communication and Business Skills (CBS)</li>
            <li>Application Development with C Language (C Proj)</li>

        </div> <br>

 <button class="accordion"> Year 1 </button>
        <div class="panel">
            
            <li><a href="lecturer.php?modulename=Web Based Application Development">Web Based Application Development</a></li>
            <li>Quantitative Techniques for Computing</a></li>
            <li>Computer Technology</a></li>
            <li>System Software</li>
            <li>System Design Project</li>
          <li>System Software</li>
            <li>Data Communication and Networks</li>
            <li>Introduction to Computer Networks</li>	
            <li>Introduction to Computer Science</li>	
            <li>Programming with C Language</li>
            <li>Programming with C Language </li>	
            <li>Object Oriented Programming with C++</li>	
            <li>Professional Development</li>
            <li>Data Structures & Algorithms</li>
            <li>Computer Architecture</li>
            <li>Mathematics for Computing </li>	
            <li>Database Management Systems</li>	
            <li>Database Management Systems -DM	</li>
            <li>Algorithms and Data structures - DM	</li>
            <li>lgorithms and Data structuress - PLY </li>
            <li>Software Engineering (C#)</li>
            <li>Software Engineering Project 1</li>	
            <li>Foundations of Information Systems	</li>
            <li>ISAD131 Database Management System II	</li>
            <li>Language and Communication Skills Programme (English)	</li>
            <li>Mathematics-1 </li>
            <li>Mathematics-1	</li>
            <li>Orientation for Level 1	 </li>
            <li>Object Oriented Programming with Java	</li>
            <li>Web Based Application Development	</li>
            <li>System Analysis and Design</li>
            <li>Programming with C# -Plymouth Group A</li>
        </div> <br>
		
<button class="accordion">Year 2</button>
        <div class="panel">
            
            <li> Foundations of Information Systems</li>
            <li>System Analysis and Design</li>
            <li> Operating Systems</li>
            <li>Computer Networks</li>
            <li>Mathematics-2</li>
            <li>Software Engineering Project 2</li>
            <li>Business Statistics for Information Technology</li>
            <li>Computer Networks</li>
            <li>Algorithmic Problem Solving</li>
            <li>Introduction to Cryptography</li>
            <li>Digital Image Processing</li>
            <li>Mathematics II</li>
            <li>Management Practices</li>
            <li>Software Engineering</li>
            <li> Data Structures and Algorithms</li>
            <li>Advance Database Management Systems</li>
            <li>Object Oriented Programming and Design I</li>
             <li>Agile Software Development Methodologies</li>
            <li>Object Oriented Programming II </li>
            <li>Distributed Processing</li>
            <li>Data Warehousing and Data Mining</li>	
            <li>Computer Networking</li>
            <li>Software Development Project</li>
            
            
        </div> <br>
		
 <button class="accordion">Year 3</button>
        <div class="panel">
            
    <li>Final Year Projects</li>
<li>Object Oriented Design</li>
<li>Industrial Training</li>
<li>Management Information Systems</li>
<li>Databases and information Resource Management</li>
<li>IT Project Management</li>
<li>Fundamentals of E- Business</li>
<li>Computer Architecture</li>

        </div> <br>
		
 <button class="accordion">Year 4</button>
        <div class="panel">
            
<li>Business Policy and Strategy</li>
<li>Professional Issues in ICT</li>
<li>Software Quality Assurance</li>
<li>Final Project</li>
<li>Object Oriented Programming III</li>           
<li>Information Security</li>
<li>Technical Communication</li>
<li>Management Support Systems</li>

            
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