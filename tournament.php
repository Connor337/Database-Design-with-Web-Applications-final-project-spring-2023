<?php
    include "../html-include.php";
    require_once "connect.php";
    startHTML("Melee Raw Database", "./javascript/query.js", "Site.css");
    $q = "select cleaned_name from melee_tournaments";
    $query = $pdo->prepare($q);
    $query->execute();
    $allrows = $query->fetchAll();
?>
<div>
    <hr>
    <a href="Homepage.php">Home</a> |
    <a href="#" id="tournament_players">Players who attended</a> |
    <a href="#" id="tournament_sets">Sets Played</a> |
    <a href="player.php" id="players">Individual Players</a> 
    <hr>
</div>
<div id="maincontent">
    <h1>Custom Queries for the Tournament Database</h1>
    <p>Here, there are two options for custom queries. The first is Players who attended, which displays all of the players who attended a given tournament that are in the player database. The second is Sets Played, which shows all the sets that were played at a given tournament between two players that are in the player database.</p>
</div>
<?php
    print "<select id=\"tournament_select\">";
    foreach ($allrows as $row) {
        $tournament = $row['cleaned_name'];
        print "<option value=\"$tournament\">$tournament</option>";
    }
    print "</select>";
    print "<div id=\"tournament-sets\"></div>";
    endHTML();
?>