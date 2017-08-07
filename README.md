# Food Order Relay System

## Purpose
This repository contains a collection of scripts to facilitate the sending of food orders from the point of sale to the point of preparation

All scripts should be hosted on a computer/server capable of hosting php scripts.

The register webpage should be accessed by the tablet taking the order from the customer

The order  webpage should be accessed by the tablet in the preparation area

## Requirements
1) A computer/server to serve as the main node and host the files
2) A tablet to take the order (at the register)
3)A tablet to display the order (at the preparation area)
4) A wireless router or internet connection

## Instructions
1) Install the Apache server on the main computer: [https://www.apachefriends.org/index.html](https://www.apachefriends.org/index.html)
2) Copy the files to the "htdocs" directory where the server is installed
3) Launch the server
4) Find the Local IP address of the main computer:
 * Windows:

   * Click on the Start menu and type cmd. When you see the cmd applications in Start menu panel, click it or just press enter.
   + A command line window will open. Type ipconfig and press enter.
   + You'll see a bunch of information, but the line you want to look for is "IPv4 Address." The number across from that text is your   local IP address.

 * Mac:
  + Open System Preferences (via the Apple menu at the top lefthand corner of your screen).
  + When System Preferences opens, click on the icon labeled Network.
  + You should see a few options on the left with labels like Wi-Fi, Ethernet, Bluetooth, etc. The ones with green dots have IP addresses assigned to them. Click the one on top (if it isn't already selected) and look to the right. There should be a sentence that reads something like "Wi-Fi is connected to Chocolate and has the IP address 192.168.1.102." The number at the end of that sentence is your local IP address.
     
5) On the tablet computer that takes the order, open the web browser and go to the ip addres from step 4, and add register.html to the end of it (192.168.0.1/register.html)

6) On the tablet computer that receives the order, open the web browser and go to the ip addres from step 4, and add orders.html to the end of it (192.168.0.1/orders.html)
