# IOT
This repository contains the code for Advanced Driver Assistance System using 8 senors overall and it is gonna be a fun project.

Summary of the Project:

We have simulated our driver assistance system by using a small toy car. We have attached two breadboards each of which have three sensors and these sensors collect the data depending upon the car’s behaviour when it is put through some tests. We have also simulated the digital weather station which provides us the weather details of the destination place through our mobile. We store these weather details into a server (orange pi) on which data  more operations can be done.  The sensors that are attached to the breadboard do the following functions:
1. An Ultrasonic sensor gives out an alarm if there is any obstacle while backing the car.
2. A theft alarm goes off as a security measure, incase anyone tries to break the glass of the car.
3. There is a sound alarm to indicate that the car is overspeeding ,by using a vibration cum tilt        sensor.  
4. A light sensor automatically switches on the head lights of the car when dark.
5. When any vehicle or obstacle is too close to the front of the car additional headlight are automatically switched on.
6. A temperature and humidity sensor tells us the temperature and humidity surrounding the car at particular place, which can be viewed in the digital dashboard.
7. In addition, using a server (Orange Pi), we can know the temperatures at various places in our route. These temperatures can be viewed well ahead through wireless lan in our mobile.

Coding of the Project:

 Languages used c,html,php,sql
 
 Requirements prior to Environmental Setup

1)  Download Arduino software for the system (https://www.arduino.cc/en/Main/Software)
2)  Male and Female connectors                     - (20) 
3)  Bread Board                                    - (2)
4)  NodeMCU                                        - (2)
5)  OrangePi Lite                                  - (1)
6)  SD card(16gb)                                  - (1)
7)  Micro USB cable                                - (2)
8)  LDR / photoresistor                            - (1)
9)  Sound Sensor                                   - (1)
10) Ultrasonic Sensor(HC-SR04)                     - (2)
11) Humidity and Temperature Sensor (DHT11)        - (1)
12) Vibration Sensor (SW-420)                      - (1)
13) Led bulbs                                      - (10)

Instructions of Execution

Step 1: Install Ardunio IDE in the system

Step 2: Fix all the sensors and NodeMCU on the Bread Board

Step 3: Connect the sensors to NodeMCU with the help of connectors
Step 4: Write the code in the IDE and check for any errors and then flash the program into the NodeMCU.(For two NodeMCUs)

Step 5: Check the computer screen for output display and if the output is relevant.

Step 6: With the help of Win32DiskImager flash the SD card with Raspbian Software(http://www.orangepi.org/downloadresources/)

Step 7: Insert the SD card into the OrangePi Lite and boot it.

Step 8: After successfull installation setup phpMyAdmin for database

Step 9: Insert all php related files into var/www/html and run them in browser(localhost/main.php)

Step 10:Check if the table in the database is being updated and whether the values are correct. 
