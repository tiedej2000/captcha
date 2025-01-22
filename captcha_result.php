<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animal Captcha Result</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <style>
        body{
            display: flex;
            flex-direction: column;
            gap: 10px;
            font-family: "Poppins", serif;
        }

        img{
            width: 50px;
            height: auto;
        }
    </style>
</head>
<body>
    <?php
    $allCorrect = true;

    if ($_POST['animalOne'] !== 'Hund') {
        $allCorrect = false;
    }
    if ($_POST['animalTwo'] !== 'Hase') {
        $allCorrect = false;
    }
    if ($_POST['animalThree'] !== 'Nashorn') {
        $allCorrect = false;
    }

    if ($allCorrect) {
        echo'<img src = ./images/smiley.svg>';
        echo "<p>Das Captcha wurde erfolgreich gelöst!</p>";
        echo '<a href="index.html">Falls dir langweilig ist, versuchs nochmal!</a>';
    } else {
        echo'<img src = ./images/smiley-meh.svg>';
        echo "<p>Leider falsch!</p>";
        echo '<a href="index.html">Versuchs nochmal!</a>';
    }

    ?>
</body>
</html>