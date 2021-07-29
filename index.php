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

<div class=" main_header">
  <div class="row w-100 h-100">
    <div class="col-lg-5 col-md-5 col-sm-12 order-lg-1 order-2">
      <div class="leftside w-100 h-100 d-flex justify-content-center align-items-center ">
        <img src="./assets/img/corona2.jpg" width="500" height="300">
      </div>
    
  </div>
  <div class="col-lg-7 col-md-7 col-sm-12 order-lg-2 order-1">
    <div class="rightside w-100 h-100 d-flex justify-content-center align-items-center">
    <h1>Let's Stay Safe & Fight Together Against Corona Virus</h1>
    </div>
    
  </div>
  </div>
</div>

<!--***************** corona latest updates***************-->

<!-- <section class="corona_update container-fluid">
  <div class="mb-3">
    <h3 class="text-uppercase text-captailize text-center">Covid-19 updates</h3>
  </div>

<div class="table-resposive">
  <table class=" table table-bordered table-striped text-center " id="tval">
    <tr>
      <th>Country</th>
      <th>TotalConfirmed</th>
      <th>TotalRecovered</th>
      <th>TotalDeath</th>
      <th>NewConfirmed</th>
      <th>NewRecovered</th>
      <th>NewDeaths</th>
    </tr>
  </table>
</div>

  </div>
</section> -->

    <!----------------about section-------------->
    <div class="container-fluid sub_section pt-5 pb-5" id="aboutid">
      <div class="section_header text-center mb-5 mt-4">
        <h1>About COVID-19</h1>
      </div>
      <div class="row pt-5 ">
        <div class="col-lg-5 col-md-6 col-12 ">
          <img src="./assets/img/aboutimg.jpg" width ="500" height="300" class="img-fluid">
        </div>
        <div class="col-lg-6 col-md-6 col-12">
          <h2>What is COVID-19 (Corona-virus)</h2>
          <p>Coronaviruses (CoV) are a large family of viruses that cause illness ranging from the common cold to more severe diseases such as Middle East Respiratory Syndrome (MERS-CoV) and Severe Acute Respiratory Syndrome (SARS-CoV). A novel coronavirus (nCoV) is a new strain that has not been previously identified in humans.</p>
          <p>Coronaviruses are zoonotic, meaning they are transmitted between animals and people. Detailed investigations found that SARS-CoV was transmitted from civet cats to humans and MERS-CoV from dromedary camels to humans. Several known coronaviruses are circulating in animals that have not yet infected humans.</p>
        </div>
      </div>
    </div>


    <!------------------------------coronavirus symptoms ------------------------>

<div class="container-fluid  pt-5 pb-5" id="symptomid">
      <div class="section_header text-center mb-4 mt-4">
        <h2>Coronavirus Symptoms</h2>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-4 col-12 mt-4">
            <figure class="text-center">
              <img src="./assets/img/cough.jpg" class="img-fluid" width="200" height="80">
              <figcaption>Cough</figcaption>
            </figure>
          </div>
          <div class="col-lg-4 col-md-4 col-12 mt-4">
            <figure class="text-center">
              <img src="./assets/img/cold.jpg" class="img-fluid" width="200" height="80">
              <figcaption>Cold</figcaption>
            </figure>
          </div>
          <div class="col-lg-4 col-md-4 col-12 mt-4">
            <figure class="text-center">
              <img src="./assets/img/fever.jpg" class="img-fluid" width="200" height="80">
              <figcaption>Fever</figcaption>
            </figure>
          </div>
          <div class="col-lg-4 col-md-4 col-12 mt-4">
            <figure class="text-center">
              <img src="./assets/img/throat.jpg" class="img-fluid" width="200" height="80">
              <figcaption>Soar Throat</figcaption>
            </figure>
          </div>
          <div class="col-lg-4 col-md-4 col-12 mt-4">
            <figure class="text-center">
              <img src="./assets/img/headache.jpg" class="img-fluid" width="200" height="80">
              <figcaption>Headache</figcaption>
            </figure>
          </div>
          <div class="col-lg-4 col-md-4 col-12 mt-4">
            <figure class="text-center">
              <img src="./assets/img/tiredness1.jpg" class="img-fluid" width="200" height="80">
              <figcaption>Tiredness</figcaption>
            </figure>
          </div>
        </div>

      </div>
</div>

<!----------------------PREVENTION----------------->
<div class="container-fluid sub_section pt-5 pb-5" id="preventid">
      <div class="section_header text-center mb-4 mt-4">
        <h2>Prevention Against Coronavirus</h2>
      </div>


      <div class="container">
        <div class="row">
        <div class="col-lg-4 col-md-4 col-12 mt-5">
       <div class="row">
             <div class="col-lg-4 col-md-4 col-12">
              <figure class="text-center">
              <img src="./assets/img/handsanitize.jpg" class="img-fluid" width="200" height="100">
            </figure>
            </div>
            <div class="col-lg-8 col-md-8 col-12">
              <p>Wash your hand regularly for 20 sec ,with 
                soap and water or alcohal-based hand sanitizer.
              </p>
            </div>
            </div>
           </div>

           <div class="col-lg-4 col-md-4 col-12 mt-5">
            <div class="row">
              <div class="col-lg-4 col-md-4 col-12">
              <figure class="text-center">
              <img src="./assets/img/mask.jpg" class="img-fluid" width="200" height="100">
            </figure>
            </div>
            <div class="col-lg-8 col-md-8 col-12">
              <p>Masks can help prevent the spread of the virus from the person wearing the mask to others. 
              </p>
            </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-12 mt-5">
            <div class="row">
              <div class="col-lg-4 col-md-4 col-12">
              <figure class="text-center">
              <img src="./assets/img/distance.jpg" class="img-fluid" width="200" height="100">
            </figure>
            </div>
            <div class="col-lg-8 col-md-8 col-12">
              <p> Maintain a safe distance from anyone who is coughing or sneezing.
              </p>
            </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-4 col-12 mt-5">
            <div class="row">
              <div class="col-lg-4 col-md-4 col-12">
              <figure class="text-center">
              <img src="./assets/img/home.jpg" class="img-fluid" width="200" height="100">
            </figure>
            </div>
            <div class="col-lg-8 col-md-8 col-12">
              <p>Stay home and self isolated from others in the household ,
                if you feel unwell.
              </p>
            </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-4 col-12 mt-5">
            <div class="row">
              <div class="col-lg-4 col-md-4 col-12">
              <figure class="text-center">
              <img src="./assets/img/news.jpg" class="img-fluid" width="200" height="100">
            </figure>
            </div>
            <div class="col-lg-8 col-md-8 col-12">
              <p>Stay informed by watching news and folow the recommended practices.
              </p>
            </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-4 col-12 mt-5">
            <div class="row">
              <div class="col-lg-4 col-md-4 col-12">
              <figure class="text-center">
              <img src="./assets/img/medical.jpg" class="img-fluid" width="200" height="100">
            </figure>
            </div>
            <div class="col-lg-8 col-md-8 col-12">
              <p>If you have fever cough and diffculty breathing ,
                seek medical care early. 
              </p>
            </div>
            </div>
          </div>
        </div>
      </div>
</div>

<!----------------------Contact Us ASAP----------------->
<div class="container-fluid  pt-5 pb-5" id="contactid">
      <div class="section_header text-center mb-4 mt-4">
        <h2>Contact us for Help</h2>
      </div>

      <div class="container">
        <div class="row">
          <div class="col-lg-8 offset-lg-2 col-12">
          <form action="" method="POST">
  <div class="form-group">
    <label >Name</label>
    <input type="text" class="form-control" name="name"  placeholder="name" autocomplete="off" required>
  </div>

  <div class="form-group">
    <label >Email address</label>
    <input type="email" class="form-control"  name="email"   placeholder="name@example.com" autocomplete="off" required>
  </div>

  <div class="form-group">
    <label >Phone No.</label>
    <input type="text" class="form-control" name="phoneno"   autocomplete="off" required>
  </div>

  <div class="custom-control custom-checkbox custom-control-inline text-captailize">
    <input type="checkbox" class="custom-control-input" id="customcheckbox1" name="sym[]" value="fever">
    <label class="custom-control-label" for="customcheckbox1">fever</label>
  </div>
  <div class="custom-control custom-checkbox custom-control-inline text-captailize">
    <input type="checkbox" class="custom-control-input" id="customcheckbox2" name="sym[]" value="cold">
    <label class="custom-control-label" for="customcheckbox2">cold</label>
  </div>
  <div class="custom-control custom-checkbox custom-control-inline text-captailize">
    <input type="checkbox" class="custom-control-input" id="customcheckbox3" name="sym[]" value="breathing">
    <label class="custom-control-label" for="customcheckbox3">diffculty in breathing</label>
  </div>
  <div class="custom-control custom-checkbox custom-control-inline text-captailize">
    <input type="checkbox" class="custom-control-input" id="customcheckbox4" name="sym[]" value="tiredness">
    <label class="custom-control-label" for="customcheckbox4">tiredness</label>
  </div>

  
  <div class="form-group">
    <label >More Details</label>
    <textarea class="form-control" name="message" rows="3"></textarea>
  </div>
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>

          </div>
        </div>
      </div>
</div>

      <!-------------------------------top cursor--------------->
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





//  function fetch(){
  
//    $.get("https://api.covid19api.com/summary",
   
// function (data){

//   //console.log(data['Countries'].length);
//   var tval=document.getElementById('tval');

//   for(var i=1;i<(data['Countries'].length);i++){
//     var x=tval.insertRow();
//      x.insertCell(0);
//      tval.rows[i].cells[0].innerHTML=data['countries'][i-1]['Country'];
//      tval.rows[i].cells[0].style.background='#7a4a91';
//      tval.rows[i].cells[0].style.color='#fff';

     
//      x.insertCell(1);
//      tval.rows[i].cells(1).innerHTML=data['countries'][i-1]['TotalConfirmed'];
//      tval.rows[i].cells(1).style.background='#e88484';


//      x.insertCell(2);
//      tval.rows[i].cells(2).innerHTML=data['countries'][i-1]['TotalRecovered'];
//      tval.rows[i].cells(2).style.background='#c48bed';


//      x.insertCell(3);
//      tval.rows[i].cells(3).innerHTML=data['countries'][i-1]['TotalDeaths'];
//      tval.rows[i].cells(3).style.background='#8bedc4';

//      x.insertCell(4);
//      tval.rows[i].cells(4).innerHTML=data['countries'][i-1]['NewConfirmed'];
//      tval.rows[i].cells(4).style.background='#d3ed8b';

//      x.insertCell(5);
//      tval.rows[i].cells(5).innerHTML=data['countries'][i-1]['NewRecovered'];
//      tval.rows[i].cells(5).style.background='#edc18b';

//      x.insertCell(6);
//      tval.rows[i].cells(6).innerHTML=data['countries'][i-1]['NewDeaths'];
//      tval.rows[i].cells(6).style.background='#00ff72';

//  }

}

   );
 }
</script>


</body>
</html>

<?php

include 'dbcon.php';

if(isset($_POST['submit'])){
  $name=$_POST['name'];
  $email=$_POST['email'];
  $phoneno=$_POST['phoneno'];
  $sym=$_POST['sym'];
  $message=$_POST['message'];

  $check="";
  foreach($sym as $check1){
    $check.=$check1.",";
  }
 $insertquery="insert into coronacase(name,email,phoneno,sym,message) 
 values('$name','$email','$phoneno','$check','$message') ";
  $query=mysqli_query($con,$insertquery);
  if($query){
    ?>
<script>
    alert("inserted successfully");
</script>

    <?php
}else{
    ?>
    <script>
        alert(" Not inserted ");
    </script>
    
        <?php
}
}

?>