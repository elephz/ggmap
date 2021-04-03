<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    if (isset($_POST["submit_coordinates"]))
    {
        $latitude = $_POST["latitude"];
        $longitude = $_POST["longitude"];
        ?>
 
        <iframe width="100%" height="500" src="https://maps.google.com/maps?q=<?php echo $latitude; ?>,<?php echo $longitude; ?>&output=embed"></iframe>
 
        <?php
    }
?>
<form method="POST">
    <p>
        <input type="text" name="latitude" placeholder="Enter latitude">
    </p>
 
    <p>
        <input type="text" name="longitude" placeholder="Enter longitude">
    </p>
 
    <input type="submit" name="submit_coordinates">
</form>
</body>
</html>