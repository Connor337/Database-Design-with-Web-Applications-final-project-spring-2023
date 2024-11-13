<?php
    include "../html-include.php";
    require_once "connect.php";
    startHTML("Melee Raw Database", "./javascript/query.js", "Site.css");
    $q = "select tag from melee_players";
    $query = $pdo->prepare($q);
    $query->execute();
    $allrows = $query->fetchAll();
?>
<div>
    <hr>
    <a href="Homepage.php">Home</a> |
    <a href="#" id="sets_won">Sets Won</a> |
    <a href="#" id="sets_played">Sets Played</a> |
    <a href="#" id="playervplayer">Sets Between Two Players</a> |
    <a href="#" id="headtohead">Player Head to Heads</a> |
    <a href="Tournament.php" id="tournaments">Individual Tournaments</a>
    <hr>
</div>
<div id="maincontent">
    <h1>Custom Queries for the Player Database</h1>
    <p>Here, you have the option of four different queries. The first is Sets Won, which shows all of the sets that your chosen player has won against other players in the database. The second is Sets Played, which shows all the sets that your chosen player has played against other players in the database. The third is Sets Between Two Players, which shows all the sets that two specific players have played. Finally, the fourth is Player Head to Heads, which shows a given player's number of wins and losses against every player that they have played against. </p>
</div>
<?php
    print "<select id=\"player1_select\">";
    foreach ($allrows as $row) {
        $tag = $row['tag'];
        print "<option value=\"$tag\">$tag</option>";
    }
    print "</select>";
    print "<select id=\"player2_select\">";
    foreach ($allrows as $row) {
        $tag = $row['tag'];
        print "<option value=\"$tag\">$tag</option>";
    }
    print "</select>";
    print "<br><div id=\"player_sets\">";
    print "</div>";
    print "<div id=\"data\">";
    print "</div>";
    endHTML();
?>