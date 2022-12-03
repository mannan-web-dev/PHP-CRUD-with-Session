


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<div>

<?php
      include_once './vendor/autoload.php';
        use Project\Controller\Student;
        
        $student = new Student();
        
        $studentInfo = $student->show($_GET['id']);
      
?>
        <form action="./update.php?id=<?= $studentInfo['id'] ?>"" method="post">
           <div style="margin-left: 50px;">
           <label for="id">Id: </label>
            <input type="number" id="id" name="id" placeholder="Enter your Student Id" value="<?= $studentInfo['id'] ?>"> <br><br>
           </div>
             <div style="margin-left: 20px;">
             <label for="name">Name : </label>
            <input type="text" id="name" name="name" placeholder="Enter your Student Name" value="<?= $studentInfo['name'] ?>"> <br>
             </div>

            <button style="margin-left: 250px;">Update</button>
        </form> 

    </div>
</body>
</html>



