import random
import mysql.connector

def main():
    connection = mysql.connector.connect(user='hammoca0', password="sewanee",
                                host='warren.sewanee.edu',
                                database='hammoca0')
    inputfile = open("data/melee_sets.csv", "r")
    for line in inputfile:
        line = line.strip()   
        list_of_things = line.split(',');  
        game = list_of_things[0]     
        tournament_key = list_of_things[1]     
        winner_id = list_of_things[2]
        p1_id = list_of_things[3]
        p2_id = list_of_things[4]
        p1_score = list_of_things[5]
        p2_score = list_of_things[6]
        bracket_name = list_of_things[7]
        bracket_order = list_of_things[8]
        set_order = list_of_things[9]
        best_of = list_of_things[10]
        cursor = connection.cursor()
        query = f"insert into melee_sets set game=\'{game}\', tournament_id=\'{tournament_key}\', winner_id=\"{winner_id}\", p1_id=\"{p1_id}\", p2_id=\"{p2_id}\", p1_score=\'{p1_score}\', p2_score=\'{p2_score}\', bracket_name=\'{bracket_name}\', bracket_order=\'{bracket_order}\', set_order=\'{set_order}\', best_of=\'{best_of}\';"  # put your mysql insert command here
        cursor = connection.cursor()
        cursor.execute(query)
        connection.commit()
        cursor.close()
    inputfile.close()
    connection.close()
main()