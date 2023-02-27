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
    <div class="wrapper">
        <form class="levels" action="<?php
        if (isset($_POST["game"])) {
            $game = $_POST["game"];
            $victory = $_POST["victory"];
        } else {
            $game = 0;
            $victory = 0;
        }
        if ($game == 10) {
            echo "results.php";
        } else {
            echo "game.php";
        }
        ?>" method="post">
            <?php
                $mode = $_POST["mode"];
                $unlock = $_POST["unlock"];
                $chisl = rand(0,1);
                $game += 1;
                $resultText = "";
                if (isset($_POST["choice"])) {
                    $choice = $_POST["choice"];
                    if ($chisl == $choice) {
                        if ($mode == "hard") {
                            $chisl = rand(0,1);
                            if ($chisl == $choice) {
                                $resultText = "Victory!";
                                $victory += 1;
                            } else {
                                $resultText = "YOU SUCK!";
                            }
                        } else {
                            $resultText = "Victory!";
                            $victory += 1;
                        }
                    } else {
                        if ($mode == "easy") {
                            $chisl = rand(0,1);
                            if ($chisl == $choice) {
                                $resultText = "Victory!";
                                $victory += 1;
                            } else {
                                $resultText = "YOU SUCK!";
                            }
                        } else {
                            $resultText = "YOU SUCK!";
                        }
                    }
                }
            ?>
            <input type="hidden" name="mode" value="<?= $mode ?>">
            <input type="hidden" name="unlock" value="<?= $unlock ?>">
            <input type="hidden" name="game" value="<?= $game ?>">
            <input type="hidden" name="victory" value="<?= $victory ?>">
            <button type="submit" name="choice" value="1">Heads</button>
            <button type="submit" name="choice" value="0">Tails</button>
            <?php
                echo "<p>$resultText</p>";
                var_dump ($_POST);
            ?>
        </form>
    </div>
</body>

</html>