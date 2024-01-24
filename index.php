<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>PHP Strong Password Generator</title>
</head>
<body>

    <style>
        body {
            background-color: #e3e3e3;
        }
    </style>

    <div class="container">
        <form style="display: flex; justify-content: center; margin-top: 40px;">
            <label for="password-length">Scegli lunghezza password:</label>
            <input type="number" name="password_length" min="0" max="100">
            <input type="submit" value="SUBMIT">
        </form>
    </div>
    
    <?php

        if (isset($_GET['password_length'])) {

            $password_length = $_GET['password_length'];
            
            $randomPassword = generatePassword($password_length);

            echo "La tua password generata è: " . $randomPassword;
        }

        function generatePassword($length) {

            $alphaCharacters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!?=/@#$%&()_+-';

            $password = '';

            for ($i = 0; $i < $length; $i++) {
                $password .= $alphaCharacters[rand(0, strlen($alphaCharacters) -1)];
            }

            return $password;
        }
    ?>

</body>
</html>