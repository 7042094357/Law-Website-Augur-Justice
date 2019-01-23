  <? php 
    
    $lname = $_POST['lname'];
    $fname='lastname.txt';
    $file = fopen($fname,'a');
    fwrite($file,$lname);
    echo "thankyou";
file_put_contents ($fname, $lname);
    fclose($file);

    ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Minor</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
     
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    
    footer {
      background-color: black;
      padding: 25px;
    }
      .affix {
      top: 0;
      width: 100%;
      z-index: 9999 !important;
  }

  .affix + .container-fluid {
      padding-top: 70px;
  }
  </style>
</head>
<body style="min-width: 35%">
<nav class="navbar-default" style="background-color: cornflowerblue">
    <div class="container-fluid">
    <div class="navbar-brand" style="margin: 12px"><p id="demo" style="font-family: sans-serif;align-self: flex-end"></p>
<script>
var d = new Date();
document.getElementById("demo").innerHTML = d;
</script></div>
    </div></nav>
  
<nav class="navbar navbar-default" data-spy="affix" data-offset-top="197">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand">Minor Project</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="Minor.html">Home</a></li>
        <li><a href="cases.html">Cases</a></li>
          <li><a href="aboutus.html">About Us</a></li>
        <li><a href="login.html">Register</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="loginn.html"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container-fluid"  style="height: 100%;width: 100%;background-image: url(statuelawbg.jpg)">
 
  <div class="row">
      <div class="col-sm-12">
      <h1 style="text-align: center"><b>Register your case</b></h1>
          <div class="container">
  <form class="form-horizontal" action="action.php" method="post">
      <div class="form-group" style="padding-left: 155px">
       <label class="control-label col-sm-2"  for="sel1">Topic:</label>
      <select class="form-control" id="sel1" style="width: 48%" name="topic">
        <option>Divorce</option>
        <option>Marriage</option>
        <option>Rape Cases</option>
        <option>Adoption</option>
          <option>Sales Tax</option>
          <option>Crime</option>
      </select>
          </div>
       <div class="form-group" style="padding-left: 155px">
       <label class="control-label col-sm-2"  for="religion">Religion:</label>
      <select class="form-control" id="religion" style="width: 48%" name="religion">
        <option>Hindu</option>
        <option>Christian</option>
        <option>Muslim</option>
       
      </select>
          </div>
   <div class="form-group" style="padding-left: 150px">
      <label class="control-label col-sm-2" for="nme">Subject:</label>
      <div class="col-sm-10" >
        <input type="text" class="form-control" id="subject" placeholder="Enter subject" name="subject" style="width: 60%;">
      </div>
    </div>
      
      <div class="form-group" style="padding-left: 150px">
      <label class="control-label col-sm-2" for="email">Description:</label>
      <div class="col-sm-10">
       <textarea class="form-control" rows="5" id="dscrptn" style="width: 60%" placeholder="Describe Briefly" name="descrptn"></textarea>
      </div>
    </div>
   
    <div class="form-group" style="padding-left: 150px">        
      <div class="col-sm-offset-2 col-sm-10">
        <div class="checkbox">
          <label><input type="checkbox" name="prvtinfo">Check to keep your information private</label>
        </div>
      </div>
    </div><br>
    <div class="form-group" style="text-align: center">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Submit</button>
      </div>
    </div>
  </form>
</div>

     <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>    
  
</div>
    </div>
</div>
  

   <div class="container-fluid" style="background-color:#0D0D0E">
    <div clas="row">
   <div class="col-sm-3" style="text-align: center"><h4 style="color: cadetblue"><b>Our Contact</b></h4><a href="location.html"><p style="color: white">A-10,sector-62</p></a><p style="color: white">Noida,UP</p><p style="color: white">Ph.no:7042094357</p><br></div><div class="col-sm-3" style="text-align: center"><h4 style="color: cadetblue"><b>Quick Links</b></h4><a href="Hdivorce.html" style="color: white">Hindu Divorce Cases</a><br><a href="rapecases.html" style="color: white">Rape Cases</a><br><a href="Mdivorce.html" style="color: white">Muslim Divorce Cases</a><br></div>
    <div class="col-sm-3" style="text-align: center"><h4 style="color: cadetblue"><b>Latest Posts</b></h4><a href="https://drive.google.com/file/d/1x-O5ZyYJ78W0acE8JVjKxTbNnkDeyNLq/view?usp=sharing" style="color: white">Gnanasoundari Vs. Nallathambi</a><br><a href="https://drive.google.com/file/d/1zWskrQiRZ4cKIzTPnXz-E8jr5ectLWt_/view?usp=sharing" style="color: white">Hindu Marriage Act </a><br><a href="https://drive.google.com/file/d/1VYmB09pxoz3yWw41wzF9nilF_Bmj-Wbe/view?usp=sharing" style="color: white">Nirbhaya Rape Case</a><br></div>
    <div class="col-sm-3" style="text-align: center"><h4 style="color: cadetblue"><b>Recent News</b></h4><a href="https://economictimes.indiatimes.com/news/politics-and-nation/uttar-pradesh-cabinet-renames-allahbad-to-prayagraj/articleshow/66234532.cms" style="color: white">Allahabad to Prayagraj</a><br><a href="https://economictimes.indiatimes.com/news/politics-and-nation/up-cabinet-approves-renaming-of-faizabad-as-ayodhya-allahabad-as-prayagraj/articleshow/66604547.cms" style="color: white">Faizabad as Ayodhya</a><br><a href="https://economictimes.indiatimes.com/news/economy/indicators/indias-gdp-grows-at-8-2-per-cent-in-2018-19-q1/articleshow/65623967.cms" style="color: white">GDP grows at 8.2%</a><br></div>
    </div>
   </div>

    
   

<footer class="container-fluid text-center" style="color: white">
    <p>2018 Copyright:<a href=#coming>coming soon</a></p>
</footer>

</body>
</html>
