<?php
    include "connectDb.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School Management System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" >
</head>

<body>
    
        <div class="container" >
            <button class="btn btn-primary my-5" > <a href="user.php" class="text-light" > Add Student</a></button>

        </div>

        <table>
            <thead>
                <tr>
                    <th scope="">Sl no</th>
                    <th scope="" >Name</th>
                    <th scope="" >Email</th>
                    <th scope="" >Contact</th>
                    <th scope="" >Password</th>
                    <th scope="" >Operation</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $sql = "select * from `student`";
                    $result = mysqli_query($connect,$sql);
                    if($result){
                      $studentRow = mysqli_fetch_assoc($result); 
                      var_dump($studentRow);             
                    }
                ?>
            </tbody>
        </table>

</body>
</html>