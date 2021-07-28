<!DOCTYPE html>
<html lang="en">
<head>
<title>Corona</title>
<?php include 'link/links.php' ?>
<?php include 'css/style.php' ?>
</head>
<body onload="fetch()">


<nav class="navbar navbar-expand-lg nav_style p-3">
  <a class="navbar-brand" href="# pl-5">Covid-19</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon  "></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto pr-5">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#aboutid">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#preventid">Prevention</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="indialive.php">IndiaLiveCases</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#symptomid">Symptoms</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#contactid">Contact</a>
      </li>
     
    </ul>
    
  </div>
</nav>



<section class="corona_update container-fluid">
  <div class="mb-5">
    <h3 class="text-uppercase text-captailize text-center">Covid-19 Live updates</h3>
  </div>

<div class="table-resposive">
  <table class=" table table-bordered table-striped text-center " >
    <tr>
      <th>lastupdatedtime</th>
      <th>state</th>
      <th>confirmed</th>
      <th>active</th>
      <th>recovered</th>
      <th>deaths</th>
    </tr> 

    <?php

$data=file_get_contents('https://api.covid19india.org/data.json');
$coronalive=json_decode($data,true);

// echo "<pre>";

// print_r($coronalive);
// echo"</pre>";

$statescount= count($coronalive['statewise']);
 $i=1;
 while($i<$statescount){

  ?>
  <tr>
    <td><?php  echo $coronalive ['statewise'][$i]['lastupdatedtime'] ?></td>
    <td> <?php  echo $coronalive ['statewise'][$i]['state'] ?></td>
    <td> <?php  echo $coronalive ['statewise'][$i]['confirmed']?></td>
    <td> <?php  echo $coronalive ['statewise'][$i]['active']?></td>
    <td> <?php echo $coronalive ['statewise'][$i]['recovered']?></td>
    <td> <?php echo $coronalive ['statewise'][$i]['deaths'] ?></td>
  </tr>
  
   
   <?php
   $i++;

 }








    ?>
  </table>
</div>

  </div>
</section>






<div class="container scrolltop float-right pr-5">
      <i class="fa fa-arrow-up" onclick="topfunction()" id="myBtn"></i>
    </div>

      <!---------------------------footer--------------------->

      <footer class="mt-5">
        <div class="footer_style text-white text-center container-fluid">
          <p>copyright by Niktech</p>
        </div>
      </footer>


  <script type="text/javascript">
 mybutton=document.getElementById("myBtn");
 window.onscroll=function() {scrollfunction()};
 function scrollfunction(){
   if(document.body.scrollTop>100|| document.documentElement.scrollTop > 100){
     mybutton.style.display="block";

   }
   else{
     mybutton.style.display="none";
   }
 }

 function topfunction(){
   document.body.scrollTop=0;
   document.documentElement.scrollTop=0;

 }





 
</script>


</body>
</html>

