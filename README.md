# **Clock Angle**
#### Charles Peden & Andrew Devlin, 2/24/2017

&nbsp;
## Description
An App that determines the angle on an analogue clock, given a particular time of day.

## Specifications

* program converts hour position to a number degree input: 1:00 output: 30degrees
* program converts minute position to a number degree input: 25 output: 150degrees
* program subtracts higher number from lower number to find difference in degrees. input 1:25 output: 120 degrees.


&nbsp;
## Setup/Installation Requirements
##### _To view and use this application:_
* You will need the dependency manager Composer installed on your computer to use this application. Go to [getcomposer.org] (https://getcomposer.org/) to download Composer for free.
* Install and configure Mamp, MySQL, and PDO.
* Go to my [Github repository] (https://github.com/ccbpeden/clock-angle)
* Download the zip file via the green button
* Unzip the file and open the **clock-angle** folder
* Open Terminal, navigate to **clock-angle** project folder, type **_composer install_** and hit enter
* Navigate Terminal to the **clock-angle/web** folder and set up a server by typing **_php -S localhost:8000_**
* Activate Mamp and Start Servers
* Type /Applications/MAMP/Library/bin/mysql --host=localhost -uroot proot
* In a web browser, browse to localhost:888/phpmyadmin.
* Click the import tab in the phpmyadmin gui and select the zipped database included in the project folder.
* The application should now load and be ready to use!
* Type **_localhost:8000_** into your web browser

&nbsp;
## Known Bugs
* No known bugs

&nbsp;
## Technologies Used
* PHP
* Silex
* Twig
* Composer
* Bootstrap
* CSS
* HTML

&nbsp;
_If you have any questions or comments about this program, you can contact me at [ccbpeden@warpmail.net](mailto:ccbpeden@warpmail.net)._

Copyright (c) 2017 Charles Peden & Andrew Devlin

This software is licensed under the MIT license
