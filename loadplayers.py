import random
import mysql.connector

def main():
    connection = mysql.connector.connect(user='hammoca0', password="sewanee",
                                host='warren.sewanee.edu',
                                database='hammoca0')
    inputfile = open("data/melee_players.csv", "r")
    for line in inputfile:
        line = line.strip() 
        list_of_things = line.split(',');  
        game = list_of_things[0]     
        player_id = list_of_things[1]     
        tag = list_of_things[2]
        country = list_of_things[3]
        state = list_of_things[4]
        region = list_of_things[5]
        c_country = list_of_things[6]
        c_state = list_of_things[7]
        c_region = list_of_things[8]
        alias = list_of_things[9]
        cursor = connection.cursor()
        query = f"insert into melee_players set game=\'{game}\', player_id=\"{player_id}\", tag=\"{tag}\", country=\'{country}\', state=\'{state}\', region=\'{region}\', c_country=\'{c_country}\', c_state=\'{c_state}\', c_region=\'{c_region}\', alias=\'{alias}\';"  # put your mysql insert command here
        cursor = connection.cursor()
        cursor.execute(query)
        connection.commit()
        cursor.close()
    inputfile.close()
    connection.close()
main()
