    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Student List</title>
    </head>
    <body>
        

    <?php 
      session_start();

       $students =$_SESSION['students'] ?? [];
    ?>

  <a href="./create.php">Create</a>


    <?php 
     if (isset($_SESSION['message'])) {
        echo $_SESSION['message'];
        unset ($_SESSION['message']);
     }
    
    ?>

    <table border="1"  style="color:blue;text-align:center; width: 500px; margin:10px;">
        <tr>
            <th>ID</th> 
            <th>Name</th>
            <th>Action</th>
        </tr>

        
        <tbody>
                <?php 
                foreach ($students as $student) {  ?>
                    
                <tr>
                <td> <?php echo $student ['id'] ?></td>
                <td> <?php echo $student ['name'] ?></td>

                <td><a href="show.php?id=<?= $student['id'] ?>">Show</a>
                    <a href="edit.php?id=<?= $student['id'] ?>">Edit</a>
                    <a href="delete.php?id=<?= $student['id'] ?>">Delete</a>
                </td>
                </tr>
            
        <?php } ?>
        </tbody>
    </table>

    </body>
    </html>