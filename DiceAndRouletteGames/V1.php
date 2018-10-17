<?php
/*
* Dice game
*/

class Dice
{
    const MIN_POINT = 1;
    const MAX_POINT = 6;

    function throwIt()
    {
        return rand(self::MIN_POINT, self::MAX_POINT);
    }
}

class Player
{
    public $name;
    protected $_points;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getPoints() {
        return $this->_points;
    }

    public function addPoints($points)
    {
        $this->_points += $points;
        echo "Игрок {$this->name} получил {$points} очков, в сумме {$this->_points}", "<br>";
    }
}

class Rule
{
    protected $_dice;
    protected $_player;

    public function __construct($player)
    {
        $this->_dice = new Dice;
        $this->_player = $player;
    }

    public function run()
    {
        $points = $this->_dice->throwIt();
        $this->_player->addPoints($points);
    }

}

class Tour
{
    protected $_player;
    protected $_cntTours;

    public function __construct($player, $cntTours)
    {
        $this->_player = $player;
        $this->_cntTours = $cntTours;
    }

    public function run()
    {
        for ($i = 0; $i < $this->_cntTours; $i++) { 
         	$rule = new Rule($this->_player);
          $rule->run();
        } 
    }
}

class Game
{
    protected $_players = array();   

    public function __construct($players)
    {
        $this->_players = $players;
    }

    public function play()
    {
        foreach ($this->_players as $k => $player) 
        {
         	echo "Start tour # " . ++$k . "<br>";
          $tour = new Tour($player, CNT_TOURS);
          $tour->run();
        }
    }

    public function getWinner(){
        $winner = null;
        foreach ($this->_players as $player) {
            if (is_null($winner)) {
                $winner = $player;
            } else {
                if ($winner->getPoints() < $player->getPoints()) {
                    $winner = $player;
                }
            }
        }
        return $winner;
    }

}

define('CNT_TOURS', 3);

$players = array(new Player('vova'), new Player('artem'), new Player('artur'));

$game = new Game($players);
$game->play();
$win = $game->getWinner();

echo "Ура, победил игрок {$win->name}!!!!!!!!!!!!!!!!";
?>