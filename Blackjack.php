<?php
class Blackjack {
    public $name;
    public $scorePlayer;
    public $scoreHouse;
    public $card;
    public $turnPlayer;
    public $turnHouse;
    
    // give name
    public function giveName($name) {
        $this->name=$name;
    }
    // start the game
    public function startTheGame() {
        $this->$scorePlayer=0;
        $this->$scoreHouse=0;
        $this->$turnPlayer=0;
        $this->$turnHouse=0;
        for($i=0;$i<2;$i++) {
            $this->scorePlayer+=rand(1,11);
            $this->scoreHouse+=rand(1,11);
        }
        $this->turnPlayer=1;
        $this->turnHouse=1;
    }

    // hit=give card, check score
    public function hit($score,$turn) {
        if(isset($_POST['hit'])) {
            $this->score+=rand(1,11);
            $this->turn++;
            checkScorePlayer($score,$turn);
        }
    }

    // end your turn and start the dealer's turn
    public function stand() {
        if(isset($_POST['stand'])) {
            $_SESSION['score']=$this->score;
        }
    }
    // surrender the game
    public function surrender() {
        $this->score=0;
        echo('you lose!');
    }
    // check the score
    public function checkScorePlayer($score,$turn) {
        if ($this->score>21) {
            echo 'Sorry, bust.';
        }
        if ($this->score==21 && $this->turn==2) {
            echo 'Wow, blackjack';
        }
        if (($this->score<21) ||($this->score==21 && $this->turn>2)) {
            echo('You are still in! Hit or stand?');
        }
    }
}

?>
