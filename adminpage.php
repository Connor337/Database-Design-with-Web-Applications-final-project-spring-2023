<?php
exit();
    include "../html-include.php";
    $password = $_POST['password'];
    if ($password != "sewanee") {
        print "Access Denied: Incorrect Password";
        endHTML();
        exit();
    }
    startHTML("Melee Stats Admin Page", "./javascript/adminpage.js", "Site.css");
?>
<div>
    <hr>
    <a href="Homepage.php">Home</a> 
    <hr>
</div>
<div id="maincontent">
    <h1>Admin Page</h1>
    <p>Here, you can choose which database to edit, and then an action: insert, delete, or update.</p>
</div>
<div id="db">Which database would you like to edit?
    <p><a id="players\" href="#">players</a><p>
    <p><a id="sets\" href="#">sets</a></p>
    <p><a id="tournaments\" href="#">tournaments</a></p>
</div>
<div id="theform\">
</div>
<?php
    endHTML();
?>