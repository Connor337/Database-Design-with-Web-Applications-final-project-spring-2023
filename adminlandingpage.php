<?php
exit();
    include "../html-include.php";
    include "connect.php";
    startHTML("Query OK", "", "");
    $table = $_POST['table'];
    $action = $_POST['action'];
    $column = $_POST['column'];
    $data = $_POST['data'];
    $idcolumn = $_POST['idcolumn'];
    $id = $_POST['id'];
    $password = $_POST['password'];
    if ($password != "sewanee") {
        print "Access Denied: Incorrect Password";
        endHTML();
        exit();
    }
    if ($action == "update") {
        $q = "update $table set $column = $data where $idcolumn = $id";
        $query = $pdo->prepare($q);
        $query->execute();
        }
    else if ($action == "delete") {
        $q = "delete from $table where $column = $id";
        $query = $pdo->prepare($q);
        $query->execute();
    }
    else if ($action == "insert") {
        $q = "insert into $table set $column = $id";
        $query = $pdo->prepare($q);
        $query->execute();
    }
    print "The database has been updated.";
    print "<form action=\"adminpage.php\" method=\"post\">";
    print "<input type=\"hidden\" name=\"password\" value=\"sewanee\">";
    print "<input type=\"submit\" value=\"return to admin page\">";
    endHTML();
?>