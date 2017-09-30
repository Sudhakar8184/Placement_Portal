<?php include "db.php"; ?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>placementprotal.com</title>
        <link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/font-awesome.css">
<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>
<link rel="stylesheet" href="css/font-awesome.css">
     <style>
	 section{
	background:white;
	width:100%;
	height:40%;
}
section h2{
	text-align:center;
	padding:10px;
	font-size:50px;
	color:silver;
}
section p{
	text-align:center;
	margin:20px;
	font-size:15px;
}
	
  .fa {
  padding: 10px;
  font-size: 40px;
  width: 50px;
  text-align: center;
  text-decoration: none;
  margin: 3px 5px;
}


.fa:hover {
    opacity: 0.7;
}

.fa-facebook {
  background: #3B5998;
  color: white;
}

.fa-twitter {
  background: #55ACEE;
  color: white;
}

.fa-google {
  background: #dd4b39;
  color: white;
}

.fa-linkedin {
  background: #007bb5;
  color: white;
}
.pg{
    text-align:left;
}
.pg1{
    text-align:center;
}
.container1 {
    border-radius: 2px;
    background-color: #f2f2f2;
    padding: 10px;
}
.container2 {
    border-radius: 2px;
    background-color: #f2f2f2;
    padding: 10px;
}
.table{
    text-align: center;
    
}
.head{
	float:left;
	
}

     </style>
  <script>  
	/*function ajax_func(){
			
				 xmlhttp = new XMLHttpRequest();
				
				xmlhttp.onreadystatechange = function (){
					if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
						document.getElementById('get_data').innerHTML = xmlhttp.responseText;
					}
				}
				xmlhttp.open('GET', 'loginphp.php', true);
				xmlhttp.send();
			}*/
			</script>
    </head>
    <body style="BACKGROUND-COLOR: lightblue">
        
 <nav class="navbar navbar-default">
  <div class="container-fluid">
      <div class="navbar-header">
      <img src="img/Portal.png " alt="SPS" style="width:200px;height:200px;">
      <img src="img/giphy.gif" alt="HTML5 Icon" style="width:128px;height:128px;">
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="home.php">Home</a></li>
      <li><a href="#about"> About Us</a></li>
      <li><a href="#">Career</a></li>
      <li><a href="#contact">Contact US</a></li>
    </ul>
     
     <!-- <form method="post" action="loginphp.php" class="navbar navbar-right text-center">
          <p class="pg"><label><b>Username</b></label></p>
        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input  id="email" type="email" class="form-control" name="email" value="" placeholder="Email Address">                                        
                        </div>
          <p class="pg"><label><b>Password</b></label></p>
    <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                            <input id="password" type="password" class="form-control" name="password" value="" placeholder="Password">                                        
                        </div><br>-->
						
						<br><br><br>
   <div class="nav navbar-nav navbar-right">
   
	 <button class="btn btn-info" target="_self" data-backdrop="static" data-target="#login_modal" data-toggle="modal" name="login" >Login</button>
<div class="modal fade" id="login_modal">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button class="close" data-dismiss="modal">&times;</button>
<center><h3>LOGIN</h3><center>
</div>
<div class="modal-body " align="center">

<form method="post" action="loginphp.php">
          <p class="pg"><label><b>Username</b></label></p>
        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input  id="email" type="email" class="form-control" name="email" value="" placeholder="Email Address">                                        
                        </div><br>
          <p class="pg"><label><b>Password</b></label></p>
    <div class="input-group" >
                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                            <input id="password" type="password" class="form-control" name="password" value="" placeholder="Password">                                        
                        </div>
						<a href="">forget Password?</a>
<div class="form-group">
<button class="btn btn-success btn-block" name="submit" class="form-control" >submit</button>
</div>
</form>
</div>
<div class="modal-header">
<div class="text-right">
<button class="btn btn-danger" data-dismiss="modal">colse</button>
</div>
</div>
</div>
</div>
</div>
      

       <a href="signup.html" target="_self"  class="btn btn-info" name="signup" >signup
      </a>
      
       </div>
	  
       
		</div>
</nav>

    
      
    <!--<a href="dataservlet">clickhere</a>-->
    <!--<input type="checkbox" checked="checked">-->   
            <!-- here to image rooling-->

<div class="container">
<div class="carousel slide" id="carousel1" data-ride="carousel">
<ol class="carousel-indicators">
<li data-target="#carousel1" data-slide-to="0" class="active"></li>
<li data-target="#carousel1" data-slide-to="1"></li>
<li data-target="#carousel1" data-slide-to="2"></li>
<li data-target="#carousel1" data-slide-to="3"></li>
</ol>


<div class="carousel-inner" style="height:300px;">
<div class="item active">
 <img class="mySlides" src="img/i7.jpg" style="width:100%;">
<div class="carousel- caption">
</div>
</div>
<div class="item">
<img class="mySlides" src="img/i6.jpg" style="width:100%"  height="100" width="1400">
</div>
<div class="item">
<img class="mySlides" src="img/lpu.jpg" style="width:100%"   height="300" width="1400">
</div>
<div class="item">
<img class="mySlides" src="img/i4.png" style="width:100%"   height="200" width="1400">
</div>
</div>
<a href="#carousel1" data-slide="prev" class="left carousel-control">
<span class="glyphicon glyphicon-chevron-left"></span></a>


<a href="#carousel1" data-slide="next" class="right carousel-control">
<span class="glyphicon glyphicon-chevron-right"></span></a>
</div>
</div>

    <!--<img class="mySlides" src="google.jpg"   height="100" width="100">
     <img class="mySlides" src="bajaj.jpg"   height="100" width="100">
  <img class="mySlides" src="dell.jpg"   height="100" width="100">
  <img class="mySlides" src="infosys.jpg"   height="100" width="100">  
  <img class="mySlides" src="Samsamug.jpg"   height="100" width="100">
  <img class="mySlides" src="microsoft.jpg"   height="100" width="100">
  <img class="mySlides" src="tata.jpg"   height="100" width="100">
  <img class="mySlides" src="toyota.jpg"   height="100" width="100">-->
    <div class="container-fluid">
 <center> <h2>COMPANIES</h2> <center>
  <div class="row">
    <div class="col-md-4">
      <div class="thumbnail">
        <!--<a href="google.jpg" target="_blank">-->
  <a href="https://www.google.co.in/about/" target="band"><img src="img/google.jpg" alt="Lights" style="width:100%"></a>
          <div class="caption">
            <p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
          </div>
		  
        <!--</a>-->
      </div>
    </div>
    <div class="col-md-4">
      <div class="thumbnail">
        <!--<a href="dell.png" target="_blank">-->
          <a href="http://www.dell.com/learn/in/en/incorp1/about-dell" target="band"><img src="img/dell.png" alt="Nature" style="width:100%"></a>
          <div class="caption">
            <p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
          </div>
       <!-- </a>-->
      </div>
    </div>
    <div class="col-md-4">
      <div class="thumbnail">
        <!--<a href="bajaj.jpg" target="_blank">-->
        <a href="http://www.bajajauto.com/" target="band"><img src="img/bajaj.jpg" alt="Fjords" style="width:100%">
          <div class="caption">
            <p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
          </div></a>
        <!--</a>-->
      </div>
	  <br>
    </div>
	<div class="col-md-4">
      <div class="thumbnail">
        <!--<a href="google.jpg" target="_blank">-->
          <a href="http://www.bajajauto.com/" target="band"><img src="img/infosys.png" alt="Lights" style="width:100%">
          <div class="caption">
            <p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
          </div></a>
        <!--</a>-->
      </div>
    </div>
	<div class="col-md-4">
      <div class="thumbnail">
        <!--<a href="google.jpg" target="_blank">-->
         <a href="http://www.samsung.com/in/aboutsamsung/" target="band"><img src="img/Samsung.png" alt="Lights" style="width:100%"></a>
          <div class="caption">
            <p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
          </div>
        <!--</a>-->
      </div>
    </div>
	<div class="col-md-4">
      <div class="thumbnail">
        <!--<a href="google.jpg" target="_blank">-->
          <a href="https://www.microsoft.com/en-in/about/" target="band"><img src="img/microsoft.jpg" alt="Lights" style="width:100%"></a>
          <div class="caption">
            <p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
          </div>
        <!--</a>-->
      </div>
    </div>
  </div>
</div>
    
  
  
   <center> <h1> <b>UNIVERSITIES</b></h1><center>
  
  <marquee behavior="scroll" direction="left">
      <a href="http://www.lpu.in" target="_blank">
     <img class="mySlides" src="img/lpu1.png"   height="100" width="100"></a>
      <a href="http://www.vit.ac.in/" target="_blank">
     <img class="mySlides" src="img/vit.png"   height="100" width="100"></a>
  <a href="http://www.srmuniv.ac.in/" target="_blank">
     <img class="mySlides" src="img/srm.jpg"   height="100" width="100"></a>
  <a href="http://www.nirmauni.ac.in/" target="_blank">
     <img class="mySlides" src="img/nmims.jpg"   height="100" width="100"> </a> 
  <a href="http://www.nirma.in" target="_blank">
     <img class="mySlides" src="img/nirma.jpg"   height="100" width="100"></a>
  <a href="http://www.amity.edu/" target="_blank">
     <img class="mySlides" src="img/amity.jpg"   height="100" width="100"></a>
  <a href="https://hindustanuniv.ac.in/" target="_blank">
     <img class="mySlides" src="img/hindustan.jpg"   height="100" width="100"></a>
</marquee>

 
    <br><br>
	<div class="clearfix"></div>
 <section id="about">
<h2>About Us</h2>
<p>Contrary to popular belief, Lorem Ipsum is not
 simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years 
 old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more 
 obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical
 literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus
 Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the 
 theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet.
 .", comes from a line in section 1.10.32.<p>
</section>
 
  
    <div class="container1">
    <p class="pg1">
    <table class="table">
       
            <tr>
        
        
                <td>      <div id="contact" class="container2">
        <h1><b>CONTACT US</b></h1>
        <form id="contact_form" method="post" enctype="multipart/form-data">
	<p class="pg"><label><b>Name</b></label></p>
        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input id="name" type="text" class="form-control" name="name" value="" placeholder="enter the name">                                        
                        </div>
						
						<p class="pg"><label><b>Username</b></label></p>
        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input id="email" type="email" class="form-control" name="email" value="" placeholder="Email Address">                                        
                        </div>
           <br>
                        <p class="pg"><label for="message">Your message:</label></p>
		<textarea id="message" class="input" name="message" rows="7" cols="30"></textarea><br />
	</div>
	<input id="submit_button" name="con_submit" type="submit" value="Submit" />
        </form>
        
                    </div></td>
    
            <td><div class="container">
                    <h1><b>Social Sites<b></h1><br>
  <a href="https://www.facebook.com/profile.php?id=100008263116266" class="fa fa-facebook" ></a>
<a href="https://twitter.com/ChintareddyS" class="fa fa-twitter" ></a>
<a href="#" class="fa fa-google"></a>
<a href="#" class="fa fa-linkedin"></a>
<br><br><br><br><br>

    <p>By creating or login to an account you agree to our <ul></p><a href="#">Terms & Privacy</a></ul>

</div></td>
            </tr>
       
    </table></p>
    </div>
    </body>
</html>
<?php
if(isset($_REQUEST['con_submit']))
{
	$name=mysqli_real_escape_string($con,strip_tags($_POST['name']));
	$email=mysqli_real_escape_string($con,strip_tags($_POST['email']));
	$message=mysqli_real_escape_string($con,strip_tags($_POST['message']));
	$sql="INSERT INTO contact(name,email,message) VALUES('$name','$email','$message')";
	$run=mysqli_query($con,$sql);
}
?>
