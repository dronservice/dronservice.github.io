
<?php
require_once 'config.php';
$queryResult=$pdo->query("SELECT*FROM users"); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Users</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn/4.5.0/css/bootstrap.min.css"
    integrity="sha384-9aIt2nRpC12Uk9gS9baDl4llNQApFmC26EwA0H8WgZl5MYYxFfc+NcPbldKGj7Sk" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcnd.com/bootstrap/4.5.0/js/booststrap.min.js" integrity="sha348-0gVRvuATPlz7JjHLku0U7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7B/
    KR0JI" crossorigin="anonymous"></script>
</head>
<body>
   <div clas="container">
        <h1>List Users</h1>
        <a href="index.php">Home</a>  
        <table class="table">
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>

            <tr>
                <?php
                while($row=$queryResult->fetch(PDO::FETCH_ASSOC)){
                   echo '<tr>';
                   echo '<td>'.$row['name'].'</td>';
                   echo '<td>'.$row['name'].'</td>';
                    echo '<td><a href="update.php?id='.$row['id'].' ">Edit</a></td>';
                    echo '<td><a href="delete.php?id='.$row['id'].' ">Delete</a></td>';
                    echo '</tr>';
                }
                ?>
            </tr>

        
    </table> 
         
   </div> 
</body>
</html>