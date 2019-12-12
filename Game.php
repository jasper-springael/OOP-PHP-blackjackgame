<?php
require('Blackjack.php');
session_start();
$Player= new BlackJack();
$House=new Blackjack();
$Player-> giveName('Player');
$House-> giveName('House');
$_SESSION['namePlayer']='';
$_SESSION['nameHouse']='';
$_SESSION['score']=0;
$_SESSION['turn']=0;
if(isset($_POST['start'])) {
    $_SESSION['nameplayer']='Player';
    $_SESSION['nameHouse']='House';
    startTheGame();

}

?>