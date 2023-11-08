<?php
class Team {
    private $name="";
    private $totalGames;
    private $totalPoints;
    private $totalGoals;

    public function __construct($parm1) {
        $this->name = $name;
        $this->totalPoints = 0;
        $this->totalGoals = 0;
        $this->totalGames = 0;
    }
// public funtion 
    // strings 
    public function finalScore($homeTeamScore, $opposingTeamScore) {
        $this->totalGoals += $homeTeamScore;
        $this->totalGames++;

        if ($homeTeamScore > $opposingTeamScore) {
            $this->totalPoints += 3; // Home team won
        } elseif ($homeTeamScore === $opposingTeamScore) {
            $this->totalPoints += 1; // It's a draw
        }
        
    }

    public function getGoalAverage() 

        return $this->totalGoals / $this->totalGames;
    }

    public function getName() {
        return $this->name;
    }

    public function getTotalPoints() {
        return $this->totalPoints;
    }

    public function getTotalGoals() {
        return $this->totalGoals;
    }

    public function getTotalGames() {
        return $this->totalGames;
    }
}
// create a PHP class from a UML description
//Take values from a HTML form and use them to instantiate a PHP class
//use the methods of a PHP class to process data relating to the class
?>