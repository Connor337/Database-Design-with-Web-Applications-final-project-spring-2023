<?php
    require_once "../connect.php";
    $tournament = '"' . $_GET['tournament'] . '"';
    $q = "set sql_big_selects = 1";
    $query = $pdo->prepare($q);
    $query->execute();
    $q2 = "select p.* from melee_players as p, melee_sets as s, melee_tournaments as t where (p.player_id = s.p1_id or p.player_id = s.p2_id) and s.tournament_id = t.tournament_id and t.cleaned_name = $tournament group by p.tag";
    $query2 = $pdo->prepare($q2);
    $query2->execute();
    $allrows = $query2->fetchAll();
    print "<table>\n<tr>\n<td>Game</td>\n<td>Player ID</td>\n<td>Tag</td>\n<td>Country</td>\n<td>State</td>\n<td>Region</td>\n<td>Current Country</td>\n<td>Current State</td>\n<td>Current Region</td>\n<td>Alias</td>\n</tr>";
    foreach ($allrows as $row) {
        $game = $row['game'];
        $player_id = $row['player_id'];
        $tag = $row['tag'];
        $country = $row['country'];
        $state = $row['state'];
        $region = $row['region'];
        $c_country = $row['c_country'];
        $c_state = $row['c_state'];
        $c_region = $row['c_region'];
        $alias = $row['alias'];
        print "<tr>\n<td>$game</td>\n<td>$player_id</td>\n<td>$tag</td>\n<td>$country</td>\n<td>$state</td>\n<td>$region</td>\n<td>$c_country</td>\n<td>$c_state</td>\n<td>$c_region</td>\n<td>$alias</td>\n</tr>";
    }
?>