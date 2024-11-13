<?php
    include "../html-include.php";
    include "connect.php";
    startHTML("Melee Raw Database", "./javascript/query.js", "Site.css");
?>
<div>
    <hr>
    <a href="Homepage.php">Home</a> |
    <a href="player.php" id="players">Individual Players</a> |
    <a href="Tournament.php" id="tournaments">Individual Tournaments</a>
    <hr>
    <p>Here is the data you requested: </p>
</div>
<?php
    $table = $_POST['database'];
    $i = 0;
    $j = 0;
    foreach ($_POST as $val) {
        $i++;
    }
    print "<table><tr>";
    foreach ($_POST as $val) {
        $j++;
        if ($j == 1) {
            continue;
        }
        if ($i != $j) {
            $end = false;
        }
        else {
            $end = true;
        }
        $column = addColumn($val, $column, $end);
        print "<td>$val</td>";
    }
    print "</tr>";
    $q = "select $column from $table";
    $query = $pdo->prepare($q);
    $query->execute();
    $allrows = $query->fetchAll();
    foreach ($allrows as $row) {
        $tr = "<tr>";
        foreach ($row as $val) {
            $td = "<td>$val</td>";
            $tr = $tr . $td;
        }
        $tr = $tr . "</tr>";
        print $tr;
    }
    print "</table>";
    function addColumn($type,$column, $end) {
        if ($end == false) {
            $column = "$column" . "$type, ";
        }
        if ($end == true) {
            $column = "$column" . "$type";
        }
        return $column;
    }
?>