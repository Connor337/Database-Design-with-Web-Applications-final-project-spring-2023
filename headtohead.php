<?php
    require_once "../connect.php";
    $player = "'" . $_GET['player'] . "'";
    $q3 = "set sql_big_selects = 1";
    $query3 = $pdo->prepare($q3);
    $query3->execute();
    $q = "select p1.tag as Selected_player, p2.tag as Player2, count(s.set_id) as sets_won from melee_players as p1, melee_players as p2, melee_sets as s where p1.tag = $player and s.winner_id = p1.player_id and (p2.player_id = s.p1_id or p2.player_id = s.p2_id) and p2.tag != $player group by p1.tag, p2.tag";
    $query = $pdo->prepare($q);
    $query->execute();
    $allrows1 = $query->fetchAll();
    $q2 = "select p1.tag as Selected_player, p2.tag as Player2, count(s.set_id) as sets_won from melee_players as p1, melee_players as p2, melee_sets as s where p1.tag = $player and s.winner_id = p2.player_id and (p1.player_id = s.p1_id or p1.player_id = s.p2_id) and p2.tag != $player group by p1.tag, p2.tag";
    $query2 = $pdo->prepare($q2);
    $query2->execute();
    $allrows2 = $query2->fetchAll();
    print "<table>\n<tr>\n<td>Selected Player</td>\n<td>Opponent</td>\n<td>Sets Won</td>\n<td>Sets Lost</td>\n</tr>";
    foreach ($allrows1 as $row) {
        $Selected_Player = $row['Selected_player'];
        $Player2 = $row['Player2'];
        $won_sets = $row['sets_won'];
        $sets_lost = '0';
        foreach ($allrows2 as $row2) {
            $player2_2 = $row2['Player2'];
            if ($player2_2 == $Player2) {
                $sets_lost = $row2['sets_won'];
                break;
            }
        }
        print "<tr>\n<td>$Selected_Player</td>\n<td>$Player2</td>\n<td>$won_sets</td>\n<td>$sets_lost</td>\n</tr>";
    }
    print "</table>";
?>