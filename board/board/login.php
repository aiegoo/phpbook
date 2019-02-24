<? include "db.php";
$query = "SELECT * FROM users";
$result = mysqli_query($connection, $query);
if(!$result) {
  die('Query Failed' . mysqli_error());
}

?>

<!DOCTYPE html>
<html lang="kn">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
</head>
<body>
 <!--  div.container>div.col-sm-6>form[action="login_create.php" method="post"]>div.form-group>label[for="username"]+input.form-control[type="text" name="username"]^div.form-group>label[for="password"]+input.form-control[type="password" name="password"]^div.form-group>select^input.btn -->
 <div class="container">
   <div class="col-sm-6">
     <form action="login_create.php" method="post">
       <div class="form-group">
         <label for="username"></label>
         <input type="text" class="form-control" name="username">
         </div>

       <div class="form-group">
         <label for="password"></label>
         <input type="password" class="form-control" name="password">
         </div>

       <div class="form-group">
       <select name="" id=""></select>
       </div>
       <input type="text" class="btn btn-primary" type="submit" name="submit" value="UPDATE">
     </form>
   </div>
 </div>
</body>
</html>
