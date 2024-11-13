<?php
    include "../html-include.php";
    startHTML("Melee Player stats", "./javascript/query.js", "Site.css");
?>
    <div>
        <hr>
        <a href="#" id="player_database">Player Database</a> |
        <a href="#" id="set_database">Set Database</a> |
        <a href="#" id="tournament_database">Tournament Database</a> |
        <a href="player.php" id="players">Individual Players</a> |
        <a href="Tournament.php" id="tournaments">Individual Tournaments</a>
        <hr>
    </div>
    </div>
    <div id="database">
    </div>
    <div id="maincontent">
        <h1>Data For Super Smash Bros. Melee</h1>
        <p>Welcome to the site of my final project for CSCI 284! This website features a sample 1000 players from the Melee competative scene and the tournaments and sets that they participated in. On the top bar, there are three buttons that will take you to any of the three databases, depending on which one you click. You will get to choose which columns are displayed and which ones are not. These buttons all lead to their respective raw databases. The two buttons to the right of them lead to custom queries for both the player and tournament databases. There is also a section of the website for editing the database which is password protected. This section allows you to insert, update, or delete data from the database.</p>
        <p>Most of this website is powered by jquery, which is why most database queries occur on the same page. </p>
    </div>
    <div id="bottomtext"><p>All data featured on this website is from <a href="https://smashdata.gg/">https://smashdata.gg/</a>. For the full database, visit this link.</p>
    </div>
<?php
    endHTML();
?>