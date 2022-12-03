<?php



//    include_once './app/Controller/Student.php'; 

   include_once './vendor/autoload.php';
   use Project\Controller\Student;
   
   $student = new Student();
  
   $student->update($_POST , $_GET['id'] );

   header('Location: ./index.php');
    ?>