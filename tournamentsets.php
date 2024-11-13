<?php
    require_once "../connect.php";
    $tournament = '"' . $_GET['tournament'] . '"';
    $q = "set sql_big_selects = 1";
    $query = $pdo->prepare($q);
    $query->execute();
    $q2 = "select s.set_id, s.game, t.cleaned_name, p3.tag as winner, p1.tag as player1, p2.tag as player2, s.p1_score, s.p2_score, s.bracket_name, s.bracket_order, s.set_order, s.best_of from melee_players as p1, melee_players as p2, melee_players as p3, melee_sets as s, melee_tournaments as t where p1.player_id = s.p1_id and p2.player_id = s.p2_id and p3.player_id = s.winner_id and s.tournament_id = t.tournament_id and t.cleaned_name = $tournament group by s.set_id";
    $query2 = $pdo->prepare($q2);
    $query2->execute();
    $allrows = $query2->fetchAll();
    print "<table>\n<tr>\n<td>Set ID</td>\n<td>Game</td>\n<td>Tournament Name</td>\n<td>Winner</td>\n<td>Player 1</td>\n<td>Player 2</td>\n<td>Player 1 Score</td>\n<td>Player 2 Score</td>\n<td>Bracket Name</td>\n<td>Bracket Order</td>\n<td>Set Order</td>\n<td>Best Of</td>\n</tr>";
    foreach ($allrows as $row) {
        $set_id = $row['set_id'];
        $game = $row['game'];
        $cleaned_name = $row['cleaned_name'];
        $winner = $row['winner'];
        $player1 = $row['player1'];
        $player2 = $row['player2'];
        $p1_score = $row['p1_score'];
        $p2_score = $row['p2_score'];
        $bracket_name = $row['bracket_name'];
        $bracket_order = $row['bracket_order'];
        $set_order = $row['set_order'];
        $best_of = $row['best_of'];
        print "<tr>\n<td>$set_id</td>\n<td>$game</td>\n<td>$cleaned_name</td>\n<td>$winner</td>\n<td>$player1</td>\n<td>$player2</td>\n<td>$p1_score</td>\n<td>$p2_score</td>\n<td>$bracket_name</td>\n<td>$bracket_order</td>\n<td>$set_order</td>\n<td>$best_of</td>\n</tr>";
    }
?>