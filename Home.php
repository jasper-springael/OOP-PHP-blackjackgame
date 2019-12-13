<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" type="text/css"
          rel="stylesheet"/>
</head>
<body>
    <div class="container">
    <h1>Blackjack</h1>
    <article class=intro>
    <h2></h2>
        <ul><b>How to play:</b>
            <li>Press start to start a new game. You and the dealer will be dealed 2 starter cards.</li>
            <li>Press hit for an extra card.</li>
            <li>Press stand to keep your score and see the dealer's hand.</li>
            <li>Press yield to be a lil bish and surrender.</li>
        </ul>
        <div class="row">
            <div class="col-md-6">
                <legend>Player 1: <?php echo $Player->name;?></legend>
                <p>Score:</p>
                <?php 
                echo $Player->score;
                echo'<br>';
                echo $Player->message;
                echo'<br>';
                ?>
                </br>
                <p>Turns:</p>
                <?php
                echo ($Player->turn);
                ?>
                <fieldset>
                    <form method="POST" action="Game.php">
                        <button type="submit" class="btn btn-dark" name="start">Start/Reset!</button>
                        <button type="submit" class="btn btn-success" name="hit">Hit</button>
                        <button type="submit" class="btn btn-primary" name="stand">Stand</button>
                        <button type="submit" class="btn btn-secondary" name="yield">Yield</button>
                    <?php 

                    ?>
                    </form>
                </fieldset>
            </div>
            <div class="col-md-6">
            <legend>Player 2: <?php echo $House->name;?></legend>
                <p>Score:</p>
                <?php 
                echo $House->score;
                echo'<br>';
                echo $House->message;
                echo'<br>';
                ?>
                </br>
                <p>Turns:</p>
                <?php
                echo ($House->turn);
                ?>
            </div>
        </div>
        <br>
        <div class="row">
        <h2>
        <?php echo $Result;?>
        </h2>
        </div>
    </div>
</body>
</html>
