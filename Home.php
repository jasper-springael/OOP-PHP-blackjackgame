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
        <div class="row">
            <div class="col-md-6">
                <fieldset>
                <legend>Player 1: <?php echo($_SESSION['namePlayer']);?></legend>
                <p>Score:</p>
                <?php 
                require('game.php');
                echo ($_SESSION['score']);
                ?>
                </br>
                <p>Turns:</p>
                <?php
                echo ($_SESSION['turn']);
                ?>
                    <form action="post">
                        <button type="button" class="btn btn-dark" name="start">START!</button>
                        <button type="button" class="btn btn-success" name="hit">Hit</button>
                        <button type="button" class="btn btn-primary" name="stand">Stand</button>
                        <button type="button" class="btn btn-secondary" name="yield">Yield</button>
                    <?php 
                    function whatIsHappening() {
                        echo '<h2>$_GET</h2>';
                        var_dump($_GET);
                        echo '<h2>$_POST</h2>';
                        var_dump($_POST);
                        echo '<h2>$_COOKIE</h2>';
                        var_dump($_COOKIE);
                        echo '<h2>$_SESSION</h2>';
                        var_dump($_SESSION);
                    }
                    whatIsHappening();
                    ?>
                    </form>
                </fieldset>
            </div>
            <div class="col-md-6">
                <h2>Player 1: <?php echo($_SESSION['nameHouse']);?></h2>
                <?php

                ?>
            </div>
        </div>
        <div class="row">
        </div>
    </div>
</body>
</html>
