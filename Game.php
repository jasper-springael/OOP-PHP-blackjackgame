<?php
require('Blackjack.php');
session_start();
if (empty($_SESSION['player']) && empty($_SESSION{'dealer'})) {
    $_SESSION['player']= new Blackjack('Player',0,0);
    $_SESSION['house']= new Blackjack('House',0,0);

}
$Player=$_SESSION['player'];
$House=$_SESSION['house'];
$Result="";
// new game start
    if (isset($_POST['start'])) {
        $Player->score=0;
        $Player->turn=0;
        $Player->message="";
        $House->score=0;
        $House->turn=0;
        $House->message="";
        
        for($i=0;$i<2;$i++) {
            $Player->hit();
            $House->hit();
        }

    } 
// player plays and player checks
    if (isset($_POST['hit'])) {
        $Player->hit();

    }

    if ($Player->score !== 0 && $Player->score<=21) {
        $Player->message='Still in the game!';
    }

    if ($Player->score>21) {
        $Player->message='Bust!';
        $Result="You lose!";
     }
// house plays and house checks
    if (isset($_POST['stand'])) {
        while($House->score<15 || $House->score<$Player->score)
        { $House->hit();
        } 
        if ($House->score !== 0 && $House->score<=21) {
            $House->message='Still in the game!';
        }  
    
        if ($House->score !==0 && $House->score>21) {
            $House->message='Bust!';
        }
    }



// final result checks
    if ($House->message=="Bust!") {
        $Result="You win";
    }
    if ($House->message=="Still in the game!") {
        $Result="You lose";
    }

    if (isset ($_POST['yield'])) {
        $Result='You lose!';
        $Player->score=0;
        while($House->score<15){
                $House->hit();
        }
    }

// function whatIsHappening() {
//     echo '<h2>$_GET</h2>';
//     var_dump($_GET);
//     echo '<h2>$_POST</h2>';
//     var_dump($_POST);
//     echo '<h2>$_COOKIE</h2>';
//     var_dump($_COOKIE);
//     echo '<h2>$_SESSION</h2>';
//     var_dump($_SESSION);
// }
// whatIsHappening();

include("Home.php");