<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>PHP Strong Password Generator</title>

    <?php
        require_once __DIR__ . "/functions.php";
    ?>
</head>
<body>

    <style>
        body {
            background-color: #e3e3e3;
        }
    </style>

    <div class="container">
        <form style="display: flex; justify-content: center; margin-top: 40px;">
            <label for="psw_lng">Scegli lunghezza password:</label>
            <input type="number" name="psw_lng">
            <input style="margin-left: 10px;" type="submit" value="GENERATE">
        </form>
        
        <?php

            $psw_lng = $_GET["psw_lng"] ?? -1;
            echo "lng: " . $psw_lng;

            $psw = getPsw($psw_lng);
            
        ?>

        <br><br>

        <h2 style="color: darkblue; text-align: center;">
                La tua password è: <?php echo $psw; ?>
        </h2>

    </div>
</body>
</html>