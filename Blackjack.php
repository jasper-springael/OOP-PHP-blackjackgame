<?php
class Blackjack {
    public $name;
    public $score;
    public $turn;
    public $message="";
    
   //constructor
    public function __construct($name,$score,$turn) {
        $this->name=$name;
        $this->score=$score;
        $this->turn=$turn;
    }

    // hit=give card, check score
    public function hit() {
            $this->score+=rand(1,11);
            $this->turn++;
        }


    // surrender the game
    public function surrender() {
        $this->score=0;
        $this->$message='You surrendered';
    }
}
?>
