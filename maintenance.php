<?php
     include_once './db_connect.php';
    ?> 
<?php
    session_start();
    if(!isset($_SESSION['user']))
    {
        header("location:login/login.php");
    }
?>


<!DOCTYPE html>
<html>
<head>
  <meta name = "viewport", content="width = device-width, initial-scale=1">
  <title> SIMANA Hospital </title>
  <link rel = "icon" href = "img/logo.png" type = "image/x-icon">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family
  =Noto+Sans+Mono:wght@100;300;500;700;900&display=swap" rel="stylesheet">
  <link rel = "stylesheet" href = "css/index.css"> 

</head>
<body>
  
  <section class="background">
      <nav>
        <a href = ""> 
        <img src = "img/main.jpg" alt = "logo"></a>
        <div class = "links">
          <ul>
            <li><a href ="index.html"> HOME </a></li>
            <li><a href =""> Departments </a></li>
            <li><a href =""> Contact </a></li>
            <li><a href = ""> About </a></li>
            </ul>
      </nav>
       

        <div class = "links2">
          <?php
          if(isset($_SESSION['user']))
          {
              echo "<h2> Logged in as ". $_SESSION['user'] . "</h2>";
              echo '<a href="login/logout.php?logout=true">Logout</a>';
          }
          ?>
          <h1>Maintenance Page</h1>
          

          <ul>
            <li><a href ="adds/addbill.html"> Add Bill</a></li>
            <li><a href ="adds/adddoctor.html"> Add Doctor </a></li>
            <li><a href ="adds/addhospital.html"> Add Hospital </a></li>
            <li><a href ="adds/addmedicine.html"> Add Medicine </a></li>
            <li><a href ="adds/adddepartment.html"> Add Department </a></li>
            <li><a href ="adds/addmr.html"> Add Medical Record </a></li>
            <li><a href ="adds/addpatient.html"> Add Patient </a></li>
            <li><a href ="adds/addtreats.html"> Add Treats </a></li>
          </ul>
        </div>
  </section>
  <section id = "footer">
      <div class="footer container">
        <div class = "brand"><h1>Simana Hospital</h1></div>
        <div class = "social-icon">
          <div class = "social-item">
            <a href = "https://www.facebook.com"> <img src = "https://img.icons8.com/ios-glyphs/256/facebook-f.png"></a>          
          </div>
          <div class = "social-item">
            <a href = "https://www.instagram.com"> <img src = "https://img.icons8.com/ios-glyphs/256/instagram-new.png"></a>          
          </div>
          <div class = "social-item">
            <a href = "https://www.twitter.com"> <img src = "https://img.icons8.com/ios-filled/256/twitter.png"></a>          
          </div>
          <div class = "social-item">
            <a href = "https://www.youtube.com"> <img src = "https://img.icons8.com/ios-glyphs/256/youtube-play.png"></a>          
          </div>
        </div>
        <p>Copyright &copy; Simana Hospital. All rights reserved</p>
      </div>
    </section>
</body>
</html> 
