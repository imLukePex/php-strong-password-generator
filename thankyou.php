<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <?php
        session_start();
        $psw = $_SESSION["psw"];
    ?>
</head>
<body>
    <h2 style="color: darkblue; text-align: center;">
        La tua password è: <?php echo $psw; ?>
    </h2>
</body>
</html>