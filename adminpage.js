$(document).ready(function(){
    let action = "How do you want to edit the database?<p><a id=\"update\" href=\"#\">update</a></p><a id=\"insert\" href=\"#\">insert</a></p><a id=\"delete\" href=\"#\">delete</a></p>";
    $('#players').click(function(){
        let update = "<form id=\"form\" action=\"adminlandingpage.php\" method=\"post\">Remember to put single quotes for strings<br><input type=\"hidden\" name=\"password\" value=\"pass\"><br><input type=\"hidden\" name=\"action\" value=\"update\"><input type=\"hidden\" value=\"melee_players\" name=\"table\">Column: <input type=\"text\" maxlength=\"150\" size=\"25\" name=\"column\"><br>Data: <input type=\"text\" maxlength=\"150\" size=\"25\" name=\"data\"><input type=\"hidden\" name=\"idcolumn\" value=\"player_id\"><br>Player ID: <input type=\"text\" maxlength=\"20\" size=\"20\" name=\"id\"><br><input id=\"submit\" type=\"submit\">";
        let insert = "<form id=\"form\" action=\"adminlandingpage.php\" method=\"post\">Remember to put single quotes for strings<br><input type=\"hidden\" name=\"password\" value=\"pass\"><br><input type=\"hidden\" name=\"action\" value=\"insert\"><input type=\"hidden\" value=\"melee_players\" name=\"table\"><input type=\"hidden\" name=\"column\" value=\"player_id\"><br>Player ID: <input type=\"text\" maxlength=\"20\" size=\"20\" name=\"id\"><br><input id=\"submit\" type=\"submit\">";
        let del = "<form id=\"form\" action=\"adminlandingpage.php\" method=\"post\">Remember to put single quotes for strings<br><input type=\"hidden\" name=\"password\" value=\"pass\"><br><input type=\"hidden\" name=\"action\" value=\"delete\"><input type=\"hidden\" value=\"melee_players\" name=\"table\"><input type=\"hidden\" name=\"column\" value=\"player_id\"><br>Player ID: <input type=\"text\" maxlength=\"20\" size=\"20\" name=\"id\"><br><input id=\"submit\" type=\"submit\">";
        $('#db').remove();
        $('#theform').html(action);
        $('#update').click(function(){
            $('#theform').html(update);
        });
        $('#insert').click(function(){
            $('#theform').html(insert);
        });
        $('#delete').click(function(){
            $('#theform').html(del);
        });
    });
    $('#sets').click(function(){
        let update = "<form id=\"form\" action=\"adminlandingpage.php\" method=\"post\">Remember to put single quotes for strings<br><input type=\"hidden\" name=\"password\" value=\"pass\"><br><input type=\"hidden\" name=\"action\" value=\"update\"><input type=\"hidden\" value=\"melee_sets\" name=\"table\">Column: <input type=\"text\" maxlength=\"150\" size=\"25\" name=\"column\"><br>Data: <input type=\"text\" maxlength=\"150\" size=\"25\" name=\"data\"><input type=\"hidden\" name=\"idcolumn\" value=\"set_id\"><br>Set ID: <input type=\"text\" maxlength=\"20\" size=\"20\" name=\"id\"><br><input id=\"submit\" type=\"submit\">";
        let insert = "<form id=\"form\" action=\"adminlandingpage.php\" method=\"post\">Remember to put single quotes for strings<br><input type=\"hidden\" name=\"password\" value=\"pass\"><br><input type=\"hidden\" name=\"action\" value=\"insert\"><input type=\"hidden\" value=\"melee_sets\" name=\"table\"><input type=\"hidden\" name=\"column\" value=\"winner_id\"><br>Winner ID: <input type=\"text\" maxlength=\"20\" size=\"20\" name=\"id\"><br><input id=\"submit\" type=\"submit\">";
        let del = "<form id=\"form\" action=\"adminlandingpage.php\" method=\"post\">Remember to put single quotes for strings<br><input type=\"hidden\" name=\"password\" value=\"pass\"><br><input type=\"hidden\" name=\"action\" value=\"delete\"><input type=\"hidden\" value=\"melee_sets\" name=\"table\"><input type=\"hidden\" name=\"column\" value=\"set_id\"><br>Set ID: <input type=\"text\" maxlength=\"20\" size=\"20\" name=\"id\"><br><input id=\"submit\" type=\"submit\">";
        $('#db').remove();
        $('#theform').html(action);
        $('#update').click(function(){
            $('#theform').html(update);
        });
        $('#insert').click(function(){
            $('#theform').html(insert);
        });
        $('#delete').click(function(){
            $('#theform').html(del);
        });
    });
    $('#tournaments').click(function(){
        let update = "<form id=\"form\" action=\"adminlandingpage.php\" method=\"post\">Remember to put single quotes for strings<br><input type=\"hidden\" name=\"password\" value=\"pass\"><br><input type=\"hidden\" name=\"action\" value=\"update\"><input type=\"hidden\" value=\"melee_tournaments\" name=\"table\">Column: <input type=\"text\" maxlength=\"150\" size=\"25\" name=\"column\"><br>Data: <input type=\"text\" maxlength=\"150\" size=\"25\" name=\"data\"><input type=\"hidden\" name=\"idcolumn\" value=\"tournament_id\"><br>Tournament ID: <input type=\"text\" maxlength=\"150\" size=\"25\" name=\"id\"><br><input id=\"submit\" type=\"submit\">";
        let insert = "<form id=\"form\" action=\"adminlandingpage.php\" method=\"post\">Remember to put single quotes for strings<br><input type=\"hidden\" name=\"password\" value=\"pass\"><br><input type=\"hidden\" name=\"action\" value=\"insert\"><input type=\"hidden\" value=\"melee_tournaments\" name=\"table\"><input type=\"hidden\" name=\"column\" value=\"tournament_id\"><br>Tournament ID: <input type=\"text\" maxlength=\"150\" size=\"25\" name=\"id\"><br><input id=\"submit\" type=\"submit\">";
        let del = "<form id=\"form\" action=\"adminlandingpage.php\" method=\"post\">Remember to put single quotes for strings<br><input type=\"hidden\" name=\"password\" value=\"pass\"><br><input type=\"hidden\" name=\"action\" value=\"delete\"><input type=\"hidden\" value=\"melee_tournaments\" name=\"table\"><input type=\"hidden\" name=\"column\" value=\"tournament_id\"><br>Tournament ID: <input type=\"text\" maxlength=\"150\" size=\"25\" name=\"id\"><br><input id=\"submit\" type=\"submit\">";
        $('#db').remove();
        $('#theform').html(action);
        $('#update').click(function(){
            $('#theform').html(update);
        });
        $('#insert').click(function(){
            $('#theform').html(insert);
        });
        $('#delete').click(function(){
            $('#theform').html(del);
        });
    });
});
