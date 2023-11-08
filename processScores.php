<?php
include('Team.php'); // Include the Team class

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // uing the GET method
    $teamName = $_GET['teamName'];

    // Instantiate a Team object with the provided team name
    $homeTeam = new Team($teamName);

    // Process and calculate the goal average for each match result
    $ht1 = $_GET['home1']; // HomeScore for Match 1
    $at1 = $_GET['away1']; // AwayScore for Match 1

    $ht2 = $_GET['home2']; // HomeScore for Match 2
    $at2 = $_GET['away2']; // Awayam Score for Match 2

    $ht3 = $_GET['home3']; // HomeScore for Match 3
    $at3 = $_GET['away3']; // AwayScore for Match 3

   
    $homeTeam->finalScore($ht1, $at1);
    $homeTeam->finalScore($ht2, $at2);
    $homeTeam->finalScore($ht3, $at3);
   
    $goalAverage = $homeTeam->getGoalAverage();
    echo "Goal Average for $teamName: $goalAverage";

}
?>