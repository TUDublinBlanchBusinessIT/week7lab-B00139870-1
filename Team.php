<?php
class Team {
    private $name;
    private $totalPoints;
    private $totalGames;
    private $totalGoals;

    public function __construct($name) {
        $this->name = $name;
        $this->totalPoints = 0;
        $this->totalGoals = 0;
        $this->totalGames = 0;
    }

    public function finalScore($homeTeamScore, $opposingTeamScore) {
        $this->totalGoals += $homeTeamScore;
        $this->totalGames++;

        if ($homeTeamScore > $opposingTeamScore) {
            $this->totalPoints += 3; // Home team won
        } elseif ($homeTeamScore === $opposingTeamScore) {
            $this->totalPoints += 1; // It's a draw
        }
        // No points added for a loss
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
?>