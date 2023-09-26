<?php require 'database.php' ;
$sql_query = "select * from countries";
$result = mysqli_query($connection, $sql_query);


$sql_query_2



?>

<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css\bootstrap-grid.min.css">
 <script src="js\bootstrap.bundle.js"></script>
 <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <div class = "row mt-4 mb-2">
    <div class = "col-2"></div>
    <div class = "col-8">
        <div class="card">
            <div class="card-body text-center">
                <h4 class="card-title">Registration form</h4>
               <form action="register.php" method = "post">
                   <div class = "form-floating mb-3">
                    <input type="text" name = "email" class = "btn" id = "email" placeholder="name@example.gmail.com">
                    <label for="username">Username</label>
                   </div>
                   <div class = "form-floating mb-3">
                    <input type="text" name = "username" class = "btn" id = "username" placeholder="username">
                    <label for="username">Username</label>
                   </div>
                   <div class = "pwd">
                    <input type="password" class = "form-control" name = "password" id = "password" placeholder="name@example.com">
                    <span class = "passwordIconHolder">
                       <i class = "passwordIcon" id = "passwordIcon" onclick="showpassword()">X</i>
                    </span>
                   </div>
                   <!--Counrtry -->
                   <select class="form-select" name="Country" id="country">
                    <option value="" disabled selected>Please choose a country</option>
                    <option value="ORSZAGID">ORSZAG neve</option>
                   </select>
                  <input type="submit" name = "submit" class = "btn btn-warning" id = "submit">
               </form>
            </div>
        </div>
    </div>
    <div class = "col-2"></div>
    </div>
</div>
</body>
</html>
