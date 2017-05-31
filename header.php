<html>
<head>

<title>First Git File</title>
<?php  error_reporting(0); $my_url =  'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF']; ?>

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="height=device-height, initial-scale=1">

<link rel="stylesheet" type="text/css" href="css/bootstrap.css">


<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="/style.css">
<script  src="https://code.jquery.com/jquery-3.2.1.slim.min.js"  integrity="sha256-k2WSCIexGzOj3Euiig+TlR8gA0EmPjuc79OEeY5L45g="  crossorigin="anonymous"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>


<div class="container">
<div class="jumbotron">
  <div class="row ">
    
    <div class="col-sm-8 my_img">

    <img  src="/images/seo-team.png" class="img-thumbnail img-responsive " />
    </div>

    <div class="col-sm-4 intro">

  <h3>Jatinderjit Singh</h3>      

  <h4>07533602304</h4>  
  <h4>jatinderjit121@gmail.com</h4>
    </div>
  </div>

</div>


  


<!--Nave bar Statrs-->
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      <a class="navbar-brand" href="/index.php">PortFolio</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav" style="font-size:15px;">

        <li  
             <?php 
                   if(end(explode('/',$my_url)) == 'index.php')
                      {echo "class='active'" ;}
                   else { echo "class=''";}
              ?>
 
              ><a href="/index.php">Home</a>
       </li>

        <li <?php 
                   if(end(explode('/',$my_url)) == 'about.php')
                      {echo "class='active'" ;}
                   else { echo "class=''";}
              ?> ><a href="/about.php">About</a></li>

        <li <?php 
                   if(end(explode('/',$my_url)) == 'skills.php')
                      {echo "class='active'" ;}
                   else { echo "class=''";}
              ?> > <a href="/skills.php">Skills</a>
        </li> 


        <li <?php 
                   if(end(explode('/',$my_url)) == 'contact.php')
                      {echo "class='active'" ;}
                   else { echo "class=''";}
              ?> > <a href="/contact.php">Let's Talk</a></li> 
        



         <li  <?php 
                   if(end(explode('/',$my_url)) == 'cv.php')
                      {echo "class='active'" ;}
                   else { echo "class=''";}
              ?>
          
          ><a href="/cv.php">CV</a></li> 


      </ul>
      <ul class="nav navbar-nav navbar-right" style="font-size:16px;">
        <li><a href="#"><i class="fa fa-sign-in" aria-hidden="true"></i> Login</a></li>
        <li ><a href="#"><i class="fa fa-user-plus" aria-hidden="true" ></i>  Sign Up</a></li>
        
      </ul>
    </div>
  </div>
</nav>
<!--Nav Bar Finishes-->
</div>
</div>