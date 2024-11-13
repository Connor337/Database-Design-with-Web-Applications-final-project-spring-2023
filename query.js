let action = "";
$(document).ready(function(){
    //Javascript for Homepage
    $('#player_database').click(function(){
        let form = "<form id=\"query\" action=\"databasequery.php\" method=\"post\"><input type=\"hidden\" name=\"database\" value=\"melee_players\">\n<input type=\"checkbox\" name=\"game\" value=\"game\">Game<br>\n<input type=\"checkbox\" name=\"player_id\" value=\"player_id\">Player ID<br>\n<input type=\"checkbox\" name=\"tag\" value=\"tag\">Tag<br>\n<input type=\"checkbox\" name=\"country\" value=\"country\">Country<br>\n<input type=\"checkbox\" name=\"state\" value=\"state\">State<br>\n<input type=\"checkbox\" name=\"region\" value=\"region\">Region<br>\n<input type=\"checkbox\" name=\"c_country\" value=\"c_country\">Current Country<br>\n<input type=\"checkbox\" name=\"c_state\" value=\"c_state\">Current State<br>\n<input type=\"checkbox\" name=\"c_region\" value=\"c_region\">Current Region<br>\n<input type=\"checkbox\" name=\"alias\" value=\"alias\">Alias<br>\n<input type=\"submit\">";
        $('#database').html(form);
    });
    $('#set_database').click(function(){
        let form = "<form id=\"query\" action=\"databasequery.php\" method=\"post\"><input type=\"hidden\" name=\"database\" value=\"melee_sets\">\n<input type=\"checkbox\" name=\"set_id\" value=\"set_id\">Set ID<br>\n<input type=\"checkbox\" name=\"game\" value=\"game\">Game<br>\n<input type=\"checkbox\" name=\"tournament_id\" value=\"tournament_id\">Tournament ID<br>\n<input type=\"checkbox\" name=\"winner_id\" value=\"winner_id\">Winner ID<br>\n<input type=\"checkbox\" name=\"p1_id\" value=\"p1_id\">Player 1 ID<br>\n<input type=\"checkbox\" name=\"p2_id\" value=\"p2_id\">Player 2 ID<br>\n<input type=\"checkbox\" name=\"p1_score\" value=\"p1_score\">Player 1 Score<br>\n<input type=\"checkbox\" name=\"p2_score\" value=\"p2_score\">Player 2 Score<br>\n<input type=\"checkbox\" name=\"bracket_name\" value=\"bracket_name\">Bracket Name<br>\n<input type=\"checkbox\" name=\"bracket_order\" value=\"bracket_order\">Bracket Order<br>\n<input type=\"checkbox\" name=\"set_order\" value=\"set_order\">Set Order<br>\n<input type=\"checkbox\" name=\"best_of\" value=\"best_of\">Best Of<br>\n<input type=\"submit\">";
        $('#database').html(form);
    });
    $('#tournament_database').click(function(){
        let form = "<form id=\"query\" action=\"databasequery.php\" method=\"post\"><input type=\"hidden\" name=\"database\" value=\"melee_tournaments\">\n<input type=\"checkbox\" name=\"game\" value=\"game\">Game<br>\n<input type=\"checkbox\" name=\"tournament_id\" value=\"tournament_id\">Tournament ID<br>\n<input type=\"checkbox\" name=\"cleaned_name\" value=\"cleaned_name\">Cleaned Name<br>\n<input type=\"checkbox\" name=\"source\" value=\"source\">Source<br>\n<input type=\"checkbox\" name=\"tournament_name\" value=\"tournament_name\">Tournament Name<br>\n<input type=\"checkbox\" name=\"tournament_event\" value=\"tournament_event\">Tournament Event<br>\n<input type=\"checkbox\" name=\"Season\" value=\"Season\">Season<br>\n<input type=\"checkbox\" name=\"country\" value=\"country\">Country<br>\n<input type=\"checkbox\" name=\"state\" value=\"state\">State<br>\n<input type=\"checkbox\" name=\"city\" value=\"city\">City<br>\n<input type=\"checkbox\" name=\"online\" value=\"online\">Online<br>\n<input type=\"checkbox\" name=\"lat\" value=\"lat\">Latitude<br>\n<input type=\"checkbox\" name=\"lng\" value=\"lng\">Longitude<br>\n<input type=\"submit\">";
        $('#database').html(form);
    });
    //Pre-made queries on player.php
    $('#player1_select').css("display", "none");
    $('#player2_select').css("display", "none");
    $('#sets_won').click(function(){
        action = "sets_won"
        $('#player1_select').css("display", "block");
        $('#player2_select').css("display", "none");
    })
    $('#sets_played').click(function(){
        action = "sets_played"
        $('#player1_select').css("display", "block");
        $('#player2_select').css("display", "none");
    })
    $('#playervplayer').click(function(){
        action = "playervplayer"
        $('#player1_select').css("display", "block");
        $('#player2_select').css("display", "block");
    })
    $('#headtohead').click(function(){
        action = "headtohead";
        $('#player1_select').css("display", "block");
        $('#player2_select').css("display", "none");
    })
    $('#player1_select').change(function(){
        let val1 = $('#player1_select').val();
        let val2 = $('#player2_select').val();
        console.log(action)
        if (action == "sets_won") {
            $.get('./queries/sets_won.php',{"player": val1}, function(d){
                $('#player_sets').html(d);
            }); 
        }
        else if(action == "sets_played") {
            $.get('./queries/sets_played.php',{"player": val1}, function(d){
                $('#player_sets').html(d);
            }); 
        }
        else if (action == "playervplayer") {
            $.get('./queries/playervplayer.php',{"player1": val1, "player2": val2}, function(d){
                $('#player_sets').html(d);
            }); 
        }
        else if (action == "headtohead") {
            $.get('./queries/HeadtoHead.php',{"player": val1}, function(d){
                $('#player_sets').html(d);
            }); 
        }
    });
    $('#player2_select').change(function(){
        let val1 = $('#player1_select').val();
        let val2 = $('#player2_select').val();
        $.get('./queries/playervplayer.php',{"player1": val1, "player2": val2}, function(d){
            $('#player_sets').html(d);
        });
    })
    //Javascript for Tournament.php
    $('#tournament_select').css("display", "none");
    $('#tournament_players').click(function(){
        action = "tournament_players";
        $('#tournament_select').css("display", "block");
    });
    $('#tournament_sets').click(function(){
        action = "tournament_sets";
        $('#tournament_select').css("display", "block");
    });
    $('#tournament_select').change(function(){
        let val = $('#tournament_select').val();
        if (action == "tournament_players") {
            $.get('./queries/tournament_players.php',{"tournament": val}, function(d){
                $('#tournament-sets').html(d);
            });
        }
        else if (action == "tournament_sets") {
            $.get('./queries/tournament_sets.php',{"tournament": val}, function(d){
                $('#tournament-sets').html(d);
            });
        }
    })
});