<?php
    $teamNba = [
        [
            "homeTeam" => "Los Angeles Lakers",
            "homePoint" => "109",
            "awayTeam" => "Boston Celtics",
            "awayPoint" => "98"
        ],
        [
            "homeTeam" => "Miami Heats",
            "homePoint" => "120",
            "awayTeam" => "Chiagaco Bulls",
            "awayPoint" => "101"
        ],
        [
            "homeTeam" => "Toronto Raptors",
            "homePoint" => "89",
            "awayTeam" => "Brooklyn Nets",
            "awayPoint" => "92"
        ],
    ];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nba Calendar</title>
</head>
<body>
    <div>
    <h1>NBA: Le partite di oggi sono:</h1>
        <?php for ($i=0; $i < count($teamNba); $i++) { 
            echo $teamNba[$i]["homeTeam"] . " " . "|"  . " " . rand(80, 130);
            echo "<br>";
            echo $teamNba[$i]["awayTeam"] . " " . "|"  . " " . rand(80, 130);
            echo "<br>";
            echo "<br>";
        } ?>
    </div>
</body>
</html>