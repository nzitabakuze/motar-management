Overview of project (motar_management system)
------------------------------------------
How the project
--------------------------------
The project is called motar_management system it can be used by  the motar in order to join 
With the other member of the cooperative that working together with purpose to improve 
The saving

How it can work 
---------------------
Motar_management system is system used by different motar want to join the 
Cooperative of motor especially it work with the motar with the same location
About use of  motar_management system 

Motar
---------
Motar want to join with the other member of the cooperative we use this system which help to 
Fill the form for helping to register in the cooperative after fill all information press button to join automatically show message to complete successfully 
admin

admin for this system as like president of the cooperative has the capabilities like( view, show,update,delete and edit) the information related to the change of information about the member of the cooperative .
Noted: client or motar want to register in the system does not require password and
 that by login as admin of this system we username=admin and password=admin

the framework used
-------------------
We have used a Laravel version 8 framework that work with other software package like Composer.         
Prerequisite of a motar_management system                                   
We installed XAMPP as server for creating database to store motar_management system and data store.
We used visual studio as editor for coding and implementing programing of php code.
We also need a Browser to run or execute our output of a project for Example we have used Firefox Browser and it is used to run our Framework.
We have used a Laravel version 8 framework that work with other software package like Composer.  

Requirement needed 
-----------------------

A project idea of making motar_management system in the Tumba sector
Same knowledge about PHP programming 
Text editor
Browser for running project
Some software like xampp or wampp
Database for storing all data input in the motar_management

How to Install XAMPP for Windows
--------------------------------------

The following steps followed to install step as:
 1.Open the XAMPP website. Go to https://www.apachefriends.org/index.html in your computer's web browser.
 
2.Click XAMPP for Windows. It's a grey button near the bottom of the page. 
Depending on your browser, you may first have to select a save location or verify the download.

3.Double-click the downloaded file. This file should be named something like xampp-win32-7.2.4-0-VC15-installer, and you'll find it in the default downloads location (e.g., the "Downloads" folder or the desktop). 
4.Click Yes when prompted. This willopen the XAMPP setup window. 
You may have to click OK on a warning if you have User Account Control (UAC) activated on your computer.

5.Click Next. It's at the bottom of the setup window. 

6.Select aspects of XAMPP to install. Review the list of XAMPP attributes on the left side of the window; if you see an attribute that you don't want to install as part of XAMPP, uncheck its box. 
By default, all attributes are included in your XAMPP installation.

7.Click Next. It's at the bottom of the window. 

8.Select an installation location. Click the folder-shaped icon to the right of the current installation destination, then click a folder on your computer. 
-If you have the UAC activated on your computer, avoid installing XAMPP in your hard drive's folder (e.g., OS (C:)).
-You can select a folder (e.g., Desktop) and then click Make New Folder to create a new folder and select it as the installation destination.

9.Click OK. Doing so confirms your selected folder as your XAMPP installation location. 

10.Click Next. You'll find it at the bottom of the page. 

11.Uncheck the "Learn more about Bitnami" box, then click Next. The "Learn more about Bitnami" box is in the middle of the page. 

12.Begin installing XAMPP. Click Next at the bottom of the window to do so. XAMPP will begin installing its files into the folder that you selected. 

13.Click Finish when prompted. It's at the bottom of the XAMPP window. Doing so will close the window and open the XAMPP Control Panel, which is where you'll access your servers. 

14.Select a language. Check the box next to the American flag for English, or check the box next to the German flag for German. 

15.Click Save. Doing so opens the main Control Panel page. 

Start XAMPP from its installation point. If you need to open the XAMPP Control Panel in the future, you can do so by opening the folder in which you installed XAMPP, right-clicking the orange-and-white xampp-control icon, clicking Run as administrator, and clicking Yes when prompted. 
-When you do this, you'll see red X marks to the left of each server type (e.g., "Apache"). Clicking one of these will prompt you to click Yes if you want to install the server type's software on your computer.
-Counterintuitively, double-clicking the xampp_start icon doesn't start XAMPP.

Installation of laravel and other configuration
-------------------------------------------------
Install Composer
Install Laravel
Server Requirements
Configuration
Pretty URLs

Install Composer
-----------------------
Laravel utilizes Composer to manage its dependencies. First, download a copy of the composer.phar. Once you have the PHAR archive, you can either keep it in your local project directory or move to usr/local/bin to use it globally on your system. On Windows, you can use the Composer Windows installer.

Install Laravel
---------------
Via Laravel Installer
First, download the Laravel installer using Composer.
composer global require "laravel/installer=~1.1"
Make sure to place the ~/.composer/vendor/bin directory in your PATH so the laravel executable is found when you run the laravel command in your terminal.
Once installed, the simple laravel new command will create a fresh Laravel installation in the directory you specify. For instance, laravel new blog would create a directory named blog containing a fresh Laravel installation with all dependencies installed. This method of installation is much faster than installing via Composer

Via Composer Create-Project
You may also install Laravel by issuing the Composer create-project command in your terminal:
composer create-project laravel/laravel {directory} 4.2 --prefer-dist

Via Download
Once Composer is installed, download the 4.2 version of the Laravel framework and extract its contents into a directory on your server. Next, in the root of your Laravel application, run the php composer.phar install (or composer install) command to install all of the framework's dependencies. This process requires Git to be installed on the server to successfully complete the installation.

If you want to update the Laravel framework, you may issue the php composer.phar update command.
Server Requirements
The Laravel framework has a few system requirements:
PHP >= 5.4
MCrypt PHP Extension
As of PHP 5.5, some OS distributions may require you to manually install the PHP JSON extension. When using Ubuntu, this can be done via apt-get install php5-json.

Configuration
----------------
The first thing you should do after installing Laravel is set your application key to a random string. If you installed Laravel via Composer, this key has probably already been set for you by the key:generate command. Typically, this string should be 32 characters long. The key can be set in the app.php configuration file. If the application key is not set, your user sessions and other encrypted data will not be secure.

Laravel needs almost no other configuration out of the box. You are free to get started developing! However, you may wish to review the app/config/app.php file and its documentation. It contains several options such as timezone and locale that you may wish to change according to your application.
Once Laravel is installed, you should also configure your local environment.


Rename env.example to .env
----------------------------------------
After rename then add name of database that you want
-----------------------------------------------------------------------------
And then in cmd of the system write php artisan key:generate –-ansi
----------------------------------------------------------------------------------------------------------------------------------------------------------
Make composer install
-------------------------------


Authors names are NZITABAKUZE Ladislas && SHEMA innocent
