<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vertical Pattern Program</title>
</head>
<body>
    <h1>Vertical Pattern Program (1, 12, 123..)</h1>
    <form action="#" method="POST">
        <label>Enter your desired number.</label>
        <input type="text" name="n1">
        <input type="submit" name="submit">
    </form>
</body>
</html>

<?php
if(isset($_POST['submit'])){
    $N1 = $_POST['n1'];
    for($i=1;$i<=$N1;$i++){
        for($j=1;$j<=$i;$j++){
            echo $j;
        }
        echo "<br>";
    }    
}
?>
