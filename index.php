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
        <h1>Welcome to the game of "Heads or tails"</h1>
        <h2>Before the beginning of the game, choose your difficulty level!</h2>
        <form class="levels" action="game.php" method="post">
            <button type="submit" name="mode" value="easy">Easy mode</button>
            <button type="submit" name="mode" value="average"
            <?php 
                if (isset($_POST["unlock"])){
                    $unlock = $_POST["unlock"];
                } else {
                    $unlock = 1;
                }

                if ($unlock == 1) {
                    echo (" disabled");
                }
            ?>>Average mode</button>
            <button type="submit" name="mode" value="hard"
            <?php 
                if ($unlock == 1 || $unlock == 2) {
                    echo (" disabled");
                }
            ?>>Hard mode</button>
            <input type="hidden" name="unlock" value="<?= $unlock ?>">
        </form>
    </div>
</body>
</html>