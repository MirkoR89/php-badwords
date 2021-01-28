<?php
   $phrase = "I'm a fucking developer";
   $badWord = 'fucking';
   $hideWord = $_GET['hideWord'];

   $newphrase = str_replace($badWord, $hideWord, $phrase);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome PHP</title>
</head>
<body>
    <p><?php echo $newphrase ?></p>
</body>
</html>