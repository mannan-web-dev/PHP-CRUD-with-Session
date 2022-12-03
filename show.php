

<?php

include_once './vendor/autoload.php';
   use Project\Controller\Student;
   
   $student = new Student();
  
  $studentInfo =$student->show($_GET['id']);
   

?>


<button style="margin-left: 400px;"><a href="./index.php">List</a></button>

<h1> Details Info</h1>
<h3> Student ID: <?= $studentInfo ['id'] ?> </h3>
<h3> Student Name:   <?= $studentInfo ['name'] ?> </h3>