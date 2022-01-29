<?php
  $path = getcwd() . '/data';
  // grab the incoming data from the form
  $food = $_GET['food'];
  $job = $_GET['job'];
  $hobby = $_GET['hobby'];
  $fear = $_GET['fear'];
  
  // compute who earned the most points
  $homer = 0;
  $marge = 0;
  $bart  = 0;
  $lisa  = 0;
  if($food !='miss' && $job !='miss' && $hobby !='miss' && $fear !='miss'){
  if ($food == "homer") {
    $homer += 1;
    $foodAnswer = "Food: Donuts\n";
  }
  else if ($food == "marge") {
    $marge += 1;
    $foodAnswer = "Food: Apple Pie\n";
  }
  else if ($food == "bart") {
    $bart += 1;
    $foodAnswer = "Food: Krusty Flakes\n";
  }
  else {
    $lisa += 1;
    $foodAnswer = "Food: Anything organic and locally sourced\n";
  }
  
  if ($job == "homer") {
    $homer += 1;
    $jobAnswer = "Job: Working at a backery\n";
  }
  else if ($job == "marge") {
    $marge += 1;
    $jobAnswer = "Job: French Tutor\n";
  }
  else if ($job == "bart") {
    $bart += 1;
    $jobAnswer = "Job: Prank phone call specialists\n";
  }
  else {
    $lisa += 1;
    $jobAnswer = "Job: College professor\n";
  }


if ($hobby == "homer") {
    $homer += 1;
    $HobbyAnswer = "Hobby: Watching TV\n";
  }
  else if ($hobby == "marge") {
    $marge += 1;
    $HobbyAnswer = "Hobby: Knitting\n";
  }
  else if ($hobby == "bart") {
    $bart += 1;
    $HobbyAnswer = "Hobby: Skateboarding\n";
  }
  else {
    $lisa += 1;
    $HobbyAnswer = "Hobby: Reading\n";
  }


if ($fear == "homer") {
    $homer += 1;
    $fearAnswer = "Fear: Sock puppets\n";
  }
  else if ($fear == "marge") {
    $marge += 1;
    $fearAnswer = "Fear: Flying\n";
  }
  else if ($fear == "bart") {
    $bart += 1;
    $fearAnswer = "Fear: I'm fearless,man\n";
  }
  else {
    $lisa += 1;
    $fearAnswer = "Fear: Getting anything below an A in school\n";
  }
  }
  else{
  header('Location: macro07.php?error=miss');
  }

 ?>
<!doctype html>
<html lang="en-us">
  <head>
    <title>Results</title>
    <style>
    body{background-color: coral;
         
         
         position: relative;
         margin: auto;
         }
    div{
    	
    	position: relative;
    	width: 220px;
        height: 400px;
        margin: auto;
    }
    img{
     margin-left: center;
     margin-right: center;
    }
    h1{
      text-align: center;
    }
         
    </style>
  </head>
  <body>
    <h1>Results</h1>

    <?php

    if (($homer > $marge && $homer > $bart && $homer > $lisa)||$_COOKIE['result']=='homer') {
      $img = 'assignment07_images/Homer.png';
      $finalResult = "homer\n";
      setcookie('result','homer');
    }
    else if (($marge > $homer && $marge > $bart && $marge > $list)||$_COOKIE['result']=='marge') {
      $img = 'assignment07_images/Marge.png';
      $finalResult = "marge\n";
      setcookie('result','marge');
    }
    else if (($bart > $homer && $bart > $marge && $bart > $list)||$_COOKIE['result']=='bart') {
      $img = 'assignment07_images/Bart.png';
      $finalResult = "bart\n";
      setcookie('result','bart');
    }
    else {
      $img = 'assignment07_images/Lisa.png';
      $finalResult = "lisa\n";
      setcookie('result','lisa');
    }
   // file_put_contents($path."/historyMacro07.txt",$foodAnswer, FILE_APPEND);
   // file_put_contents($path."/historyMacro07.txt",$jobAnswer, FILE_APPEND);
    //file_put_contents($path."/historyMacro07.txt",$HobbyAnswer, FILE_APPEND);
   // file_put_contents($path."/historyMacro07.txt",$fearAnswer, FILE_APPEND);
    file_put_contents($path."/historyMacro07.txt",$finalResult, FILE_APPEND);
    //file_put_contents($path."/historyMacro07.txt","\n", FILE_APPEND);
    print "<div><img src=\"$img\"></div>";
    ?>
    <a href="macro07.php">
	    Try Again </a>   
    <hr>
    <a href="results.php">
	    See Aggravate Results </a>     
  </body>
</html>
