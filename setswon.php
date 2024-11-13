<?php
    require_once "../connect.php";
    $player = "'" . $_GET['player'] . "'";
    $q = "select t.cleaned_name as Tournament, p2.tag as winner, p1.tag as player_1, p3.tag as player_2, s.p1_score as player1_score, s.p2_score as player2_score, s.bracket_name as bracket_name, s.best_of as best_of from melee_players as p1, melee_players as p2, melee_players as p3, melee_sets as s, melee_tournaments as t where p1.player_id = s.p1_id and p2.player_id = s.winner_id and p3.player_id = s.p2_id and s.tournament_id = t.tournament_id and p2.tag = $player";
    $query = $pdo->prepare($q);
    $query->execute();
    $allrows = $query->fetchAll();
    print "<table>\n<tr>\n<td>Tournament Name</td>\n<td>Winner</td>\n<td>Player 1</td>\n<td>Player 2</td>\n<td>Player 1 Score</td>\n<td>Player 2 Score</td>\n<td>Bracket Name</td>\n<td>Best of</td>\n</tr>\n";
    foreach ($allrows as $row) {
        $tournament = $row['Tournament'];
        $winner = $row['winner'];
        $player1 = $row['player_1'];
        $player2 = $row['player_2'];
        $player1_score = $row['player1_score'];
        $player2_score = $row['player2_score'];
        $bracket_name = $row['bracket_name'];
        $best_of = $row['best_of'];
        print "<tr>\n<td>$tournament</td>\n<td>$winner</td>\n<td>$player1</td>\n<td>$player2</td>\n<td>$player1_score</td>\n<td>$player2_score</td>\n<td>$bracket_name</td>\n<td>$best_of</td>\n</tr>\n";
    }
?>