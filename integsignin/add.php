
<?php
require_once 'config.php';
$result=false;
if (!empty($_POST)){
    $email=$_POST['email'];
    $password=$_POST['password'];

    $sql="INSERT INTO users(email,password) VALUES(:email,:password)";
    $query=$pdo->prepare($sql);
    $result=$query->execute([
        'email'=>$email,
        'password'=>$password
    ]);
}
?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DataBases</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn/4.5.0/css/bootstrap.min.css"
    integrity="sha384-9aIt2nRpC12Uk9gS9baDl4llNQApFmC26EwA0H8WgZl5MYYxFfc+NcPbldKGj7Sk" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcnd.com/bootstrap/4.5.0/js/booststrap.min.js" integrity="sha348-0gVRvuATPlz7JjHLku0U7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7B/
    KR0JI" crossorigin="anonymous"></script>
</head>
<body>

    <div class="container">
        <h1>Add User</h1>
        <a href="index.php">Home</a>
        
        <?php
        if($result==true){
            echo '<div class="alert alert-success">!!!Success</div>';
        }
        ?>

        <form action="add.php" method="post">
            <label for="email">Email</label>
            <input type="text" name="email" id="email">
            <br>
            <label for="password">Password</label>
            <input type="password" name="password" id="password">
            <br>
            <input type="submit" value="save">
    </form>
    </div>      
</body>
</html>

