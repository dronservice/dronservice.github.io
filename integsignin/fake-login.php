
<?php
$user=null;
$query=null;
if(!empty($_POST)){
    require_once 'config';
    /*$query=SELECT*FROM users where email='" . $_ POST['email']. "'AND passwprd='" . md5($_POST['password'])."'";
    $queryResul=$pdo->query($query);
    $user=$queryResult->fetch(PDO::FETCH_ASSOC);
    */
 $query= "SELECT * FROM users where email= :email AND password= :password";
 $prepared=$pdo->prepare($query);
 //$queryResul= $pdo->query($query);
 $prepared->execute([
    'email'=>$_POST['email'],
    'password'=>md5($_POST['password'])
 ]);
 //$user=$queryResul->fetch(PDO::FETCH_ASSOC);
 $user=$prepared->fetch(PDO::FETCH_ASSOC);

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Databases</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn/4.5.0/css/bootstrap.min.css"
    integrity="sha384-9aIt2nRpC12Uk9gS9baDl4llNQApFmC26EwA0H8WgZl5MYYxFfc+NcPbldKGj7Sk" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcnd.com/bootstrap/4.5.0/js/booststrap.min.js" integrity="sha348-0gVRvuATPlz7JjHLku0U7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7B/
    KR0JI" crossorigin="anonymous"></script>
</head>

<body>
    <div clas="container">
        <h1>Fake Login</h1>
        <a href="index.php"></a>
        <form action="fake-login.php">
            <label for="email">Email</label>
            <input type="text" name="email" id="email">
            <br>
            <label for="password">Password</label>
            <input type="password" name="password" id="password">
            <br>
            <input type="submit" value="login">

        </form>
        <h2>Query</h2>
        <div>
            <?php
            print_r($query);
            ?>
        </div>

        <h2>User Data</h2>
        <div>
            <?php
            print_r($user); 
            ?>
        </div>
  
    </div>
</body>
</html>