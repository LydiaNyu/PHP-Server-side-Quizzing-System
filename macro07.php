<!doctype html>
<html>

  <head>
    <title>Assignment 07</title>
    <style>
    body{background-color: coral;
         font-size: 200%;
         font-family: Fantasy;
         text-align:center;
         }
    select{
        
        
    }
    button{
    	}
        
    </style>
  </head>

  <body>
    <h1>Simpsons Quiz</h1>
    <hr>

    <form action="macro07_process.php" method="GET">

      <div>
        What is your favorite food?
        <select name="food">
          <option value="miss">Select a food</option>
          <option value="homer">Donuts</option>
          <option value="marge">Apple Pie</option>
          <option value="bart">Krusty Flakes</option>
          <option value="lisa">Anything organic and locally sourced</option>
        </select>
      </div>
      
      <div>
        What is your ideal job?
        <select name="job">
          <option value="miss">Select a job</option>
          <option value="homer">Working at a bakery</option>
          <option value="marge">French Tutor</option>
          <option value="bart">Prank phone call specialist</option>
          <option value="lisa">College professor</option>
        </select>
      </div>
      
      <div>
        What is your favorite hobby?
        <select name="hobby">
          <option value="miss">Select a hobby</option>
          <option value="homer">Watching TV</option>
          <option value="marge">Knitting</option>
          <option value="bart">Skateboarding</option>
          <option value="lisa">Reading</option>
        </select>
      </div>
      
      <div>
        What is your biggest fear?
        <select name="fear">
          <option value="miss">Select a fear</option>
          <option value="homer">Sock puppets</option>
          <option value="marge">Flying</option>
          <option value="bart">I'm fearless, man</option>
          <option value="lisa">Getting anything below an A in school</option>
        </select>
      </div>

      <button>What character am I?</button>
      <a href="results.php">
	     see aggregate results </a>
    </form>
    <?php
    if($_GET['error']=="miss"){
    print "<h2> <strong> Please Select All Options!!! </strong> </h2>";
    }
    setcookie('result','');
    ?>
  </body>

</html>
