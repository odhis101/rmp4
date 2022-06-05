import mysql.connector
from bs4 import BeautifulSoup
import requests 


def insert_into_proff (proffesors):
    
    mydb = mysql.connector.connect(
    host="localhost",
    user="root",
    password="",
    database="ratemyprroffesor"
    )
    mycursor = mydb.cursor()
    for i in proffesors:
        sql = "INSERT INTO professors (name, university) VALUES (%s,%s)"
        val = (i, 'USIU')
        mycursor.execute(sql, val)
        mydb.commit()
        print(mycursor.rowcount, "record inserted.")
    
    
    

# here we will get data from the usiu website 

def get_proffesors_usiu():
    bus_url ='https://www.usiu.ac.ke/faculty/?schl'
    result = requests.get(bus_url)
    doc = BeautifulSoup(result.text, 'html.parser')
    bussiness_proffs = doc.find_all("a",class_='menu-column-main linkCont')
    proffesors = []
    for i in bussiness_proffs:
        proffesors.append (i.contents[-1])
    return (proffesors)

if __name__ == '__main__':
   usiu_proffs= get_proffesors_usiu()
   insert_into_proff(usiu_proffs)
  