<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>Document</title>
</head>
<body>
    <h1>And the results are:</h1>
    <?php 
        $victory = $_POST["victory"];
        $game = $_POST["game"];
        $lose = $game - 1 - $victory;
        $mode = $_POST["mode"];
        $unlock = $_POST["unlock"];
        echo ("<p>Кількість перемог:".$victory."</p>");
        echo ("<p>Кількість поразок:".$lose."</p>");
        if ($victory > $lose) {
            if ($mode == "easy" && $unlock != 3) {
                $unlock = 2;
                echo ("<p>Average level unlocked</p>");
            }
            if ($mode == "average") {
                $unlock = 3;
                echo ("<p>Hard level unlocked</p>");
            }
            echo ("<p>CONGRATULATION!</p>");
        } else {
            echo ("YOU SUCK!");
        }
        echo ('<form class="levels" action="index.php" method="post">');

    ?>
        <input type="hidden" name="unlock" value="<?= $unlock ?>">
        <button type="return" name="return" value="back">Back to the levels</button>
    </form>
</body>
</html>