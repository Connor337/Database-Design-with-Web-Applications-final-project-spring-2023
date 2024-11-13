import random
import mysql.connector

def main():
    connection = mysql.connector.connect(user='hammoca0', password="sewanee",
                                host='warren.sewanee.edu',
                                database='hammoca0')
    inputfile = open("data/melee_tournaments.csv", "r")
    for line in inputfile:
        line = line.strip()       
        list_of_things = line.split(';');  
        game = list_of_things[0]   
        tournament_id = list_of_things[1]   
        cleaned_name = list_of_things[2]
        source = list_of_things[3]
        tournament_name = list_of_things[4]
        tournament_event = list_of_things[5]
        season = list_of_things[6]
        country = list_of_things[7]
        state = list_of_things[8]
        city = list_of_things[9]
        online = list_of_things[10]
        lat = list_of_things[11]
        lng = list_of_things[12]
        cursor = connection.cursor()
        query = f"insert into melee_tournaments set game=\"{game}\", tournament_id=\"{tournament_id}\", cleaned_name=\"{cleaned_name}\", source=\"{source}\", tournament_name=\"{tournament_name}\", tournament_event=\"{tournament_event}\", season=\"{season}\", country=\"{country}\", state=\"{state}\", city=\"{city}\", online={online}, lat=\"{lat}\", lng=\"{lng}\";"  # put your mysql insert command here
        cursor = connection.cursor()
        cursor.execute(query)
        connection.commit()
        cursor.close()
    inputfile.close()
    connection.close()
main()