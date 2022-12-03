<?php
  
  namespace Project\Controller;

  class Student
  {

    public $id;
    public $name;
    
    public function __construct()
    {
      session_start();
    }
    public function store($data)
    {

      //  session_start();

       $_SESSION ['students'][]= $data;

                // array_push($students, $data);
                // print_r($students);
                $_SESSION['message']='successfully Added';
    }

   public function show($id)
   {
      $students = $_SESSION['students'];
      
      $id= $_GET['id'];
      $studentInfo=null;

     foreach ($students as $key => $student) 
     {
         if ($student['id']==$id) {
            $studentInfo= ($_SESSION['students'][$key]);
         }
      }

      return $studentInfo;
   }



   public function update($data , $id)
   { 
            $students = $_SESSION['students'];

            $id= $_GET['id'];
            // $studentInfo=null;

              foreach ($students as $key => $student) 
              {
                  if ($student['id']==$id) {
                   $_SESSION['students'][$key]= $data;
                  }
                }

    }





    public function destroy($id){

      
    $students = $_SESSION['students'];

    $id= $_GET['id'];

     foreach ($students as $key => $student) 
     {
         if ($student['id']==$id) {
            unset($_SESSION['students'][$key]);
         }
      }

      $_SESSION['message']='successfully deleted';

    }
  }

?>